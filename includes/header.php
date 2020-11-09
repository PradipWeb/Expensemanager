<?php
        include 'includes/modal.php';
        include 'includes/common.php';
        ?>
        <!--   Navigation  -->
   <div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><span >&nbsp;Ct&nbsp;&#8377;l Budget</span></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-dark navbar-right">
                <?php
                
                 
                if (isset($_SESSION['email'])) {
                    ?>
                     
                    <li><a href = "./about_us.php"><span class = "glyphicon glyphicon glyphicon-info-sign"></span> About Us</a></li>
                    <li><a href = "settings.php"><span class = "glyphicon glyphicon-cog"></span> Change Password</a></li>
                    <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>

                    <?php
                } else {
                    ?>
                    <li><a href="./about_us.php"><span class="glyphicon glyphicon glyphicon-info-sign"></span> About Us</a></li>
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                      <li><a href="login.php"><span class="glyphicon glyphicon glyphicon-log-in"></span> Log In</a></li>
                    
                   
                    <?php
                    }
                    ?>
            </ul>
        </div>
    </div>
</div>


