<?php
session_start();
include "model/pdo.php";
include "model/danhmuc.php";
include "model/sanpham.php";
include "model/taikhoan.php";
include "model/cart.php";
include "view/header.php";
include "global.php";

if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];

$spnew = loadall_sanpham_home();
$dsdanhmuc = loadall_danhmuc();

if (isset($_GET['act']) && $_GET['act'] != "") {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':
            if(isset($_POST['keysearch']) && $_POST['keysearch']!="") {
                $keysearch = $_POST['keysearch'];
            }
            else{
                $keysearch = "";
            }
            if (isset($_GET['iddm']) && $_GET['iddm'] > 0) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm=0;
            }
            $dssanpham = loadall_sanpham($keysearch,$iddm);
            include "view/sptheodm.php";
            break;
        case 'dangky':
            if (isset($_POST['dangky']) && $_POST['dangky']) {
                $email = $_POST['email'];
                $tentaikhoan = $_POST['TenTaiKhoan'];
                $pass = $_POST['password'];
                insert_taikhoan($email, $tentaikhoan, $pass);
                $thongbao = "Đăng ký thành công. Vui lòng đăng nhập";
            }
            include "view/taikhoan/dangky.php";
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && $_POST['dangnhap']) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = check_user($user, $pass);
                if (is_array($checkuser)) {
                    // $thongbao="Đăng nhập thành công.";
                    $_SESSION['user'] = $checkuser;
                    header('Location: index.php');
                } else {
                    $thongbao = "tài khoản không tồn tại.";
                    include "index.php";
                }
            }
            break;
        case 'capnhaptaikhoan':
            if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
                $user = $_POST['TenTaiKhoan'];
                $email = $_POST['email'];
                $pass = $_POST['password'];
                $id = $_POST['id'];
                $diachi = $_POST['address'];
                $sodienthoai = $_POST['sodienthoai'];
                update_taikhoan($id, $email, $pass, $diachi, $sodienthoai);
                $_SESSION['user'] = check_user($user, $pass);
                header('Location: index.php?act=capnhaptaikhoan');
            }
            include "view/taikhoan/capnhaptaikhoan.php";
            break;
        case 'gioithieu':
            include "view/gioithieu.php";
            break;
        case 'thoat':
            session_unset();
            header('Location: index.php');
            break;
        case 'chitietsanpham':
            if (isset($_GET['idsp']) && $_GET['idsp'] > 0) {
                $onesp = loadone_sanpham($_GET['idsp']);
                extract($onesp);
                $listspcungloai = load_sanpham_cungloai($ProductID, $CategoryID);
                include "view/chitietsanpham.php";
            } else include "view/home.php";
            break;
        case 'addtocart':
            if (isset($_POST['addtocart']) && $_POST['addtocart']) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $price = $_POST['price'];
                $soluong = 1;
                $tongtien = $soluong * $price;
                $spadd = [$id, $name, $img, $price, $soluong, $tongtien];
                array_push($_SESSION['mycart'], $spadd);
            }
            include "view/cart/viewcart.php";
            break;
        case 'xoacart':
            // if(isset($_GET['idcart'])) {
            //     array_slice($_SESSION['mycart'],$_GET['idcart'],1);
            // }else{
            //     $_SESSION['mycart']=[];
            // }
            // header('Location: index.php?act=viewcart');
            // break;
            if (isset($_GET['idcart'])) {
                $idToRemove = $_GET['idcart'];
                unset($_SESSION['mycart'][$idToRemove]);
                // Reset array keys after unset to prevent gaps in numeric keys
                $_SESSION['mycart'] = array_values($_SESSION['mycart']);
            } else {
                $_SESSION['mycart'] = [];
            }
            header('Location: index.php?act=addtocart');
            break;
        case 'bill':
            include "view/cart/bill.php";
            break;
        case 'billconfirm':
            //$idbill = 0; // phải thêm này để xác định biến vì khi không có if biến không đc xác định nên lỗi.
            if (isset($_POST['dongydathang']) && $_POST['dongydathang']) {
                $name = $_POST['name'];
                $address = $_POST['address'];
                $email = $_POST['email'];
                $pttt = $_POST['pttt'];
                $sodienthoai = $_POST['sodienthoai'];
                // Set the timezone to your desired timezone
                date_default_timezone_set('Asia/Ho_Chi_Minh');

                // Use DateTime class to get the current date
                $ngaydathang = (new DateTime())->format('Y-m-d H:i:s');
                $tongdonhang = tongdonhang();
                $idbill = insert_bill($name, $email, $address, $pttt, $sodienthoai, $ngaydathang, $tongdonhang);
                foreach ($_SESSION['mycart'] as $cart) {
                    insert_cart($_SESSION['user']['AccountID'], $cart[0], $cart[2], $cart[1], $cart[3], $cart[4], $cart[5], $idbill);
                }
            } else {
                header('Location: index.php');
            }
            $bill = loadone_bill($idbill);
            $billchitiet = loadone_cart($idbill);
            include "view/cart/billconfirm.php";
            break;
        case 'lienhe':
            include "view/lienhe.php";
            break;
        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";
