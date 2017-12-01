<?php

$link = mysqli_connect( "localhost","root","root","umar" );
mysqli_set_charset( $link,'utf8' );

function add_group($name,$start_date,$lesson_time,$lesson_days) {
	global $link;
	$q = mysqli_query($link, "INSERT INTO groups VALUES(null, '$name', '$start_date', 0, '$lesson_time', '$lesson_days')");

}
echo add_group("E", "2017-11-31", "15:00", "+-+++--");