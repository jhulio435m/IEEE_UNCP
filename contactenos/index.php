<?php
$tipo = 5;
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
            <p>Formulario</p>
            <div>
                <a href="">¿Quieres saber más y tienes alguna duda sobre la IEEE UNCP? No dudes e escribirnos</a>
            </div>
        </section>

        <section>
            <p>Google Maps</p>
            <div class="content">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902.160956636593!2d-75.23816884921264!3d-12.032437799688577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x910ebdfa14060b33%3A0xa08d3ae6c78c7aaf!2sUniversidad%20Nacional%20del%20Centro%20del%20Per%C3%BA!5e0!3m2!1ses-419!2spe!4v1710884425670!5m2!1ses-419!2spe"
                    width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
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