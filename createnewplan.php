<?php
  require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: home.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title Of Create New Plan -->
    <title>Create New Plan | Ct&nbsp;&#8377;l Budget</title>
       <!-- Title Of Create New Plan End -->
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
    <!-- Header file -->
    <?php include "includes/header.php"; ?>
     <!-- Header End -->
    <!-- Creating Form For Create New Plan-->
    
<div class="container">
        <div class="row top_margin">
            <div class="col-xs-4 col-xs-offset-4">
                <div class="panel panel-default">
                    <centre><div class="panel-heading">Create New Plan</div></centre>
                    <div class="panel-body">
                        <form method="POST" action="plandetails.php" id="nameform">
                           
                           
                           <div class="form-group ">
                           <label for="name">Initial Budget:</label>
                            <input class="form-control" placeholder="Initial Budget (Ex:4000)" name="initialBudget"  type="number" min="50" required>
                        </div>
                           <div class="form-group ">
                           <label for="name">How many peoples you want to add in your group:</label>
                            <input class="form-control" placeholder="No. Of People" name="noofpeople" type="number" min="1" required>
                        </div>     
                                <button type="submit" class="btn btn-default btn-block" value=”registration_submit”>Next</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Form End-->
    
    <!-- Footer-->
    <?php include "includes/footer.php"; ?>
    <!--Footer end-->
    </body>

</html>