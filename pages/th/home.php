<body>

    <?php
    include "./component/th/navbar.php";
    ?>

    <div class="bc">
        <div class="slideshow-container">
            <div class="mySlides">
                <img src="../public/images/about-img2.jpg" alt="Image 1" class="imgr">
            </div>

            <div class="mySlides">
                <img src="../public/images/about-img3.jpg" alt="Image 2" class="imgr">
            </div>

            <!-- ปุ่ม "ก่อนหน้า" และ "ถัดไป" -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
    </div>
    <script src="../app.js"></script>
    <script>
        let slideIndex = 1;

        function showSlides(n) {
            let slides = document.getElementsByClassName("mySlides");
            if (n > slides.length) {
                slideIndex = 1;
            }
            if (n < 1) {
                slideIndex = slides.length;
            }
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[slideIndex - 1].style.display = "block";
        }

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        showSlides(slideIndex);
    </script>

</body>

</html>