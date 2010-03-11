<?php
	// Hämtar veckoschemaid:et utifrån veckonumret och ytid:et. Skall lagras i $week_shedule_id.
	function getWeekSheduleId($week,$surface_id) {
		
		// Limit 1 ifall något går fel. 
		$query = "
				SELECT	`greenbook_week_shedules`.`id`
				FROM	`greenbook_week_shedules`
				WHERE	`greenbook_week_shedules`.`week` = $week
				AND		`greenbook_week_shedules`.`surface_id` = $surface_id
				LIMIT	1
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