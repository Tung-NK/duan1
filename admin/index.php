<?php
ob_start();
include '../model/pdo.php';
include 'header.php';
include '../model/danhmuc.php';
include '../model/sanpham.php';
include '../model/taikhoan.php';
include '../model/binhluan.php';
include '../model/cart.php';
include '../model/thongke.php';
include '../global.php';

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'listdm':
            $listdanhmuc = loadall_danhmuc();
            include 'danhmuc/listdm.php';
            break;

        case 'adddm':
            $thongbao = "";
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $tenloai = trim($_POST['tenloai']);
                    if (empty($_POST['tenloai'])) {
                        $thongbao = "<span style='color:red;'>Error: Vui lòng nhập dữ liệu</span>";
                    } else {
                        insert_danhmuc($tenloai);
                        $thongbao = "Thêm thành công";
                        header('Location: index.php?act=listdm');
                    }
                }
            }
            include 'danhmuc/adddm.php';
            break;

        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include 'danhmuc/listdm.php';
            break;

        case 'suadm';
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadone_danhmuc($_GET['id']);
            }
            include 'danhmuc/updatedm.php';
            break;

        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $errors = [];
                if (empty($name)) {
                    $errors[] = "Vui lòng nhập dữ liệu";
                }
                if (empty($errors)) {
                    $dm = update_danhmuc($id, $name);
                    $thongbao = "Cập nhật thành công";
                    header('location: index.php?act=listdm');
                } else {
                    foreach ($errors as $error) {
                        $thongbao = '<div class="text-danger">' . $error . '</div>';
                    }
                }
            }
            $listdanhmuc = loadall_danhmuc();
            include 'danhmuc/updatedm.php';
            break;


        case 'listsp':
            if (isset($_POST['listOK']) && ($_POST['listOK'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }
            $listdanhmuc = loadall_danhmuc($iddm);
            $listsanpham = loadall_sanpham($kyw, $iddm);
            include 'sanpham/listsp.php';
            break;

        case 'addsp':
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $errors = [];
                if (empty($_POST['iddm']) || empty($_POST['tensp']) || empty($_POST['giasp']) || empty($_POST['mota']) || empty($_FILES['hinh']['name'])) {
                    $errors[] = "<span style='color:red;'>Error: Vui lòng nhập đầy đủ thông tin</span>";
                } else {
                    $iddm = trim($_POST['iddm']);
                    $tensp = trim($_POST['tensp']);
                    $giasp = trim($_POST['giasp']);
                    $mota = trim($_POST['mota']);
                    $hinh = trim($_FILES['hinh']['name']);
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if ($giasp <= 0) {
                        $errors[] = "Giá sản phẩm phải lớn hơn 0.";
                    }
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        // File uploaded successfully
                    } else {
                        $errors[] = "Có lỗi khi tải lên tệp của bạn.";
                    }
                }

                if (empty($errors)) {
                    insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm);
                    $thongbao = "Thêm thành công";
                    header('location: index.php?act=listsp');
                    exit();
                }
            }

            $listdanhmuc = loadall_danhmuc();
            include 'sanpham/add.php';
            break;


        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham = loadone_sanpham($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include 'sanpham/update.php';
            break;

        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                update_sanpham($id, $iddm, $tensp, $giasp, $mota, $hinh);
                $thongbao = "Cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham("", 0);
            include 'sanpham/listsp.php';
            break;

        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sanpham($_GET['id']);
            }
            $listsanpham = loadall_sanpham("", 0);
            include 'sanpham/listsp.php';
            break;

            //tài khoản
        case 'list':
            $listtk = load_taikhoan();
            include 'taikhoan/list.php';
            break;

        case 'suatk':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $taikhoan = loadone_taikhoan($_GET['id']);
            }
            include 'taikhoan/updatetk.php';
            break;

        case 'updatetk':
            if (isset($_POST['capnhattk']) && ($_POST['capnhattk'])) {
                $id = $_POST['id'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $role = $_POST['role'];
                update_taikhoan_admin($id, $user, $pass, $email, $phone, $role);
                $thongbao = "Cập nhật thành công";
            }
            $listtk = load_taikhoan("", 0);
            include 'taikhoan/list.php';
            break;

        case 'xoatk':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_taikhoan($_GET['id']);
            }
            $listtk = load_taikhoan("", 0);
            include 'taikhoan/list.php';
            break;

            //dơn hàng
        case 'listdh':
            $bill_list = loadall_bill(0);
            include 'donhang/listdh.php';
            break;

        case 'suadh':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $donhang = loadone_bill($_GET['id']);
                // loadall_cart($idbill);
            }
            include 'donhang/updatedh.php';
            break;

        case 'updatedh':
            if (isset($_POST['capnhatdh']) && ($_POST['capnhatdh'])) {
                $id = $_POST['id'];
                $bill_trangthai = $_POST['bill_trangthai'];
                $bill_tttt = $_POST['bill_tttt'];
                update_donhang($id, $bill_trangthai, $bill_tttt);
                $thongbao = "Cập nhật thành công";
            }
            $bill_list = loadall_bill(0);
            include 'donhang/listdh.php';
            break;

        case 'xnhuy':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                xnhuydon($id);
            }
            header('Location: index.php?act=listdh');
            break;
            // bình luận    
        case 'binhluan':
            $listbinhluan = list_binhluan();
            include 'binhluan/listbl.php';
            break;

        case 'xoabl':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_binhluan($_GET['id']);
            }
            $listbinhluan = list_binhluan();
            include 'binhluan/listbl.php';
            break;

            //thong kê
        case 'thongke':
            $thongke_data = loadall_thongke();
            $lowest_sold_product = getLowestSoldProduct();
            include 'thongke/listtk.php';
            break;

        case 'bieudo':
            $listthongke = doanh_so();
            // $lowest_sold_product = getLowestSoldProduct();
            include 'thongke/thongke.php';
            break;


        default:
            include 'home.php';
            break;
    }
} else {
    include 'home.php';
}


include 'footer.php';
ob_end_flush();
