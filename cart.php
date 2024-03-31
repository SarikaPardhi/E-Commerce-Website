<?php
  require("includes/common.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Cart |  E-Store</title>
        <link rel="shortcut icon" href="img\srtcticon.png" type="image/png">

          <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap Core CSS -->
          <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
          <link href="./css/style.css" rel="stylesheet">
        <!-- jQuery -->
          <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
          <script src="js/bootstrap.min.js"></script>
    </head>
    <body style="padding-top: 50px;">

        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>
        <!--Header end-->
        
        <div class="cart_image ">
        <center>
            <div class="container ">
                <div class="banner_content ">
                <table class="table table-bordered" style="margin-top: 35px; border-color:white">

<!--show table only if there are items added in the cart-->
<?php
$sum = 0;
$user_id = $_SESSION['user_id'];
$query = "SELECT items.price AS price, items.id, items.item_name AS name FROM users_items JOIN items ON users_items.items_id = items.id WHERE users_items.user_id='$user_id' and status='Added to cart'";
$result = mysqli_query($con, $query) or die(mysqli_error($con));
if (mysqli_num_rows($result) >= 1) {
    ?>
    <thead>
        <tr>
            <th>Item Number</th>
            <th>Item Name</th>
            <th>Price</th>
            <th></th>
        </tr>
    </thead>
    
    <tbody>
        <?php
        while ($row = mysqli_fetch_array($result)) {
            $sum+= $row["price"];
            $id="";
            $id .= $row["id"] . ",";
            echo "<tr>
                      <td>" . "#" . $row["id"] . "</td>
                      <td>" . $row["name"] . "</td>
                      <td>Rs " . $row["price"] . "</td>
                      <td><a href='cart_remove.php?id={$row['id']}' class='btn btn-danger'>Remove from Cart</a></td>
                  </tr>";
        }
        $id = rtrim($id, ",");
        echo "<tr>
                  <td></td>
                  <td>Total</td>
                  <td>Rs " . $sum . "</td>
                  <td><a href='success.php?items_id=".$id ."'class='btn btn-primary'>Confirm Order</a></td>
                  </tr>";
        ?>
    </tbody>
    <?php
} else {
    echo "<br><br>
           <h2>Add items to the Cart first.</h2>
          ";
}
?>

</table>
</div>
</div>
</center>
</div>
</body>
</html>