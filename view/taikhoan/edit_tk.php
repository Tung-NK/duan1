 <div class="breadcrumb-area">
     <div class="container">
         <ol class="breadcrumb breadcrumb-list">
             <li class="breadcrumb-item">
                 <a href="index.html">Home</a>
             </li>
             <li class="breadcrumb-item active">account</li>
         </ol>
     </div>
 </div>
 <!-- Breadcrumb Area End Here -->
 <!-- My Account Page Start Here -->
 <div class="my-account white-bg ptb-80">
     <div class="container">
         <div class="account-dashboard">
             <div class="dashboard-upper-info">
                 <div class="row align-items-center no-gutters">
                     <div class="col-xl-3 col-lg-3 col-md-6">
                     <?php
                        if (isset($_SESSION['user'])) {
                            extract($_SESSION['user']);

                            echo '<div class="d-single-info">
                             <p class="user-name">Hello <strong>'.$email.'</strong></p>
                             <p><a class="log-out" href="index.php?act=thoat">Log Out</a></p>
                         </div>';
                        }
                        ?>
                         
                     </div>
                     <div class="col-xl-3 col-lg-4 col-md-6">
                         <div class="d-single-info">
                             <p>Need Support? Customer service.</p>
                             <p>admin@example.com.</p>
                         </div>
                     </div>
                     <div class="col-xl-3 col-lg-3 col-md-6">
                         <div class="d-single-info">
                             <p>E-mail them at </p>
                             <p>support@example.com</p>
                         </div>
                     </div>
                      
                     <div class="col-xl-3 col-lg-2 col-md-6">
                         <div class="d-single-info text-lg-center">
                             <a class="view-cart" href="cart.html">view cart</a>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-lg-2">
                     <!-- Nav tabs -->
                     <ul class="nav flex-column dashboard-list" role="tablist">
                         <li><a class="nav-link active" data-toggle="tab" href="#dashboard">Dashboard</a></li>
                         <li> <a class="nav-link" data-toggle="tab" href="#orders">Orders</a></li>
                         <li><a class="nav-link" data-toggle="tab" href="#downloads">Downloads</a></li>
                         <li><a class="nav-link" data-toggle="tab" href="#address">Addresses</a></li>
                         <li><a class="nav-link" data-toggle="tab" href="#account-details">Thay đổi thông tin</a></li>
                         <li><a class="nav-link" href="index.php?act=thoat">logout</a></li>
                     </ul>
                 </div>
                 <div class="col-lg-10">
                     <!-- Tab panes -->
                     <div class="tab-content dashboard-content mt-all-40">
                         <div id="dashboard" class="tab-pane fade show active">
                             <h3>Dashboard </h3>
                             <p>From your account dashboard. you can easily check & view your <a href="#">recent orders</a>, manage your <a href="#">shipping and billing addresses</a> and <a href="#">edit your password and account details.</a></p>
                         </div>
                         <div id="orders" class="tab-pane fade">
                             <h3>Orders</h3>
                             <div class="table-responsive">
                                 <table class="table">
                                     <thead>
                                         <tr>
                                             <th>Order</th>
                                             <th>Date</th>
                                             <th>Status</th>
                                             <th>Total</th>
                                             <th>Actions</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <tr>
                                             <td>1</td>
                                             <td>sep 10, 2018</td>
                                             <td>Processing</td>
                                             <td>$25.00 for 1 item </td>
                                             <td><a class="view" href="cart.html">view</a></td>
                                         </tr>
                                         <tr>
                                             <td>2</td>
                                             <td>sep 10, 2018</td>
                                             <td>Processing</td>
                                             <td>$17.00 for 1 item </td>
                                             <td><a class="view" href="cart.html">view</a></td>
                                         </tr>
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                         <div id="downloads" class="tab-pane fade">
                             <h3>Downloads</h3>
                             <div class="table-responsive">
                                 <table class="table">
                                     <thead>
                                         <tr>
                                             <th>Product</th>
                                             <th>Downloads</th>
                                             <th>Expires</th>
                                             <th>Download</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <tr>
                                             <td>elomus- ecommerce bootstrap template</td>
                                             <td>Aug 10, 2018</td>
                                             <td>never</td>
                                             <td><a class="view" href="#">Download File</a></td>
                                         </tr>
                                         <tr>
                                             <td>gatcomart - ecommerce html template</td>
                                             <td>Sep 11, 2018</td>
                                             <td>never</td>
                                             <td><a class="view" href="#">Download File</a></td>
                                         </tr>
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                         <div id="address" class="tab-pane">
                             <p>The following addresses will be used on the checkout page by default.</p>
                             <h4 class="billing-address">Billing address</h4>
                             <a class="view" href="#">edit</a>
                             <p>Bayazid Hasan</p>
                             <p>Bangladesh</p>
                         </div>
                         <div id="account-details" class="tab-pane fade">
                             <h3>Thay đổi thông tin tài khoản </h3>
                             <div class="register-form login-form clearfix">
                                <?php
                                    if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                                        extract($_SESSION['user']);
                                    }
                                ?>
                             <form action="index.php?act=edit_tk" method="post">
                                <!-- <div class="form-group row align-items-center">
                                    <label class="col-lg-3 col-md-3 col-form-label">Social title</label>
                                    <div class="col-lg-6 col-md-6">
                                        <span class="custom-radio"><input name="id_gender" value="1" type="radio"> Mr.</span>
                                        <span class="custom-radio"><input name="id_gender" value="1" type="radio"> Mrs.</span>
                                    </div>
                                </div> -->
                                <!-- <div class="form-group row">
                                    <label for="f-name" class="col-lg-3 col-md-3 col-form-label">First Name</label>
                                    <div class="col-lg-6 col-md-6">
                                        <input type="text" class="form-control" id="f-name">
                                    </div>
                                </div> -->
                                <div class="form-group row">
                                    <label for="l-name" class="col-lg-3 col-md-3 col-form-label">User Name</label>
                                    <div class="col-lg-6 col-md-6">
                                        <input type="text" name="user" class="form-control" id="l-name" value="<?=$user?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-lg-3 col-md-3 col-form-label">Email</label>
                                    <div class="col-lg-6 col-md-6">
                                        <input type="text" name="email" class="form-control" id="email" value="<?=$email?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-lg-3 col-md-3 col-form-label">Password</label>
                                    <div class="col-lg-6 col-md-6">
                                        <input type="text" name="pass" class="form-control" id="inputPassword" value="<?=$pass?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-lg-3 col-md-3 col-form-label">Tel</label>
                                    <div class="col-lg-6 col-md-6">
                                        <input type="text" name="phone" class="form-control" id="phone" value="<?=$phone?>">
                                    </div>
                                </div>
                                <div class="form-check row p-0 mt-20">
                                    <div class="col-md-6 offset-md-3">
                                        <input class="form-check-input" value="#" id="offer" type="checkbox">
                                        <label class="form-check-label" for="offer">Receive offers from our partners</label>
                                    </div>
                                </div>
                                <div class="form-check row p-0 mt-20">
                                    <div class="col-md-8 offset-md-3">
                                        <input class="form-check-input" value="#" id="subscribe" type="checkbox">
                                        <label class="form-check-label" for="subscribe">Sign up for our newsletter<br>Subscribe to our newsletters now and stay up-to-date with new collections, the latest lookbooks and exclusive offers..</label>
                                    </div>
                                </div>
                                <div class="register-box mt-40">
                                    <input type="hidden" name="id" value="<?=$id?>">
                                    <input type="submit" name="capnhat" class="login-btn float-right" value="Save"></input>
                                </div>
                                <div class="register-box mt-40">
                                    <input type="reset" class="login-btn float-right" value="Nhập lại"></input>
                                </div>
                            </form>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>