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
    <title> <?php echo "$nombre" ?> </title>
</head>

<body>
    <?php
    if ($Band===1) {
        echo "<h1>Bienvenido $nombre </h1>";
        echo "<a href='./pages/Logout.php'> Cerrar Sesión</a>";
    } else {
        echo "<h1>No ha iniciado sesion xd </h1>";
        echo "<a href='./pages/Login.php'>Iniciar Sesión</a><br><br>";
        echo "<a href='./pages/Create.php'>Crear Usuario</a>";
    }
    ?>

</body>

</html>