<style>
    .row {
        width: 100%;
        margin: 0 auto;
    }

    .boxfooter {
        width: 100%;
        display: flex;
        background-color: #f9f9f9;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    .boxfooter form {
        width: 100%;
        display: flex;
        justify-content: center;
    }


    .boxfooter input[type="text"],
    .boxfooter input[type="submit"] {
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 3px;
        width: calc(100% - 22px);
    }

    .boxfooter input[type="submit"] {
        flex: 10;
        background-color: #303030;
        color: white;
        cursor: pointer;
    }

    .boxfooter input[type="submit"]:hover {
        background-color: #0438A1;
        color: white;
    }

    .boxcontent2 {
        width: 100%;
        display: flex;
        flex-direction: column;
        margin: 0 auto;
    }

    .binhluan table td {
        flex: 10;
        padding: 8px;
        justify-content: center;
        align-items: center;
    }
</style>

<div class="breadcrumb-area">
    <div class="container">
        <ol class="breadcrumb breadcrumb-list">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Product Details</li>
        </ol>
    </div>
</div>
<!-- Breadcrumb Area End Here -->
<!-- Product Thumbnail Start -->
<div class="main-product-thumbnail ptb-80">
    <div class="container">
        <?php
        extract($onesp);
        $hinh = $img_path . $image;
        $price = "$" . $price;
        echo '<div class="row">
            <!-- Main Thumbnail Image Start -->
            <div class="col-lg-5 col-md-6 mb-all-40">
                <!-- Thumbnail Large Image start -->
                <div class="tab-content">
                    <div id="thumb1" class="tab-pane fade show active">
                        <a data-fancybox="images" href="' . $hinh . '">
                            <img src="' . $hinh . '" alt="product-view">
                        </a>
                    </div>
                </div>
                <!-- Thumbnail image end -->
            </div>
            <!-- Main Thumbnail Image End -->
            <!-- Thumbnail Description Start -->
            <div class="col-lg-7 col-md-6">
                <div class="thubnail-desc ">
                    <h3 class="product-header">' . $name . '</h3>
                    <ul class="rating-summary">
                        <li class="rating-pro">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </li>
                        <li class="read-review">
                            <a href="#">read reviews (1)</a>
                        </li>
                        <li class="write-review">
                            <a href="#">write review</a>
                        </li>
                    </ul>
                    <div class="pro-thumb-price mt-20">
                        <p>
                            <span class="special-price">' . $price . '</span>
                        </p>
                    </div>
                    <p class="pro-desc-details">' . $mota . '</p>
                    <ul class="pro-list-features">
                        <li>Ex Tax:
                            <span class="ex-text">' . $price . '</span>
                        </li>
                        <li>Brands
                            <a href="#">Maron</a>
                        </li>
                        <li>Product Code:
                            <span>Drone</span>
                        </li>
                    </ul>
                     <div class="product-size mtb-30 clearfix">
                     <!--    <label>Size</label>
                        <select class="">
                            <option>S</option>
                            <option>M</option>
                            <option>L</option>
                        </select> -->
                    </div> 
                    
                    <div class="quatity-stock">
                        <label>Quantity</label>
                        <ul class="d-flex flex-wrap">
                            <li class="box-quantity">
                                <form action="#">
                                    <input class="quantity" type="number" min="1" max="1" value="1">
                                </form>
                            </li>
                            <li>
                            <form action="index.php?act=addtocart" method="post">
                            <input type="hidden" name="id" value="' . $id . '">
                            <input type="hidden" name="name" value="' . $name . '">
                            <input type="hidden" name="image" value="' . $image . '">
                            <input type="hidden" name="price" value="' . $onesp['price'] . '">
                            <a><input type="submit" name="addtocart" value="Thêm vào giỏ hàng"></a>
                        </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Thumbnail Description End -->
        </div>';
        ?>
        <!-- Row End -->
    </div>
    <!-- Container End -->
</div>
<!-- Product Thumbnail End -->
<!-- Product Thumbnail Description Start -->
<div class="thumnail-desc  pb-30">
    <div class="container">
        <div class="thumb-desc-inner">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="main-thumb-desc nav tabs-area" role="tablist">
                        <li>
                            <a class="active" data-toggle="tab" href="#dtail">Mô tả sản phẩm</a>
                        </li>
                        <!-- <li>
                            <a data-toggle="tab" href="#review">Bình luận</a>
                        </li> -->
                    </ul>
                    <!-- Product Thumbnail Tab Content Start -->
                    <div class="tab-content thumb-content">
                        <?php
                        extract($onesp);
                        echo ' <div id="dtail" class="tab-pane fade show active">
                            <p>' . $mota . '</p>
                        </div>';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="thumnail-desc  pb-30">
    <div class="container">
        <div class="thumb-desc-inner">
            <div class="row">
                <div class="col-sm-12">
                    <div class="tab-content thumb-content">
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                        <script>
                            $(document).ready(function() {
                                $("#binhluan").load("view/binhluan/binhluanform.php", {
                                    idpro: <?= $id ?>
                                });

                            });
                        </script>

                        <div class="row" id="binhluan">

                            <div class="boxfooter box_search formtaikhoan">
                                <form action="index.php?act=sanphamct" method="post">
                                    <input type="hidden" name="idpro" value="<?= $id ?>">
                                    <input type="text" name="noidung">
                                    <input type="submit" name="guibinhluan" value="Gửi bình luận">
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container End -->
</div>
<!-- Product Thumbnail Description End -->
<!-- More Product Start Here -->
<div class="more-product pb-80">
    <div class="container">
        <div class="section-title text-center mb-50">
            <h2>Những sản phẩm tương tự</h2>
        </div>
        <!-- Featured Product Activation Start Here -->
        <div class="feature-pro-active owl-carousel">
            <!-- Single Product Start -->
            <?php
            foreach ($sp_cung_loai as $sp_cung_loai) {
                extract($sp_cung_loai);
                $hinh = $img_path . $image;
                $price = "$" . $price;
                $linksp = "index.php?act=sanphamct&idsp=" . $id;
                echo '<div class="single-ponno-product">
                   <!-- Product Image Start -->
                   <div class="pro-img">
                       <a href="' . $linksp . '">
                           <img class="primary-img" src="' . $hinh . '" alt="single-product">
                           <img class="secondary-img" src="' . $hinh . '" alt="single-product">
                       </a>
                       <div class="pro-actions-link">
                           <a href="compare.html" title="Compare"><span class="icon icon-MusicMixer"></span></a>
                           <a href="#" data-toggle="modal" data-target="#myModal" title="Quick View"><span class="icon icon-Eye"></span></a>
                       </div>
                       <a class="sticker-new " href="wishlist.html"><span class="ti-heart"></span></a>
                       <span class="sticker-sale">new</span>
                   </div>
                   <!-- Product Image End -->
                   <!-- Product Content Start -->
                   <div class="pro-content">
                       <div class="pro-info">
                           <h4><a href="' . $linksp . '">' . $name . '</a></h4>
                           <p><span class="special-price">' . $price . '</span></p>
                           <div class="product-rating">
                               <i class="fa fa-star"></i>
                               <i class="fa fa-star"></i>
                               <i class="fa fa-star"></i>
                               <i class="fa fa-star"></i>
                               <i class="fa fa-star"></i>
                               <span class="quantity-pro">(200+)</span>
                           </div>
                       </div>
                       <div class="pro-add-cart">
                        <form action="index.php?act=addtocart" method="post">
                                <input type="hidden" name="id" value="' . $id . '">
                                <input type="hidden" name="name" value="' . $name . '">
                                <input type="hidden" name="image" value="' . $image . '">
                                <input type="hidden" name="price" value="' . $sp_cung_loai['price'] . '">
                                <a><input type="submit" name="addtocart" value="Thêm vào giỏ hàng"></a>
                            </form>
                       </div>
                   </div>
                   <!-- Product Content End -->
               </div>';
            }
            ?>
        </div>
        <!-- Featured Product Activation Start Here -->
    </div>
</div>
<!-- More Product End Here -->
<!-- Footer Area Start Here -->