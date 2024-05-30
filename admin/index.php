<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "header.php";
// controller

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                $motadanhmuc = $_POST['motadanhmuc'];
                insert_danhmuc($tenloai, $motadanhmuc);
                $thongbao = "thêm thành công";
            }
            include "danhmuc/add.php";
            break;
        case 'listdm':
            $dsdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'xoadm':
            if (isset($_GET['CategoriesID']) && ($_GET['CategoriesID'] > 0)) {
                delete_danhmuc($_GET['CategoriesID']);
            }
            $dsdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'suadm':
            if (isset($_GET['CategoriesID']) && ($_GET['CategoriesID'] > 0)) {
                $dm = loadone_danhmuc($_GET['CategoriesID']);
            }
            include "danhmuc/update.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhap']) && $_POST['capnhap']) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                $motadanhmuc = $_POST['motadanhmuc'];
                update_danhmuc($id, $tenloai, $motadanhmuc);
                $thongbao = "Cập nhập thành công ";
            }
            $dsdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;

            // ========controller cho san pham ========     
        case 'addsp':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $filename = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    //echo "Sorry, there was an error uploading your file.";
                }

                insert_sanpham($tensp,$giasp,$filename,$mota,$iddm);
                $thongbao = "Thêm thành công";
            }
            $dsdanhmuc = loadall_danhmuc();
            include "sanpham/add.php";
            break;
        case 'listsp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $iddm = $_POST['iddm'];
            }else {
                $iddm=0;
            }
            $dsdanhmuc = loadall_danhmuc();
            $dssanpham = loadall_sanpham($iddm);
            include "sanpham/list.php";
            break;
        case 'xoasp':
            if (isset($_GET['ProductID']) && ($_GET['ProductID'] > 0)) {
                delete_sanpham($_GET['ProductID']);
            }
            $dssanpham = loadall_sanpham();
            include "sanpham/list.php";
            break;
        case 'suasp':
            if (isset($_GET['ProductID']) && ($_GET['ProductID'] > 0)) {
                $sp = loadone_sanpham($_GET['ProductID']);
            }
            $dsdanhmuc = loadall_danhmuc();
            include "sanpham/update.php";
            break;
        case 'updatesp':
            if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    //echo "Sorry, there was an error uploading your file.";
                }
                update_sanpham($id, $iddm, $tensp, $giasp, $mota, $hinh);
                $thongbao = "Cập nhập thành công ";
            }
            $dsdanhmuc = loadall_danhmuc();
            $dssanpham = loadall_sanpham();
            include "sanpham/list.php";
            break;
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}

include "footer.php";
