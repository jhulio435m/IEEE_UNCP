<?php
$tipo = 4;
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
            <p>Pasos</p>
            <div class="content">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/BOqVGlvNERU?si=O2g5LvN8-q0ABG1v"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                </iframe>
            </div>
        </section>
        <section>
            <p>Datos de contacto</p>
        </section>
    </article>
    <div>
        <?php
        include ("../componentes/Aside.php");
        ?>
    </div>
</div>

<?php

include ("../componentes/Footer.php")
    ?>