<?php

$link = mysqli_connect("localhost","root","root","umar");
mysqli_set_charset($link,'utf8');

function add_group($name,$start_date,$lesson_time,$lesson_days) {
	global $link;
	$q = mysqli_query($link, "INSERT INTO groups VALUES($name[name],$start_date[start_date],$lesson_time[lesson_time],$lesson_days[lesson_days])");
return $q;
}
echo add_group("group_e,2017-11-31,15:00,+-+++--");