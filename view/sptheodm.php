<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <div class="boxtitle">SẢN PHẨM</div>
            <div class="row boxcontent">
                <?php
                $i = 0;
                foreach ($dssanpham as $sp) {
                    extract($sp);
                    $hinh = $img_path . $HinhAnhSanPham;
                    $linksp="index.php?act=chitietsanpham&idsp=".$ProductID;
                    if ($i == 2 || $i == 5 || $i == 8) {
                        $mr = "";
                    } else {
                        $mr = "mr";
                    }
                    echo '<div class="boxsp ' . $mr . '">
                            <div class="img row"><a href="'.$linksp.'"><img src="'.$hinh.'" alt="" /></a></div>
                            <p>' . $GiaBan . '</p>
                            <a href="'.$linksp.'">' . $TenSanPham . '</a>
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
            </div>
        </div>
    </div>
    <div class="boxphai">
                    <?php
                        include "boxright.php";
                    ?>
                </div>
</div>