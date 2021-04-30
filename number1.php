<?php
//number 1
// Calculate the difference between two dates using PHP OOP approach.
// Sample Dates : 1981-11-03, 2013-09-04
$sdate = new DateTime("1981-11-03");
$edate = new DateTime("2013-09-04");
$interval = $sdate->diff($edate);
echo "Difference : " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days ";
?>
