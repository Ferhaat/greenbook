<?php
	/* Parametrar �r id:et f�r produkten (ser vi vilken kolumnen den �r i), 
	*  veckonumret (ser vi vilken rad den �r i), 
	*  id:et f�r vilken yta vi jobbar med (vald med dropdown w/e), 
	*  och m�ngden (det som skrivs in i tabellen).
	*  Observera att nu l�gger vi in i stored_price det nuvarande priset p� produkten (price)(det �r per f�rpackning). 
	*  Returnerar en boolean om det gick att s�tta in raden i tabellen `greenbook_week_shedules__planned_uses__products`. */
	function insertProductInWeekShedule($product_id,$amount,$week,$surface_id) {
		// Anropar en funktion f�r att h�mta veckoschemaid:et utifr�n veckonumret och ytid:et
		// $week_shedule_id = getWeekSheduleId($surface_id,$week);
		/*
		query2 = "
				SELECT	`greenbook_week_shedules`.`id`
				FROM	`greenbook_week_shedules`
				WHERE	`greenbook_week_shedules`.`week` = $week
				AND		`greenbook_week_shedules`.`surface_id` = $surface_id
				LIMIT	1
				";
		
		*/
		$query = "	
				INSERT INTO `greenbook_week_shedules__planned_uses__products` (
						`product_id` , 
						`week_shedule_id`,
						`amount` ,
						`stored_price`
					) 
					VALUES (
						`$product_id` , 
						`$week_shedule_id`,
						`$amount` ,
						`$price`
					)
				";
		 $result = mysql_query($query, db_connection());
	        if (mysql_errno()) {
	            echo "MySQL error ".mysql_errno().": ".mysql_error().
					 "\n<br>When executing:<br>\n$query\n<br>"; 
			} else {
				return $result;
			}
	}