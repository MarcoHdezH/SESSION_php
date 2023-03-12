<?php

session_start();
$Band=0;

if (isset($_SESSION['datos']['Usuario'])) {
    $usuario = $_SESSION['datos']['Usuario'];
    $nombre = $_SESSION['datos']['Nombre'];
    $correo = $_SESSION['datos']['Correo'];
    $imagen = $_SESSION['datos']['Imagen'];
    $Band=1;
} else {
    $usuario = "No ha iniciado Sesión";
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title> <?php echo "$usuario" ?> </title>
</head>

<body>
    <?php
    if ($Band===1) {
        echo "<h1 class='p-5 text-center' >Sesion Activa: $usuario </h1>";
        echo "<div class='text-center p-5'>
                    <img class='mb-5' src='./images/$imagen'>
                    <h2 class='text-center'>Nombre: $nombre</h2>
                    <h4 class='text-center'>Correo Electronico: $correo</h4>
              </div>";
        echo "<div class='text-center'><a class='btn btn-outline-dark btn-lg' href='./pages/Logout.php'> Cerrar Sesión</a></div>";
    } else {
        echo "<h1 class='p-5 text-center'>No hay Ninguna Sesión Activa</h1>";
        echo "<div class='container-fluid p-5 text-center'>
                <div class='row p-5'>
                    <div class='col-lg-6 text-center'>
                        <a class='btn btn-lg btn-outline-dark' href='./pages/Login.php'>Iniciar Sesión</a>
                    </div>
                    
                    <div class='col-lg-6 text-center'>
                        <a class='btn btn-lg btn-outline-dark' href='./pages/Create.php'>Crear Usuario</a>
                    </div>
                </div>
              </div>";
    }
    ?>
</body>

</html>