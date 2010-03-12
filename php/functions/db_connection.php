<?php

$db = mysql_connect("praktikprojekt.se.mysql", "praktikprojekt_", "gQVbd5EZ"); 
				$conn = mysql_select_db("praktikprojekt_",$db);
				if (!$conn)
				  {
				  die('Could not connect: ' . mysql_error());
				  }
?>


