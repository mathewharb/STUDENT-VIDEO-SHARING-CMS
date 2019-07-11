<?php
ob_start(); //Turns on output buffering 
session_start();

date_default_timezone_set("Europe/Prague");

//put your database connection settings here
$dbname='videotube';//your database name
$dbhost='localhost'; //your database host
$dbuser='root';  //your database username
$dbpass='';   //your database password


//this is the PDO connection string
try {
    $con = new PDO("mysql:dbname=$dbname;host=$dbhost", $dbuser, $dbpass);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>