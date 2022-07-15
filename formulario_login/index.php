<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if($_POST){
    $usuario = $_POST["txtUsuario"];
    $clave = $_POST["txtClave"];
    
    if($usuario == "admin" && $clave == "123456"){
        header("location: http://localhost/portfolio/formulario_login/acceso-confirmado.php");
    } else{
        $msg = "<div class='alert alert-danger' role='alert'>
        Usuario o clave inconrrecto!
        </div>";
    }
    
    
    /*
    echo $usuario == "admin" && $clave == "123456" ? header('location: http://localhost/portfolio/formulario_login/acceso-confirmado.php') : ($usuario == "" && $clave ="" ? $msg = "<div class='alert alert-danger' role='alert'>Solo válido para usuarios registrados!</div>" : 
    $msg2 = "<div class='alert alert-danger' role='alert'>Usuario o clave incorrecto!</div>");
    */
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


    <title>Login</title>
</head>
<body>
    <header>

    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-3">    
                <h1>Formulario</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <form action="" method="post">
                    <div class="py-3">
                        <label for="txtUsuario">Usuario: </label>
                        <input class="form-control" type="text" name="txtUsuario" id="txtUsuario">
                    </div>
                    <div class="py-3">
                        <label for="txtClave">Clave: </label>
                        <input class="form-control" type="password" name="txtClave" id="txtClave">
                    </div>
                    <div class="py-3">
                        <button class="btn btn-primary" type="submit">Ingresar</button>
                    </div>
                    <div> 
                        <?php
                            if($_POST){
                                $usuario = $_POST["txtUsuario"];
                                $clave = $_POST["txtClave"];
                                
                                /*if($usuario == "admin" && $clave == "123456"){
                                    header("location: http://localhost/portfolio/formulario_login/acceso-confirmado.php");
                                } else{
                                    
                                    echo $msg = "<div class='alert alert-danger' role='alert'>
                                    Usuario o clave inconrrecto!
                                    </div>";
                                }*/    
                                
                                echo $usuario == "admin" && $clave == "123456" ? header('location: http://localhost/portfolio/formulario_login/acceso-confirmado.php') : ($usuario == "" && $clave == "" ? $msg="<div class='alert alert-danger' role='alert'>Solo válido para usuarios registrados!</div>" : $msg="<div class='alert alert-danger' role='alert'>Usuario o clave incorrecto!</div>");
                            }   
                        ?>
                    </div>
                </form>
            </div>
        </div>   
    </main>
</body>
</html>