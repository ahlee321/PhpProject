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
		$imgurl = $_POST['imgurl'];
                $conn->query("INSERT INTO activity VALUES(NULL, '$title', '$description', '$start', '$end', '$month', '$year','$compname','$imgurl')") or die($conn->error);
                header('location: activity.php');
	}
?>
