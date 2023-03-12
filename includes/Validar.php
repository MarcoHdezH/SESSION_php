<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-widdth, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Validar Usuario</title>
</head>
<body>
<?php
    session_start();
    require '../includes/Conexion.php';
    $usuario=$_REQUEST['usuario'];
    $contraseña=$_REQUEST['contraseña'];

    $BusquedaU = mysqli_query($db,"SELECT * FROM usuario WHERE usuario='$usuario'");
    if($BusquedaU->num_rows===0){
        echo "Usuario y/o Contraseña Invalido";
    }else{
        $BusquedaC=mysqli_query($db,"SELECT * FROM usuario WHERE contraseña='$contraseña'");
        if($BusquedaC->num_rows===0){
            echo "<h1 class='text-center p-5'>Fallo a la hora de Iniciar Sesión</h1>";
            echo "<div class='text-center'><a class='btn btn-lg btn-outline-dark' href='../index.php'>Regresar</a></div>";
        }else{
            $Result = mysqli_fetch_array(mysqli_query($db,"SELECT * FROM usuario WHERE usuario='$usuario'"));
            $nombre=$Result['nombre'];
            $correo=$Result['correo'];
            $imagen=$Result['imagen'];
            $array = array('Usuario'=>$usuario, 'Contraseña'=>$contraseña,'Nombre'=>$nombre,'Correo'=>$correo,'Imagen'=>$imagen);
            $_SESSION['datos']=$array;
            echo "<h1 class='text-center p-5'>Iniciaste Sesión Correctamente</h1>";
            echo "<div class='text-center'><a class='btn btn-lg btn-outline-dark' href='../index.php'>Regresar</a></div>";
        }
    }
?>
</body>
</html>