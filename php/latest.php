<?php
    $con = mysqli_connect('localhost', 'ecom','ecom', 'ecomproj')
    or die('Error connecting to MySQL Server');

    if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
     
     $sql = "SELECT * FROM t_phone_latest2";
     $result = mysqli_query($con, $sql);
         while($row = $result->fetch_assoc()){
            echo '<div class="single-product">';
            echo '<div class="product-f-image">';
            echo '<img src="'. $row['img_url'] . '" alt="">';
            echo '<div class="product-hover">';
            echo '<a href="cart.php" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>';
            echo '<a href="single-product.php" class="view-details-link"><i class="fa fa-link"></i> See details</a>';
            echo '</div>';
            echo '</div>';
            echo '<h2><a href="single-product.php">' . $row['title'] . '</a></h2>';
            echo '<div class="product-carousel-price">';
            echo '<ins>P'. $row['new_price'] . '</ins>';
            echo '<del>P'. $row['orig_price'] . '</del>';
            echo '</div>';
            echo '</div>';
         }
    mysqli_free_result($result);
    mysqli_close($con);
?>