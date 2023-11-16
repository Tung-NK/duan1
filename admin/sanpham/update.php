<?php
if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath = "../upload/" . $image;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height='100'>";
} else {
    $hinh = "Không có hình ảnh";
}
?>

<form action="index.php?act=updatesp" method="post" class="form-horizontal" enctype="multipart/form-data">
    <div class="card-body">
        <h4 class="card-title">Personal Info</h4>
        <div class="form-group row">
            <label class="col-md-2 text-center m-t-15">Single Select</label>
            <div class="col-md-9 ">
                <select name="iddm" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                    <?php
                    foreach ($listdanhmuc as $dm) {
                        // extract($dm);
                        if ($iddm == $id)
                            echo '<option value="' . $dm['id'] . '" selected>' . $dm['name'] . '</option>';
                        else echo '<option value="' . $dm['id'] . '">' . $dm['name'] . '</option>';
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="fname" class="col-sm-2 text-center control-label col-form-label">Tên sản phẩm</label>
            <div class="col-sm-9">
                <input type="text" name="tensp" class="form-control" id="fname" placeholder="Tên sản phẩm" value="<?=$name?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="lname" class="col-sm-2 text-center control-label col-form-label">Giá</label>
            <div class="col-sm-9">
                <input type="text" name="giasp" class="form-control" id="lname" placeholder="Giá sản phẩm" value="<?=$price?>">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2 text-center">Hình ảnh</label>
            <div class="col-md-9">
                <div class="custom-file">
                    <input type="file" name="hinh" class="custom-file-input" id="validatedCustomFile" required>
                    <?=$hinh?>
                    <label class="custom-file-label" for="validatedCustomFile"></label>
                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="cono1" class="col-sm-2 text-center control-label col-form-label">Mô tả</label>
            <div class="col-sm-9">
                <textarea name="mota" class="form-control"><?=$mota?></textarea>
            </div>
        </div>
    </div>
    <div class="border-top text-center">
        <div class="card-body">
             <input type="hidden" name="id" value="<?=$id?>">
            <input type="submit" name="capnhat" class="btn btn-primary" value="Cập nhật">
            <input type="reset" class="btn btn-danger" value="Nhập lại">
        </div>
    </div>
    <?php
    if (isset($thongbao) && ($thongbao != ""))
        echo $thongbao;
    ?>
</form>