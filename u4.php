<?php

$link = mysqli_connect("localhost","root","","umar");
mysqli_set_charset($link,'utf8');
$id = $GET['id'];
function add_group($name,$start_date,$lesson_time,$lesson_days) {
	global $link;
	$q = mysqli_query($link, "INSERT INTO groups VALUES(null, '$name', '$start_date', 0, '$lesson_time', '$lesson_days')");
		if ($q) {
			return mysql_insert_id($link);

		}
		else {
			return false;
		}

}
add_group("E", "2017-11-31", "15:00", "+-+++--");

function add_students ($firstname,$lastname,$goup_id) {
	global $link;
 	$q = mysqli_query($link, "INSERT INTO VALUES ('$firstname', '$lastname', '$group_id')");
 		if ($q) {
 			return mysql_insert_id($link);
 		}
 		else {
 			return false;
 		}
}
add_students("Mezhiev", "Umar","$id");