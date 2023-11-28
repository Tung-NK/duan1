<?php
if (is_array($donhang)) {
    extract($donhang);
}
?>

<form action="index.php?act=updatedh" method="post" class="form-horizontal" enctype="multipart/form-data">
    <div class="card-body">
        <h4 class="card-title">Thông tin đơn hàng</h4>

        <div class="form-group row">
            <label class="col-md-2 text-center m-t-15">Trạng thái</label>
            <div class="col-md-9 ">
                <select name="bill_trangthai" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                    <option value="0">Chờ xác nhận</option>
                    <option value="1">Đang chuẩn bị hàng</option>
                    <option value="2">Đang giao hàng</option>
                    <option value="3">Đã giao hàng</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="fname" class="col-sm-2 text-center control-label col-form-label">ID</label>
            <div class="col-sm-9">
                <input type="text" name="id" class="form-control" id="fname" placeholder="User" value="<?= $id ?>" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label for="lname" class="col-sm-2 text-center control-label col-form-label">Khách hàng</label>
            <div class="col-sm-9">
                <input type="text" name="bill_name" class="form-control" id="lname" placeholder="Khách hàng" value="<?= $bill_name ?>" readonly>
            </div>
        </div>


        <div class="form-group row">
            <label for="lname" class="col-sm-2 text-center control-label col-form-label">Địa chỉ</label>
            <div class="col-sm-9">
                <input type="text" name="bill_diachi" class="form-control" id="lname" placeholder="Địa chỉ" value="<?= $bill_diachi ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label for="lname" class="col-sm-2 text-center control-label col-form-label">Số điện thoại</label>
            <div class="col-sm-9">
                <input type="text" name="bill_phone" class="form-control" id="lname" placeholder="Số điện thoại" value="<?= $bill_phone ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label for="lname" class="col-sm-2 text-center control-label col-form-label">Email</label>
            <div class="col-sm-9">
                <input type="text" name="bill_email" class="form-control" id="lname" placeholder="Email" value="<?= $bill_email ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label for="lname" class="col-sm-2 text-center control-label col-form-label">Phương thức thanh toán</label>
            <div class="col-sm-9">
                <input type="text" name="bill_pttt" class="form-control" id="lname" placeholder="Phương thức thanh toán" value="<?= $bill_pttt ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label for="lname" class="col-sm-2 text-center control-label col-form-label">Ngày đặt hàng</label>
            <div class="col-sm-9">
                <input type="text" name="ngaydathang" class="form-control" id="lname" placeholder="Ngày đặt hàng" value="<?= $ngaydathang ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label for="lname" class="col-sm-2 text-center control-label col-form-label">Tổng</label>
            <div class="col-sm-9">
                <input type="text" name="total" class="form-control" id="lname" placeholder="Tổng" value="<?= $total ?>" readonly>
            </div>
        </div>
    </div>
    <div class="border-top text-center">
        <div class="card-body">
            <input type="hidden" name="id" value="<?= $id ?>">
            <input type="submit" name="capnhatdh" class="btn btn-primary" value="Cập nhật">
            <input type="reset" class="btn btn-danger" value="Nhập lại">
        </div>
    </div>
    <?php
    if (isset($thongbao) && ($thongbao != ""))
        echo $thongbao;
    ?>
</form>