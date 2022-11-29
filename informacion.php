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
    <link rel="stylesheet" href="css/informacion.css">
    <title>El barbas</title>
</head>
<body>
    <!--Menu del Barbas-->

<header>
    <nav class="nav">
        <ul class="menu">
            <li class="main1"><a href="apartados.php">APARTADOS</a></li>
            <li class="main2"><a href="servicios.php">SERVICIOS</a></li>
        </ul>
        <div class="logo"><a href="index.php"><img src="./img/1666882906975.png" alt=""></a></div>
        <ul class="menu2">
            <li class="main3"><a href="quejas.php">QUEJAS</a></li>
            <li class="main4"><a >CONTACTOS</a></li>
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
    <p class="logo_menu">Datos</p>
</br></br></br>
    <a class="aliment">Informacion</a>
</div>

<div class="container">
        <div class="form-box">
            <div class="container">
                
            <div class="direccion">
            <p>Direcci&oacute;n:</p>
                <div class="direccion2">
                <p><b>Volc&aacute;n tacamas y calle paseo de san Isidro, Ciudad Juárez, México, 3200</b></p>
                </div>
            </div>
            <div class="direccion">
            <p>Tel:</p>
                <div class="direccion2">
                    <p><b>656 277 1101</b></p>
                </div>
            </div>
            <div class="direccion">
                <p>Correo Electronico:</p>
                    <div class="direccion2">
                        <p><b>dmaciasjacobo@gmail.com</b></p>
                    </div>
            </div>
            <div class="direccion">
                <div class="direccion2">
                    <table class="horarios">
                        <tr>
                            <th colspan="2">
                                <p>Horiarios</p>
                            </th>
                        </tr>
                        <tr>
                                <td><p>LUNES</p></td>
                                <td><p>CERRADO</p></td>
                        </tr>
                        <tr>
                                <td><p>MARTES</p></td>
                                <td><p>CERRADO</p></td>
                        </tr>
                        <tr>
                                <td><p>MIERCOLES</p></td>
                                <td><p>CERRADO</p></td>
                        </tr>
                        <tr>
                                <td><p>JUEVES</p></td>
                                <td><p>17:00-2:00</p></td>
                        </tr>
                        <tr>
                                <td><p>VIERNES</p></td>
                                <td><p>17:00-2:00</p></td>
                        </tr>
                        <tr>
                                <td><p>SABADO</p></td>
                                <td><p>17:00-2:00</p></td>
                        </tr>
                        <tr>
                                <td><p>DOMINGO</p></td>
                                <td><p>17:00-2:00</p></td>
                        </tr>
                    </table>
                </div>
            </div>
            </div>
        </div>
    </div>
<script src="./jss/menu.js"></script>
</body>
</html>