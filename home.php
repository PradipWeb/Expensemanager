<?php
include "includes/common.php"
?>
<!DOCTYPE html>

<html>
   
<head>
       <!-- Title Of Ctrl Budget-->
        <title> Home | Ct&nbsp;&#8377;l Budget</title>
         <!-- Title Of Ctrl Budget End-->
        <link rel="shortcut icon" href="img\srtcticon.png" type="image/png">
        
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
    <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
</head>
   
<body style="padding-top: 50px;">
            <!-- Linking Header file, modal.php -->
    <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        include 'includes/modal.php';
       
       
        ?>
         <!-- Header file,modal.php End -->
    <br>
    <br>
     <div class="container">
  <h2>You don't have any active plans</h2>
          
          
               <div class="container">
        <div class="row top_margin">
            <div class="col-xs-4 col-xs-offset-4">
                <div class="panel panel-info">
                    
                    <div class="panel-body">
                       
                       <form method="POST" action="login.php">
                       <a href="createnewplan.php">+Create a new plan</a>
                        
                        </form>
            </div>
        </div>
    </div>
           
       </div>
    </div>             
               <centre><h3>Your Plans</h3></centre>
               
        <div class="container">
        <div class="row top_margin">
            <div class="col-xs-4 col-xs-offset-4">
                <div class="panel panel-default">
                    <centre><div class="panel-heading">My First Plan</div></centre>
                    <div class="panel-body">
                        <form method="POST" action="viewplan.php">
                           
                           
                          
                           <label for="name">Budget</label><br>
                            
                           
                           <label for="name">Date</label>
                               
                                <button type="submit" class="btn btn-default btn-block" value=”registration_submit”>View Plan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>      
         
            <div class="container">
    <div class="row">
        <div class="col-sm-11">
		  
      </div>
        <div class="col-sm-1">
          
        <a href="createnewplan.php" class="btn btn-info btn-lg plus">
          <span class="glyphicon glyphicon-plus"></span> 
        </a>
        </div>
    </div>
      </div>
       
        <!-- Footer -->    
     <?php include 'includes/footer.php'; ?>
     <!--Footer end-->
</body>
</html>
    
   