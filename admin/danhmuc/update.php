<?php
    if(is_array($dm)) {
        extract($dm);
    }
?>

<h1>Sửa Danh Mục</h1>
<div class="row">
    <div class="row formtitle">
        <h1>SỬA LOẠI HÀNG HÓA</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=updatedm" method="post">
            <div class="row mb20">
                Mã loại : <br />
                <input type="text" name="maloai" disabled />
            </div>

            <div class="row mb20">
                Tên Loại : <br />
                <input type="text" name="tenloai" value="<?php if(isset($TenDanhMuc) && $TenDanhMuc != "") echo $TenDanhMuc; ?>" />
            </div>
            <div class="row mb20">
                Mô tả : <br />
                <textarea name="motadanhmuc" id="" cols="30" rows="10"><?php if(isset($MoTaDanhMuc) && $MoTaDanhMuc != "") echo $MoTaDanhMuc; ?></textarea>
            </div>
            <div class="row mb20">
                <input type="hidden" name="id" value="<?php if(isset($CategoriesID) && $CategoriesID > 0) echo $CategoriesID; ?>">
                <input type="submit" name="capnhap" value="Cập Nhập" />
                <input type="reset" value="NHẬP LẠI" />
                <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH" />
                </a>
            </div>
            <?php
                if(isset($thongbao) && ($thongbao != ""))
                    echo $thongbao;
            ?>
        </form>
    </div>
</div>