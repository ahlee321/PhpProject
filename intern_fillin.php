<?php
// Enable error reporting for debugging purposes
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Initialize variables to store form data
$reg_no = $first_name = $last_name = $age = '';

// Check if the form was submitted
if (isset($_POST['insert_button'])) {
    // Retrieve form data
    $reg_no = $_POST['reg_no'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];

    // Establish a database connection
    $con = mysqli_connect("localhost", "root", "", "db_issm");

    // Check if the connection was successful
    if (!$con) {
        die("Failed to connect to MySQL: " . mysqli_connect_error());
    }

    // SQL query to insert data into the "students" table
    $sql = "INSERT INTO students (reg_no, first_name, last_name, age) 
            VALUES ('$reg_no', '$first_name', '$last_name', '$age')";

    // Execute the SQL query
    if (mysqli_query($con, $sql)) {
        // Record inserted successfully, you can display a success message
        echo "Record inserted successfully!";
    } else {
        // Display an error message if the query fails
        echo "Error: " . mysqli_error($con);
    }

    // Close the database connection
    mysqli_close($con);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Student Record</title>
</head>
<body>
    <form name="insert" method="post" action="">
        <input type="text" name="reg_no" placeholder="Registration Number" required value="<?php echo $reg_no; ?>">
        <br>
        <input type="text" name="first_name" placeholder="First Name" required value="<?php echo $first_name; ?>">
        <br>
        <input type="text" name="last_name" placeholder="Last Name" required value="<?php echo $last_name; ?>">
        <br>
        <input type="text" name="age" placeholder="Age" required value="<?php echo $age; ?>">
        <br>
        <input type="submit" name="insert_button" value="Insert Record">
    </form>
</body>
</html>
