<?php
    $con = mysqli_connect('localhost', 'ecom','ecom', 'ecomproj')
    or die('Error connecting to MySQL Server');

    if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
     
     $sql = "SELECT * FROM t_cart";
     $result = mysqli_query($con, $sql);
         while($row = $result->fetch_assoc()){
            echo '<tr class="cart_item">';
            echo '<td class="product-remove">';
            echo '<a title="Remove this item" class="remove" href="#">×</a> ';
            echo '</td>';
            echo '<td class="product-thumbnail">';
            echo '<a href="single-product.php"><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="' . $row['img_url'] .'"></a>';
            echo '</td>';
            echo '<td class="product-name">';
            echo '<a href="single-product.php">' . $row['title'] .'</a>';
            echo '</td>';
            echo '<td class="product-price">';
            echo '<span class="amount">' . $row['price'] .'</span>'; 
            echo '</td>';
            echo '<td class="product-quantity">';
            echo '<div class="quantity buttons_added">';
            echo '<input disabled type="text" size="4" class="input-text qty text" title="Qty" value="' . $row['quantity'] .'" min="0" step="1">';
            echo '</div>';
            echo '</td>';
            echo '<td class="product-subtotal">';
            echo '<span class="amount">' . $row['total'] .'</span>' ;
            echo '</td>';
            echo '</tr>';
         }
    mysqli_free_result($result);
    mysqli_close($con);
?>





