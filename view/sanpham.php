<div class="tab-content pro-style-changer">
            <!-- Computer Product Start Here -->
            <div id="computer" class="tab-pane fade show active">
                <div class="row">
                    <?php
                    foreach ($dssp as $value) {
                        extract($value);
                        $hinh = $img_path . $image;
                        $linksp = "index.php?act=sanphamc&idsp=".$id;
                        echo '<div class="col-xl-4 col-lgt-6 col-md-6 mb-lg-40">
                                <!-- Tripple Product Start Here-->
                                <div class="tripple-pro">
                                    <!-- Single Product Start -->
                                    <div class="single-ponno-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="'.$linksp.'">
                                                <img class="primary-img" src="' . $hinh . '" alt="single-product">
                                            </a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="'.$linksp.'">' . $value['name']. '</a></h4>
                                                <p><span class="special-price">' . $price . '</span></p>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <span class="quantity-pro">(350+)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                </div>
                                <!-- Tripple Product Start Here-->
                            </div>';
                    }
                    ?>
                </div>
            </div>
        </div>