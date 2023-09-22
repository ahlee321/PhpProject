<?php
	require_once '../connect.php';
	if(ISSET($_POST['save_activity'])){
		$title = $_POST['title'];
		$description = $_POST['description'];
		$start = $_POST['start'];
		$end = $_POST['end'];
		$month = date("M", strtotime($_POST['start']));
		$year = date("Y", strtotime($_POST['start']));
                $compname = $_POST['compname'];
                $conn->query("INSERT INTO activity VALUES('', '$title', '$description', '$start', '$end', '$month', '$year','$compname')") or die(mysqli_error());
                header('location: activity.php');
	}
?>