<div class="row">
                <div class="row formtitle"><h1>DANH SÁCH LOẠI HÀNG</h1></div>
                <div class="row formcontent">
                    <form action="#" method="post">
                        <div class="row mb20 formdsloai">
                            <table>
                                <tr>
                                    <th></th>
                                    <th>Mã Loại</th>
                                    <th>Tên Loại</th>
                                    <th>Mô tả</th>
                                    <th></th>
                                </tr>
                                <?php
                                    foreach ($dsdanhmuc as $danhmuc) {
                                        extract($danhmuc);
                                        $suadm = "index.php?act=suadm&CategoriesID=".$CategoriesID;
                                        $xoadm = "index.php?act=xoadm&CategoriesID=".$CategoriesID;
                                        echo '<tr>
                                        <td><input type="checkbox"></td>
                                        <td>'.$CategoriesID.'</td>
                                        <td>'.$TenDanhMuc.'</td>
                                        <td>'.$MoTaDanhMuc.'</td>
                                        <td>
                                            <a href="'.$suadm.'"><input type="button" name="" value="Sửa"></a>
                                            <a href="'.$xoadm.'"><input type="button" name="" value="Xóa"></a>
                                        </td>
                                        </tr>';
                                    }
                                ?>
                            </table>
                        </div>
                        <div class="row mb20">
                            <input type="button" value="Chọn tất cả">
                            <input type="button" value="Bỏ chọn tất cả">
                            <input type="button" value="Xóa các mục đã chọn">
                            <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
                        </div>
                    </form>
                </div>
            </div>