<?php
include "includes/common.php"
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Contact Us | E-Store.com</title>
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
    </head>

<body style="padding-top: 50px;">
    
    <!-- Header -->
    <?php include 'includes/header.php'; ?>
    <br>
    
<div class="container">
    <div class="row">
        <div class="col-sm-6">
		  <h2 class="title">Who are we?</h2>
		  
          <div>
             <p>We are a group of young technocrats who came up with an idea of solving budget & time issues which we usually face in our daily lives.
             We are here to provide a budget controller according to your aspects.</p>
             <p>Budget control is the biggest financial issue in the present world.One should look after their budget control to get rid off from their financial crisis.</p>
          </div>
      </div>
        <div class="col-sm-6">
         <h2 class="title">Who choose us?</h2>
        <p>we provide with a predominant way to control & manage your budget estimation with ease of accessing for multiple users.</p>
        </div>
    </div>
    

<div class="row">
    <div class="col-sm-9">
        <h2 class="title">Contact Us </h2>
        Email:pradip.khatiks@gmail.com<br>
        Mobile:9665474479
        </div>
        
    </div>
    </div>    	

<div class="row">
    <div class="col-sm-9">
        <div class="contact-form">
            <h2>Get In Touch</h2>
	           <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="sendemail.php">
				    
                    <div class="form-group col-sm-9">
				        <input type="text" name="name" class="form-control" required="required" placeholder="Name" >
				    </div>
				    
                    <div class="form-group col-sm-9">
				        <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				    </div>
				    
                    <div class="form-group col-sm-9">
				        <textarea name="message" id="message" required="required" class="form-control" rows="7" placeholder="Your Message Here"></textarea>
				    </div>
				            
                    <div class="form-group col-sm-7">
				                <input type="submit" name="submit" class="btn btn-primary" value="Submit">
				    </div>
				</form>
        </div>
    </div>
	    		
        
    </div>




</div>


</div>
<!--Footer-->
<?php include 'includes/footer.php'; ?>
      <!--Footer end-->
    </body>
</html>
