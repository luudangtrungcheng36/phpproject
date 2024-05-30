<div class="row mb footer">
<div class="contact-info">
            <div class="zoomable">
                <p>3 Phố Nhổn-Xuân Phương-Bắc Từ Liêm-Hà Nội</p>
                <img src="view/images/banner/address.jpg" alt="Address Image" id="zoomedImage">
            </div>
            <div>
                <!-- <img src="view/images/banner/cuahang.jpg" alt="Working Hours Image"> -->
                <p class="working-hours">Thời gian làm việc: <br>
                    <br><br>Thứ 2: Mở cửa cả ngày.
                    <br><br><br>Thứ 3: Mở cửa cả ngày.
                    <br><br><br>Thứ 4: Mở cửa cả ngày.
                    <br><br><br>Thứ 5: Mở cửa cả ngày.
                    <br><br><br>Thứ 6: Mở cửa cả ngày.
                    <br><br><br>Thứ 7: Mở cửa cả ngày.
                    <br><br><br>CN   : Mở cửa cả ngày.
                </p>
            </div>
</div>
        <p>Thông tin liên hệ: 0981 071 170</p>


</div>
        </div>
        <!-- js cho slideshow -->
        <script>
            let slideIndex = 0;
            showSlides();

            function showSlides() {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) {
                    slideIndex = 1;
                }
                slides[slideIndex - 1].style.display = "block";
                setTimeout(showSlides, 2000); // Change image every 2 seconds
            }
        </script>
    </body>
</html>