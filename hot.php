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
    <link rel="stylesheet" href="css/hot-dogs.css">
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
        <li><a href="tacos.php" class="tacos">Tacos</a></li>
        <li><a href="" class="hot_dogs">Hot Dogs</a></li>
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
<!--Tripadog-->
<div class="burgues">
    <div class="camaron">
    </br></br></br></br></br>
        <img src="./img/tripadog.jpeg" alt="" class="camaronimg">
        <p class="nombrespedidos"><b>Tripadog</b></p>
        <div class="carrito">
        <button type="button">
            <img src="./img/anadir-a-la-cesta.png" alt="agregar al carrito">
        </button>
        </div>
    </div>
</div>
<!--Sencillo-->
<div class="burgues">
    <div class="camaron">
    </br></br></br></br></br>
        <img src="./img/sencillo.jpeg" alt="" class="camaronimg">
        <p class="nombrespedidos"><b>Sencillo</b></p>
        <div class="carrito">
        <button type="button">
            <img src="./img/anadir-a-la-cesta.png" alt="agregar al carrito">
        </button>
        </div>
    </div>
</div>
<!--Embarazado-->
<div class="burgues">
    <div class="camaron">
    </br></br></br></br></br>
        <img src="./img/Embarazado.jpeg" alt="" class="camaronimg">
        <p class="nombrespedidos"><b>Embarazado</b></p>
        <div class="carrito">
        <button type="button">
            <img src="./img/anadir-a-la-cesta.png" alt="agregar al carrito">
        </button>
        </div>
    </div>
</div>
<!--Doridog-->
<div class="burgues">
    <div class="camaron">
    </br></br></br></br></br>
        <img src="./img/doridog.jpeg" alt="" class="camaronimg">
        <p class="nombrespedidos"><b>Doridog</b></p>
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
    <!--Regulo-->
    <div class="otrosp">
        <p class="nombrespedidos"><b>Regulo</b></p>
        <div class="carrito">
        <button type="button">
            <img src="./img/anadir-a-la-cesta.png" alt="agregar al carrito">
        </button>
        </div>
        <!--Grande-->
        <br>
        <p class="nombrespedidos"><b>Grande</b></p>
        <div class="carrito">
        <button type="button">
            <img src="./img/anadir-a-la-cesta.png" alt="agregar al carrito">
        </button>
        </div>
    </div>
    <!--Hawaiiano-->
    <div class="otrosp">
        <p class="nombrespedidos"><b>Hawaiiano</b></p>
        <div class="carrito">
        <button type="button">
            <img src="./img/anadir-a-la-cesta.png" alt="agregar al carrito">
        </button>
        </div>
    </div>
    <!--Campidog-->
    <div class="otrosp">
        <p class="nombrespedidos"><b>Champidog</b></p>
        <div class="carrito">
        <button type="button">
            <img src="./img/anadir-a-la-cesta.png" alt="agregar al carrito">
        </button>
        </div>
    </div>
    <!--Pizzadog-->
    <div class="otrosp">
        <p class="nombrespedidos"><b>Pizzadog</b></p>
        <div class="carrito">
        <button type="button">
            <img src="./img/anadir-a-la-cesta.png" alt="agregar al carrito">
        </button>
        </div>
    </div>
    <!--Con camarones-->
    <div class="otrosp">
        <p class="nombrespedidos"><b>Con camarones</b></p>
        <div class="carrito">
        <button type="button">
            <img src="./img/anadir-a-la-cesta.png" alt="agregar al carrito">
        </button>
        </div>
    </div>
    <!--Mediano-->
    <div class="otrosp">
        <p class="nombrespedidos"><b>Mediano</b></p>
        <div class="carrito">
        <button type="button">
            <img src="./img/anadir-a-la-cesta.png" alt="agregar al carrito">
        </button>
        </div>
    </div>
<script src="./jss/menu.js"></script>
</body>
</html>