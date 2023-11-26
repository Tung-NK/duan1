        <div class="breadcrumb-area">
            <div class="container">
                <ol class="breadcrumb breadcrumb-list">
                    <li class="breadcrumb-item">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Register</li>
                </ol>
            </div>
        </div>
        <!-- Breadcrumb Area End Here -->
        <!-- Regester Page Start Here -->
        <div class="register-area ptb-80">
            <div class="container">
                <h3 class="login-header">Tạo tài khoản mới </h3>
                <div class="row">
                    <div class="offset-xl-1 col-xl-10">
                        <div class="register-form login-form clearfix">
                            <form action="index.php?act=dangki" method="post">
                                <p>Bạn đã có tài khoản? <a href="index.php?act=dangnhap">Đăng nhập ngay!</a></p>
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
                                        <input type="text" name="user" class="form-control" id="l-name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-lg-3 col-md-3 col-form-label">Email</label>
                                    <div class="col-lg-6 col-md-6">
                                        <input type="text" name="email" class="form-control" id="email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-lg-3 col-md-3 col-form-label">Password</label>
                                    <div class="col-lg-6 col-md-6">
                                        <input type="password" name="pass" class="form-control" id="inputPassword">
                                        <button class="btn show-btn" type="button">Show</button>
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
                                    <input type="submit" name="dangki" class="login-btn float-right" value="Đăng ký"></input>
                                </div>
                                <div class="register-box mt-40">
                                    <input type="reset" class="login-btn float-right" value="Nhập lại"></input>
                                </div>
                            </form>

                            <?php
                                if(isset($thongbao)&&($thongbao != "")){
                                    echo $thongbao;
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>