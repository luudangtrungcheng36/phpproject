
<div class="row mb">
                <div class="boxtrai mr">
                    <div class="row">
                        <div class="banner mb">
                            <!-- Slideshow container -->
                            <div class="slideshow-container">
                                <!-- Full-width images with number and caption text -->
                                <div class="mySlides fade">
                                    <div class="numbertext">1 / 3</div>
                                    <img
                                        src="view/images/banner/banner1.webp"
                                        style="width: 100%"
                                    />
                                    <div class="text">...</div>
                                </div>

                                <div class="mySlides fade">
                                    <div class="numbertext">2 / 3</div>
                                    <img
                                        src="view/images/banner/banner2.webp"
                                        style="width: 100%"
                                    />
                                    <div class="text">...</div>
                                </div>

                                <div class="mySlides fade">
                                    <div class="numbertext">3 / 3</div>
                                    <img
                                        src="view/images/banner/banner3.webp"
                                        style="width: 100%"
                                    />
                                    <div class="text">...</div>
                                </div>

                                <!-- Next and previous buttons -->
                                <a class="prev" onclick="plusSlides(-1)"
                                    >&#10094;</a
                                >
                                <a class="next" onclick="plusSlides(1)"
                                    >&#10095;</a
                                >
                            </div>
                            <br />

                            <!-- The dots/circles -->
                            <div style="text-align: center">
                                <span
                                    class="dot"
                                    onclick="currentSlide(1)"
                                ></span>
                                <span
                                    class="dot"
                                    onclick="currentSlide(2)"
                                ></span>
                                <span
                                    class="dot"
                                    onclick="currentSlide(3)"
                                ></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                            $i = 0;
                            foreach ($spnew as $sp) {
                                extract($sp);
                                $hinh = $img_path.$HinhAnhSanPham;
                                $linksp="index.php?act=chitietsanpham&idsp=".$ProductID;
                                if($i == 2 || $i==5 || $i==8) {
                                    $mr = "";
                                }
                                else {
                                    $mr = "mr";
                                }
                                echo '<div class="boxsp '.$mr.'">
                                    <div class="img row"><a href="'.$linksp.'"><img src="'.$hinh.'" alt="" /></a></div>
                                    <p>'.$GiaBan.' đ</p>
                                    <a href="'.$linksp.'">'.$TenSanPham.'</a>
                                    <div class="row btnaddtocart">
                                        <form action="index.php?act=addtocart" method="post">
                                            <input type="hidden" name="id" value="'.$ProductID.'">
                                            <input type="hidden" name="name" value="'.$TenSanPham.'">
                                            <input type="hidden" name="img" value="'.$HinhAnhSanPham.'">
                                            <input type="hidden" name="price" value="'.$GiaBan.'">
                                            <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                                        </form>
                                        </div>
                                    </div>';
                                $i++;
                            }
                        ?>

                       <!-- <div class="boxsp mr">
                            <div class="img row">
                                <img src="view/images/products/1001.jpg" alt="" />
                            </div>
                            <p>$30</p>
                            <a href="#">Đồng hồ</a>
                        </div>
                        
                        <div class="boxsp ">
                            <div class="img row">
                                <img src="view/images/products/1001.jpg" alt="" />
                            </div>
                            <p>$30</p>
                            <a href="#">Đồng hồ</a>
                        </div>
                        <div class="boxsp">
                            <div class="img row">
                                <img src="view/images/products/1001.jpg" alt="" />
                            </div>
                            <p>$30</p>
                            <a href="#">Đồng hồ</a>
                        </div>
                    
                    <div class="boxsp mr">
                        <div class="img row">
                            <img src="view/images/products/1001.jpg" alt="" />
                        </div>
                        <p>$30</p>
                        <a href="#">Đồng hồ</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="img row">
                            <img src="view/images/products/1001.jpg" alt="" />
                        </div>
                        <p>$30</p>
                        <a href="#">Đồng hồ</a>
                    </div>
                    <div class="boxsp">
                        <div class="img row">
                            <img src="view/images/products/1001.jpg" alt="" />
                        </div>
                        <p>$30</p>
                        <a href="#">Đồng hồ</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="img row">
                            <img src="view/images/products/1001.jpg" alt="" />
                        </div>
                        <p>$30</p>
                        <a href="#">Đồng hồ</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="img row">
                            <img src="view/images/products/1001.jpg" alt="" />
                        </div>
                        <p>$30</p>
                        <a href="#">Đồng hồ</a>
                    </div>
                    <div class="boxsp">
                        <div class="img row">
                            <img src="view/images/products/1001.jpg" alt="" />
                        </div>
                        <p>$30</p>
                        <a href="#">Đồng hồ</a>
                    </div>  -->
                    </div>
                </div>

                <div class="boxphai">
                    <?php
                        include "boxright.php";
                    ?>
                </div>