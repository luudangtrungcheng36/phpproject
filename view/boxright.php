<div class="row mb">
                        <div class="boxtitle">TÀI KHOẢN</div>
                        <div class="boxcontent formtaikhoan">
                            <?php
                                if(isset($_SESSION['user']) && is_array($_SESSION['user'])) {
                                    extract($_SESSION['user']);
                            ?>
                                <div class="row mb10">
                                    Xin Chào <span style="color:blue"><?=$TenTaiKhoan?></span>
                                </div>
                                <div class="row mb10">
                                    <li>
                                        <a href="index.php?act=capnhaptaikhoan">Cập nhập tài khoản</a>
                                    </li>
                                    <li>
                                        <a href="admin/index.php">Đăng nhập admin</a>
                                    </li>
                                    <li>
                                        <a href="index.php?act=thoat">Thoát</a>
                                    </li>
                                </div>
                            <?php
                                }else{
                            ?>
                            <form action="index.php?act=dangnhap" method="post">
                                <div class="row mb10">
                                    Tên đăng nhập <br />
                                    <input type="text" name="user" />
                                </div>
                                <div class="row mb10">
                                    Mật Khẩu <br />
                                    <input type="password" name="pass" id="" />
                                </div>
                                <div class="row mb10">
                                    <input type="checkbox" name="" /> Ghi nhớ
                                    tài khoản
                                </div>
                                <div class="row mb10">
                                    <input type="submit" value="Đăng nhập" name="dangnhap" />
                                </div>
                                <li>
                                    <a href="#">Quên mật khẩu</a>
                                </li>
                                <li>
                                    <a href="index.php?act=dangky">Đăng ký thành viên</a>
                                </li>
                            </form>

                            <?php }?>
                            
                        </div>
                    </div>
                    <div class="row mb">
                        <div class="boxtitle">DANH MỤC</div>
                        <div class="boxcontent2 menudoc">
                            <ul>
                                <?php
                                    foreach ($dsdanhmuc as $dm) {
                                        extract($dm);
                                        $linkdm = "index.php?act=sanpham&iddm=".$CategoriesID;
                                        echo '<li><a href="'.$linkdm.'">'.$TenDanhMuc.'</a></li>';
                                    }
                                ?>
                                <!-- <li><a href="$">Đồng hồ</a></li>
                                <li><a href="$">Laptop</a></li>
                                <li><a href="$">Điện Thoại</a></li>
                                <li><a href="$">Ba lô</a></li>
                                <li><a href="$">Đồng hồ</a></li>
                                <li><a href="$">Laptop</a></li>
                                <li><a href="$">Điện Thoại</a></li>
                                <li><a href="$">Ba lô</a></li> -->
                            </ul>
                        </div>
                        <div class="boxfooter searbox">
                            <form action="index.php?act=sanpham" method="post" class="row-search">
                                <input type="text" name="keysearch"/>
                                <input type="submit" name="search" value="Tìm" class="search-btn round">
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="boxtitle">SẢN PHẨM HOT</div>
                        <div class="row boxcontent">
                            <div class="row mb10 top10">
                                <img src="view/images/banner/13.-Ca-phe-den-600x600.png" alt="" />
                                <a href="#">Cà phê đen </a>
                            </div>
                            <div class="row mb10 top10">
                                <img src="view/images/banner/tải xuống (1).jpg" alt="" />
                                <a href="#">Trà mật ong gừng</a>
                            </div>
                            <div class="row mb10 top10">
                                <img src="view/images/banner/tải xuống (2).jpg" alt="" />
                                <a href="#">Hot chocolate </a>
                            </div>
                            <div class="row mb10 top10">
                                <img src="view/images/banner/tải xuống.jpg" alt="" />
                                <a href="#">Cà phê bạc xỉu</a>
                            </div>
                        </div>
                    </div>