<?php
  require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: home.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up |Ct&nbsp;&#8377;l Budget</title>
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
    <?php include "includes/header.php"; ?>
<div class="container">
        <div class="row top_margin">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">My First Plan <span class="glyphicon glyphicon-user"></span></div>
                    <div class="panel-body">
                        <form method="POST" action="viewplan.php">
                          <label for="name">Initial Budget</label><br>
                            <label for="name">Person A</label><br>
                            
                           <label for="name">Person B</label><br>
                            <label for="name">Total Amount Spent</label><br>
                            <label for="name">Remaining Amount</label><br>
                            
                           <label for="name">Individual Shares</label><br>
                            <label for="name">Person A</label><br>
                            <label for="name">Person B</label><br>
                            
                            
                               
                        <div class="col-sm-4 col-sm-offset-2 GoBack">
         <centre> 
        <a href="viewplan.php" class="btn btn-info btn-lg plus">
          <span class="glyphicon glyphicon-chevron-left">Go Back</span> 
        </a>
                            </centre>
        </div>
    </div>
      </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    
    <?php include "includes/footer.php"; ?>
    </body>

</html>