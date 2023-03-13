<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Crear Usuario</title>
</head>

<body>
    <h1 class="text-center text-uppercase p-5">Crear Nuevo Usuario</h1>

    <form class="text-center container-fluid" action="../includes/CrearUsuario.php" method="POST" enctype="multipart/form-data">
        <legend>Completa todos los Campos</legend>
        <label class="form-label mt-3">Nombre de Usuario: <input class="form-control" type="text" name="usuario" placeholder="Nombre de Ejemplo" required></label>
        <br>
        <label class="form-label mt-3">Contraseña: <input class="form-control" type="password" name="contraseña" placeholder="Contraseña de Ejemplo" required></label>
        <br>
        <label class="form-label mt-3">Nombre(s): <input class="form-control" type="text" name="nombre" placeholder="John Connor" required></label>
        <br>
        <label class="form-label mt-3">Nombre de Usuario: <input class="form-control" type="email" name="correo" placeholder="example@hotmail.com" required></label>
        <br>
        <label class="form-label mt-3">Imagen de Usuario: <input class="form-control" type="file" name="imagen" required></label>
        <br>
        <input class="mt-3 btn btn-lg btn-outline-dark" type="submit" value="Registrar Usuario">
    </form>

</body>

</html>