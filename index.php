<?php require_once'includes/barra.php' ?>
    <section id="slider">
        <div class="slider">
            <ul>
                <li>
                    <img src="assets/imagenes/logo.jpg" class="imagenes_slider_principal_logo"  height="400px" alt="">
                </li>
                <li>
                    <img src="assets/imagenes/accesorios.jpg" class="imagenes_slider_principal" alt="">
                </li>
                <li>
                    <img src="assets/imagenes/3.jpg" class="imagenes_slider_principal" alt="">
                </li>
                <li>
                    <img src="assets/imagenes/1.png" class="imagenes_slider_principal" alt="">
                </li>
            </ul>
        </div>


    </section>
    <div class="titulos">
        <br>
        <h2>Subidos recientemente</h2>
    </div>

    <div class="ofertas">
        <table class="tabla" cellpadding="" style="" width="230px" >
            <tr>
            <?php 
            $dbhost = "localhost";
            $dbuser = "root";
            $dbpass = "";
            $dbname = "dream";
            $conexion = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
$query = "SELECT * FROM productos ORDER BY id_producto DESC";
$resultado = mysqli_query($conexion, $query);
$row_cnt = $resultado->num_rows;
$i=0;

while ($mostrar = mysqli_fetch_assoc($resultado)) : ?>
<?php $i=$i+1; ?>
<?php if ($i>5) {
    $i=1;
    echo'</tr><tr>';
     echo '<td>
    <table width="220px">
    <tr>
    <th><button onclick="favoritos()"><img src="assets/imagenes/favoritos.png" title="Agregar a lista de deseos" class="iconos"></button></th>
</tr>
<tr>
<th colspan="2"><a href="articulo_publicado.php?id='.$mostrar['id_producto'].'"><img class="img_productos_principal" src="data:image/png;base64, ' . base64_encode($mostrar['imagen']) . '"></a></th> 
               </tr>
           
               <tr>           
               <th colspan="2" >' . $mostrar['nombre_producto'] . '</th>
               <tr>
               <tr>
                           <th colspan="2" class="precios">' . $mostrar['precio'] . '</th>
                           </tr>
   
                        </tr>
                        </table>
                        </td>';
}else{
    echo '<td>
     <table width="220px">
     <tr>
     <th><button onclick="favoritos()"><img src="assets/imagenes/favoritos.png" title="Agregar a lista de deseos" class="iconos"></button></th>
 </tr>
<tr>
<th colspan="2"><a href="articulo_publicado.php?id='.$mostrar['id_producto'].'"><img class="img_productos_principal" src="data:image/png;base64, ' . base64_encode($mostrar['imagen']) . '"></a></th> 
                </tr>
            
                <tr>           
                <th colspan="2" >' . $mostrar['nombre_producto'] . '</th>
                <tr>
                <tr>
                            <th colspan="2" class="precios">' . $mostrar['precio'] . '</th>
                            </tr>
    
                         </tr>
                         </table>
                         </td>';
    
}?>
    

<?php endwhile; ?>
</tr>
            
        </table>
    </div>

<div class="titulos">
        <br>
        <h2>Ofertas de la semana</h2>
    </div>
    <div class="ofertas">
        <table class="tabla" width="90%">
            <tr>
                <td>
                    <table width="100%">
                        <tr>
                            <th><button onclick="favoritos()"><img src="assets/imagenes/favoritos.png" title="Agregar a lista de deseos"
                                class="iconos"></button></th>
                        </tr>
                        <tr>
                            <th ><a href="articulos.php"><img src="assets/imagenes/telefonos.jpg" class="img_productos_principal"></a></th>

                        </tr>
                        <tr>
                            <th>
                                Huawei y9 2019
                            </th>
                            
                        </tr>
                            <tr>
                            <th class="precios">$700.000</th>
                            </tr>
                    </table>
                </td>
                <td>
                    <table width="100%">
                        <tr>
                            <th><button onclick="favoritos()"><img src="assets/imagenes/favoritos.png" title="Agregar a lista de deseos"
                                class="iconos"></button></th>
                        </tr>
                        <tr>
                            <th ><a href="articulos.php"><img src="assets/imagenes/xbox360.jpg" class="img_productos_principal"></a></th>

                        </tr>
                        <tr>
                            <th>
                                Xbox 360
                            </th>
                            
                        </tr>
                            <tr>
                            <th class="precios">$400.000</th>
                            </tr>
                    </table>
                </td>
                <td>
                    <table width="100%">
                        <tr>
                            <th><button onclick="favoritos()"><img src="assets/imagenes/favoritos.png" title="Agregar a lista de deseos"
                                class="iconos"></button></th>
                        </tr>
                        <tr>
                            <th ><img src="assets/imagenes/xbox360.jpg" class="img_productos_principal"></th>

                        </tr>
                        <tr>
                            <th>
                                Xbox 360
                            </th>
                            
                        </tr>
                            <tr>
                            <th class="precios">$400.000</th>
                            </tr>
                    </table>
                </td>
                <td>
                    <table width="100%">
                        <tr>
                            <th><button onclick="favoritos()"><img src="assets/imagenes/favoritos.png" title="Agregar a lista de deseos"
                                class="iconos"></button></th>
                        </tr>
                        <tr>
                            <th ><a href="articulos.php"><img src="assets/imagenes/xbox360.jpg" class="img_productos_principal"></a></th>

                        </tr>
                        <tr>
                            <th>
                                Xbox 360
                            </th>
                            
                        </tr>
                            <tr>
                            <th class="precios">$400.000</th>
                            </tr>
                    </table>
                </td>
                <td>
                    <table width="100%">
                        <tr>
                            <th><button onclick="favoritos()"><img src="assets/imagenes/favoritos.png" title="Agregar a lista de deseos"
                                class="iconos"></button></th>
                        </tr>
                        <tr>
                            <th ><a href="articulos.php"><img src="assets/imagenes/xbox360.jpg" class="img_productos_principal"></a></th>

                        </tr>
                        <tr>
                            <th>
                                Xbox 360
                            </th>
                            
                        </tr>
                            <tr>
                            <th class="precios">$400.000</th>
                            </tr>
                    </table>
                </td>
            </tr>
            <tr>
                
                <td>
                    <table width="100%">
                        <tr>
                            <th><button onclick="favoritos()"><img src="assets/imagenes/favoritos.png" title="Agregar a lista de deseos"
                                class="iconos"></button></th>
                        </tr>
                        <tr>
                            <th ><img src="assets/imagenes/xbox360.jpg" class="img_productos_principal"></th>

                        </tr>
                        <tr>
                            <th>
                                Xbox 360
                            </th>
                            
                        </tr>
                            <tr>
                            <th class="precios">$400.000</th>
                            </tr>
                    </table>
                </td>
                <td>
                    <table width="100%">
                        <tr>
                            <th><button onclick="favoritos()"><img src="assets/imagenes/favoritos.png" title="Agregar a lista de deseos"
                                class="iconos"></button></th>
                        </tr>
                        <tr>
                            <th ><a href="articulos.php"><img src="assets/imagenes/xbox360.jpg" class="img_productos_principal"></a></th>

                        </tr>
                        <tr>
                            <th>
                                Xbox 360
                            </th>
                            
                        </tr>
                            <tr>
                            <th class="precios">$400.000</th>
                            </tr>
                    </table>
                </td>
                <td>
                    <table width="100%">
                        <tr>
                            <th><button onclick="favoritos()"><img src="assets/imagenes/favoritos.png" title="Agregar a lista de deseos"
                                class="iconos"></button></th>
                        </tr>
                        <tr>
                            <th ><a href="articulos.php"><img src="assets/imagenes/xbox360.jpg" class="img_productos_principal"></a></th>

                        </tr>
                        <tr>
                            <th>
                                Xbox 36012
                            </th>
                            
                        </tr>
                            <tr>
                            <th class="precios">$400.000</th>
                            </tr>
                    </table>
                </td>
                <td>
                    <table width="100%">
                        <tr>
                            <th><button onclick="favoritos()"><img src="assets/imagenes/favoritos.png" title="Agregar a lista de deseos"
                                class="iconos"></button></th>
                        </tr>
                        <tr>
                            <th ><a href="articulos.php"><img src="assets/imagenes/xbox360.jpg" class="img_productos_principal"></a></th>

                        </tr>
                        <tr>
                            <th>
                                Xbox 360
                            </th>
                            
                        </tr>
                            <tr >
                            <th class="precios">$400.000</th>
                            </tr>
                    </table>
                </td>
                <td>
                    <table width="100%">
                        <tr>
                            <th><button onclick="favoritos()"><img src="assets/imagenes/favoritos.png" title="Agregar a lista de deseos"
                                class="iconos"></button></th>
                        </tr>
                        <tr>
                            <th ><a href="articulos.php"><img src="assets/imagenes/xbox360.jpg" class="img_productos_principal"></a></th>

                        </tr>
                        <tr>
                            <th>
                                Xbox 360
                            </th>
                            
                        </tr>
                            <tr>
                            <th class="precios">$400.000</th>
                            </tr>
                    </table>
                </td>
            </tr>
            
        </table>
    </div>
    <div class="titulos">
        <h2>Mas vendidos</h2>
    </div>
    <div class="ofertas">
        <table class="tabla" cellpadding="" style="" width="90%">

            <tr>
                <?php 
             for ($cn=1; $cn<=3 ; $cn++) { 
                for($i=0; $i <=4 ; $i++){
                    include'includes/articulo.php';
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
                <td><a href="buscar.php"><img class="imagenes_destacadas" src="imagenes/zapatos.png">
                        <br>
                        <h3>Calzado</h3>
                    </a></td>
            
            
                <td><a href="buscar.php"><img  class="imagenes_destacadas" src="imagenes/telefonos.jpg">
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
                    include'includes/articulo.php';
                    if($i==4){
                        echo'</tr><tr>';
                    }}
             }
                 ?>

            </tr>
            
        </table>
    </div>

    </section>
<?php require_once'includes/footer.php'?>





    