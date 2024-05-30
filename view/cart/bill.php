<div class="row mb">
    <div class="boxtrai mr">

        <form action="index.php?act=billconfirm" method="post">
            <div class="row mb">
                <div class="boxtitle">THÔNG TIN ĐẶT HÀNG</div>
                <div class="row boxcontent billform">
                    <table>
                        <?php
                        if (isset($_SESSION['user'])) {
                            $name = $_SESSION['user']['TenTaiKhoan'];
                            $address = $_SESSION['user']['Address'];
                            $email = $_SESSION['user']['Email'];
                            $sodienthoai = $_SESSION['user']['PhoneNumber'];
                        } else {
                            $name = "";
                            $address = "";
                            $email = "";
                            $sodienthoai = "";
                        }
                        ?>
                        <tr>
                            <td>Người đặt hàng</td>
                            <td><input type="text" name="name" value="<?= $name ?>"></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td><input type="text" name="address" value="<?= $address ?>"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="email" value="<?= $email ?>"></td>
                        </tr>
                        <tr>
                            <td>Số điện thoại</td>
                            <td><input type="text" name="sodienthoai" value="<?= $sodienthoai ?>"></td>
                        </tr>
                    </table>
                </div>
            </div>


            <div class="row mb">
                <div class="boxtitle">PHƯƠNG THỨC THANH TOÁN</div>
                <div class="row boxcontent pttt">
                    <table>
                        <tr>
                            <td><input type="radio" name="pttt" value="0" checked> Trả tiền khi nhận hàng </td>
                            <td style="padding-left: 100px;"><input type="radio" name="pttt" value="1"> Chuyển khoản ngân hàng </td>
                            <td style="padding-left: 100px;"><input type="radio" name="pttt" value="2"> Thanh toán online </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="row mb">
                <div class="boxtitle">THÔNG TIN GIỎ HÀNG</div>
                <div class="row boxcontent cart">
                    <table>
                        <tr>
                            <th>Hình</th>
                            <th>Sản phẩm</th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                            <!-- <th>Thao tác</th> -->
                        </tr>
                        <?php
                        $tong = 0;
                        $i = 0;
                        foreach ($_SESSION['mycart'] as $cart) {
                            $hinh = $img_path . $cart[2];
                            $thanhtien = $cart[3] * $cart[4];
                            $tong += $thanhtien;
                            $xoasp = '<a href="index.php?act=xoacart&idcart=' . $i . '"><input type="button" value="Xóa"></a>';
                            echo '                <tr>
                        <td><img src="' . $hinh . '" alt="" height="80px"></td>
                        <td>' . $cart[1] . '</td>
                        <td>' . number_format($cart[3], 3, ',', '.') . '</td>
                        <td>' . $cart[4] . '</td>
                        <td>' . number_format($thanhtien, 3, ',', '.') . '</td>
                        </tr>';
                            $i++;
                        }
                        $formatted_tong = number_format($tong, 3, ',', '.');
                        echo '                <tr>
                        <td colspan="4">Tổng đơn hàng</td>
                        <td>' . $formatted_tong . '</td>
                    </tr>';
                        ?>
                    </table>
                </div>
            </div>

            <div class="row mb bill">
                <input type="submit" value="ĐỒNG Ý ĐẶT HÀNG" name="dongydathang" />
                <a href="index.php?act=xoacart"><input type="button" value="XÓA GIỎ HÀNG"></a>
            </div>
        </form>
    </div>
    <div class="boxphai">
        <?php include "view/boxright.php" ?>
    </div>
</div>