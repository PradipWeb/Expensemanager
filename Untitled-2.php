<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>

<!DOCTYPE html>
   <html lang="en">
   <head>
       <title>Change Password | Ct&nbsp;&#8377;l Budget</title>
        <link rel="shortcut icon" href="img\srtcticon.png" type="image/png">

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
        <?php include 'includes/header.php'; ?>
         <!--Header End-->

        <div class="container-fluid" id="content">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4" id="settings-container">
                    <h4>Change Password</h4>
                    <form action="settings_script.php" method="POST">
                        <div class="form-group">
                            <input type="password" class="form-control" name="old_password" pattern=".{6,}" placeholder="Old Password" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="new_password"  pattern=".{6,}" placeholder="New Password" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="repnew_password" pattern=".{6,}" placeholder="Re-type New Password" required>
                        </div>
                        <div><b class="red">
                        <?php
                        if(isset($_GET["error"])){
                          echo $_GET['error'];
                        }
                        ?>
                      </b></div>
                      <br>
                        <button type="submit" class="btn btn-primary">Change Password</button>

                    </form>
                </div>
            </div>
        </div> 
           <!-- Footer -->
            <?php include 'includes/footer.php'; ?>
            <!-- Footer End-->
    </body>
</html>
