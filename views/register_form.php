<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario - Gestión de Usuarios</title>
    <link rel="stylesheet" href="../public/assets/css/style.css">
</head>
<body>
    <div class="register-container">
        <h1>Gestión de Usuarios</h1>

        <?php 
        print_r($_POST);
        ?>
        <form action="../views/register_form.php" method="post">
            <div class="form-group">
                <input type="text" name="username" placeholder="Nombre de Usuario" >
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Correo Electrónico" >
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Ingresar Contraseña" >
            </div>
            <div class="form-group">
                <input type="password" name="confirm_password" placeholder="Confirmar Contraseña" >
            </div>
            <div class="form-group">
                <button type="submit" value="Register" name="submit">Registrarse</button>
            </div>
        </form>
        <a href="login_form.php">¿Ya tienes cuenta? Iniciar Sesión</a>
    </div>
</body>
</html>

