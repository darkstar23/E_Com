<?php
    $con = mysqli_connect('localhost', 'ecom','ecom', 'ecomproj')
    or die('Error connecting to MySQL Server');

    if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
     
     $sql = "SELECT * FROM t_phone_latest2";
     $result = mysqli_query($con, $sql);
         while($row = $result->fetch_assoc()){
            echo '<div class="single-shop-product">';
            echo '<div class="product-upper">';
            echo '<img src="'. $row['img_url'] . '" alt="">';
            echo '</div>';
            echo '<div>';
            echo '<h2><a href="single-product.php">' . $row['title'] . '</a></h2>';
            echo '</div>';
            echo '<div class="product-carousel-price">';
            echo '<ins>P'. $row['new_price'] . '</ins>';
            echo '<del>P'. $row['orig_price'] . '</del>';
            echo '</div>';
            echo '</div>';
         }
    mysqli_free_result($result);
    mysqli_close($con);
?>