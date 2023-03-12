<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Cerrar Sesión</title>
</head>
<body>
    <?php 
    session_start();
    session_destroy();
    ?>
    <div class="text-center p-5">
        <h1 class="mb-5">Cerresta sesión de forma Correcta</h1>
        <a class="btn btn-outline-dark" href="../index.php">Regresar al Menu Principal</a>
    </div>
    
</body>
</html>