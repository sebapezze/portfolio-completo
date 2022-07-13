<?php
    $pg = "inicio"
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <title>Inicio</title>
</head>
<body id="inicio">
    <header class="container">
        <?php
            include_once("menu.php")
        ?>
    </header>
    <main>
        <div class="container text-center">
            <div class="row">
                <div class="col-12 contenedor-cohete">
                    <a href=""><img src="images/cohete.svg" alt="" class="cohete"></a>
                </div>
            </div>
            <div class="row">
            <div class="col-12 col-sm-6 offset-sm-3">
            <div class="pt-5 ">
                <p class="color-blanco bienvenida py-1 px-4"> Bienvenid@ a mi sitio web sobre desarollo de sistemas</p></div>
            </div>
            </div>
            <div class="row">
                <div class="col-12 pt-3 pb-5">
                    <a href="proyectos.html" class="btn shadow">Conoce mis proyectos</a>
                </div>
            </div>
        </div>
    </main>
    <footer id="footer-inicio" class="container mt-auto pb-2">
        <div class="whatsapp">
            <a href="https://api.whatsapp.com/send?phone=5493456436884" title="Whatsapp"><i class="fab fa-whatsapp"></i></a>
        </div>
        <div class="row">
            <div class="col-12 col-sm-3">
                <a href="" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                <a href="" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-12 col-sm-3">
                Sponsor <a href="https://dpcsuite.com">DePC Suite</a>
            </div>
            <div class="col-12 col-sm-3">
                <a href="mailto:sebapezze@gmail.com">sebapezze@gmail.com</a>
            </div>
        </div>
    </footer>

</body>
</html>