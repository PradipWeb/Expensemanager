<?php
  require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: home.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!--Plan Details Title -->
    <title>Plan Details | Ct&nbsp;&#8377;l Budget</title>
   <!--Plan Details Title End-->  
        
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
     
     
     <?php

$Initial_Budget = $_POST['initialBudget'];
$no_ofpeople = $_POST['noofpeople'];

echo $Initial_Budget;
echo $no_ofpeople;

?>
<div class="container">
        <div class="row top_margin">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="panel panel-default">
                    
                    <div class="panel-body">
                        <form method="POST" action="home.php">
                           
                           <div class="form-group ">
                           <label for="name">Title:</label>
                            <input class="form-control" placeholder="Enter Title(Ex:Trip to Goa.)" name="name"   required>
                        </div>
                           
                          <div class="row">
                        <div class="form-group col-sm-6">From:<br>
                                 <input type="date" min="2019-04-01" max="2049-04-20" placeholder="dd/mm/yyyyy" required></div>
                                 
                                 <div class="form-group col-sm-6">To:<br>
                                 <input type="date" min="2019-04-01" max="2049-04-20" required></div></div>
                                 
                           <div class="row">
                        <div class="form-group col-sm-8">
                           <label for="name">Initial_Budget:</label>
                            <input class="form-control" placeholder="Initial Budget (Ex:4000)" name="initialBudget"  type="number" min="0" disabled required  <?php
$Initial_Budget = $_POST['initialBudget'];
echo $Initial_Budget;
?>>
                        </div>
                           
                           <div class="form-group col-sm-4">
                           <label for="name">No. Of People:</label>
                            <input class="form-control" placeholder="No. Of People" name="name" type="number" min="0" disabled required>
                        </div>   
                             <div class="form-group col-sm-12">
                           <label for="name">Person 1:</label>
                            <input class="form-control" placeholder="Person 1 Name" name="name"   required>
                        </div>
                               <div class="form-group col-sm-12">
                           <label for="name">Person 2:</label>
                            <input class="form-control" placeholder="Person 2 Name" name="name"  required>
                        </div>  
                               <div class="form-group col-sm-12">
                                <button type="submit" class="btn btn-default btn-block" value=”registration_submit”>Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- Footer -->
    <?php include "includes/footer.php"; ?>
    
      <!-- Footer End -->
    </body>

</html>