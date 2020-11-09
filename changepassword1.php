<?php
  require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: home.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head> 
    <!--Sign Up Title -->
    <title>Sign Up | Ct&nbsp;&#8377;l Budget</title>
        <!--Sign Up Title End-->
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
                    <centre><div class="panel-heading">Sign UP</div></centre>
                    <div class="panel-body">
                        <form method="POST" action="signup_script.php">
                           
                           
                           <div class="form-group ">
                           <label for="name">Name:</label>
                            <input class="form-control" placeholder="Name" name="name" pattern="[A-Za-z-0-9]+\s[A-Za-z-'0-9]+" required>
                        </div>
                               
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
                             <div class="form-group">
                                <label for="phone">Phone Number:</label>
                                 <input type="text" class="form-control"  placeholder="Enter Valid Phone Number (Ex:8448444853)" maxlength="10" size="10" name="contact" required>
                                <?php
                                if(isset($_GET["m2"])){
                                  echo $_GET['m2'];
                                }
                                ?>
                        </div>
                            <button type="submit" class="btn btn-default btn-block" value=”registration_submit”>Sign Up</button><br>
                            <div class="form-group">
                                  Already have an account ?<a href="login.php"> Login</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?php include "includes/footer.php"; ?>
    <!-- Footer End-->
    </body>

</html>