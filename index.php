<?php
ob_start();
session_start();
include 'view/header.php';
include 'model/pdo.php';
include 'model/sanpham.php';
include 'model/danhmuc.php';
include 'model/taikhoan.php';
include 'model/binhluan.php';
include 'model/cart.php';
include 'global.php';

$sp_minprice = load_sanpham_pricemin();
$sp_new = load_sanpham_new();
$sp_featured = load_sanpham_featured();
$dsdm = loadall_danhmuc();
$dssp = load_sanpham_dmfeatured();


if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'thanhtoan':
            include 'view/cart/thanhtoan.php';
            break;

        case 'bill':
            if(isset($_POST['bill'])&&($_POST['bill'])){
                $tong = $_POST['tong'];
                $hoadon = hoadon($tong);
            }
            include 'view/cart/bill.php';
            break;


            //giỏ hàng
        case 'viewcart':
            include 'view/cart/viewcart.php';
            break;

        case 'addtocart';
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $image = $_POST['image'];
                $price = $_POST['price'];
                $soluong = 1;
                $ttien = $price * $soluong;
                $spadd = [$id, $image, $name, $price, $soluong, $ttien];
                array_push($_SESSION['mycart'], $spadd);
            }
            include 'view/cart/viewcart.php';
            break;

        case 'delcart':
            if (isset($_POST['idcart'])) {
                $_SESSION['mycart'] = [];
            } else {
                array_splice($_SESSION['mycart'], $_POST['idcart'], 1);
            }
            header('location: index.php?act=viewcart');
            break;
        case 'viewcart':
            include "view/cart/viewcart.php";
            break;

            //tài khoản
        case 'dangki':
            if (isset($_POST['dangki']) && ($_POST['dangki'])) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                insert_taikhoan($email, $user, $pass);
                $thongbao = "Đã đăng kí thành công";
            }

            include 'view/taikhoan/dangki.php';
            break;

        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $check_user = check_user($user, $pass);
                if (is_array($check_user)) {
                    $_SESSION['user'] = $check_user;
                    $thongbao = "bạn đã đăng nhập tahnfh công";
                    header('location: index.php');
                }
            }
            include 'view/taikhoan/dangnhap.php';
            break;

        case 'thoat':
            session_unset();
            header('location: index.php');
            break;

        case 'edit_tk':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $phone = $_POST['phone'];
                $id = $_POST['id'];

                update_taikhoan($id, $user, $pass, $email, $phone);
                $_SESSION['user'] = check_user($user, $pass);
                header('location: index.php?act=edit_tk');
            }
            include 'view/taikhoan/edit_tk.php';
            break;

        case 'quenmk':
            if (isset($_POST['guiemail'])) {
                $email = $_POST['email'];
                $sendMailMess = sendMail($email);
            }
            include 'view/taikhoan/quenmk.php';
            break;


            //sản phẩm
        case 'sanpham':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }

            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = loadall_sanpham($kyw, $iddm);
            $tendm = load_ten_dm($iddm);
            include 'view/sanpham.php';
            break;

        case 'sanphamct';
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                $onesp = loadone_sanpham($id);
                extract($onesp);
                $sp_cung_loai = load_sanpham_cungloai($id, $iddm);
                include 'view/sanphamct.php';
            } else {
                include 'view/home.php';
            }
            break;

        default:
            include 'view/home.php';
            break;
    }
} else {
    include 'view/home.php';
}

include 'view/footer.php';
ob_end_flush();
