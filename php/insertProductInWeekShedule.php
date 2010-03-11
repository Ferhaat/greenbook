<?php
	/* Parametrar �r id:et f�r produkten (ser vi vilken kolumnen den �r i), 
	*  veckonumret (ser vi vilken rad den �r i), 
	*  id:et f�r vilken yta vi jobbar med (vald med dropdown w/e), 
	*  och m�ngden (det som skrivs in i tabellen).
	*  Observera att nu l�gger vi in i stored_price det nuvarande priset p� produkten (price)(det �r per f�rpackning). 
	*  Returnerar en boolean om det gick att s�tta in raden i tabellen `greenbook_week_shedules__planned_uses__products`. */
	function insertProductInWeekShedule($product_id,$amount,$week,$surface_id) {
		
		$week_schedule_id = getWeekSheduleId($week,$surface_id);
		// Om den inte redan finns s� skapa en s�dan.
		if ($week_schedule_id == NULL) {
			$week_schedule_id = createWeekShedule($week,$surface_id);
		}
		
		$query = "	
				INSERT INTO `greenbook_week_shedule__planned_uses__product` (
						`product_id` , 
						`week_shedule_id`,
						`amount` ,
						`stored_price`
					) 
					VALUES (
						$product_id , 
						$week_shedule_id,
						$amount ,
						$price
					) 
					ON DUPLICATE KEY UPDATE
						product_id 		= $product_id , 
						week_shedule_id = $week_shedule_id ,
						amount 			= $amount ,
						price 			= $price
				";
				
		 $result = mysql_query($query, db_connection());
		if (mysql_errno()) {
			echo "MySQL error ".mysql_errno().": ".mysql_error().
				 "\n<br>When executing:<br>\n$query\n<br>";
		} 
		return $result;
	}