<?php
//number 1
// Calculate the difference between two dates using PHP OOP approach.
// Sample Dates : 1981-11-03, 2013-09-04
$date1 = new DateTime("1981-11-03");
$date2 = new DateTime("2013-09-04");
$interval = $date1->diff($date2);
echo "Difference : " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days ";
?>
