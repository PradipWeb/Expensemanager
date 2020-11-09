<?php
require "includes/common.php";

if (isset($_SESSION['email'])) {
    header('location: home.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Plan | Ct&nbsp;&#8377;l Budget</title>
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
     
     <!--Container -->
    
    <br>
       <!-- Content Of About Us -->
        <div class="container">
    <div class="row">
        <div class="col-sm-6">
		  <div class="panel panel-default">
                    <centre><div class="panel-heading">My First Plan</div></centre>
                    <div class="panel-body">
                        <form>
                           
                           <label for="name">Budget</label><br>
                            <label for="name">Remaining Amount</label><br>
                            
                           
                           <label for="name">Date</label>
                               
                                <button type="submit" class="btn btn-default btn-block" value=”registration_submit”>View Plan</button>
                        </form>
                    </div>
                     </div>
            </div>
       
        <div class="col-sm-4 col-sm-offset-2 ExpenseDistribution">
         <centre> 
        <a href="expensedistribution.php" class="btn btn-info btn-lg plus">
          <span >Expense Distribution</span> 
        </a>
        </div>
    </div></centre>
      </div>

<!-- Container -->
 
 <div class="container">
    <div class="row">
        <div class="col-sm-6">
		  
      </div>
        <div class="col-sm-4 col-sm-offset-2">
          
        <div class="panel panel-default">
                    <centre><div class="panel-heading">Add New Expense</div></centre>
                    <div class="panel-body">
                        <form method="POST" action="plandetails.php">
                           
                           <div class="form-group ">
                           <label for="name">Title</label>
                            <input type="text"  class="form-control" placeholder="Expense Name" name="name"   required>
                        </div>
                           
                          
                        <div class="form-group "> <label for="name">Date</label><br>
                                 <input type="date" min="2019-04-01" max="2049-04-20" placeholder="dd/mm/yyyyy" required></div>
                            <div class="form-group ">
                           <label for="name">Amount Spent</label>
                            <input class="form-control" placeholder="Amount Spent" name="name"   required>
                        </div>
                           
                           <div class="form-group "> 
                           <select class="form-control">
                               <option >Choose</option>
                               <option > Person A</option>
                               <option >Person B</option>
                           </select>
                           
                           </div>
                           
                           
                            <div class="form-group ">     
                                  <label for="name">Upload Bill</label>
                                 <input type="file" class="sample_class" name="sample_name"><br>
                           
                       
                               <div class="form-group">
                                <button type="submit" class="btn btn-default btn-block" value=”registration_submit”>Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>  
  
   
    <!-- Container End -->
    <!-- Footer -->
    <?php include "includes/footer.php"; ?>
    <!-- Footer End-->
    </body>

</html>