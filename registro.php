<?php
session_start();
$entrada=$_SESSION['entrada'];
if($entrada==""){
    $use=$_SESSION['usuario']="<a href='iniciar_sesion.php'>INICIAR SESION</a>";
}
if($entrada="1"){
    $use=$_SESSION['usuario'];
}
if($entrada="2"){
    $use=$_SESSION['usuario'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/registro.css">
    <title>El Barbas</title>
</head>
<body>
        <!--Menu del Barbas-->

<header>
    <nav class="nav">
        <ul class="menu">
            <li class="main1"><a href="apartados.html">APARTADOS</a></li>
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
            <form action="value.php" method="POST" class="input-group">
            <input type="text" class="input-field" placeholder="Nombre" name="Nombre" required>
            </br>
            </br>
            <input type="text" class="input-field" placeholder="Apellido" name="Apellido" required>
            </br>
            </br>
            <input type="text" class="input-field" placeholder="Tel" name="Tel" required>
            </br>
            </br>
            <input type="text" class="input-field" placeholder="Correo" name="Correo" required>
            </br>
            </br>
            <input type="password" class="input-field" placeholder="Contraseña" name="Contrasena" required>
                </br>
                </br>
            <p><input type="submit" class="submit-btn" value="Crear cuenta"/></p>
            </form>
            </div>
        </div>
    </div>
    <!--<script src="./jss/menu.js"></script>-->


</body>
</html>