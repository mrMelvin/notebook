<?php 
	$LOGIN = "mike";
	$PASS = "jesus10veMe";	
	$DB_NAME = "notebook";
	$TABLE_NAME = "films";
	$db = mysqli_connect("127.0.0.1",$LOGIN,$PASS,$DB_NAME);
	if(!$db) {
		echo "Всё плохо " . $db->errno;	
	} else {
		echo "Всё отлично!<br>";	
	}
?>