<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Iniciar Sesión</title>
</head>
<body>
    <h1 class="text-center text-uppercase p-5">Iniciar Sesión</h1>

    <form class="text-center container-fluid" action="../includes/Validar.php" method="POST">
        <legend>Completa todos los Campos</legend>
        <label class="form-label mt-3">Nombre de Usuario: <input class="form-control" type="text" name="usuario" placeholder="Nombre de Ejemplo" required></label>
        <br>
        <label class="form-label mt-3">Contraseña: <input class="form-control" type="password" name="contraseña" placeholder="Contraseña de Ejemplo" required></label>
        <br>
        <input class="mt-3 btn btn-lg btn-outline-dark" type="submit" value="Iniciar Sesión">
    </form>
    
</body>
</html>