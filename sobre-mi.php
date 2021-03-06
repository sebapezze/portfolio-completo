<?php
    $pg = "sobre-mi"
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
    <title>Sobre mí</title>
</head>
<body id="sobre-mi">
    <header class="container">
    <?php
            include_once("menu.php")
        ?>
    </header>
    <main>
        <div class="container mb-4">
            <div class="row pt-5">
                <div class="col-12 col-sm-5">
                    <h1>Sobre mí</h1>
                    <p class="pt-3">Apasionado por la tecnología y gestión de proyectos. Soy estudiante de programación Full Stack y de la carrera Ingeniería Química.  </p>
                    <a href="contacto.php"> <button class="boton-tipo-1">Enviar mensaje</button></a>
                </div>
                <img class="col-12 col-sm-3 fotomia offset-sm-2 mt-3" src="images/foto-sobre-mi.png" alt="" srcset="">
            </div>
        </div>
        <section id="stack-tecno">
            <div class="container">
                <div class="row">
                    <h2 class="color-blanco py-5 m-0">Stack tecnológico</h2>
                    <div class="col-6 col-sm-2 tecnologias-carta">
                        <div class="tecnologias">
                            <h3>Javascript</h3>
                            <img src="images/javascript.jpeg" alt="">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2 tecnologias-carta">
                        <div class="tecnologias">
                            <h3>PHP</h3>
                            <img class="img-fluid" src="images/php.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2 tecnologias-carta">
                        <div class="tecnologias">
                            <h3>HTML5</h3>
                            <img src="images/html5.png" alt="">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2 tecnologias-carta">
                        <div class="tecnologias">
                            <h3>React.js</h3>
                            <img src="images/react.js" alt="">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2 tecnologias-carta">
                        <div class="tecnologias">
                            <h3>JQuery</h3>
                            <img src="images/jquery.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2 tecnologias-carta">
                        <div class="tecnologias">
                            <h3>Boostrap</h3>
                            <img src="images/boostrap.png" alt="">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2 tecnologias-carta">
                        <div class="tecnologias">
                            <h3>Laravel</h3>
                            <img class="imagen-rectangular-1" src="images/laravel.png" alt="">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2 tecnologias-carta">
                        <div class="tecnologias">
                            <h3>MySQL</h3>
                            <img src="images/mysql.png" alt="">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2 tecnologias-carta">
                        <div class="tecnologias">
                            <h3>CSS</h3>
                            <img src="images/css.png" alt="">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2 tecnologias-carta">
                        <div class="tecnologias">
                            <h3>Git</h3>
                            <img src="images/git.png" alt="">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2 tecnologias-carta">
                        <div class="tecnologias ">
                            <h3>Apache</h3>
                            <img class="imagen-rectangular-2" src="images/apache.png" alt="">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2 tecnologias-carta">
                        <div class="tecnologias">
                            <h3>Mercadopago</h3>
                            <img src="images/mercadopago.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="experiencia" class="my-3 container">
            <div class="row">
                <h2 class="my-4"><i class="fa-solid fa-briefcase"></i> Experiencia laboral</h2> 
                <div class="shadow br-5">
                    <div class="row py-3">
                        <div class="col-2 cruz baw"><i class="fa-solid fa-xmark"></i></div>
                        <div class="col-10">Sin experiencia laboral</div>
                    </div> 
                </div>
            </div>
        </section>
        <section id="formacion" class="container my-3">
            <div class="row">
               <h2 class="my-4"><i class="fa-solid fa-graduation-cap"></i> Formación académica</h2>
               <div class="shadow br-5">
                    <div class="row">
                        <div class="col-12 col-sm-6 my-3">
                            <div class="row">
                                <div class="col-2 py-3">
                                    <img class="baw" src="images/marista.png" alt="">
                                </div>
                                <div class="col-10">
                                    <h3>Bachiller en economía y administración</h3>
                                    <h4>Instituto "Marista" D-87</h4>
                                    <h5>2016-2021</h5>
                                    <a href="http://instmarista.edu.ar">http://instmarista.edu.ar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6  my-3">
                            <div class="row">
                                <div class="col-2 py-3">
                                    <img class="baw" src="images/unl.png" alt="">
                                </div>
                                <div class="col-10">
                                    <h3>Ingeniería Química</h3>
                                    <h4>Universidad Nacional del Litoral</h4>
                                    <h5>En progreso - Iniciado en 2022</h5>
                                    <p>Materias aprobadas 3 de 27, 11.11%</p>
                                    <a href="https://www.unl.edu.ar/">https://www.unl.edu.ar/</a>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </section>
        <section id="desarrollo-profesional" class="container my-3">
            <div class="row">
               <h2 class="my-4"><i class="fa-solid fa-graduation-cap"></i> Cursos de desarrollo profesional</h2> 
                <div class="shadow br-5">
                    <div class="row py-3">
                        <div class="col-12 col-sm-6">
                            <div class="row my-3">
                                <div class="col-2 my-4">
                                    <img class="baw" src="images/logo-depcsuite.svg" alt="">
                                </div>
                                <div class="col-10">
                                    <h3>Curso de programación Web Full Stack</h2> 
                                    <h4>DePC Suite</h4>
                                    <h5>En progreso - Iniciado en 2022</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="row my-3">
                                <div class="col-2 my-3">
                                    <img class="baw" src="images/wings.jpg" alt="">
                                </div>
                                <div class="col-10">
                                    <h3>English Intermediate B2+</h3>
                                    <h4>Instituto Privado de Lengua Inglesa Wings</h4>
                                    <h5>Expedición: dic 2019</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="row my-3">
                                <div class="col-2 my-3">
                                    <img class="baw" src="images/dante.png" alt="">
                                </div>
                                <div class="col-10">
                                    <h3>Curso intensivo de italiano</h3>
                                    <h4>Asociación Dante Alighieri Chajarí</h4>
                                    <h5>Expedición: dic 2019</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="idiomas-hobbies" class="mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6 my-5">
                        <div class="px-3">
                            <div class="row idiomas-hobbies-fondo shadow">
                                <div class="col-4 idiomas-hobbies-logos">
                                    <p><i class="fa-solid fa-message"></i></p>
                                </div>
                                <div class="col-8 p-5 altura-cartas">
                                    <h2>IDIOMAS</h2>
                                    <ul class="p-0">
                                        <li>ESPAÑOL - Nativo</li>
                                        <li>INGLÉS - Intermediate B2</li>
                                        <li>ITALIANO - Intermedio B1</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 my-5">
                        <div class="px-3">
                            <div class="row idiomas-hobbies-fondo shadow">
                                <div class="col-4 idiomas-hobbies-logos">
                                    <p><i class="fa-solid fa-star"></i></p>
                                </div>
                                <div class="col-8 p-5 altura-cartas">
                                    <h2>HOBBIES</h2>
                                    <ul class="p-0">
                                        <li>Leer</li>
                                        <li>Gimnasio</li>
                                        <li>Maratonear series</li> 
                                    </ul> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <footer class="container mt-auto pb-4">
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