<?php
require './Conexion.php';
$usuario = $_REQUEST['usuario'];
$nombre = $_REQUEST['nombre'];
$contraseña = $_REQUEST['contraseña'];
$correo = $_REQUEST['correo'];
$imagen = $_FILES['imagen']['name'];
$Band=0;

$consulta = mysqli_query($db, "SELECT * FROM usuario WHERE usuario='$usuario'");

if($consulta->num_rows==0){
    mysqli_query($db, "INSERT INTO usuario (usuario,contraseña,nombre,correo,imagen) VALUES ('$usuario','$contraseña','$nombre','$correo','$imagen') ");
    $Band=1;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Crear Nuevo Usuario</title>
</head>
<body>
    <?php
    if($Band==0){
        echo "<h1 class='text-center p-5'> Error al Crear Nuevo Usuario</h1>
              <div class='text-center p-3'>
                <a href='../pages/Create.php' class='btn btn-outline-dark btn-lg'>Regresar</a>
              </div>";

    }else{
        echo "<h1 class='text-center p-5'> Usuario Creado con Exito</h1>
              <div class='text-center p-3'>
                <a href='../pages/Login.php' class='btn btn-outline-dark btn-lg'>Iniciar Sesión</a>
              </div>";
    }

    ?>
</body>
</html>