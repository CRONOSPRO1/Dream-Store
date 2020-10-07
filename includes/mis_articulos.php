<?php
require_once 'conexion.php';
$id = $_SESSION['id'];
$query = "SELECT * FROM productos where id_vendedor='$id'";
$resultado = mysqli_query($conexion, $query);
$row_cnt = $resultado->num_rows;
$i = 0;

while ($mostrar = mysqli_fetch_assoc($resultado)) : ?>
    <?php $i = $i + 1; ?>
    <?php if ($i > 5) {
        $i = 1;
        echo '</tr><tr>';
        echo '<td>
        <table width="220px">
        <tr>
        <th><a href="mis_articulos"><img src="../assets/imagenes/carrito3.png" title="Agregar a lista de deseos" class="iconos"></a></th>
        <th><button onclick="favoritos()"><img src="../assets/imagenes/favoritos.png" title="Agregar a lista de deseos" class="iconos"></button></th>
    </tr>
    <tr>
                   <th colspan="2"><a href="articulos-usuario.php"><img class="img_productos_principal" src="data:image/png;base64, ' . base64_encode($mostrar['imagen']) . '"></a></th> 
                   
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
    } else {
        echo '<td>
         <table width="220px">
         <tr>
         <th><a a href="../includes/bolsa_usuario.php?id='.$mostrar['id_producto'].'"><img src="../assets/imagenes/carrito3.png" title="Agregar a lista de deseos" class="iconos"></a></th>
         <th><button onclick="favoritos()"><img src="../assets/imagenes/favoritos.png" title="Agregar a lista de deseos" class="iconos"></button></th>
     </tr>
    <tr>
                    <th colspan="2"><a href="articulos_usuario_beta.php?id='.$mostrar['id_producto'].'"><img class="img_productos_principal" src="data:image/png;base64, ' . base64_encode($mostrar['imagen']) . '"></a></th> 
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
    } ?>
        
    
    <?php endwhile; ?>

     
 