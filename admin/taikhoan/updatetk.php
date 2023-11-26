<?php
if (is_array($taikhoan)) {
    extract($taikhoan);
}
?>

<form action="index.php?act=updatetk" method="post" class="form-horizontal" enctype="multipart/form-data">
    <div class="card-body">
        <h4 class="card-title">Thông tin tài khoản</h4>
        
        <div class="form-group row">
            <label for="fname" class="col-sm-2 text-center control-label col-form-label">User</label>
            <div class="col-sm-9">
                <input type="text" name="user" class="form-control" id="fname" placeholder="User" value="<?=$user?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="lname" class="col-sm-2 text-center control-label col-form-label">Password</label>
            <div class="col-sm-9">
                <input type="text" name="pass" class="form-control" id="lname" placeholder="Password" value="<?=$pass?>">
            </div>
        </div>
        

        <div class="form-group row">
            <label for="lname" class="col-sm-2 text-center control-label col-form-label">Email</label>
            <div class="col-sm-9">
                <input type="text" name="email" class="form-control" id="lname" placeholder="Email" value="<?=$email?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="lname" class="col-sm-2 text-center control-label col-form-label">Email</label>
            <div class="col-sm-9">
                <input type="text" name="phone" class="form-control" id="lname" placeholder="phone" value="<?=$phone?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="lname" class="col-sm-2 text-center control-label col-form-label">Rol</label>
            <div class="col-sm-9">
                <input type="text" name="role" class="form-control" id="lname" placeholder="Rol" value="<?=$role?>">
            </div>
        </div>
    </div>
    <div class="border-top text-center">
        <div class="card-body">
             <input type="hidden" name="id" value="<?=$id?>">
            <input type="submit" name="capnhattk" class="btn btn-primary" value="Cập nhật">
            <input type="reset" class="btn btn-danger" value="Nhập lại">
        </div>
    </div>
    <?php
    if (isset($thongbao) && ($thongbao != ""))
        echo $thongbao;
    ?>
</form>