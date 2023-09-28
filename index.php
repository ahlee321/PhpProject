<!DOCTYPE html>
<?php
	$conn = new mysqli('database1.chzwyhfvurav.us-east-1.rds.amazonaws.com', 'admin', 'password', 'database1') or die($conn->error);
?>
<html lang = "en">
	<head>
		<title>Information System Society Membership</title>
		<meta charset = "UTF-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
		<link rel = "stylesheet" type = "text/css" href = "css/jquery-ui.css" />
		<link rel = "stylesheet" type = "text/css" href = "css/jquery.dataTables.css" />
		<style>
        /* Reset some default styles */
        body,
        h1,
        h2,
        p {
            margin: 0;
            padding: 0;
        }

        /* Apply a background color and set font styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            color: #333;
        }

        /* Style the header */
        header {
            text-align: center;
            background-color: #333;
            color: #fff;
            padding: 20px 0;
        }

        /* Style the team member sections */
        .team-member {
            background-color: #fff;
            margin: 20px;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            padding-top: 40px;
            width: 50%;
        }

        .profileImage{
            display: flex;
            justify-content: center;
            width: 100%;
        }

        .circle {
            width: 100px;
            /* Adjust the width and height as needed */
            height: 100px;
            overflow: hidden;
            border-radius: 50%;
        }

        .circle img {
            max-width: 100%;
            height: auto;
            display: block;
        }

        /* Style the footer */
        footer {
            text-align: center;
            background-color: #333;
            color: #fff;
            padding: 10px 0;
        }
    </style>
	</head>
<body>
<!--------------------HEAD---------------------->
<?php include'head.php'?>
<!--------------------HEAD---------------------->

<?php
	$date = date("Y-m-d", strtotime("+8 HOURS"));
	$q_activity = $conn->query("SELECT * FROM `activity` WHERE '$date' BETWEEN `start` AND `end`") or die(mysqli_error());
	$f_activity = $q_activity->fetch_array();
	$v_activity = $q_activity->num_rows;
	if($v_activity > 0){	
		echo '<marquee><h4 class = "text-danger">'.$f_activity['title'].' - '.$f_activity['description'].'</h4></marquee>';
	}
?>
	
	</div>
	<div class = "container-fluid" id = "content">	
		<div class = "row" style = "margin-top:-120px;">	
			
			
				<ul class="nav nav-tabs">
					<li class="active"><a href="#home" data-toggle = "tab">Home</a></li>
					<li><a href="#aboutus" data-toggle = "tab">About us</a></li>
					<li><a href="#activities" data-toggle = "tab">Internships</a></li>
				</ul>
				<br />
				<div class = "tab-content container-fluid">
					<?php
						include 'home.php';
						include	'aboutus.php';
						include	'activities.php';
					?>
				
			</div>
		</div>
	</div>
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<nav class = "navbar-default" id = "footer">
		<label class = "navbar-brand pull-right">&copy;Internship portal management system<?php echo date('Y', strtotime('+8 HOURS'))?></label>
		<label class = "navbar-brand ">Intern</label>
	</nav>
</body>	
<script src = "js/jquery-3.1.1.js"></script>
<script src = "js/script.js"></script>
<script src = "js/bootstrap.js"></script>
<script src = "js/jquery.dataTables.min.js"></script>
</html>
