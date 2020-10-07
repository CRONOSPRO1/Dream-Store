<?php require_once'../includes/conexion.php'?>
<?php if(isset($_SESSION['usuario'])){?>
<?php require_once'../includes/barra_usuario.php';?>
<section id="slider">
        <div class="slider">
            <ul>
                <li>
                    <img src="../assets/imagenes/accesorios.jpg" class="imagenes_slider_principal" alt="">
                </li>
                <li>
                    <img src="../assets/imagenes/televisor.jpg" class="imagenes_slider_principal" alt="">
                </li>
                <li>
                    <img src="../assets/imagenes/3.jpg" class="imagenes_slider_principal" alt="">
                </li>
                <li>
                    <img src="../assets/imagenes/1.png" class="imagenes_slider_principal" alt="">
                </li>
            </ul>
        </div>


    </section>   
    <div class="titulos">
        <br>
        <h2></h2>
        <h2>Mis productos</h2>
        <div class="ofertas">
        <table class="tabla" cellpadding="" style="" width="230px">
            <tr>
           <?php /*
             //for ($cn=1; $cn<=3 ; $cn++) { 
                for($i=0; $i <=4 ; $i++){
                    include'../includes/mis_articulos.php';
                    if($i==4){
                        echo'</tr><tr>';
                    }}
            
                 */?>
                <?php include'../includes/mis_articulos.php';?>
            </tr>
            
        </table>
    </div>


    
<div class="titulos">
        <br>
        <h2></h2>
        <h2>Ofertas de la semana</h2>
    </div>


    <div class="ofertas">
        <table class="tabla" width="90%">
            <tr>
                <td>
                    <table width="100%">
                        <tr>
                            <th><button onclick="favoritos()"><img src="../assets/imagenes/favoritos.png" title="Agregar a lista de deseos"
                                class="iconos"></button></th>
                                <th><button onclick="agregar_carrito()"><img src="../assets/imagenes/carrito3.png" title="Agregar a lista de deseos"
                                    class="iconos"></button></th>
                        </tr>
                        <tr>
                            <th colspan="2" ><a href="articulos-usuario.php"><img src="../assets/imagenes/telefonos.jpg" class="img_productos_principal"></a></th>

                        </tr>
                        <tr>
                            <th colspan="2">
                                Huawei y9 2019
                            </th>
                            
                        </tr>
                            <tr >
                            <th colspan="2" class="precios">$700.000</th>
                            </tr>
                    </table>
                </td>
                <td>
                    <table width="100%">
                        <tr>
                            <th><a href="mis_productos"><img src="../assets/imagenes/favoritos.png" title="Agregar a lista de deseos"
                                class="iconos"></a></th>
                                <th><a href="mis_productos"><img src="../assets/imagenes/carrito3.png" title="Agregar a lista de deseos"
                                    class="iconos"></a></th>
                        </tr>
                        <tr>
                            <th colspan="2" ><a href="articulos-usuario.php"><img src="../assets/imagenes/xbox360.jpg" class="img_productos_principal"></a></th>

                        </tr>
                        <tr>
                            <th colspan="2">
                                Este es
                            </th>
                            
                        </tr>
                            <tr >
                            <th colspan="2" class="precios">$700.000</th>
                            </tr>
                    </table>
                </td><td>
                    <table width="100%">
                        <tr>
                            <th><button onclick="favoritos()"><img src="../assets/imagenes/favoritos.png" title="Agregar a lista de deseos"
                                class="iconos"></button></th>
                                <th><button onclick="agregar_carrito()"><img src="../assets/imagenes/carrito3.png" title="Agregar a lista de deseos"
                                    class="iconos"></button></th>
                        </tr>
                        <tr>
                            <th colspan="2" ><a href="articulos-usuario.php"><img src="../assets/imagenes/telefonos.jpg" class="img_productos_principal"></a></th>

                        </tr>
                        <tr>
                            <th colspan="2">
                                Huawei y9 2019
                            </th>
                            
                        </tr>
                            <tr >
                            <th colspan="2" class="precios">$700.000</th>
                            </tr>
                    </table>
                </td><td>
                    <table width="100%">
                        <tr>
                            <th><button onclick="favoritos()"><img src="../assets/imagenes/favoritos.png" title="Agregar a lista de deseos"
                                class="iconos"></button></th>
                                <th><button onclick="agregar_carrito()"><img src="../assets/imagenes/carrito3.png" title="Agregar a lista de deseos"
                                    class="iconos"></button></th>
                        </tr>
                        <tr>
                            <th colspan="2" ><a href="articulos-usuario.php"><img src="../assets/imagenes/telefonos.jpg" class="img_productos_principal"></a></th>

                        </tr>
                        <tr>
                            <th colspan="2">
                                Huawei y9 2019
                            </th>
                            
                        </tr>
                            <tr >
                            <th colspan="2" class="precios">$700.000</th>
                            </tr>
                    </table>
                </td>
                <td>
                    <table width="100%">
                        <tr>
                            <th><button onclick="favoritos()"><img src="../assets/imagenes/favoritos.png" title="Agregar a lista de deseos"
                                class="iconos"></button></th>
                                <th><button onclick="agregar_carrito()"><img src="../assets/imagenes/carrito3.png" title="Agregar a lista de deseos"
                                    class="iconos"></button></th>
                        </tr>
                        <tr>
                            <th colspan="2" ><a href="articulos-usuario.php"><img src="../assets/imagenes/telefonos.jpg" class="img_productos_principal"></a></th>

                        </tr>
                        <tr>
                            <th colspan="2">
                                Huawei y9 2019
                            </th>
                            
                        </tr>
                            <tr >
                            <th colspan="2" class="precios">$700.000</th>
                            </tr>
                    </table>
                </td>
                <tr>
                    <td>
                        <table width="100%">
                            <tr>
                                <th><button onclick="favoritos()"><img src="../assets/imagenes/favoritos.png" title="Agregar a lista de deseos"
                                    class="iconos"></button></th>
                                    <th><button onclick="agregar_carrito()"><img src="../assets/imagenes/carrito3.png" title="Agregar a lista de deseos"
                                        class="iconos"></button></th>
                            </tr>
                            <tr>
                                <th colspan="2" ><a href="articulos-usuario.php"><img src="../assets/imagenes/xbox360.jpg" class="img_productos_principal"></a></th>
    
                            </tr>
                            <tr>
                                <th colspan="2">
                                    Huawei y9 2019
                                </th>
                                
                            </tr>
                                <tr >
                                <th colspan="2" class="precios">$700.000</th>
                                </tr>
                        </table>
                    </td>
                    <td>
                        <table width="100%">
                            <tr>
                                <th><button onclick="favoritos()"><img src="../assets/imagenes/favoritos.png" title="Agregar a lista de deseos"
                                    class="iconos"></button></th>
                                    <th><button onclick="agregar_carrito()"><img src="../assets/imagenes/carrito3.png" title="Agregar a lista de deseos"
                                        class="iconos"></button></th>
                            </tr>
                            <tr>
                                <th colspan="2" ><a href="articulos-usuario.php"><img src="../assets/imagenes/telefonos.jpg" class="img_productos_principal"></a></th>
    
                            </tr>
                            <tr>
                                <th colspan="2">
                                    Huawei y9 2019
                                </th>
                                
                            </tr>
                                <tr >
                                <th colspan="2" class="precios">$700.000</th>
                                </tr>
                        </table>
                    </td>
                    <td>
                        <table width="100%">
                            <tr>
                                <th><button onclick="favoritos()"><img src="../assets/imagenes/favoritos.png" title="Agregar a lista de deseos"
                                    class="iconos"></button></th>
                                    <th><button onclick="agregar_carrito()"><img src="../assets/imagenes/carrito3.png" title="Agregar a lista de deseos"
                                        class="iconos"></button></th>
                            </tr>
                            <tr>
                                <th colspan="2" ><a href="articulos-usuario.php"><img src="../assets/imagenes/telefonos.jpg" class="img_productos_principal"></a></th>
    
                            </tr>
                            <tr>
                                <th colspan="2">
                                    Huawei y9 2019
                                </th>
                                
                            </tr>
                                <tr >
                                <th colspan="2" class="precios">$700.000</th>
                                </tr>
                        </table>
                    </td>
                    <td>
                        <table width="100%">
                            <tr>
                                <th><button onclick="favoritos()"><img src="../assets/imagenes/favoritos.png" title="Agregar a lista de deseos"
                                    class="iconos"></button></th>
                                    <th><button onclick="agregar_carrito()"><img src="../assets/imagenes/carrito3.png" title="Agregar a lista de deseos"
                                        class="iconos"></button></th>
                            </tr>
                            <tr>
                                <th colspan="2" ><a href="articulos-usuario.php"><img src="../assets/imagenes/xbox360.jpg" class="img_productos_principal"></a></th>
    
                            </tr>
                            <tr>
                                <th colspan="2">
                                    Huawei y9 2019
                                </th>
                                
                            </tr>
                                <tr >
                                <th colspan="2" class="precios">$700.000</th>
                                </tr>
                        </table>
                    </td>
                    <td>
                        <table width="100%">
                            <tr>
                                <th><button onclick="favoritos()"><img src="../assets/imagenes/favoritos.png" title="Agregar a lista de deseos"
                                    class="iconos"></button></th>
                                    <th><button onclick="agregar_carrito()"><img src="../assets/imagenes/carrito3.png" title="Agregar a lista de deseos"
                                        class="iconos"></button></th>
                            </tr>
                            <tr>
                                <th colspan="2" ><a href="articulos-usuario.php"><img src="../assets/imagenes/telefonos.jpg" class="img_productos_principal"></a></th>
    
                            </tr>
                            <tr>
                                <th colspan="2">
                                    Huawei y9 2019
                                </th>
                                
                            </tr>
                                <tr >
                                <th colspan="2" class="precios">$700.000</th>
                                </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table width="100%">
                            <tr>
                                <th><button onclick="favoritos()"><img src="../assets/imagenes/favoritos.png" title="Agregar a lista de deseos"
                                    class="iconos"></button></th>
                                    <th><button onclick="agregar_carrito()"><img src="../assets/imagenes/carrito3.png" title="Agregar a lista de deseos"
                                        class="iconos"></button></th>
                            </tr>
                            <tr>
                                <th colspan="2" ><a href="articulos-usuario.php"><img src="../assets/imagenes/xbox360.jpg" class="img_productos_principal"></a></th>
    
                            </tr>
                            <tr>
                                <th colspan="2">
                                    Huawei y9 2019
                                </th>
                                
                            </tr>
                                <tr >
                                <th colspan="2" class="precios">$700.000</th>
                                </tr>
                        </table>
                    </td>
                    <td>
                        <table width="100%">
                            <tr>
                                <th><button onclick="favoritos()"><img src="../assets/imagenes/favoritos.png" title="Agregar a lista de deseos"
                                    class="iconos"></button></th>
                                    <th><button onclick="agregar_carrito()"><img src="../assets/imagenes/carrito3.png" title="Agregar a lista de deseos"
                                        class="iconos"></button></th>
                            </tr>
                            <tr>
                                <th colspan="2" ><a href="articulos-usuario.php"><img src="../assets/imagenes/telefonos.jpg" class="img_productos_principal"></a></th>
    
                            </tr>
                            <tr>
                                <th colspan="2">
                                    Huawei y9 2019
                                </th>
                                
                            </tr>
                                <tr >
                                <th colspan="2" class="precios">$700.000</th>
                                </tr>
                        </table>
                    </td>
                    <td>
                        <table width="100%">
                            <tr>
                                <th><button onclick="favoritos()"><img src="../assets/imagenes/favoritos.png" title="Agregar a lista de deseos"
                                    class="iconos"></button></th>
                                    <th><button onclick="agregar_carrito()"><img src="../assets/imagenes/carrito3.png" title="Agregar a lista de deseos"
                                        class="iconos"></button></th>
                            </tr>
                            <tr>
                                <th colspan="2" ><a href="articulos-usuario.php"><img src="../assets/imagenes/xbox360.jpg" class="img_productos_principal"></a></th>
    
                            </tr>
                            <tr>
                                <th colspan="2">
                                    Huawei y9 2019
                                </th>
                                
                            </tr>
                                <tr >
                                <th colspan="2" class="precios">$700.000</th>
                                </tr>
                        </table>
                    </td>
                    <td>
                        <table width="100%">
                            <tr>
                                <th><button onclick="favoritos()"><img src="../assets/imagenes/favoritos.png" title="Agregar a lista de deseos"
                                    class="iconos"></button></th>
                                    <th><button onclick="agregar_carrito()"><img src="../assets/imagenes/carrito3.png" title="Agregar a lista de deseos"
                                        class="iconos"></button></th>
                            </tr>
                            <tr>
                                <th colspan="2" ><a href="articulos-usuario.php"><img src="../assets/imagenes/telefonos.jpg" class="img_productos_principal"></a></th>
    
                            </tr>
                            <tr>
                                <th colspan="2">
                                    Huawei y9 2019
                                </th>
                                
                            </tr>
                                <tr >
                                <th colspan="2" class="precios">$700.000</th>
                                </tr>
                        </table>
                    </td>
                    <td>
                        <table width="100%">
                            <tr>
                                <th><button onclick="favoritos()"><img src="../assets/imagenes/favoritos.png" title="Agregar a lista de deseos"
                                    class="iconos"></button></th>
                                    <th><button onclick="agregar_carrito()"><img src="../assets/imagenes/carrito3.png" title="Agregar a lista de deseos"
                                        class="iconos"></button></th>
                            </tr>
                            <tr>
                                <th colspan="2" ><a href="articulos-usuario.php"><img src="../assets/imagenes/xbox360.jpg" class="img_productos_principal"></a></th>
    
                            </tr>
                            <tr>
                                <th colspan="2">
                                    Huawei y9 2019
                                </th>
                                
                            </tr>
                                <tr >
                                <th colspan="2" class="precios">$700.000</th>
                                </tr>
                        </table>
                    </td>
                </tr>
            </tr>
            
        </table>
    </div>
    <div class="titulos">
        <h2>Mas vendidos</h2>
    </div>
    <div class="ofertas">
        <table class="tabla" cellpadding="" style="" width="90%">
            <tr>
            <tr>
            <?php 
             for ($cn=1; $cn<=3 ; $cn++) { 
                for($i=0; $i <=4 ; $i++){
                    include'../includes/articulo_usuario.php';
                    if($i==4){
                        echo'</tr><tr>';
                    }}
             }
                 ?>
            </tr>
        </table>
    </div>
    <div class="titulos">
        <h2>Categorias mas buscadas</h2>
    </div>
    <div class="categorias_destacadas">
        <table class="destacado" cellpadding="" style="" width="80%">
            <tr>
                <td><a href="buscar.html"><img class="imagenes_destacadas" src="imagenes/zapatos.png">
                        <br>
                        <h3>Calzado</h3>
                    </a></td>
            
            
                <td><a href="buscar.html"><img  class="imagenes_destacadas" src="imagenes/telefonos.jpg">
                    <br>
                    <h3>Celulares</h3></a>
                </td>

            </tr>



        </table>
    </div>
    <div class="titulos">
        <h2>Te puede interesar</h2>
    </div>
    <div class="ofertas">
        <table class="tabla" cellpadding="" style="" width="90%">
            <tr>
            <?php 
             for ($cn=1; $cn<=3 ; $cn++) { 
                for($i=0; $i <=4 ; $i++){
                    include'../includes/articulo_usuario.php';
                    if($i==4){
                        echo'</tr><tr>';
                    }}
             }
                 ?>
            </tr>
            
        </table>
    </div>

    </section>






<?php require_once'../includes/footer.php'?>
            <?php }else {
                echo "<script>location=href='../includes/ini_desa.php';</script>";
            } ?>