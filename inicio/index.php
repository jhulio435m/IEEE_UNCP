<?php
$tipo = 1;
include ("../componentes/Header.php");
?>

<div class="body">
    <div>
        <?php
        include ("../componentes/Nav.php");
        ?>
    </div>
    <article>
        <section>
            <div class="slider">
                <div class="myslide fade">
                    <img src="../img/1.jpg" style="width: 100%; height: 100%;">
                </div>

                <div class="myslide fade">
                    <img src="../img/2.jpg" style="width: 100%; height: 100%;">
                </div>

                <div class="myslide fade">
                    <img src="../img/3.jpg" style="width: 100%; height: 100%;">
                </div>

                <div class="myslide fade">
                    <img src="../img/4.jpg" style="width: 100%; height: 100%;">
                </div>

                <div class="myslide fade">
                    <img src="../img/5.jpg" style="width: 100%; height: 100%;">
                </div>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

                <div class="dotsbox" style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                    <span class="dot" onclick="currentSlide(4)"></span>
                    <span class="dot" onclick="currentSlide(5)"></span>
                </div>
            </div>
        </section>
        <section>
        <div class="slider">
                <div class="myslide_1 fade">
                    <img src="../img/1.jpg" style="width: 100%; height: 100%;">
                </div>

                <div class="myslide_1 fade">
                    <img src="../img/2.jpg" style="width: 100%; height: 100%;">
                </div>

                <div class="myslide_1 fade">
                    <img src="../img/3.jpg" style="width: 100%; height: 100%;">
                </div>

                <div class="myslide_1 fade">
                    <img src="../img/4.jpg" style="width: 100%; height: 100%;">
                </div>

                <div class="myslide_1 fade">
                    <img src="../img/5.jpg" style="width: 100%; height: 100%;">
                </div>
                <a class="prev" onclick="plusSlides_1(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides_1(1)">&#10095;</a>

                <div class="dotsbox" style="text-align:center">
                    <span class="dot_1" onclick="currentSlide_1(1)"></span>
                    <span class="dot_1" onclick="currentSlide_1(2)"></span>
                    <span class="dot_1" onclick="currentSlide_1(3)"></span>
                    <span class="dot_1" onclick="currentSlide_1(4)"></span>
                    <span class="dot_1" onclick="currentSlide_1(5)"></span>
                </div>
            </div>
        </section>

    </article>
    <div>
        <?php
        include ("../componentes/Aside.php");
        ?>
    </div>
</div>
<script src="../js/slider_1.js"></script>_1
<?php
include ("../componentes/Footer.php")
    ?>

