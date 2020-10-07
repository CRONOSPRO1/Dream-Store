<?php
    require_once 'includes/barra.php';

?>
<?php require_once 'includes/categorias.php' ?>

</section>
<div class="listado">
    <table class="articulos_busqueda">
        <tr>


            <?php
            $buscar = $_GET['buscar'];
            $dbhost = "localhost";
            $dbuser = "root";
            $dbpass = "";
            $dbname = "dream";
            $conexion = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
            $query = "SELECT * FROM productos where nombre_producto='$buscar' ";
            $resultado = mysqli_query($conexion, $query);
            $row_cnt = $resultado->num_rows;
            $i = 0;

            while ($mostrar = mysqli_fetch_assoc($resultado)) : ?>
                <?php $i = $i + 1; ?>
                <?php if ($i > 2) {
                    $i = 1;
                    echo '</tr><tr>';
                    echo '<td>
     <table class="productos">
         <tr>
             <td rowspan="3">
             <a href="articulo_publicado.php?id=' . $mostrar['id_producto'] . '"><img class="img_productos" src="data:image/png;base64, ' . base64_encode($mostrar['imagen']) . '"></a>
             </td>
             <th>Huawei y9 2019</th>
             <th><button class="iconos_articulos" onclick="favoritos()"><img src="assets/imagenes/favoritos.png" title="Agregar a lista de deseos" class="iconos"></button></th>



         </tr>
         <tr>

             <th class="precios">' . $mostrar['precio'] . '</th>
         </tr>
         <tr>
             <th colspan="">En exceletes condicones ,tiene varios juegos </th>
             <th><button onclick="contactar"><img src="assets/imagenes/llamar.png" title="Contactar al vendedor" class="iconos"></button></th>
         </tr>
     </table>
 </td>';
                } else {
                    echo '            <td>
    <table class="productos">
        <tr><a href="">
            <td rowspan="3">
                
            <a href="articulo_publicado.php?id=' . $mostrar['id_producto'] . '"><img class="img_productos" src="data:image/png;base64, ' . base64_encode($mostrar['imagen']) . '"></a>

            </td>
            <th>' . $mostrar['nombre_producto'] . '</th>
            <th><button class="iconos_articulos" onclick="favoritos()"><img src="assets/imagenes/favoritos.png" title="Agregar a lista de deseos" class="iconos"></button></th>



        </tr>
        <tr>

            <th class="precios">' . $mostrar['precio'] . '</th>
        </tr>
        <tr>
            <th colspan="">' . $mostrar['descripcion'] . '</th>
            <th><button onclick="contactar"><img src="assets/imagenes/llamar.png" title="Contactar al vendedor" class="iconos"></button></th>
        </tr>
    </table>
</td>';
                } ?>
                <!--<th colspan="2"><a href="articulo_publicado.php?id='.$mostrar['id_producto'].'"><img class="img_productos_principal" src="data:image/png;base64, ' . base64_encode($mostrar['imagen']) . '"></a></th> -->

            <?php endwhile; ?>









        </tr>





    </table>
</div>

</div>
<?php require_once 'includes/footer.php' ?>