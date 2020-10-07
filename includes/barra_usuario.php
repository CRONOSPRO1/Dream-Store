<!DOCTYPE html>
<!--jajajaja-->
<html lang="en">
<!--Prueba de cambios de mega-->

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/estilos.css" type="text/css">
    <link rel="stylesheet" href="../assets/css/fontello.css">
    <script type="text/javascript" src="../assets/js/script.js"></script>
    <title>Dream Store</title>
</head>

<body>
    <div class="barra">
        <table width="100%">
            <tr>
                <td>
                    <div class="navegacion">
                        <nav>
                            <ul>

                                <li>
                                    <a href="#"><img src="../assets/imagenes/menu2.png" class="iconos"><span class="icon icon-up-dir"></span></a>
                                    <div class="submenu">
                                        <div class="submenu-items">
                                            <p>Ropa</p>
                                            <ul>
                                                <li><a href="buscar.html">Pantalones</a></li>
                                                <li><a href="buscar.html">Camisas</a></li>
                                                <li><a href="buscar.html">Camisetas</a></li>
                                                <li><a href="buscar.html">Bermudas</a></li>
                                                <li><a href="buscar.html">Ropa interior</a></li>
                                                <li><a href="buscar.html">Chaquetas</a></li>

                                            </ul>
                                        </div>
                                        <div class="submenu-items">
                                            <p>Electrodomesticos</p>
                                            <ul>
                                                <li><a href="buscar.html">Aspiradoras</a></li>
                                                <li><a href="buscar.html">Neveras</a></li>
                                                <li><a href="buscar.html">Licuadoras</a></li>
                                                <li><a href="buscar.html">Planchas</a></li>
                                                <li><a href="buscar.html">Lavadoras</a></li>
                                                <li><a href="buscar.html">Televisores</a></li>
                                                <li><a href="buscar.html">Equipos de sonido</a></li>
                                            </ul>
                                        </div>
                                        <div class="submenu-items">
                                            <p>Tecnologia </p>
                                            <ul>
                                                <li><a href="buscar.html">Celulares</a></li>
                                                <li><a href="buscar.html">Accesorios para celulares</a></li>
                                                <li><a href="buscar.html">Laptop</a></li>
                                                <li><a href="buscar.html">PC</a></li>
                                                <li><a href="buscar.html">Accesorios para computadoras</a></li>
                                                <li><a href="buscar.html">Consolas de videojuegos</a></li>
                                            </ul>
                                        </div>
                                        <div class="submenu-items">
                                            <p>Carros</p>
                                            <ul>
                                                <li><a href="buscar.html">Chevrolet</a></li>
                                                <li><a href="buscar.html">Hyundai</a></li>
                                                <li><a href="buscar.html">Mazda</a></li>
                                                <li><a href="buscar.html">Toyota</a></li>
                                                <li><a href="buscar.html">Nissan</a></li>
                                                <li><a href="buscar.html">Renault</a></li>
                                            </ul>
                                        </div>
                                        <div class="submenu-items">
                                            <p>Aseo</p>
                                            <ul>
                                                <li><a href="buscar.html">Detergente</a></li>
                                                <li><a href="buscar.html">Jabon</a></li>
                                                <li><a href="buscar.html">Crema dental</a></li>
                                                <li><a href="buscar.html">Shampoo</a></li>
                                                <li><a href="buscar.html">Desodorante</a></li>
                                                <li><a href="buscar.html">Ambientador</a></li>
                                            </ul>
                                        </div>

                                    </div>
                                </li>
                </td>
                <td><a href="index-usuario.php" id="dream">Dream Store</a></td>
                <td>
                    <form action="../includes/buscador.php" method="">
                        <input type="search" class="buscar" name="buscar" id="buscar" placeholder="Ingrese lo que desea buscar" required>

                    </form>
                </td>


                <td>
                    <img src="../assets/imagenes/compras.svg" class="iconos">
                    <a href="bolsa-de-compras.php"> Bolsa de compras</a>
                </td>
                <td>
                    <img src="../assets/imagenes/compras.svg" class="iconos">
                    <a href="mis_productos.php"> Mis productos</a>
                </td>


                <td></td>
                <td>
                    <div class="navegacion">
                        <nav>
                            <ul>
                                <img src="../assets/imagenes/user-logo.png" class="iconos">
                                <li>
                                    <a href="#">|<?php echo $_SESSION['usuario']; ?>|<span class="icon icon-up-dir"></span></a>
                                    <div class="submenu">

                                        <div class="submenu-items">

                                            <ul id="sel">

                                                <li><a href="gestionar-cuenta.php">Mi cuenta</a></li>

                                                <li><a href="../includes/logout.php">Cerrar sesion</a></li>
                                        </div>
                </td>

                <td><img src="../assets/imagenes/comprar.png" class="iconos"><a href="vender-usuario.php"> Vender</a></td>





            </tr>
        </table>
    </div>