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
    <link rel="stylesheet" href="css/comidas.css">
    <title>El barbas</title>
</head>
<body>
    <!--Menu del Barbas-->

<header>
    <nav class="nav">
        <ul class="menu">
            <li class="main1"><a>APARTADOS</a></li>
            <li class="main2"><a href="servicios.php">SERVICIOS</a></li>
        </ul>
        <div class="logo"><a href="index.php"><img src="./img/1666882906975.png" alt=""></a></div>
        <ul class="menu2">
            <li class="main3"><a href="quejas.php">QUEJAS</a></li>
            <li class="main4"><a href="contactos.php">CONTACTOS</a></li>
        </ul>
        <ul class="menu3">
            <li class="inicarsesion">
            <?php echo $use;?>
            </li>
        </ul>
    </nav>
</header>

<!--Cuerpo de la pagina-->
<div class="comida">
    <p class="logo_menu">MENU</p>
</br>
</br>
</br>
</br>
    <a class="aliment">COMIDAS</a>
</br>
</br>
</br>
</br>
    <a class="aliment_comida">BEBIDAS</a>
    <div class="comidas">
    <ul>
        <li><a href="agias_frescas.php" class="Hamburguesa">Aguas Frecas</a></li>
        <li><a href="agia.php" class="tortas">Agua</a></li>
        <li><a href="jugos.php" class="tacos">Jugos</a></li>
        <li><a href="sodas.php" class="hot_dogs">Sodas</a></li>
    </ul>
</div>
</br>
</br>
</br>
</br>
</div>
<script src="./jss/menu.js"></script>
</body>
</html>