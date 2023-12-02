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
        case 'bohuydh':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                bohuydon($id);
            }
            header('Location: index.php?act=mybill');
            break;

        case 'huydh':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                huydon($id);
            }
            header('Location: index.php?act=mybill');
            break;

        case 'viewbill':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $idbill = $_GET['id'];
                $bill_ct = loadone_bill($_GET['id']);
            }
            include 'view/cart/donhangct.php';
            break;

        case 'mybill':
            $bill_list = loadall_bill($_SESSION['user']['id']);
            include 'view/cart/donhang.php';
            break;

        case 'thanhtoan':
            include 'view/cart/thanhtoan.php';
            break;

        case 'bill':
            if (isset($_POST['bill']) && ($_POST['bill'])) {
                if (isset($_SESSION['user'])) $iduser = $_SESSION['user']['id'];
                else $id = 0;
                $name = $_POST['user'];
                $email = $_POST['email'];
                $diachi = $_POST['diachi'];
                $phone = $_POST['phone'];
                $pttt = $_POST['pttt'];
                $ngaydathang = date("Y-m-d H:i:s");
                $tongdonhang = tongdonhang();
                $idbill = insert_bill($iduser, $name, $email, $diachi, $phone, $pttt, $ngaydathang, $tongdonhang);
                foreach ($_SESSION['mycart'] as $cart) {
                    insert_cart($_SESSION['user']['id'], $cart['0'], $cart['1'], $cart['2'], $cart['3'], $cart['4'], $cart['5'], $idbill);
                }
                unset($_SESSION['mycart']);
            }
            $listbill =  loadone_bill($idbill);
            $bill =  loadall_cart($idbill);
            include 'view/cart/bill.php';
            break;


            //giỏ hàng
        case 'viewcart':
            include 'view/cart/viewcart.php';
            break;

        case 'addtocart':
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $image = $_POST['image'];
                $price = $_POST['price'];
                $soluong = 1;
                $ttien = $price * $soluong;


                $productExists = false;
                foreach ($_SESSION['mycart'] as $key => $cart) {
                    if ($cart[0] == $id) {
                        $_SESSION['mycart'][$key][4] += 1;
                        $_SESSION['mycart'][$key][5] = $_SESSION['mycart'][$key][3] * $_SESSION['mycart'][$key][4];
                        $productExists = true;
                        break;
                    }
                }

                if (!$productExists) {
                    $spadd = [$id, $image, $name, $price, $soluong, $ttien];
                    array_push($_SESSION['mycart'], $spadd);
                }
            }
            header('location: index.php?act=viewcart');
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
                // $user = $_POST['user'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $check_user = check_user($email, $pass);
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
                // $dsbl = load_binhluan($idpro);
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
