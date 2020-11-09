<?php
  require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: home.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
       <!-- Title of Ctrl Budget-->
        <title>Ct&nbsp;&#8377;l Budget</title> <!--Ct&nbsp;&#8377;l Budget-->
        <!-- Title of Ctrl Budget End-->
        <link rel="shortcut icon" href="img\srtcticon.png" type="image/png">

          <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap Core CSS -->
          <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
          <link href="./css/style.css" rel="stylesheet">
        <!-- jQuery -->
          <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
          <script src="js/bootstrap.min.js"></script>
    </head>
    <body style="padding-top: 50px;">
        
        <div id="container1">
        <div id="main">

        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>
        <!--Header end-->

        <div id="content">
            <!--Main banner image-->
            <div id = "banner_image">
                <div class="container">
                    <center>
                        <div id="banner_content">
                            <h2>We Help You Control Your Budget.</h2>
                            
                            <a  href="login.php" class="btn btn-danger btn-lg active">Start Today</a>
                        </div>
                    </center>
                </div>
            </div>
            </div>
            </div>
            <br>
            <br>
            <!--Main banner image end-->

           
        <!--Footer-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->

    </body>
</html>
