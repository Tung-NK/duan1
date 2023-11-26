        <div class="breadcrumb-area">
            <div class="container">
                <ol class="breadcrumb breadcrumb-list">
                    <li class="breadcrumb-item">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Cart</li>
                </ol>
            </div>
        </div>
        <!-- Breadcrumb Area End Here -->
        <!-- Cart Main Area Start -->
        <div class="cart-main-area ptb-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <!-- Form Start -->
                        <form action="#">
                            <!-- Table Content Start -->
                            <div class="table-content table-responsive mb-45">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail">ID</th>
                                            <th class="product-thumbnail">Hình ảnh</th>
                                            <th class="product-name">Sản phẩm</th>
                                            <th class="product-price">Giá</th>
                                            <th class="product-quantity">Số lượng</th>
                                            <th class="product-subtotal">Tổng</th>
                                            <th class="product-remove">Xoá</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    $tong = 0;
                                    foreach ($_SESSION['mycart'] as $cart) {
                                        $id = $cart[0];
                                        $linksp = "index.php?act=sanphamct&idsp=" . $id;
                                        $hinh = $img_path . $cart[1];
                                        $price_number = $cart[3];
                                        $ttien = $cart[3] * $cart[4];
                                        $tong += $ttien;
                                        $xoasp = "index.php?act=delcart&idcart=" . $id;
                                        echo '<tbody>
                                            <tr>
                                                <td class="product-quantity">' . $id . '</td>
                                                <td class="product-thumbnail">
                                                    <a href="#"><img src="' . $hinh . '" alt="cart-image" /></a>
                                                </td>
                                                <td class="product-name"><a href="' . $linksp . '">' . $cart[2] . '</a></td>
                                                <td class="product-price"><span class="amount">' . $price_number . '</span></td>
                                                <td class="product-quantity"><input type="number" value="' . $cart[4] . '" /></td>
                                                <td class="product-subtotal">' . $ttien . '</td>
                                                <td class="product-remove"> <a href="' . $xoasp . '"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                                            </tr>
                                        </tbody>';
                                    }

                                    ?>
                                </table>
                            </div>


                            <div class="row">
                                <!-- Cart Button Start -->
                                <div class="col-md-8 col-sm-12">
                                    <div class="buttons-cart">
                                        <input type="submit" value="Update Cart" />
                                        <a href="index.php">Continue Shopping</a>
                                    </div>
                                </div>
                                <!-- Cart Button Start -->
                                <!-- Cart Totals Start -->
                                <div class="col-md-4 col-sm-12">
                                    <div class="cart_totals float-md-right text-md-right">
                                        <h2>Cart Totals</h2>
                                        <br />
                                        <?php
                                        extract($cart);
                                        echo '<table class="float-md-right">
                                    <tbody>
                                        <tr class="cart-subtotal">
                                            <th>Subtotal</th>
                                            <td><span class="amount">' . $tong . '</span></td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Total</th>
                                            <td>
                                                <strong><span class="amount">' . $tong . '</span></strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>';
                                        ?>
                                        <div class="wc-proceed-to-checkout">
                                            <a href="index.php?act=thanhtoan">Proceed to Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Row End -->
            </div>
        </div>