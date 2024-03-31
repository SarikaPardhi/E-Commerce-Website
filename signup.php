<?php
require("includes/common.php");
if (isset($_SESSION['email'])) {
    header('location: home.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Signup |  E-Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php include 'includes/header.php'; ?>
        <div class="container decor_bg" id="content">
            <div class="row">
                <div class="col-lg-6">
                    <img src="Imgs/is (2).jpg">
                </div>
                <div class="container">
                    <div class="col-lg-6">
                        <h2>SIGN UP</h2>
                        <form  action="signup_script.php" method="POST">
                            <div class="form-group">
                                <input type='text' class="form-control" placeholder="Name" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="e-mail" required = "true">
                            <?php
                            {
                                if(isset($_GET["m1"]))
                                {
                                    echo $_GET["m1"];
                                }
                            }
                            ?>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" pattern=".{8,}" name="password" required = "true">
                            <?php
                            {
                                if(isset($_GET["m3"]))
                                {
                                    echo $_GET["m3"];
                                }
                            }
                            ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" required = "true">
                            <?php
                            {
                                if(isset($_GET["m2"]))
                                {
                                    echo $_GET["m2"];
                                }
                            }
                            ?>
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="City" name="city" required = "true">
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="Address" name="address" required = "true">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary pull-right">Submit</button><br><br>
                        </form>
                        <div class="row">
                            <div class="col-lg-7">
                                <p>Already have an account? <a href="#" data-toggle="modal" data-target="#loginmodal"><button type="submit" class="btn btn-default btn-success">Login</button></a></p>
                            </div>
                            <div class="col-lg-5">
                                <a href="products.php"><button type="submit" class="btn btn-default btn-danger pull-right">Skip Signin</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer-->
        <div class="navbar-fixed-bottom">
        <?php
        include 'includes/footer.php';
        ?>
        </div>
        <!--Footer end-->
    </body>
    
</html>