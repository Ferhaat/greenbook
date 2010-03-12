<?php
	// Skapar ett veckoschema utifrån veckonumret och ytid:et.
	function createWeekShedule($week,$surface_id) {
		
		$query = "	
				INSERT INTO `greenbook_week_shedules` (
					`id` , 
					`surface_id` ,
					`week` 
				) 
				VALUES (
					NULL , 
					$surface_id ,
					$week
				) ON DUPLICATE KEY UPDATE 
					`surface_id` 	= $surface_id ,
					`week` 			= $$week
				";

		$result = mysql_query($query, db_connection());
		if (mysql_errno()) {
			echo "MySQL error ".mysql_errno().": ".mysql_error().
				 "\n<br>When executing:<br>\n$query\n<br>"; 
			return false;
		}
		$answer = mysql_fetch_assoc($result);
		return $answer['id'];
	}