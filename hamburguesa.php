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
    <link rel="stylesheet" href="css/hamguersa.css">
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
</br></br></br></br>
    <a class="aliment_comida">COMIDAS</a>
</br></br>
<div class="comidas">
    <ul>
        <li><a href="" class="Hamburguesa">Hamburguesa</a></li>
        <li><a href="Tortas.php" class="tortas">Tortas</a></li>
        <li><a href="tacos.php" class="tacos">Tacos</a></li>
        <li><a href="hot.php" class="hot_dogs">Hot Dogs</a></li>
        <li><a href="Bonneles.php" class="bonneles">Bonneles</a></li>
        <li><a href="Papas.php" class="papas_fritas">Papas Fritas</a></li>
        <li><a href="doritos.php" class="doritos">Doritos Preparados</a></li>
        <li><a href="quesadillas.php" class="quesadillas">Quesadillas</a></li>
        <li><a href="otros.php" class="otros">Otros</a></li>
    </ul>
</div>
</br></br>
    <a href="bebidas.php" class="aliment">BEBIDAS</a>
</br></br></br></br>
</div>
<!--Alimentos-->
<!--CamaronBurgue-->
<div class="burgues">
    <div class="camaron">
    </br></br></br></br></br>
        <img src="./img/camaronburgue.jpeg" alt="" class="camaronimg">
        <p class="nombrespedidos"><b>Camaronburgue</b></p>
        <div class="carrito">
        <button type="button">
            <img src="./img/anadir-a-la-cesta.png" alt="agregar al carrito">
        </button>
        </div>
    </div>
    <!--La bebe-->
    <div class="camaron">
    </br>
        <img src="./img/la bebe.jpeg" alt="" class="camaronimg">
        <p class="nombrespedidos"><b>La bebe</b></p>
        <div class="carrito">
        <button type="button">
            <img src="./img/anadir-a-la-cesta.png" alt="agregar al carrito">
        </button>
        </div>
    </div>
</div>
<!--Tripasburguee-->
<div class="burgues">
    <div class="camaron">
    </br></br></br></br></br>
        <img src="./img/tripabueguer.jpeg" alt="" class="camaronimg">
        <p class="nombrespedidos"><b>Tripasburguee</b></p>
        <div class="carrito">
        <button type="button">
            <img src="./img/anadir-a-la-cesta.png" alt="agregar al carrito">
        </button>
        </div>
    </div>
</div>
<!--De pollo-->
<div class="burgues">
    <div class="camaron">
    </br></br></br></br></br>
        <img src="./img/pollo.jpeg" alt="" class="camaronimg">
        <p class="nombrespedidos"><b>Pollo</b></p>
        <div class="carrito">
        <button type="button">
            <img src="./img/anadir-a-la-cesta.png" alt="agregar al carrito">
        </button>
        </div>
    </div>
</div>
<!--La califas-->
<div class="burgues">
    <div class="camaron">
    </br></br></br></br></br>
        <img src="./img/la califas.jpeg" alt="" class="camaronimg">
        <p class="nombrespedidos"><b>La califas</b></p>
        <div class="carrito">
        <button type="button">
            <img src="./img/anadir-a-la-cesta.png" alt="agregar al carrito">
        </button>
        </div>
    </div>
</div>
<!--Aros-->
<div class="burgues">
    <div class="camaron">
    </br></br></br></br></br>
        <img src="./img/aros.jpeg" alt="" class="camaronimg">
        <p class="nombrespedidos"><b>Aros</b></p>
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
    <!--Sencilla-->
    <div class="otrosp">
        <p class="nombrespedidos"><b>Sencilla</b></p>
        <div class="carrito">
        <button type="button">
            <img src="./img/anadir-a-la-cesta.png" alt="agregar al carrito">
        </button>
        </div>
        <!--California-->
        <br>
        <p class="nombrespedidos"><b>California</b></p>
        <div class="carrito">
        <button type="button">
            <img src="./img/anadir-a-la-cesta.png" alt="agregar al carrito">
        </button>
        </div>
    </div>
    <!--Especial-->
    <div class="otrosp">
        <p class="nombrespedidos"><b>Especial</b></p>
        <div class="carrito">
        <button type="button">
            <img src="./img/anadir-a-la-cesta.png" alt="agregar al carrito">
        </button>
        </div>
        <!--Pizzaburguer-->
        <br>
        <p class="nombrespedidos"><b>Pizzaburguer</b></p>
        <div class="carrito">
        <button type="button">
            <img src="./img/anadir-a-la-cesta.png" alt="agregar al carrito">
        </button>
        </div>
    </div>
    <!--Doble-->
    <div class="otrosp">
        <p class="nombrespedidos"><b>Doble</b></p>
        <div class="carrito">
        <button type="button">
            <img src="./img/anadir-a-la-cesta.png" alt="agregar al carrito">
        </button>
        </div>
        <!--Champiñes-->
        <br>
        <p class="nombrespedidos"><b>Champiñes</b></p>
        <div class="carrito">
        <button type="button">
            <img src="./img/anadir-a-la-cesta.png" alt="agregar al carrito">
        </button>
        </div>
    </div>
    <!--Montada-->
    <div class="otrosp">
        <p class="nombrespedidos"><b>Montada</b></p>
        <div class="carrito">
        <button type="button">
            <img src="./img/anadir-a-la-cesta.png" alt="agregar al carrito">
        </button>
        </div>
    </div>
    <!--Hawaiiana-->
    <div class="otrosp">
        <p class="nombrespedidos"><b>Hawaiiana</b></p>
        <div class="carrito">
        <button type="button">
            <img src="./img/anadir-a-la-cesta.png" alt="agregar al carrito">
        </button>
        </div>
    </div>
    <!--Regular-->
    <div class="otrosp">
        <p class="nombrespedidos"><b>Regular</b></p>
        <div class="carrito">
        <button type="button">
            <img src="./img/anadir-a-la-cesta.png" alt="agregar al carrito">
        </button>
        </div>
    </div>
    <!--BBQ-->
    <div class="otrosp">
        <p class="nombrespedidos"><b>BBQ</b></p>
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
    <!--Texana-->
    <div class="otrosp">
        <p class="nombrespedidos"><b>Texana</b></p>
        <div class="carrito">
        <button type="button">
            <img src="./img/anadir-a-la-cesta.png" alt="agregar al carrito">
        </button>
        </div>
    </div>
    <!--Filipina-->
    <div class="otrosp">
        <p class="nombrespedidos"><b>Filipina</b></p>
        <div class="carrito">
        <button type="button">
            <img src="./img/anadir-a-la-cesta.png" alt="agregar al carrito">
        </button>
        </div>
    </div>
</div>
<script src="./jss/menu.js"></script>
</body>
</html>