<?php require_once'../includes/conexion.php'?>
<?php if(isset($_SESSION['usuario'])){?>
<?php require_once'../includes/barra_usuario.php'?>

<div class="cont_registro">
<div class="interior_registro">
<?php

$usuario=$_SESSION['usuario'];
$query="Select *  from usuario where nombre='$usuario' ";
$resultado=$conexion->query($query);
$mostrar=$resultado->fetch_assoc();
?>  
    <left><h1 style="color:black;">Modificar informacion de usuario</h1></left>
    <br>
<form action="../includes/modif_usu.php" method="POST">
<p>Identificacion</p>
<input type="number" class="input_registro" name="txtidentificacion" value="<?php echo $mostrar['identificacion'];?>" required>
<p>Nombre</p>
<input type="text"class="input_registro"name="txtnombre" value="<?php echo $mostrar['nombre'];?>" required>
<p>Apellido</p>
<input type="text" class="input_registro"name="txtapellido" value="<?php echo $mostrar['apellido'];?>" required>
<p>Foto de perfil</p>
<img src="../assets/imagenes/imagen_usuario.jpg" class="fotos">
<input type="button" class="btn_submit"value="Insertar">
<p>Telefono</p>
<input type="number" class="input_registro"name="txttelefono"  value="<?php echo $mostrar['telefono'];?>" required>
<p>Direccion</p>
<input type="text"class="input_registro"name="txtdireccion" value="<?php echo $mostrar['direccion'];?>" required>
<iframe alt="Ubicacion va dentro de este campo"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.8752658004933!2d-74.0942309857368!3d4.616330943669952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f996f784e82a1%3A0xde1500803ab6185c!2sSENA%20Centro%20de%20Dise%C3%B1o%20y%20Metrolog%C3%ADa!5e0!3m2!1ses!2sco!4v1585098367679!5m2!1ses!2sco" width="500px" height="300px" frameborder="0" style="border:0;" allowfullscreen="" alt="Mapa de ubicacion" aria-hidden="false" tabindex="0"></iframe>
<p>Fecha de nacimiento</p>
<input type="date" class="input_registro"name="txtfechanac" value="<?php echo $mostrar['fecha_nac'];?>" required>
<p>Ciudad</p>
<input type="text" class="input_registro"name="txtciudad" value="<?php echo $mostrar['ciudad'];?>" required>
<p>Correo electronico</p>
<input type="email" class="input_registro"name="txtcorreo" value="<?php echo $mostrar['correo'];?>" required>
<p>Contraseña</p>
<input type="password" class="input_registro"name="txtclave" value="<?php echo $mostrar['clave'];?>" required>
<br>




<input type="submit" class="btn_submit" value="Modificar">
 </form>
 <a href="../includes/borrar_usu.php">Eliminar cuenta</a>
</div>


</div>



    <?php require_once'../includes/footer.php'?>
            <?php }else {
                echo "<script>location=href='../includes/ini_desa.php';</script>";
            } ?>


