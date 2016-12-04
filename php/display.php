<?php
    $con = mysqli_connect('localhost', 'ecom','ecom', 'ecomproj')
    or die('Error connecting to MySQL Server');

    if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
     
     $sql = "SELECT * FROM t_phone_latest";
     $result = mysqli_query($con, $sql);
         while($row = $result->fetch_assoc()){
            echo '<li>';
            echo '<img src="'.$row['img_url'].'" alt="Slide">';
            echo '<div class="caption-group">';
            echo '<h2 class="caption title">';
            echo $row['title'].'<span class="primary">'.$row['title2']. '<strong>' . $row['title3'] . '</strong></span>';
            echo '</h2>';
            echo '<h4 class="caption subtitle">'. $row['subtitle'] . '</h4>';
            echo '<a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>';
            echo '</div>';
            echo '</li>';
         }
    mysqli_free_result($result);
    mysqli_close($con);
?>