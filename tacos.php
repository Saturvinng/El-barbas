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
    <link rel="stylesheet" href="css/tacos.css">
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
            <?php echo $use;?>
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
    <a class="aliment_comida">COMIDAS</a>
</br>
</br>
<div class="comidas">
    <ul>
        <li><a href="hamburguesa.php" class="Hamburguesa">Hamburguesa</a></li>
        <li><a href="Tortas.php" class="tortas">Tortas</a></li>
        <li><a href="" class="tacos">Tacos</a></li>
        <li><a href="hot.php" class="hot_dogs">Hot Dogs</a></li>
        <li><a href="Bonneles.php" class="bonneles">Bonneles</a></li>
        <li><a href="Papas.php" class="papas_fritas">Papas Fritas</a></li>
        <li><a href="doritos.php" class="doritos">Doritos Preparados</a></li>
        <li><a href="quesadillas.php" class="quesadillas">Quesadillas</a></li>
        <li><a href="otros.php" class="otros">Otros</a></li>
    </ul>
</div>
</br>
</br>
    <a href="bebidas.php" class="aliment">BEBIDAS</a>
</br>
</br>
</br>
</br>
</div>

<!--Alimentos-->
<!--De buche-->
<div class="burgues">
    <div class="camaron">
    </br></br></br></br></br>
        <img src="./img/buche.jpeg" alt="" class="camaronimg">
        <p class="nombrespedidos"><b>De buche</b></p>
        <div class="carrito">
        <button type="button">
            <img src="./img/anadir-a-la-cesta.png" alt="agregar al carrito">
        </button>
        </div>
    </div>
</div>
<!--Carne asada-->
<div class="burgues">
    <div class="camaron">
    </br></br></br></br></br>
        <img src="./img/carne asada.jpeg" alt="" class="camaronimg">
        <p class="nombrespedidos"><b>Carne asada</b></p>
        <div class="carrito">
        <button type="button">
            <img src="./img/anadir-a-la-cesta.png" alt="agregar al carrito">
        </button>
        </div>
    </div>
</div>
<!--De Tripitas-->
<div class="burgues">
    <div class="camaron">
    </br></br></br></br></br>
        <img src="./img/de tripitas.jpeg" alt="" class="camaronimg">
        <p class="nombrespedidos"><b>De Tripitas</b></p>
        <div class="carrito">
        <button type="button">
            <img src="./img/anadir-a-la-cesta.png" alt="agregar al carrito">
        </button>
        </div>
    </div>
</div>
<!--Adobada con queso-->
<div class="burgues">
    <div class="camaron">
    </br></br></br></br></br>
        <img src="./img/adobada con queso.jpeg" alt="" class="camaronimg">
        <p class="nombrespedidos"><b>Adobada con queso</b></p>
        <div class="carrito">
        <button type="button">
            <img src="./img/anadir-a-la-cesta.png" alt="agregar al carrito">
        </button>
        </div>
    </div>
</div>

<div class="titulo_sin">
    <p class="logo_menu_mini">MENU</p>
    <p>SIN ILUSTRACION</p>
</div>
<div class="sin_nombres">
    <!--Adobada con piña-->
    <div class="otrosp">
        <p class="nombrespedidos"><b>Adobada con piña</b></p>
        <div class="carrito">
        <button type="button">
            <img src="./img/anadir-a-la-cesta.png" alt="agregar al carrito">
        </button>
        </div>
    </div>
    <!--Adobada con queso blanco-->
    <div class="otrosp">
        <p class="nombrespedidos"><b>Adobada con queso blanco</b></p>
        <div class="carrito">
        <button type="button">
            <img src="./img/anadir-a-la-cesta.png" alt="agregar al carrito">
        </button>
        </div>
    </div>
    <!--Adobada con queso y piña-->
    <div class="otrosp">
        <p class="nombrespedidos"><b>Adobada con queso y piña</b></p>
        <div class="carrito">
        <button type="button">
            <img src="./img/anadir-a-la-cesta.png" alt="agregar al carrito">
        </button>
        </div>
    </div>
<script src="./jss/menu.js"></script>
</body>
</html>