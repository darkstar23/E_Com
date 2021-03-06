﻿<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop for phones</title>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a href="cart.php"><i class="fa fa-user"></i> My Cart</a></li>
                            <li><a href="checkout.php"><i class="fa fa-user"></i> Checkout</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="header-right">
                        <ul class="list-unstyled list-inline">
                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">currency :</span><span class="value">PHP</span></a>

                            </li>

                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">language :</span><span class="value">English </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">German</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End header area -->

    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1>
                            <a href="/"><img src="img\Placeable-Logo_web-FINAL2.png"></a>
                        </h1>
                    </div>
                </div>

                <?php include 'php/cartinfo.php'; ?>
            </div>
        </div>
    </div>
    <!-- End site branding area -->

    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><a href="shop.php">Shop</a></li>
                        <li><a href="single-product.php">Single product</a></li>
                        <li><a href="cart.php">Cart</a></li>
                        <li><a href="checkout.php">Checkout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End mainmenu area -->

    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shop</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src="img/products/product-2.jpg" name="image" alt="Lumia 1320">
                        </div>
                        <h2><a href="">Lumia 1320</a></h2>
                        <div class="product-carousel-price">
                            <ins>P12699.00</ins>
                            <del>P12999.00</del>
                        </div>
                        <form action="php/addtocart.php" method="POST">
                            <input type="text" name="title" width="0" value="Lumia 1320" hidden />
                            <input type="text" name="price" width="0" value="12699.00" hidden />
                            <input type="text" name="image" value="img/products/product-2.jpg" hidden />
                            <input type="submit" value="Add To Cart" />
                        </form>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src="img/products/product-1.jpg" alt="Galaxy S4">
                        </div>
                        <h2><a href="">Samsung Galaxy S4</a></h2>
                        <div class="product-carousel-price">
                            <ins>P22899.00</ins>
                            <del>P32999.00</del>
                        </div>
                        <form action="php/addtocart.php" method="POST">

                            <input type="text" name="title" width="0" value="Samsung Galaxy S4" hidden />
                            <input type="text" name="price" width="0" value="22899.00" hidden />
                            <input type="text" name="image" value="img/products/product-1.jpg" hidden />
                            <input type="submit" value="Add To Cart" />
                        </form>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src="img/products/lg-v20-all-380x380-1.jpg" alt="LG V20">
                        </div>
                        <h2><a href="">LG V20</a></h2>
                        <div class="product-carousel-price">
                            <ins>P21399.00</ins>
                            <del>P21999.00</del>
                        </div>
                        <form action="php/addtocart.php" method="POST">

                            <input type="text" name="title" width="0" value="LG V20" hidden />
                            <input type="text" name="price" width="0" value="21399.00" hidden />
                            <input type="text" name="image" value="img/products/lg-v20-all-380x380-1.jpg" hidden />
                            <input type="submit" value="Add To Cart" />
                        </form>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src="img/products/Experia.jpg" alt="Xperia A">
                        </div>
                        <h2><a href="">Samsung Xperia A</a></h2>
                        <div class="product-carousel-price">
                            <ins>P31999.00</ins>
                            <del>P35199.00</del>
                        </div>
                        <form action="php/addtocart.php" method="POST">

                            <input type="text" name="title" width="0" value="Samsung Xperia A" hidden />
                            <input type="text" name="price" width="0" value="31999.00" hidden />
                            <input type="text" name="image" value="img/products/Experia.jpg" hidden />
                            <input type="submit" value="Add To Cart" />
                        </form>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src="img/products/Huawei-P9.jpg" alt="Huawei P9">
                        </div>
                        <h2><a href="">Huawei P9</a></h2>
                        <div class="product-carousel-price">
                            <ins>P21299.00</ins>
                            <del>P23999.00</del>
                        </div>
                        <form action="php/addtocart.php" method="POST">

                            <input type="text" name="title" width="0" value="Huawei P9" hidden />
                            <input type="text" name="price" width="0" value="21299.00" hidden />
                            <input type="text" name="image" value="img/products/Huawei-P9.jpg" hidden />
                            <input type="submit" value="Add To Cart" />
                        </form>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src="img/products/lgg4_stylus.jpg" alt="LG G4">
                        </div>
                        <h2><a href="">LG 4 (Stylus)</a></h2>
                        <div class="product-carousel-price">
                            <ins>P12899.00</ins>
                            <del>P13999.00</del>
                        </div>
                        <form action="php/addtocart.php" method="POST">
                            <input type="text" name="title" width="0" value="LG 4 (Stylus)" hidden />
                            <input type="text" name="price" width="0" value="12899.00" hidden />
                            <input type="text" name="image" value="img/products/lgg4_stylus.jpg" hidden />
                            <input type="submit" value="Add To Cart" />
                        </form>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src="img/products/Macbook-2015.jpg" alt="Macbook 2015">
                        </div>
                        <h2><a href="">Apple Macbook (2015)</a></h2>
                        <div class="product-carousel-price">
                            <ins>P21899.00</ins>
                            <del>P23999.00</del>
                        </div>
                        <form action="php/addtocart.php" method="POST">
                            <input type="text" name="title" width="0" value="Apple new mac book 2015 March :P" hidden />
                            <input type="text" name="price" width="0" value="21899.00" hidden />
                            <input type="text" name="image" value="img/products/Macbook-2015.jpg" hidden />
                            <input type="submit" value="Add To Cart" />
                        </form>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src="img/products/Explod-7.jpg" alt="Galaxy Explod 7">
                        </div>
                        <h2><a href="">Samsung Galaxy Explod 7</a></h2>
                        <div class="product-carousel-price">
                            <ins>P11899.00</ins>
                            <del>P12999.00</del>
                        </div>
                        <form action="php/addtocart.php" method="POST">
                            <input type="text" name="title" width="0" value="Samsung Galaxy Explod 7" hidden />
                            <input type="text" name="price" width="0" value="11899.00" hidden />
                            <input type="text" name="image" value="img/products/Explod-7.jpg" hidden />
                            <input type="submit" value="Add To Cart" />
                        </form>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src="img/products/Lumia-950XL.jpg" alt="Lumia 950XL">
                        </div>
                        <h2><a href="">Lumia 950 XL</a></h2>
                        <div class="product-carousel-price">
                            <ins>P11899.00</ins>
                            <del>P12999.00</del>
                        </div>
                        <form action="php/addtocart.php" method="POST">

                            <input type="text" name="title" width="0" value="Lumia 950 XL" hidden />
                            <input type="text" name="price" width="0" value="11899.00" hidden />
                            <input type="text" name="image" value="img/products/Lumia-950XL.jpg" hidden />
                            <input type="submit" value="Add To Cart" />
                        </form>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src="img/products/samsung-galaxy-s7-edge-.jpg" alt="S7 Edge">
                        </div>
                        <h2><a href="">Samsung Galaxy S7 Edge</a></h2>
                        <div class="product-carousel-price">
                            <ins>P11899.00</ins>
                            <del>P13899.00</del>
                        </div>
                        <form action="php/addtocart.php" method="POST">

                            <input type="text" name="title" width="0" value="Lumia 950 XL" hidden />
                            <input type="text" name="price" width="0" value="11899.00" hidden />
                            <input type="text" name="image" value="img/products/samsung-galaxy-s7-edge-.jpg" hidden />
                            <input type="submit" value="Add To Cart" />
                        </form>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src="img/products/nokia.jpg" alt="">
                        </div>
                        <h2><a href="">Nokia Lumia 730</a></h2>
                        <div class="product-carousel-price">
                            <ins>P11899.00</ins>
                            <del>P14899.00</del>
                        </div>
                        <form action="php/addtocart.php" method="POST">

                            <input type="text" name="title" width="0" value="Nokia Lumia 730" hidden />
                            <input type="text" name="price" width="0" value="11899.00" hidden />
                            <input type="text" name="image" value="img/products/nokia.jpg" hidden />
                            <input type="submit" value="Add To Cart" />
                        </form>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src="img/products/Xperia-E5.jpg" alt="">
                        </div>
                        <h2><a href="">Xperia E5</a></h2>
                        <div class="product-carousel-price">
                            <ins>P12899.00</ins>
                            <del>P13899.00</del>
                        </div>
                        <form action="php/addtocart.php" method="POST">

                            <input type="text" name="title" width="0" value="Xperia E5" hidden />
                            <input type="text" name="price" width="0" value="12899.00" hidden />
                            <input type="text" name="image" value="img/products/Xperia-E5.jpg" hidden />
                            <input type="submit" value="Add To Cart" />
                        </form>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="product-pagination text-center">
                        <nav>
                            <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">

                        <div class="footer-social">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">User Navigation </h2>
                        <ul>
                            <li><a href="cart.php">My Cart</a></li>
                            <li><a href="checkout.php">Checkout</a></li>
                            <li><a href="index.php">Front page</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Categories</h2>
                        <ul>
                            <li><a href="shop.php">Mobile Phone</a></li>
                            <li><a href="shop.php">Gadets</a></li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2016 E-Commerce IT135. All Rights Reserved. <a href="#" target="_blank">Demo.com</a></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>

    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>

    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>

    <!-- Main Script -->
    <script src="js/main.js"></script>
</body>

</html>