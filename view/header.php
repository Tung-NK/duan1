<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from preview.hasthemes.com/ponno/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Nov 2023 05:39:05 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home || Ponno eCommerce Bootstrap 4 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicons -->
    <link rel="shortcut icon" href="ponno/img/favicon.ico">
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="ponno/css/font-awesome.min.css">
    <!-- Animate css -->
    <link rel="stylesheet" href="ponno/css/animate.css">
    <!-- Themify Icon css -->
    <link rel="stylesheet" href="ponno/css/themify-icons.css">
    <!-- Stroke Gap Icon css -->
    <link rel="stylesheet" href="ponno/css/stroke-gap.css">
    <!-- Material Design Iconic Font css -->
    <link rel="stylesheet" href="ponno/css/material-design-iconic-font.min.css">
    <!-- Nice select css -->
    <link rel="stylesheet" href="ponno/css/nice-select.css">
    <!-- Jquery fancybox css -->
    <link rel="stylesheet" href="ponno/css/jquery.fancybox.css">
    <!-- Jquery ui price slider css -->
    <link rel="stylesheet" href="ponno/css/jquery-ui.min.css">
    <!-- Meanmenu css -->
    <link rel="stylesheet" href="ponno/css/meanmenu.min.css">
    <!-- Owl carousel css -->
    <link rel="stylesheet" href="ponno/css/owl.carousel.min.css">
    <!-- Slick Slider css -->
    <link rel="stylesheet" href="ponno/css/slick.css">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="ponno/css/bootstrap.min.css">
    <!-- Custom css -->
    <link rel="stylesheet" href="ponno/css/default.css">
    <!-- Main css -->
    <link rel="stylesheet" href="ponno/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="ponno/css/responsive.css">

    <!-- Modernizer js -->
    <script src="ponno/js/vendor/modernizr-3.5.0.min.js"></script>
</head>

<body>
    <!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

    <!-- Main Wrapper Start Here -->
    <div class="wrapper">
        <!-- Newsletter Popup Start -->
        <!-- <div class="popup_wrapper">
            <div class="test">
                <span class="popup_off">Close</span>
                <div class="subscribe_area text-center mt-40">
                    <h2>Newsletter</h2>
                    <p>Subscribe to the ponno mailing list to receive updates on new arrivals, special offers and other discount
                        information.</p>
                    <div class="subscribe-form-group">
                        <form action="#">
                            <input autocomplete="off" type="text" name="message" id="message" placeholder="Enter your email address">
                            <button type="submit">subscribe</button>
                        </form>
                    </div>
                    <div class="subscribe-bottom mt-15">
                        <input type="checkbox" id="newsletter-permission">
                        <label for="newsletter-permission">Don't show this popup again</label>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Newsletter Popup End -->
        <!-- Header Area Start Here -->
        <header class="header-area">
            <div class="header-top">
                <div class="container">
                    <div class="row align-items-center text-center text-md-left">
                        <!-- Logo Start -->
                        <div class="col-md-3 col order-1 order-md-1 mb-sm-30">
                            <div class="logo">
                                <a href="index.html"><img src="ponno/img/logo/logo.png" alt="logo-img"></a>
                            </div>
                        </div>
                        <!-- Logo End -->
                        <!-- Search Box Start Here -->
                        <div class="col-md-6  order-3 order-md-2">
                            <div class=" categorie-search-box">
                                <form action="index.php?act=sanpham">
                                    <input type="text" name="kyw" placeholder="Nhập sản phẩm bạn muốn tìm kiếm">
                                    <button type="submit" name="timkiem">
                                        <span class="ti-search"></span>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <!-- Search Box End Here -->
                        <!-- Cart Box Start Here -->

                        <div class="col-md-3 col order-2 order-md-3 mb-sm-30">
                            <div class="cart-box float-md-right">
                                <a href="index.php?act=viewcart">
                                    <?php
                                    if (isset($_SESSION['mycart']) && !empty($_SESSION['mycart'])) {
                                        $soLuongSanPham = count($_SESSION['mycart']);
                                        $tong = 0;

                                        foreach ($_SESSION['mycart'] as $cart) {
                                            $ttien = $cart[3] * $cart[4];
                                            $tong += $ttien;
                                        }
                                    ?>
                                        <span class="total-pro"><?php echo $soLuongSanPham; ?> item<br>
                                            <span><?php echo "$". $tong; ?></span>
                                        </span>
                                    <?php } else { ?>
                                        <span class="total-pro">0 item<br>
                                            <span>0</span>
                                        </span>
                                    <?php } ?>
                                </a>
                            </div>
                        </div>


                        
                        
                        <!-- Cart Box End Here -->

                    </div>
                </div>
            </div>
            <div class="header-bottom blue-bg header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Menu Area Start Here -->
                        <div class="col-lg-10 d-none d-lg-block">
                            <nav>
                                <ul class="header-menu-list">
                                    <li class="active">
                                        <a href="index.php">Trang chủ</a>
                                        <!-- Home Version Dropdown Start -->
                                        <!-- Home Version Dropdown End -->
                                    </li>
                                    <li><a href="">Màn hình</a></li>    
                                    <li><a href="shop.html">Chuột</a></li>
                                    <li><a href="shop.html">Tai nghe</a></li>
                                    <li><a href="shop.html">Vỏ case</a></li>
                                    <!-- <li>
                                        <a class="drop-icon" href="#">pages</a>
                                
                                        <ul class="ht-dropdown">
                                            <li>
                                                <a href="contact.html">contact us</a>
                                            </li>
                                            <li>
                                                <a href="about.html">about us</a>
                                            </li>
                                            <li>
                                                <a href="register.html">register</a>
                                            </li>
                                            <li>
                                                <a href="login.html">Login</a>
                                            </li>
                                            <li>
                                                <a href="404.html">404</a>
                                            </li>
                                            <li>
                                                <a href="forgot-password.html">forgot password</a>
                                            </li>
                                        </ul>
                                        
                                    </li> -->


                                    <li>
                                        <a class="drop-icon" href="">shop</a>
                                        <!-- Home Version Dropdown Start -->
                                        <ul class="ht-dropdown">
                                            <li>
                                                <a href="">Shop</a>
                                            </li>
                                            <li>
                                                <a href="product-details.html">product details</a>
                                            </li>
                                            <li>
                                                <a href="compare.html">compare</a>
                                            </li>
                                            <li>
                                                <a href="index.php?act=viewcart">cart</a>
                                            </li>
                                            <li>
                                                <a href="checkout.html">checkout</a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html">wishlist</a>
                                            </li>
                                        </ul>
                                        <!-- Home Version Dropdown End -->
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Menu Area End Here -->
                        <!-- Cart Box Start Here -->
                        <?php
                        if (isset($_SESSION['user']) && is_array($_SESSION['user'])) {
                            extract($_SESSION['user']);
                        ?>
                            <div class="col-lg-2">
                                <div class="setting-box float-right">
                                    <ul>
                                        <li class="drodown-show"><a href="#"><span class="ti-settings"></span></a>
                                            <!-- Currency & Language Selection Start -->
                                            <ul class="dropdown cart-box-width currency-selector">
                                                <li>
                                                    <h3>Xin chào <?= $user ?></h3>
                                                    <ul>
                                                        <li><a href="index.php?act=thoat">Logout</a></li>
                                                        <li><a href="index.php?act=edit_tk">My Account</a></li>
                                                        <li><a href="index.php?act=mybill">Đơn hàng của tôi</a></li>
                                                        <?php if ($role == 1) { ?>
                                                            <li>
                                                                <a href="admin/index.php">Vào trang quản trị</a>
                                                            </li>
                                                        <?php } ?>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h3>Currency: USD</h3>
                                                    <ul>
                                                        <li><a href="#">€ Euro</a></li>
                                                        <li><a href="#">£ Pound Sterling</a></li>
                                                        <li><a href="#">$ US Dollar</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h3>Language: EN-GB</h3>
                                                    <ul>
                                                        <li><a href="#"><img src="img/header/1.jpg" alt="lang-icon"> English</a></li>
                                                        <li><a href="#"><img src="img/header/2.jpg" alt="lang-icon"> Germany</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <!-- Currency & Language Selection End -->
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        <?php
                        } else {
                        ?>
                            <div class="col-lg-2">
                                <div class="setting-box float-right">
                                    <ul>
                                        <li class="drodown-show"><a href="#"><span class="ti-settings"></span></a>
                                            <!-- Currency & Language Selection Start -->
                                            <ul class="dropdown cart-box-width currency-selector">
                                                <li>
                                                    <h3>My Account </h3>
                                                    <ul>
                                                        <li><a href="index.php?act=dangki">Register</a></li>
                                                        <li><a href="index.php?act=dangnhap">Login</a></li>
                                                        <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h3>Currency: USD</h3>
                                                    <ul>
                                                        <li><a href="#">€ Euro</a></li>
                                                        <li><a href="#">£ Pound Sterling</a></li>
                                                        <li><a href="#">$ US Dollar</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h3>Language: EN-GB</h3>
                                                    <ul>
                                                        <li><a href="#"><img src="img/header/1.jpg" alt="lang-icon"> English</a></li>
                                                        <li><a href="#"><img src="img/header/2.jpg" alt="lang-icon"> Germany</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <!-- Currency & Language Selection End -->
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <!-- Cart Box End Here -->
                    </div>


                <?php } ?>



                <!-- Row End -->
                <!-- Mobile Menu Start Here -->
                <div class="mobile-menu d-block d-lg-none" data-menu="Menu">
                    <nav>
                        <ul>
                            <li>
                                <a href="index.html">home</a>
                                <!-- Home Version Dropdown Start -->
                                <ul>
                                    <li>
                                        <a href="index.html">Home Style 1</a>
                                    </li>
                                </ul>
                                <!-- Home Version Dropdown End -->
                            </li>
                            <li>
                                <a href="#">Mobile</a>
                                <!-- Men Accessories Dropdown Start -->
                                <ul class="submobile-mega-dropdown">
                                    <li>
                                        <a href="#">Electra Shope</a>
                                        <!-- Watches Dropdown Start -->
                                        <ul>
                                            <li>
                                                <a href="shop.html">Integrated Systems</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">DJI</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Power Vision</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Ryze Tech</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Yuneec</a>
                                            </li>
                                        </ul>
                                        <!-- Watches Dropdown End -->
                                    </li>
                                    <li>
                                        <a href="#">Stroller Shop</a>
                                        <!-- Shoes Dropdown Start -->
                                        <ul>
                                            <li>
                                                <a href="shop.html">Joggers</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Lightweight</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Prams</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Standard</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Travel Systems</a>
                                            </li>
                                        </ul>
                                        <!-- Shoes Dropdown End -->
                                    </li>
                                    <li>
                                        <a href="#">smartwatch Shop</a>
                                        <!-- Bags Dropdown Start -->
                                        <ul>
                                            <li>
                                                <a href="shop.html">Men's Watches</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Ladies Watches</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Sport Watch</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Wrist Watches</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Watch Bands</a>
                                            </li>
                                        </ul>
                                        <!-- Bags Dropdown End -->
                                    </li>
                                    <li>
                                        <a href="#">Scooter Shop</a>
                                        <!-- Bags Dropdown Start -->
                                        <ul>
                                            <li>
                                                <a href="shop.html">Pro Scooters</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Custom Scooters</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Kids Scooters</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Dirt Scooters</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Adult / Commuter Scooters</a>
                                            </li>
                                        </ul>
                                        <!-- Bags Dropdown End -->
                                    </li>
                                </ul>
                                <!-- Men Accessories Dropdown End -->
                            </li>
                            <li>
                                <a href="#">shop</a>
                                <!-- Mobile Menu Dropdown Start -->
                                <ul>
                                    <li>
                                        <a href="shop.html">Shop</a>
                                    </li>
                                    <li>
                                        <a href="product-details.html">product details</a>
                                    </li>
                                    <li>
                                        <a href="compare.html">compare</a>
                                    </li>
                                    <li>
                                        <a href="cart.html">cart</a>
                                    </li>
                                    <li>
                                        <a href="checkout.html">checkout</a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html">wishlist</a>
                                    </li>
                                </ul>
                                <!-- Mobile Menu Dropdown End -->
                            </li>
                            <li>
                                <a href="#">Blog</a>
                                <!-- Mobile Menu Dropdown Start -->
                                <ul>
                                    <li>
                                        <a href="blog.html">blog</a>
                                    </li>
                                    <li>
                                        <a href="blog-details.html">Blog Details</a>
                                    </li>
                                </ul>
                                <!-- Mobile Menu Dropdown End -->
                            </li>
                            <li>
                                <a href="#">pages</a>
                                <!-- Mobile Menu Dropdown Start -->
                                <ul>
                                    <li>
                                        <a href="about.html">about us</a>
                                    </li>
                                    <li>
                                        <a href="account.html">My account</a>
                                    </li>
                                    <li>
                                        <a href="register.html">register</a>
                                    </li>
                                    <li>
                                        <a href="login.html">Login</a>
                                    </li>
                                    <li>
                                        <a href="404.html">404</a>
                                    </li>
                                    <li>
                                        <a href="forgot-password.html">forgot password</a>
                                    </li>
                                </ul>
                                <!-- Mobile Menu Dropdown End -->
                            </li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Mobile Menu End Here -->
                </div>
                <!-- Container End -->
            </div>
        </header>