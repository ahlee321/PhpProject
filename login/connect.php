<?php
$connect=new mysqli('database1.chzwyhfvurav.us-east-1.rds.amazonaws.com', 'admin', 'password', 'database1') or die($conn->error);
 
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}
 
?>
