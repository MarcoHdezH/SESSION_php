<?php
    session_start();
    require '../includes/Conexion.php';
    $usuario=$_REQUEST['usuario'];
    $contraseña=$_REQUEST['contraseña'];

    echo "$usuario<br>";
    echo "$contraseña<br>";

    $BusquedaU = mysqli_query($db,"SELECT * FROM usuario WHERE usuario='$usuario'");
    if($BusquedaU->num_rows===0){
        echo "Usuario y/o Contraseña Invalido";
    }else{
        $BusquedaC=mysqli_query($db,"SELECT * FROM usuario WHERE contraseña='$contraseña'");
        if($BusquedaC->num_rows===0){
            echo "Usuario y/o Contraseña Invalido";
        }else{
            $Result = mysqli_fetch_array(mysqli_query($db,"SELECT * FROM usuario WHERE usuario='$usuario'"));
            $nombre=$Result['nombre'];
            $correo=$Result['correo'];
            $imagen=$Result['imagen'];
            $array = array('Usuario'=>$usuario, 'Contraseña'=>$contraseña,'Nombre'=>$nombre,'Correo'=>$correo,'Imagen'=>$imagen);
            $_SESSION['datos']=$array;
        }
    }

?>