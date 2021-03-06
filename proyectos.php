<?php
    $pg = "proyectos"
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
    <title>Proyectos</title>
</head>

<body id="proyectos">
    <header class="container">
        <?php
            include_once("menu.php")
        ?>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 pt-3 pb-5">
                    <h1>Proyectos</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 pt-1 pb-3">
                    <p><span class="letra-pequeña"> Los siguientes son algunos de los trabajos que he realizado:</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-4 ">
                    <div class="p-1">
                        <div class="abmclientes">
                            <div>
                                <img class="fotos-proyectos " src="images/abmclientes.png" alt="">
                            </div>
                            <div>
                                <h2 class="py-3 m-0 color-blanco color-gradiente">ABM CLIENTES</h2>
                            </div>
                            <div class="texto-proyectos pt-3 px-2">
                                <p>Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP,
                                    Bootstrap y Json.</p>
                            </div>
                            <div class="row pb-5">
                                <div class="col-6 boton-tipo-1-pad">
                                <a href="" class="boton-tipo-1"> Ver online</a>
                                </div>
                                <div class="col-6">
                                    <a href="" class="boton-tipo-2">Código fuente</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="p-1 pb-3">
                        <div class="abmclientes">
                            <div>
                                <img class="fotos-proyectos" src="images/abmventas.png" alt="">
                            </div>
                            <div>
                                <h2 class="py-3 m-0 color-blanco color-gradiente">SISTEMA DE GESTIÓN DE VENTAS</h2>
                            </div>
                            <div class="texto-proyectos pt-3 px-2">
                                <p>Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC, Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
                            </div>
                            <div class="row pb-5">
                                <div class="col-6 boton-tipo-1-pad">
                                <a href="" class="boton-tipo-1"> Ver online</a>
                                </div>
                                <div class="col-6">
                                    <a href="" class="boton-tipo-2">Código fuente</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="p-1">
                        <div class="abmclientes">
                            <div>
                                <img class="fotos-proyectos" src="images/proyecto-integrador.png" alt="">
                            </div>
                            <div>
                                <h2 class="py-3 m-0 color-blanco color-gradiente">PROYECTO INTEGRADOR</h2>
                            </div>
                            <div class="texto-proyectos pt-3 px-2">
                                <p>Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS, Mercadopago con panel administrador, gestor de usuarios, módulo de permisos y funcionalidades a fines.
                                </p>
                            </div>
                            <div class="row pb-5">
                                <div class="col-6 boton-tipo-1-pad">
                                <a href="" class="boton-tipo-1"> Ver online</a>
                                </div>
                                <div class="col-6">
                                    <a href="" class="boton-tipo-2">Código fuente</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="container mt-auto ">
        <div class="whatsapp">
            <a href="https://api.whatsapp.com/send?phone=5493456436884" title="Whatsapp"><i class="fab fa-whatsapp"></i></a>
        </div>
        <div class="row footer-proyectos">
            <div class="col-12 col-sm-3">
                <a href="" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                <a href="" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-12 col-sm-3">
               <p>Sponsor <a href="https://depcsuite.com/?v=d72a48a8ebd2">DePC Suite</a></p>
            </div>
            <div class="col-12 col-sm-3">
                <a href="mailto:sebapezze@gmail.com">sebapezze@gmail.com</a>
            </div>
        </div>
    </footer>
</body>

</html>