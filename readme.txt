!README

#NO TOCAR LA CARPETA COMPONENTES NI SU CONTENIDO


#NO TOCAR EL ARCHIVO de la carpeta css "estilo.css"

lo demás se puede modificar

Para poder agregar contenido dentro de la pagina se debe de crear una carpeta con el nombre de la pagina y dentro de esta un archivo llamado "index.php"
dentro de esa carpeta agregas esto

///////////////////////////////////////////

<?php
    include("../componentes/Header.php");
?>

<div class="body">
    <div>
    <?php
        include("../componentes/Nav.php");
    ?>
    </div>
    <article>
        escribe cualquier wbda aqui
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