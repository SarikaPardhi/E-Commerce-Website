<?php
require("includes/common.php");

// Redirects the user to home page if he/she is logged in.
if (isset($_SESSION['email'])) {
  header('location: home.php');
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome |  E-Store</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">        
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body style="padding-top: 50px;">
        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>
        <!--Header end-->
            <!--Item categories listing-->
<div class="banner_image">
  <center>
    <div class="container">
      <div class="banner_content">
        <h1>Welcome to our E-store.</h1>
        <h2>**Say NO to Chinese Products**</h2>
        <p>We have the best Non-Chinese mobiles for you.</p>
        <a href="signup.php"><button class="btn btn-danger btn-gl active">Shop Now</button></a>      
      </div>    
    </div>  
  </center>
</div>
        <!--Footer-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->
   
    </body> 
</html>