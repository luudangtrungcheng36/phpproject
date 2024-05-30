<div class="row mb">
    <div class="boxtrai mr">
        <?php
            extract($onesp);

        ?>
        <div class="boxtitle"><?=$TenSanPham?></div>
        <div class="row boxcontent mb">
            <?php
                $img = $img_path . $HinhAnhSanPham;
                echo '<div class="row mb spct"><img src="'.$img.'" alt="">
                <p class="spct_gia">'.$GiaBan.' đ</p>
                <p class="mota">Mô tả sản phẩm : </p>
                <p>'.$MoTa.'</p>
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
            ?>
        </div>
        <div class="row">
            <div class="boxtitle">SẢN PHẨM CÙNG LOẠI</div>
            <div class="row boxcontent">
                <?php
                    foreach ($listspcungloai as $spcungloai) {
                        extract($spcungloai);
                        $img = $img_path . $HinhAnhSanPham;
                        $linksp="index.php?act=chitietsanpham&idsp=".$ProductID;
                        echo '<div class="spcungloai">
                        <a href="'.$linksp.'"><img src="'.$img.'" alt=""></a>
                        <p class="giaban">'.$GiaBan.' đ</p>
                        <p>'.$TenSanPham.'</p>
                        </div>';
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