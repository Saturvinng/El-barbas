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
    <link rel="stylesheet" href="css/aguas_frescas.css">
    <title>El barbas</title>
</head>
<body>
    <!--Menu del Barbas-->

<header>
    <nav class="nav">
        <ul class="menu">
            <li class="main1"><a >APARTADOS</a></li>
            <li class="main2"><a href="servicios.php">SERVICIOS</a></li>
        </ul>
        <div class="logo"><a href="index.php"><img src="./img/1666882906975.png" alt=""></a></div>
        <ul class="menu2">
            <li class="main3"><a href="quejas.php">QUEJAS</a></li>
            <li class="main4"><a href="contactos.php">CONTACTOS</a></li>
        </ul>
        <ul class="menu3">
            <li class="inicarsesion">
            <?php echo $use;
            $_SESSION['cerra']="2";
            ?>
            </li>
        </ul>
    </nav>
</header>

<!--Cuerpo de la pagina-->
<div class="contenedor1">
<div class="comida">
    <p class="logo_menu">MENU</p>
</br>
</br>
</br>
</br>
    <a href="comidas.php" class="aliment_comida">COMIDAS</a>
</br>
</br>
</br>
</br>
    <a href="" class="aliment">BEBIDAS</a>
    <div class="comidas">
    <ul>
        <li><a href="" class="AguasF">Aguas Frecas</a></li>
        <li><a href="agia.php" class="agua">Agua</a></li>
        <li><a href="jugos.php" class="jugos">Jugos</a></li>
        <li><a href="sodas.php" class="sodas">Sodas</a></li>
    </ul>
</div>
</br>
</br>
</br>
</br>
</div>

<!--Alimentos-->
<!--Aguas Frescas-->
<div class="burgues">
    <div class="camaron">
    </br></br></br></br></br>
        <img src="./img/aguasF.jpeg" alt="" class="camaronimg">
        <div class="btones">
        <div class="carrito">
        <p class="nombrespedidos"><b>Horchata</b></p>
        <button type="button">
            <img src="./img/anadir-a-la-cesta.png" alt="agregar al carrito">
        </button>
        </div>
        <div class="carrito">
        <p class="nombrespedidos"><b>Platano</b></p>
        <button type="button">
            <img src="./img/anadir-a-la-cesta.png" alt="agregar al carrito">
        </button>
        </div>
        <div class="carrito">
        <p class="nombrespedidos"><b>Frutas</b></p>
        <button type="button">
            <img src="./img/anadir-a-la-cesta.png" alt="agregar al carrito">
        </button>
        </div>
        </div>
    </div>
</div>
<script src="./jss/menu.js"></script>
</body>
</html>