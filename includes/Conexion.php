<?php

$db = mysqli_connect('localhost', 'root', 'root', 'usuarios');
if (!$db) {
    echo "Error en la conexion";
    exit;
}

?>