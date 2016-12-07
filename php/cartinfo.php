<?php
    $con = mysqli_connect('localhost', 'ecom','ecom', 'ecomproj')
    or die('Error connecting to MySQL Server');

    if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
     
     $sql = "SELECT COUNT(id) as count, SUM(total) as total FROM t_cart";
     $result = mysqli_query($con, $sql);
         while($row = $result->fetch_assoc()){
            echo '<div class="col-sm-6">';
            echo '<div class="shopping-item">';
            echo '<a href="cart.php">Cart - <span class="cart-amunt">'. $row['total'] . '</span>'; 
            echo '<i class="fa fa-shopping-cart"></i>'; 
            echo '<span class="product-count">'. $row['count'] .'</span></a>';
            echo '</div>';
            echo '</div>';
         }
    mysqli_free_result($result);
    mysqli_close($con);
?>