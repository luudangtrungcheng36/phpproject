<div class="row mb">
    <div class="boxtrai mr">
        <form action="index.php?act=billconfirm" method="post">

            <?php
            if (isset($bill) && is_array($bill)) {
                extract($bill);
            ?>
                <div class="row mb ">
                    <div class="boxtitle">THÔNG TIN ĐƠN HÀNG</div>
                    <ul class="boxcontent tthoadon">
                        <li><strong>Mã đơn hàng:</strong> <?= isset($OrderID) ? $OrderID : 'N/A' ?></li>
                        <li><strong>Ngày đặt hàng:</strong> <?= isset($NgayDatHang) ? $NgayDatHang : 'N/A' ?></li>
                        <li><strong>Tổng đơn hàng:</strong> <?= isset($TongGiaTriDonHang) ? $TongGiaTriDonHang : 'N/A' ?></li>
                        <li>
                            <strong>Phương thức thanh toán:</strong>
                            <?php
                            if (isset($PTTT)) {
                                switch ($PTTT) {
                                    case 0:
                                        echo 'Trả tiền khi nhận hàng';
                                        break;
                                    case 1:
                                        echo 'Chuyển khoản ngân hàng';
                                        break;
                                    case 2:
                                        echo 'Thanh toán online';
                                        break;
                                    default:
                                        echo 'N/A';
                                }
                            } else {
                                echo 'N/A';
                            }
                            ?>
                        </li>
                    </ul>
                </div>

            <?php
            } else {
                echo "Không có thông tin đơn hàng.";
            }
            ?>

            <div class="row mb">
                <div class="boxtitle">THÔNG TIN ĐẶT HÀNG</div>
                <div class="row boxcontent billform">
                    <table>
                        <tr>
                            <td>Người đặt hàng</td>
                            <td><?= $NguoiDatHang ?></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td><?= $Address ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?= $Email ?></td>
                        </tr>
                        <tr>
                            <td>Số điện thoại</td>
                            <td><?= $PhoneNumber ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </form>

        <div class="row mb">
            <div class="boxtitle">THÔNG TIN GIỎ HÀNG</div>
            <div class="row boxcontent cart">
                <table>
                    <!-- <tr>
                    <th>Hình</th>
                    <th>Sản phẩm</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                </tr> -->
                    <?php
                    bill_chi_tiet($billchitiet);
                    ?>
                </table>
            </div>
        </div>
    </div>
    <div class="boxphai">
        <?php include "view/boxright.php" ?>
    </div>
</div>