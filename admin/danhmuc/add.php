<h1>Thêm Danh Mục</h1>
<div class="row">
    <div class="row formtitle">
        <h1>THÊM MỚI LOẠI HÀNG HÓA</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=adddm" method="post">
            <div class="row mb20">
                Mã loại : <br />
                <input type="text" name="maloai" disabled />
            </div>

            <div class="row mb20">
                Tên Loại : <br />
                <input type="text" name="tenloai" />
            </div>
            <div class="row mb20">
                Mô tả : <br />
                <textarea name="motadanhmuc" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="row mb20">
                <input type="submit" name="themmoi" value="THÊM MỚI" />
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