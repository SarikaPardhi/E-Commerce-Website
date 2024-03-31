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
        include 'includes/check-if-added.php';
        ?>
      
            <div class="container-fluid">
        <br><br><br>
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
                        <?php
                            if(!isset($_SESSION['email'])){?>
                            <p><a href="#" data-target="#loginmodal" data-toggle="modal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            } 
                            else {
                                if(check_if_added_to_cart(1)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } 
                                else{ ?>
                            <a href="cart_add.php?id=1" name="add" value="add"  class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                            
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
                        <?php
                            if(!isset($_SESSION['email'])){?>
                            <p><a href="#" data-target="#loginmodal" data-toggle="modal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            } else {
                                if(check_if_added_to_cart(2)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else{ ?>
                            <a href="cart_add.php?id=2" name="add" value="add"  class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
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
                        <?php
                            if(!isset($_SESSION['email'])){?>
                            <p><a href="#" data-target="#loginmodal" data-toggle="modal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            } else {
                                if(check_if_added_to_cart(3)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else{ ?>
                            <a href="cart_add.php?id=3" name="add" value="add"  class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
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
                        <?php
                            if(!isset($_SESSION['email'])){?>
                            <p><a href="#" data-target="#loginmodal" data-toggle="modal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            } else {
                                if(check_if_added_to_cart(4)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else{ ?>
                            <a href="cart_add.php?id=4" name="add" value="add"  class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
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
                        <?php
                            if(!isset($_SESSION['email'])){?>
                            <p><a href="#" data-target="#loginmodal" data-toggle="modal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            } else {
                                if(check_if_added_to_cart(5)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else{ ?>
                            <a href="cart_add.php?id=5" name="add" value="add"  class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
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
                        <?php
                            if(!isset($_SESSION['email'])){?>
                            <p><a href="#" data-target="#loginmodal" data-toggle="modal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            } else {
                                if(check_if_added_to_cart(6)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else{ ?>
                            <a href="cart_add.php?id=6" name="add" value="add"  class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                    </div>
                    </center>
                </div>
            </div>            
        </div>
    </div>

</body>
    </body>

</html>
