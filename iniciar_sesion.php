<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/iniciar_sesion.css">
    <title>El Barbas</title>
</head>
<body>
        <!--Menu del Barbas-->

<header>
    <nav class="nav">
        <ul class="menu">
            <li class="main1"><a href="apartados.php">APARTADOS</a></li>
            <li class="main2"><a href="">SERVICIOS</a></li>
        </ul>
        <div class="logo"><a href="index.php"><img src="./img/1666882906975.png" alt=""></div>
        <ul class="menu2">
            <li class="main3"><a href="#">QUEJAS</a></li>
            <li class="main4"><a href="#">CONTACTOS</a></li>
        </ul>
    </nav>
</header>

    <div class="container">
        <div class="form-box">
            <div class="button-box">
                
            <p class="box-titu">El Barbas</p>  
            <form action="login.php" class="input-group" method="POST">
            <p class="nombre-usuario">Nombre de usurio </p>
            <input type="text" class="input-field" placeholder="Correo" name="Correo" required>
</br>
            <p class="contrasena">Contraseña</p> 
            <input type="password" class="input-field" placeholder="Contraseña" name="Contrasena" required>
</br>
                </br>
                <button type="sumit" class="submit-btn" name="enviar">Iniciar sesión</button>
            </form>
            </br>
            </br>
            <a href="registro.php" class="registro">Registrarse</a>
            </div>
        </div>
    </div>
    <script src="./jss/menu.js"></script>
</body>
</html>