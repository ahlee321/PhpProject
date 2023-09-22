<?php
if (isset($_POST['submit'])) {
    $dbconn = mysqli_connect('localhost', 'root', '', 'db_issm');
    session_start();
    $username = $_POST['user_name'];
    $password = $_POST["password"];
    
    $query = mysqli_query($dbconn, "SELECT * FROM registered_users WHERE user_name='$username' and password='$password'");
    
    if (mysqli_num_rows($query) != 0) {
        // Fetch the student_id from the query result
        $row = mysqli_fetch_assoc($query);
        $user_name = $row['user_name'];

        // Store the student_id in the session variable
        $_SESSION['user_name'] = $user_name;

        // Redirect to another page
        header("Location: fill_details.php");
        exit();
    } else {
        echo "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
    }
}
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/jquery.dataTables.css">
        <link rel ="stylesheet" type="text/css" href ="css/bootstrap.min.css">
        <script type="text/javascript" src="js/script1.js"></script>
    </head>
<?php include("head.php"); ?>
    <div class="container">

        <div class="row" id="pwd-container">

            <div style="width:500px;margin:auto;">
                <section class="login-form">
                    <form method="post" action="#" role="login">
                      <!--<img src="img/icho.jpg" class="img-responsive" alt="" />-->
                        <h3>Student Login</h3>
                        <input type="text" name="user_name" placeholder="enter username " required class="form-control input-lg" value="" />

                        <input type="password"  name="password" class="form-control input-lg" id="password" placeholder="Password" required="" />


                        <div class="pwstrength_viewport_progress"></div>


                        <button type="submit" name="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
                        
                        <div>
                            <a href="index.php">Home  </a>    <a href="user_registration/index.php">Register </a> or <a href="#">reset password</a>
                        </div>

                    </form>
                </section>  
            </div>
            <div class ="col-md-4">
            </div>



        </div>

</html>