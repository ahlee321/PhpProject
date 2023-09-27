<html>
<body>
<?php
$con = new mysqli('database1.chzwyhfvurav.us-east-1.rds.amazonaws.com', 'admin', 'password', 'database1') or die($conn->error);
if (!$con)
  {
  die('Could not connect: ' . mysqli_error($con));
  }
 
mysqli_select_db($con, "database1");
$fname = time().'_'.$_FILES['file']['name'];
$loc = './upload/';
$move = move_uploaded_file($_FILES['file']['tmp_name'], $loc.$fname);
if(!$move) exit;
// $fname = '';
 
$sql="INSERT INTO fill_details (company_name, first_name, last_name,email,gender,file)
VALUES
( '$_POST[company_name]','$_POST[first_name]','$_POST[last_name]','$_POST[email]','$_POST[gender]','$fname')";
 
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error());
  }
header('location:file_uploading/index.php?success');
 
mysqli_close($con);
?>
</body>
</html>
 
