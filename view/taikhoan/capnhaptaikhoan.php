<div class="row mb">
    <div class="boxtrai mr"></div>
    <div class="row mb">
        <div class="boxtitle">CẬP NHẬP TÀI KHOẢN</div>
        <div class="row boxcontent formtaikhoan">
            <?php
                if(isset($_SESSION['user']) && (is_array($_SESSION['user']))){
                    extract($_SESSION['user']);
                }
            ?>
            <form action="index.php?act=capnhaptaikhoan" method="post">
                <div class="row mb10">
                    Email
                    <input type="email" name="email" value="<?=$Email?>">
                </div>
                <div class="row mb10">
                    Tên đăng nhập
                    <input type="text" name="TenTaiKhoan" value="<?=$TenTaiKhoan?>">
                </div>
                <div class="row mb10">
                    Mật khẩu
                    <input type="password" name="password" value="<?=$Password?>">
                </div>
                <div class="row mb10">
                    Địa chỉ
                    <input type="text" name="address" value="<?=$Address?>">
                </div>
                <div class="row mb10">
                    Số điện thoại
                    <input type="text" name="sodienthoai" value="<?=$PhoneNumber?>">
                </div>
                <div class="row mb10">
                    <input type="hidden" name="id" value="<?=$AccountID?>"/>
                    <input type="submit" value="Cập nhập" name="capnhap"/>
                    <input type="reset" value="Nhập lại">
                </div>
            </form>
            <h2 class="thongbao">
                <?php
                    if(isset($thongbao) && $thongbao!=""){
                        echo $thongbao;
                    }
                ?>
            </h2>
        </div>
    </div>
</div>