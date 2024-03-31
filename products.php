<?php
require("includes/common.php");
include 'includes/loginmodal.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home | E-Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body style="padding-top:30px;">
        <?php
        include 'includes/header.php';        
        ?>

        <div class="container-fluid">
            <center>
            <h1 style="color:red">***You can't move further unless you Login***</h1>
            <h3>Login to continue with us</h3>
            </center>
            <hr>
            <center><h1 style="background-color: rgba(0, 0, 0, 0.7); color: #f8f8f8;">OUR PRODUCTS</h1></center>                
            
            <div class="row">
            <div class="col-md-4 col-sm-8">
                <div class="panel panel-default">
                    <div class="panel-header"><p>Mobile 1</p></div>
                    <center>
                    <div class="panel-body">
                        <img src="Imgs/Nokia-7-2-Charcoal.jpg" alt="Nokia Mobile">
                        <caption>
                            <h3>Nokia 7.2 64GB, 6GB RAM, Charcoal, Smartphone</h3>
                            <p>Price : Rs.18,499</p>
                        </caption>           
                    </div>
                    </center>
                </div>
            </div>
            <div class="col-md-4 col-sm-8">
                <div class="panel panel-default">
                    <div class="panel-header"><p>Mobile 2</p></div>
                    <center>
                    <div class="panel-body">
                        <img src="Imgs/Lava.jpg" alt="Lava Mobile"><br><br>
                        <caption>
                            <h3>Lava24 (Black-Red), 1GB RAM, Back Camera </h3>
                            <p>Price : Rs.1499</p>
                        </caption>
                    </div>
                    </center>
                </div>
            </div>
            <div class="col-md-4 col-sm-8">
                <div class="panel panel-default">
                    <div class="panel-header"><p>Mobile 3</p></div>
                    <center>
                    <div class="panel-body">
                        <img src="Imgs/apple-iphone-x.jpeg" alt="IPhone" height="300px"><br>
                        <caption>
                            <h3>iPhone-X Silver, 12MP+12MP Rear Camera </h3>
                            <p>Price : Rs.84,999</p>
                        </caption>
                    </div>
                    </center>
                </div>
            </div>            
            </div>

        <div class="row">
            <div class="col-md-4 col-sm-8">
                <div class="panel panel-default">
                    <div class="panel-header"><p>Mobile 4</p></div>
                    <center>
                    <div class="panel-body">
                        <img src="Imgs/Nokia-7-2-Green-OC.jpg" alt="Nokia Mobile">
                        <caption>
                            <h3>Nokia 7.1 64GB, 4GB RAM, Cyan Green, Smartphone</h3>
                            <p>Price : Rs.18,499</p>
                        </caption>
                    </div>
                    </center>
                </div>
            </div>
            <div class="col-md-4 col-sm-8">
                <div class="panel panel-default">
                    <div class="panel-header"><p>Mobile 5</p></div>
                    <center>
                    <div class="panel-body">
                        <img src="Imgs/511qpyTfuIL._AC_SS350_.jpg" alt="Jio Phone" height="320px">
                        <caption>
                            <h3>JioPhone (Black), Dual Sim</h3>
                            <p>Price : Rs.1499</p>
                        </caption>
                    </div>
                    </center>
                </div>
            </div>
            <div class="col-md-4 col-sm-8">
                <div class="panel panel-default">
                    <div class="panel-header"><p>Mobile 6</p></div>
                    <center>
                    <div class="panel-body">
                        <img src="Imgs/Apple-iPhone.jpg" alt="IPhone">
                        <caption>
                            <h3>Apple iPhone SE 64GB, White, Smartphone</h3>
                            <p>Price : Rs.42,500</p>
                        </caption>
                    </div>
                    </center>
                </div>
            </div>            
        </div>
        </div>
        </div>        
    </body> 
</html>