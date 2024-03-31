<?php

require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
$user_id = $_SESSION['user_id'];
$item_ids_string = $_GET['items_id'];

//We will change the status of the items purchased by the user to 'Confirmed'
$query = "UPDATE users_items SET status='Confirmed' WHERE user_id=" . $user_id . " AND items_id IN (" . $item_ids_string . ") and status='Added to cart'";
mysqli_query($con, $query) or die(mysqli_error($con));
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width = device-width, initial-scale = 1">
        <title>Success |  E-Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php include 'includes/header.php'; ?>
        <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="Imgs/photo-1585144860106-998ca0f2922a.jpg" alt="success">
            </div>

            <div class="col-sm-6">
                <center>
                    <h2>Thank You for ordering from E-store. The order shall be delivered to you shortly.</h2>
                    <h3>Order some items <a href="home.php">here</a>.</h3><br>
                    <img src="Imgs/photo-1556742502-ec7c0e9f34b1.jpg" height="30%" width="50%">
                </center>
            </div>
        </div>
    </div>
    </body>
</html>