<?php
$dbhost="localhost";
$dbuser="";
$dbpass="";
$dbname="pharmacy";

//error_reporting (E_ALL ^ E_NOTICE ^ E_WARNING);
$con=mysql_connect($dbhost,$dbuser,$dbpass) or die(mysql_error());
//echo "connecte to data bess...<br>";

//mysql_select_db($dbname) or die(mysql_error);
//echo "connected to data bess";
?>