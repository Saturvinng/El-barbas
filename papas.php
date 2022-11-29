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
    <link rel="stylesheet" href="css/papas.css">
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
            <li class="main4"><a href="quejas.php">CONTACTOS</a></li>
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
    <a class="aliment_comida">COMIDAS</a>
</br>
</br>
<div class="comidas">
    <ul>
        <li><a href="hamburguesa.php" class="Hamburguesa">Hamburguesa</a></li>
        <li><a href="Tortas.php" class="tortas">Tortas</a></li>
        <li><a href="tacos.php" class="tacos">Tacos</a></li>
        <li><a href="hot.php" class="hot_dogs">Hot Dogs</a></li>
        <li><a href="Bonneles.php" class="bonneles">Bonneles</a></li>
        <li><a href="" class="papas_fritas">Papas Fritas</a></li>
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
<!--COn tocino y queso amarillo-->
<div class="burgues">
    <div class="camaron">
    </br></br></br></br></br>
        <img src="./img/con tocino y queso amarillo.jpeg" alt="" class="camaronimg">
        <p class="nombrespedidos"><b>Con tocino y <br> queso amarillo</b></p>
        <div class="carrito">
        <button type="button">
            <img src="./img/anadir-a-la-cesta.png" alt="agregar al carrito">
        </button>
        </div>
    </div>
</div>
<!--Queso amarillo-->
<div class="burgues">
    <div class="camaron">
    </br></br></br></br></br>
        <img src="./img/queso amarillo papas.jpeg" alt="" class="camaronimg">
        <p class="nombrespedidos"><b>Queso amarillo</b></p>
        <div class="carrito">
        <button type="button">
            <img src="./img/anadir-a-la-cesta.png" alt="agregar al carrito">
        </button>
        </div>
    </div>
</div>
<!--Salchipapas-->
<div class="burgues">
    <div class="camaron">
    </br></br></br></br></br>
        <img src="./img/salchipapas.jpeg" alt="" class="camaronimg">
        <p class="nombrespedidos"><b>Salchipapas</b></p>
        <div class="carrito">
        <button type="button">
            <img src="./img/anadir-a-la-cesta.png" alt="agregar al carrito">
        </button>
        </div>
    </div>
</div>
<!--Con carne-->
<div class="burgues">
    <div class="camaron">
    </br></br></br></br></br>
        <img src="./img/con carne.jpeg" alt="" class="camaronimg">
        <p class="nombrespedidos"><b>Con carne</b></p>
        <div class="carrito">
        <button type="button">
            <img src="./img/anadir-a-la-cesta.png" alt="agregar al carrito">
        </button>
        </div>
    </div>
</div>
<!--Con carne y queso amarillo-->
<div class="burgues">
    <div class="camaron">
    </br></br></br></br></br>
        <img src="./img/con carne y queso amarillo.jpeg" alt="" class="camaronimg">
        <p class="nombrespedidos"><b>Con carne y <br> queso amarillo</b></p>
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
    <!--Sencillas-->
    <div class="otrosp">
        <p class="nombrespedidos"><b>Sencillas</b></p>
        <div class="carrito">
        <button type="button">
            <img src="./img/anadir-a-la-cesta.png" alt="agregar al carrito">
        </button>
        </div>
    </div>
    <!--Bufalo-->
    <div class="otrosp">
        <p class="nombrespedidos"><b>Bufalo</b></p>
        <div class="carrito">
        <button type="button">
            <img src="./img/anadir-a-la-cesta.png" alt="agregar al carrito">
        </button>
        </div>
    </div>
    <!--Puercas-->
    <div class="otrosp">
        <p class="nombrespedidos"><b>Puercas</b></p>
        <div class="carrito">
        <button type="button">
            <img src="./img/anadir-a-la-cesta.png" alt="agregar al carrito">
        </button>
        </div>
    </div>

<script src="./jss/menu.js"></script>
</body>
</html>