<div class="breadcrumb-area">
    <div class="container">
        <ol class="breadcrumb breadcrumb-list">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active">Login</li>
        </ol>
    </div>
</div>
<!-- Breadcrumb Area End Here -->
<!-- Login Page Start Here -->
<div class="login ptb-80">
    <div class="container">
        <h3 class="login-header">Đăng nhập vào tài khoản của bạn</h3>
        <div class="row">
            <div class="col-xl-6 col-lg-8 offset-xl-3 offset-lg-2">
                <div class="login-form">
                    <form action="index.php?act=dangnhap" method="post">
                        <div class="form-group row">
                            <label for="user" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-7">
                                <input type="text" name="email" class="form-control" id="user" placeholder="Email">
                                <?php
                                if (isset($thongbao) && ($thongbao != "")) {
                                    echo $thongbao;
                                }
                                ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-7">
                                <input type="password" name="pass" class="form-control" id="inputPassword" placeholder="Password">
                                <button class="btn show-btn" type="button">Show</button>
                                <?php
                                if (isset($thongbao) && ($thongbao != "")) {
                                    echo $thongbao;
                                }
                                ?>
                            </div>
                        </div>

                        <?php
                            if (isset($tbchung) && ($tbchung != "")) {
                                echo $tbchung;
                            }
                            ?>
                        <div class="login-details text-center mb-25">
                            <a href="index.php?act=quenmk">Forgot your password? </a>
                            <input type="submit" name="dangnhap" class="login-btn" value="Đăng nhập"></input>
                        </div>
                        <div class="login-footer text-center">
                            <p>Bạn không có tài khoản? <a href="index.php?act=dangki">Tạo tài khoản ngay</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>