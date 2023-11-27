<div class="breadcrumb-area">
    <div class="container">
        <ol class="breadcrumb breadcrumb-list">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Compare</li>
        </ol>
    </div>
</div>
<!-- Breadcrumb Area End Here -->
<!-- coupon-area start -->
<div class="coupon-area pt-80 pb-30">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="coupon-accordion">
                    <!-- Accordion Start -->
                    <h3>Returning customer? <span id="showlogin">Click để đăng nhập</span></h3>
                    <div id="checkout-login" class="coupon-content">
                        <div class="coupon-info">
                            <p class="coupon-text">Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed est
                                sit amet ipsum luctus.</p>
                            <form action="index.php?act=dangnhap" method="post">
                                <p class="form-row-first">
                                    <label>Username<span class="required">*</span></label>
                                    <input type="text" name="user" />
                                </p>
                                <p class="form-row-last">
                                    <label>Password <span class="required">*</span></label>
                                    <input type="text" name="pass" />
                                </p>
                                <p class="form-row align-items-center">
                                    <input type="submit" name="dangnhap" value="Login" />
                                </p>
                                <p class="lost-password">
                                    <a href="#">Lost your password?</a>
                                </p>
                            </form>
                        </div>
                    </div>
                    <!-- Accordion End -->
                    <!-- Accordion Start -->
                    <h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
                    <div id="checkout_coupon" class="coupon-checkout-content">
                        <div class="coupon-info">
                            <form action="#">
                                <p class="checkout-coupon">
                                    <input type="text" class="code" placeholder="Coupon code" />
                                    <input type="submit" value="Apply Coupon" />
                                </p>
                            </form>
                        </div>
                    </div>
                    <!-- ACCORDION END -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- coupon-area end -->
<!-- checkout-area start -->
<div class="checkout-area pb-80">
    <div class="container">
        <form action="index.php?act=bill" method="post" class="col-md-12">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="checkbox-form mb-sm-40">
                        <h3>Billing Details</h3>
                        <div class="row">
                            <?php
                            if (isset($_SESSION['user'])) {
                                $name = $_SESSION['user']['user'];
                                $diachi = $_SESSION['user']['diachi'];
                                $email = $_SESSION['user']['email'];
                                $phone = $_SESSION['user']['phone'];
                            } else {
                                $name = "";
                                $diachi = "";
                                $email = "";
                                $phone = "";
                            }
                            ?>
                            <div class="col-md-12">
                                <div class="country-select clearfix mb-30">
                                    <label>Country <span class="required">*</span></label>
                                    <select class="wide">
                                        <option value="vn">Việt Nam</option>
                                        <option value="volvo">Bangladesh</option>
                                        <option value="saab">Algeria</option>
                                        <option value="mercedes">Afghanistan</option>
                                        <option value="audi">Ghana</option>
                                        <option value="audi2">Albania</option>
                                        <option value="audi3">Bahrain</option>
                                        <option value="audi4">Colombia</option>
                                        <option value="audi5">Dominican Republic</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list mb-30">
                                    <label>Tên người nhận <span class="required">*</span></label>
                                    <input name="user" value="<?= $name ?>" type="text" placeholder="" />
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Địa chỉ <span class="required">*</span></label>
                                    <input name="diachi" value="<?= $diachi ?>" type="text" placeholder="Tên đường" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list mtb-30">
                                    <input name="diachi" value="<?= $diachi ?>"type="text" placeholder="Số nhà, ngõ, ngách. (tuỳ chọn)" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list mb-30">
                                    <label>Tỉnh/ Thành Phố<span class="required">*</span></label>
                                    <input name="diachi" value="<?= $diachi ?>"type="text" placeholder="Town / City" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list mb-30">
                                    <label>Quận / Huyện <span class="required">*</span></label>
                                    <input name="diachi" value="<?= $diachi ?>"type="text" placeholder="Quận / Huyện" />
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="checkout-form-list mb-30">
                                    <label>Email<span class="required">*</span></label>
                                    <input name="email" value="<?= $email ?>" type="email" placeholder="" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list mb-30">
                                    <label>Phone <span class="required">*</span></label>
                                    <input name="phone" value="<?= $phone ?>" type="text" placeholder="Postcode / Zip" />
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="checkout-form-list create-acc mb-30">
                                    <!-- <input id="cbox" type="checkbox" /> -->
                                    <a href="index.php?act=dangki"><span id="showlogin">Tạo một tài khoản</span></a>
                                </div>
                                <div id="cbox_info" class="checkout-form-list create-accounts mb-25">
                                    <p class="mb-10">Create an account by entering the information below. If you are a
                                        returning customer please login at the top of the page.</p>
                                    <label>Account password <span class="required">*</span></label>
                                    <input type="password" placeholder="password" />
                                </div>
                            </div>
                        </div>
                        <!-- <div class="different-address">
                        <div class="ship-different-title">
                            <h3>
                                <label>Ship to a different address?</label>
                                <input id="ship-box" type="checkbox" />
                            </h3>
                        </div>
                        <div id="ship-box-info">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="country-select clearfix mb-30">
                                        <label>Country <span class="required">*</span></label>
                                        <select class="wide">
                                            <option value="volvo">Bangladesh</option>
                                            <option value="saab">Algeria</option>
                                            <option value="mercedes">Afghanistan</option>
                                            <option value="audi">Ghana</option>
                                            <option value="audi2">Albania</option>
                                            <option value="audi3">Bahrain</option>
                                            <option value="audi4">Colombia</option>
                                            <option value="audi5">Dominican Republic</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list mb-30">
                                        <label>First Name <span class="required">*</span></label>
                                        <input type="text" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list mb-30">
                                        <label>Last Name <span class="required">*</span></label>
                                        <input type="text" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list mb-30">
                                        <label>Company Name</label>
                                        <input type="text" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list mb-30">
                                        <label>Address <span class="required">*</span></label>
                                        <input type="text" placeholder="Street address" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list mb-30">
                                        <input type="text" placeholder="Apartment, suite, unit etc. (optional)" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list mb-30">
                                        <label>Town / City <span class="required">*</span></label>
                                        <input type="text" placeholder="Town / City" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list mb-30">
                                        <label>State / County <span class="required">*</span></label>
                                        <input type="text" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list mb-30">
                                        <label>Postcode / Zip <span class="required">*</span></label>
                                        <input type="text" placeholder="Postcode / Zip" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list mb-30">
                                        <label>Email Address <span class="required">*</span></label>
                                        <input type="email" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list mb-30">
                                        <label>Phone <span class="required">*</span></label>
                                        <input type="text" placeholder="Postcode / Zip" />
                                    </div>
                                </div>
                            </div>
                            <div class="order-notes">
                                <div class="checkout-form-list">
                                    <label>Order Notes</label>
                                    <textarea id="checkout-mess" cols="30" rows="10"
                                        placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="your-order">
                        <h3>Your order</h3>
                        <div class="your-order-table table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product-name">Product</th>
                                        <th class="product-total">Total</th>
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
                                    extract($cart);
                                    echo '
                            <tbody>
                                <tr class="cart_item">
                                    <td class="product-name">
                                        ' . $cart[2] . ' <span class="product-quantity"> × ' . $cart[4] . '</span>
                                    </td>
                                    <td class="product-total">
                                        <span class="amount">' . $ttien . '</span>
                                    </td>
                                </tr>
                            </tbody>';
                                }
                                ?>

                                <?php
                                extract($cart);
                                echo '<tfoot>
                            <tr class="cart-subtotal">
                                <th>Cart Subtotal</th>
                                <td><span class="amount">' . $tong . '</span></td>
                            </tr>
                            <tr class="order-total">
                                <th>Order Total</th>
                                <td><span class=" total amount">' . $tong . '</span>
                                </td>
                            </tr>
                        </tfoot>';
                                ?>

                            </table>
                        </div>
                        <div class="payment-method">
                            <div id="accordion">
                                <div class="col-md-12">
                                    <div class="checkout-form-list create-acc mb-30">
                                        <input value="1" name="pttt" id="cbox" type="radio" checked/>
                                        <label>Thanh toán khi nhận hàng</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list create-acc mb-30">
                                        <input value="2" name="pttt" id="cbox" type="radio" />
                                        <label>Thanh toán bằng thẻ</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list create-acc mb-30">
                                        <input value="3" name="pttt" id="cbox" type="radio" />
                                        <label>Thanh toán</label>
                                    </div>
                                </div>
                                <div class="login-details text-center mb-25">
                                    <a href="index.php?act=thanhtoan"></a>
                                    <input type="submit" name="bill" class="login-btn" value="Thanh toán"></input>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>


    </div>
</div>