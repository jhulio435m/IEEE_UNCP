<?php
    $tipo=3;
    include("../componentes/Header.php");
?>

<div class="body">
    <div>
        <?php
            include("../componentes/Nav.php");
        ?>
    </div>
    <article>
        <section>
            <p>Capitulos</p>
            <div class="cap">
                <a class="pes" href="PES.html"><img src="../img/ieee-pes-logo.png" alt="pes_logo"></a>
                <a class="cs" href="CS.html"><img src="../img/logo-ieee-ow0517iorh1skucqobpbnzrprmk4sc0970qwphd4ss.png" alt="cs_logo"></a>
                <a class="ras" href="RAS.html"><img src="../img/RAS.png" alt="ras_logo"></a>
            </div>
        </section>
        <section>
            <p>Grupos de Afinidad</p>
            <div class="grupos">
                <a class="wie" href="WIe.html"><img src="../img/WIE-e1580744264209.png" alt="wie_logo"></a>
            </div>
        </section>
    </article>
    <div>
        <?php
            include("../componentes/Aside.php");
        ?>
    </div>
</div>

<?php
    
    include("../componentes/Footer.php")
?>
