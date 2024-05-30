<div class="row">
    <div class="row formtitle mb20">
        <h1>DANH SÁCH SẢN PHẨM</h1>
    </div>
    <form action="index.php?act=listsp" method="post">
        <select name="iddm">
            <option value="0" selected>Tất cả</option>
            <?php
            foreach ($dsdanhmuc as $danhmuc) {
                extract($danhmuc);
                echo '<option value="' . $CategoriesID . '">' . $TenDanhMuc . '</option>';
            }
            ?>
        </select>
        <input type="submit" name="listok" value="OK">
    </form>
    <div class="row formcontent">
        <form action="#" method="post">
            <div class="row mb20 formdsloai">
                <table>
                    <tr>
                        <th></th>
                        <th>Mã Loại</th>
                        <th>TÊN SẢN PHẨM</th>
                        <th>HÌNH</th>
                        <th>GIÁ</th>
                        <th>MÔ TẢ</th>
                        <th></th>
                    </tr>
                    <?php
                    foreach ($dssanpham as $sanpham) {
                        extract($sanpham);
                        $suasp = "index.php?act=suasp&ProductID=" . $ProductID;
                        $xoasp = "index.php?act=xoasp&ProductID=" . $ProductID;
                        $hinhpath = "../upload/" . $HinhAnhSanPham;
                        if (isset($hinhpath)) {
                            $hinh = "<img src='" . $hinhpath . "' height='80'";
                        } else {
                            $hinh = "no photo";
                        }
                        echo '<tr>
                                        <td><input type="checkbox"></td>
                                        <td>' . $ProductID . '</td>
                                        <td>' . $TenSanPham . '</td>
                                        <td>' . $hinh . '</td>
                                        <td>' . $GiaBan . '</td>
                                        <td>' . $MoTa . '</td>
                                        <td>
                                            <a href="' . $suasp . '"><input type="button" name="" value="Sửa"></a>
                                            <a href="' . $xoasp . '"><input type="button" name="" value="Xóa"></a>
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
                <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
            </div>
        </form>
    </div>
</div>