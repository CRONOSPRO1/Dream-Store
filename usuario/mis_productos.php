<?php require_once '../includes/conexion.php' ?>
<?php if (isset($_SESSION['usuario'])) { ?>
    <?php require_once '../includes/barra_usuario.php'; ?>
    <div class="cont_ubicacion">
        <div class="bolsa">
        <center><h1>Mis productos</h1></center>
        
        <hr>
        <br><center>
            <table width="100%" class="tabla_bolsa">
                <tr>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Eliminar</th>
                </tr>
                <tr>
                <?php 
                 $id=$_SESSION['id'];
                 
$query="SELECT * FROM productos where id_vendedor='$id'";
$resultado=mysqli_query($conexion,$query);
while ($mostrar=mysqli_fetch_assoc($resultado)){
				echo '<tr>
                <th><img class="img_productos_principal" src="data:image/png;base64, ' . base64_encode($mostrar['imagen']) .'"></th>            
                <th>' . $mostrar['nombre_producto'] . '</th>
							<th>'.$mostrar['descripcion'].' </th>
                            <th>' . $mostrar['precio'] . '</th>
                            <th>' .$mostrar['cantidad'].'</th>
                            <th>' . $mostrar['categoria'] . '</th>
                            <th class="btna"><a href="../includes/eliminar_producto.php?nombre='. $mostrar['id_producto'].'">Eliminar</a></a></th>
						 </tr>';
			}
			?>
                





            </table>
            </center>
        </div>
    </div>



        




    <?php require_once '../includes/footer.php' ?>
<?php } else {
    echo "<script>location=href='../includes/ini_desa.php';</script>";
} ?>