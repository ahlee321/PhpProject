<?php
$dbhost = "database1.chzwyhfvurav.us-east-1.rds.amazonaws.com";
$dbuser = "admin";
$dbpass = "password";
$dbname = "database1";
$conn= mysqli_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server'); 
mysqli_select_db($conn,$dbname) or die('database selection problem');
?>
