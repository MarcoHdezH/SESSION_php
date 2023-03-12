<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
</head>
<body>
    <h1>Iniciar Sesión</h1>
    <hr>

    <form action="../includes/Validar.php" method="POST">
        <legend>Completa todos los Campos</legend>
        <br><br>
        <label>Nombre de Usuario:</label>
        <input type="text" name="usuario" placeholder="Nombre de Ejemplo" required>
        
        <br>
        <br>

        <label>Contraseña:</label>
        <input type="password" name="contraseña" placeholder="Contraseña de Ejemplo" required>
        <br><br>

        <input type="submit" value="Iniciar Sesión">

    </form>
    
</body>
</html>