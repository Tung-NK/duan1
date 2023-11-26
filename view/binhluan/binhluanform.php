<?php
session_start();
include '../../model/pdo.php';
include '../../model/binhluan.php';

$idpro = $_REQUEST['idpro'];
$dsbl = load_binhluan($idpro);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="group-title">
        <h2>customer review</h2>
    </div>
    <?php
    foreach ($dsbl as $bl) {
        extract($bl);
        echo '<h4 class="review-mini-title">' . $user . '</h4>
            <ul class="review-list">
                <li>
                    <span>Người bình luận</span>
                    <label>Review by
                        <a href="#">' . $user . '</a>
                    </label>
                </li>
                <li>
                    <span>Nội dung</span>
                    <label>Review by
                        ' . $noidung . '
                    </label>
                </li>
                <li>
                    <span>Ngày bình luận</span>
                    <label>' . date("d-m-Y", strtotime($ngaybinhluan)) . '</label>
                </li>
                <!-- Single Review List End -->
            </ul>';
    }
    ?>
    </div>

    <!-- Reviews End -->
    <!-- Reviews Start -->
    <div class="review mt-10">
        <!-- Reviews Field Start -->
        <div class="riview-field mt-40">
            <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
                    <input type="hidden" name="idpro" value="<?= $idpro ?>"><div class="form-group">
                    <label class="req" for="comments">Nội dung</label>
                    <textarea name="noidung" class="form-control" rows="5" id="comments" required="required"></textarea>
                </div>
                <input type="submit" name="guibinhluan" value="Gửi bình luận" class="customer-btn"></input>
            </form>
        </div>
        <?php
       if(isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])){
        $noidung = $_POST['noidung'];
        $idpro = $_POST['idpro'];
        // Thiết lập ID người dùng hiện tại từ phiên
        $iduser = $_SESSION['user']['id'];
        // Thiết lập ngày hiện tại
        $ngaybinhluan = date("Y-m-d H:i:s"); // Hoặc sử dụng định dạng ngày thời gian mong muốn của bạn
    
        insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
        header("location: ".$_SERVER['HTTP_REFERER']);
    }

        ?>
        <!-- Reviews Field Start -->
</body>

</html>