<div class="row mb">
    <div class="boxtrai mr">
    <div class="row mb">
        <div class="boxtitle">GIỎ HÀNG</div>
        <div class="row boxcontent cart">
            <table>
                <tr>
                    <th>Hình</th>
                    <th>Sản phẩm</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th>Thao tác</th>
                </tr>

                <?php
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
                ?>

            </table>
        </div>
    </div>
    <div class="row mb bill">
        <a href="index.php?act=bill"><input type="submit" value="ĐỒNG Ý ĐẶT HÀNG"></a>
        <a href="index.php?act=xoacart"><input type="button" value="XÓA GIỎ HÀNG"></a>
    </div>
    </div>
    <div class="boxphai">
        <?php include "view/boxright.php" ?>
    </div>
</div>