<!DOCTYPE html>
<!--jajajaja-->
<html lang="en">
<!--Prueba de cambios de mega-->

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/estilos.css" type="text/css">
    <link rel="stylesheet" href="assets/css/fontello.css">
    <script type="text/javascript" src="assets/js/script.js"></script>
    <title>Dream Store</title>
</head>

<body>
    <div class="barra">
        <table width=100%>
            <tr>
                <td>
                    <div class="navegacion">
                        <nav>
                            <ul>

                                <li>
                                    <a href="#"><img src="assets/imagenes/menu2.png" class="iconos"><span class="icon icon-up-dir"></span></a>
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
                                                <li><a href="buscar.html">Accesorios para celulare</a></li>
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
                <td><a href="index.php" id="dream">Dream Store</a></td>
                <td>
                    <form action="buscador.php" method="">
                        <input type="search" class="buscar" name="buscar" value="<?php if(isset($_GET['buscar'])){echo $_GET['buscar'];}
                        ?>" id="buscar" placeholder="Ingrese lo que desea buscar" required>

                    </form>

                </td>

                <td></td>

                <td>

                    <div class="navegacion">

                        <nav>

                            <ul>
                                <img src="assets/imagenes/contactos.png" class="iconos">
                                <li>

                                    <a href="#"> Iniciar Sesion<span class="icon icon-up-dir"></span></a>

                                    <div class="submenu">

                                        <div class="submenu-items">

                                            <ul id="sel">
                                                <li><a href="inicio-usuario.php"><img src="assets/imagenes/user-logo.png" class="iconos_inicio">Usuario</a></li>


                                            </ul>
                                        </div>
                                        <div class="submenu-items">

                                            <ul id="sel">
                                                <li><a href="inicio-empresa.php"><img src="assets/imagenes/rama.png" class="iconos_inicio">Empresa</a></li>

                                            </ul>
                                        </div>
                                        <div class="submenu-items">

                                            <ul id="sel">
                                                <li><a href="inicio-administrador.php"><img src="assets/imagenes/admin-logo.png" class="iconos_inicio">Administrador</a></li>


                </td>

                <td></td>

                <td><img src="assets/imagenes/comprar.png" class="iconos"><a href="vender.php"> Vender</a></td>
                <td></td>
                <td><img src="assets/imagenes/ubicacion.png" class="iconos"><a href="ubicacion.php"> Ubicacion</a></td>


            </tr>
        </table>
    </div>