<?php require_once'../includes/conexion.php'?>
<?php if(isset($_SESSION['administrador'])){?>
<?php require_once'../includes/barra-administrador.php';?>
<div class="cont_ubicacion">
<div class="bolsa">
            <table width="100%" border=1 class="tabla_bolsa">
<tr>
 <td><h3>Id</h3></td>
<td><h3>Identificacion</h3></td>
<td><h3>Nombre </h3></td>
<td><h3>Apellido </h3></td>
<td><h3>Telefono</h3></td>
<td><h3>Direccion</h3></td>
<td><h3>Fecha de nacimiento</h2></td>
<td><h3>Ciudad</h3></td>
<td><h3>Correo</h3></td>
</tr>
<?php 
$query="SELECT * FROM usuario";
$resultado=mysqli_query($conexion,$query);
while ($mostrar=mysqli_fetch_assoc($resultado)):
?>
<tr>
    <td><h4><?= $mostrar['id_usuario'] ?><h4></td>
    <td><h4><?= $mostrar['identificacion'] ?><h4></td>
    <td><h4><?= $mostrar['nombre'] ?><h4></td>
<td><h4><?= $mostrar['apellido'] ?><h4></td>
<td><h4><?= $mostrar['telefono'] ?><h4></td>
<td><h4><?= $mostrar['direccion'] ?><h4></td>
<td><h4><?= $mostrar['fecha_nac'] ?><h4></td>
<td><h4><?= $mostrar['ciudad'] ?><h4></td>
<td><h4><?= $mostrar['correo'] ?><h4></td>
<td class="btna"><a href="../includes/borrar_usu_admi.php?us=<?= $mostrar['nombre'] ?>">Eliminar</a></td>
</tr>
<?php
endwhile;
?>
</table>
</div>
</div>
    </div>
    
    <?php require_once'../includes/footer.php'?>
            <?php }else {
                echo "<script>location=href='../includes/ini_desa.php';</script>";
            } ?>
