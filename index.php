<?php

session_start();
$Band=0;

if (isset($_SESSION['datos']['Usuario'])) {
    $nombre = $_SESSION['datos']['Usuario'];
    $Band=1;
} else {
    $nombre = "No ha iniciado Sesión";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title> <?php echo "$nombre" ?> </title>
</head>

<body>
    <?php
    if ($Band===1) {
        echo "<h1 class='p-5 text-center' >Bienvenido $nombre </h1>";
        echo "<a href='./pages/Logout.php'> Cerrar Sesión</a>";
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