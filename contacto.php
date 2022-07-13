<?php
    $pg = "contacto"
?>
<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="contacto" class="d-flex flex-column h-100">
    <header class="container">
    <?php
            include_once("menu.php")
        ?>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 pt-3 pb-5">
                    <h1>Contacto</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6">
                    <p>Te inivito a que te contactes enviándome un mensaje o bien por whatsapp.</p>
                </div>
                <div class="col-12 col-sm-6">
                    <form action="" method="post">
                        <div class="pb-3">
                            <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre"
                                class="form-control shadow">
                        </div>
                        <div class="pb-3">
                            <input type="email" name="txtEmail" id="txtEmail" placeholder="Correo" class="form-control shadow">
                        </div>
                        <div class="pb-3">
                            <input type="tel" name="txtTel" id="txtTel" placeholder="Teléfono/Whatsapp"
                                class="form-control shadow">
                        </div>
                        <div class="pb-3">
                            <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe aquí tu mensaje"
                                class="form-control shadow"></textarea>
                        </div>
                        <div>
                            <button type="submit" id="Enviar" name="btnEnviar" class="btn px-4">ENVIAR</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <footer id="footer-contacto" class="container mt-auto pb-4">
        <div class="whatsapp">
            <a href="https://api.whatsapp.com/send?phone=5493456436884" title="Whatsapp"><i class="fab fa-whatsapp"></i></a>
        </div>
        <div class="row">
            <div class="col-12 col-sm-3">
                <a href="" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                <a href="" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-12 col-sm-3">
                <p>Sponsor <a href="https://dpcsuite.com">DePC Suite</a></p>
            </div>
            <div class="col-12 col-sm-3">
                <a href="mailto:sebapezze@gmail.com">sebapezze@gmail.com</a>
            </div>

        </div>
    </footer>

</body>

</html>