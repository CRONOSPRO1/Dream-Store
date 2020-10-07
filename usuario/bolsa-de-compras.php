<?php require_once '../includes/conexion.php' ?>
<?php if (isset($_SESSION['usuario'])) { ?>
    <?php require_once '../includes/barra_usuario.php'; ?>
    <div class="cont_ubicacion">
        <div class="bolsa">
            <center><h3>Mi bolsa de productos</h3></center>
            <hr>
            <table  width="100%" class="tabla_bolsa">
                <tr>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Estado </th>
                    <th>Descripcion</th>
                    <th>Tipo de vendedor</th>
                    <th>Eliminar</th>
                </tr>
                <tr>
                    <?php if (isset($_SESSION['bolsa'])) {
                        $variable = $_SESSION['bolsa'];
                        $cantidad = count($variable);
                        for ($i = 0; $i < $cantidad; $i++) {
                            $contador = $variable[$i];
                            $query = "SELECT * FROM productos where id_producto='$contador' "; ?>

                            <?php
                            $resultado = $conexion->query($query);
                            while ($mostrar = mysqli_fetch_assoc($resultado)) : ?>
                <tr>
                    
                    <th><?php echo  '<img class="img_productos_principal" src="data:image/png;base64, ' . base64_encode($mostrar['imagen']) . '">'?></th>
                    <th>
                        <h4><?= $mostrar['nombre_producto'] ?></h4>
                    </th>
                    <th>
                        <h4><?= $mostrar['precio'] ?></h4>
                    </th>
                    <th>
                        <h4><?= $mostrar['cantidad'] ?></h4>
                    </th>
                    <th>En espera </th>
                    <th>
                        <h4><?= $mostrar['descripcion'] ?></h4>
                    </th>
                    <th>Empresa</th>
                    <th>
                        <form method="" action=""><input value="Eliminar articulo" type="reset"></form>    
                    </th>
                    
                </tr>
                
            <?php
                            endwhile;
            ?>



    <?php }
                    } ?>
            </table>
        </div>
    </div>
    <?php require_once '../includes/footer.php' ?>
<?php } else {
    echo "<script>location=href='../includes/ini_desa.php';</script>";
} ?>