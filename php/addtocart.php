<?php
    $img = $_POST['image'];
    $title = $_POST['title'];
    $price = $_POST['price'];
    $quantity = 1;
    $total = $price * $quantity;

    $con = mysqli_connect('localhost','ecom','ecom','ecomproj')
    or die('Error connecting to MySQL server.');

    $sql = "INSERT INTO t_cart(img_url, title, price, quantity, total)".
    "VALUES ('$img','$title','$price', '$quantity','$total')";

    $result = mysqli_query($con, $sql)
    or die('Error querying in db');

    mysqli_close($con);
    
    header("Location: http://localhost/cart.php"); /* Redirect browser */
exit();
?>