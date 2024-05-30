<?php
if (is_array($sp)) {
    extract($sp);
}
$hinhpath = "../upload/" . $HinhAnhSanPham;
if (isset($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height='80'";
} else {
    $hinh = "no photo";
}
?>

<h1>Sửa Danh Mục</h1>
<div class="row">
    <div class="row formtitle">
        <h1>SỬA SẢN PHẨM</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="row mb20">
            <select name="iddm">
                    <option value="0" selected>Tất cả</option>
                    <?php
                    foreach ($dsdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        if($CategoryID == $CategoriesID) echo '<option value="' . $CategoriesID . '" selected >' . $TenDanhMuc . '</option>';
                        else echo '<option value="' . $CategoriesID . '">' . $TenDanhMuc . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="row mb20">
                Tên sản phẩm : <br />
                <input type="text" name="tensp" value="<?=$sp['TenSanPham'] ?>" />
            </div>
            <div class="row mb20">
                Giá : <br />
                <input type="text" name="giasp" value="<?= $GiaBan ?>" />
            </div>
            <div class="row mb20">
                Hình : <br />
                <input type="file" name="hinh">
                <?= $hinh ?>
            </div>
            <div class="row mb20">
                Mô tả : <br />
                <textarea name="mota" cols="30" rows="10"><?= $MoTa ?></textarea>
            </div>
            <div class="row mb20">
                <input type="hidden" name="id" value="<?= $ProductID ?>">
                <input type="submit" name="capnhap" value="Cập Nhập" />
                <input type="reset" value="NHẬP LẠI" />
                <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH" />
                </a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != ""))
                echo $thongbao;
            ?>
        </form>
    </div>
</div>