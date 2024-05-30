<h1>Thêm Sản Phẩm</h1>
<div class="row">
    <div class="row formtitle">
        <h1>THÊM MỚI SẢN PHẨM</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
            <div class="row mb20">
                Danh mục : <br />
                <select name="iddm">
                    <?php 
                        foreach ($dsdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            echo '<option value="'.$CategoriesID.'">'.$TenDanhMuc.'</option>';
                        }
                    ?>
                </select>
            </div>
            <div class="row mb20">
                Tên sản phẩm  : <br />
                <input type="text" name="tensp" />
            </div>
            <div class="row mb20">
                Giá : <br />
                <input type="text" name="giasp" />
            </div>
            <div class="row mb20">
                Hình : <br />
                <input type="file" name="hinh" >
            </div>
            <div class="row mb20">
                Mô tả : <br />
                <textarea name="mota" cols="30" rows="10"></textarea>
            </div>

            <div class="row mb20">
                <input type="submit" name="themmoi" value="THÊM MỚI" />
                <input type="reset" value="NHẬP LẠI" />
                <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH" />
                </a>
            </div>
            <?php
                if(isset($thongbao) && ($thongbao != ""))
                    echo $thongbao;
            ?>
        </form>
    </div>
</div>