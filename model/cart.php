<?php
    function viewcart() {
        global $img_path;
        $tong=0;
        $i=0;
        foreach ($_SESSION['mycart'] as $cart) {
            $hinh=$img_path.$cart[2];
            $thanhtien = $cart[3] * $cart[4];
            $tong+=$thanhtien;
            $xoasp='<a href="index.php?act=xoacart&idcart='.$i.'"><input type="button" value="Xóa"></a>';
            echo '                <tr>
            <td><img src="'.$hinh.'" alt="" height="80px"></td>
            <td>'.$cart[1].'</td>
            <td>'.number_format($cart[3], 3, ',', '.').'</td>
            <td>'.$cart[4].'</td>
            <td>'.number_format($thanhtien, 3, ',', '.').'</td>
            <td>'.$xoasp.'</td>
            </tr>';
            $i++;
        }
        $formatted_tong = number_format($tong, 3, ',', '.');
            echo '                <tr>
            <td colspan="4">Tổng đơn hàng</td>
            <td>'.$formatted_tong.'</td>
            <td></td>
        </tr>';
    }

    function bill_chi_tiet($billchitiet) {
        global $img_path;
        $tong=0;
        $i=0;
        echo '                <tr>
            <th>Hình</th>
            <th>Sản phẩm</th>
            <th>Đơn giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
            </tr>';

        foreach ($billchitiet as $cart) {
            $hinh=$img_path.$cart['HinhAnhSanPham'];
            $tong+=$cart['TongTien'];
            echo '                <tr>
            <td><img src="'.$hinh.'" alt="" height="80px"></td>
            <td>'.$cart['TenSanPham'].'</td>
            <td>'.number_format($cart['GiaBan'], 3, ',', '.').'</td>
            <td>'.$cart['SoLuong'].'</td>
            <td>'.number_format($tong, 3, ',', '.').'</td>
            </tr>';
            $i++;
        }
        $formatted_tong = number_format($tong, 3, ',', '.');
            echo '                <tr>
            <td colspan="4">Tổng đơn hàng</td>
            <td>'.$formatted_tong.'</td>
        </tr>';
    }


    function tongdonhang() {
        $tong=0;
        foreach ($_SESSION['mycart'] as $cart) {
            $thanhtien = $cart[3] * $cart[4];
            $tong+=$thanhtien;
        }
        return $tong;
    }

    function insert_bill($name, $email, $address, $pttt, $sodienthoai, $ngaydathang, $tongdonhang) {
        $sql = "INSERT INTO orders(NguoiDatHang,Email,Address,PTTT,PhoneNumber,NgayDatHang,TongGiaTriDonHang) VALUES('$name','$email','$address', '$pttt','$sodienthoai','$ngaydathang', '$tongdonhang')";
        return pdo_execute_return_LastInsertID($sql);
    }

    function insert_cart($AccountID, $ProductID, $HinhAnhSanPham, $TenSanPham, $GiaBan, $SoLuong, $TongTien, $OrderID) {
        $sql = "INSERT INTO cart(AccountID, ProductID, HinhAnhSanPham, TenSanPham, GiaBan, SoLuong, TongTien, OrderID) VALUES('$AccountID', '$ProductID', '$HinhAnhSanPham', '$TenSanPham', '$GiaBan', '$SoLuong', '$TongTien', '$OrderID')";
        pdo_execute($sql);
    }

    function loadone_bill($idbill) {
        $sql = "SELECT * FROM orders WHERE OrderID=".$idbill;
        $bill = pdo_query_one($sql);
        return $bill;
    }

    function loadone_cart($idbill) {
        $sql = "SELECT * FROM cart WHERE OrderID=".$idbill;
        $bill = pdo_query($sql);
        return $bill;
    }
?>