<div class="row mb">
    <div class="boxtrai mr"></div>
    <div class="row mb">
        <div class="boxtitle">ĐĂNG KÝ TÀI KHOẢN</div>
        <div class="row boxcontent formtaikhoan">
            <form action="index.php?act=dangky" method="post">
                <div class="row mb10">
                    Email
                    <input type="email" name="email">
                </div>
                <div class="row mb10">
                    Tên đăng nhập
                    <input type="text" name="TenTaiKhoan">
                </div>
                <div class="row mb10">
                    Mật khẩu
                    <input type="password" name="password">
                </div>
                <div class="row mb10">
                    <input type="submit" value="Đăng ký" name="dangky">
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