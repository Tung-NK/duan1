<div class="breadcrumb-area">
    <div class="container">
        <ol class="breadcrumb breadcrumb-list">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active">Forgot Password</li>
        </ol>
    </div>
</div>
<!-- Breadcrumb Area End Here -->
<!-- Forgot Password Start Here -->
<div class="lost-pass ptb-80">
    <div class="container">
        <div class="register-title">
            <h3 class="login-header">Register Account</h3>
        </div>
        <form class="password-forgot clearfix" action="index.php?act=quenmk" method="post">
            <fieldset>
                <legend>Your Personal Details</legend>
                <div class="form-group row">
                    <label class="control-label col-lg-3 col-md-3" for="email"><span class="require">*</span>Enter your email address here...</label>
                    <div class="col-lg-9 col-md-9">
                        <input type="email" name="email" class="form-control" id="email" placeholder="Nhập email của bạn...">
                    </div>
                </div>
            </fieldset>
            <div class="buttons newsletter-input">
                <div class="float-left float-sm-left">
                    <a class="customer-btn mr-20" href="index.php?act=dangnhap">Back</a>
                </div>
                <div class="float-right float-sm-right">
                    <input type="submit" name="guiemail" value="Continue" class="return-customer-btn">
                </div>
            </div>

            <?php
            if (isset($sendMailMess) && ($sendMailMess != '')) {
                echo $sendMailMess;
            }
            ?>
        </form>
    </div>
    <!-- Container End -->
</div>