<?php
  require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: home.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!--Log In Title -->
    <title>Log In | Ct&nbsp;&#8377;l Budget</title>
       <!--Log In Title End -->
        <link rel="shortcut icon" href="./img/srtcticon.png" type="image/png">

      <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap Core CSS -->
      <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS -->
      <link href="css/style.css" rel="stylesheet">
    <!-- jQuery -->
      <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
      <script src="js/bootstrap.min.js"></script>
</head>

<body>
   <!--Header -->
    <?php include "includes/header.php"; ?>
     <!--Header End-->
<div class="container">
        <div class="row top_margin">
            <div class="col-xs-4 col-xs-offset-4">
                <div class="panel panel-info">
                    <centre><div class="panel-heading">Log In</div></centre>
                    <div class="panel-body">
                        <form method="POST" action="home.php">
                           
                           
                           
                                 <div class="form-group">
                                <label for="email">Email:</label>
                                 <input type="email" class="form-control"  placeholder="Enter Valid Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="email" required>
                                <?php
                                if(isset($_GET["m1"])){
                                  echo $_GET['m1'];
                                }
                                ?>
                        </div>
                          <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" placeholder="Password Min. 6 Characters" pattern=".{6,}" name="password" required>
                        </div> 
                             
                          <button type="submit" class="btn btn-default btn-block" value=”registration_submit”>Log In</button><br>
                            <div class="form-group">
                                  Don't have an account ?<a href="signup.php"> Click here to Sign Up</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Footer -->
    <?php include "includes/footer.php"; ?>
    <!--Footer end-->
    </body>

</html>