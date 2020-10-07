<?php
require_once "conexion.php";
     $identificacion=$_POST['txtidentificacion'];
     $nombre=$_POST['txtnombre'];
     $apellido=$_POST['txtapellido'];
     $telefono=$_POST['txttelefono'];
     $direccion=$_POST['txtdireccion'];
     $fecha_nac=$_POST['txtfechanac'];
     $correo=$_POST['txtcorreo'];
     $ciudad=$_POST['txtciudad'];
     $clave=$_POST['txtclave'];
     
    if ($identificacion!=null||$nombre!=null||$apellido!=null||$telefono=!null||$direccion=!null||$correo=!null) {
        $insertar="INSERT INTO usuario (identificacion,nombre,apellido,telefono,direccion,fecha_nac,correo,ciudad,clave)values
        ('$identificacion','$nombre','$apellido','$telefono','$direccion','$fecha_nac','$correo','$ciudad','$clave')";
    $query=mysqli_query($conexion,$insertar);
   /*echo '<script> alert("usuario creado,ya puedes iniciar sesion");location = href = "../inicio-usuario.php" </script>';*/   
}
?>

<!DOCTYPE html>
<!--jajajaja-->
<html lang="en">
<!--Prueba de cambios de mega-->

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/estilos.css" type="text/css">
    <script type="text/javascript" src="../assets/js/script.js"></script>
    <title>Dream Store</title>
</head>

<body onload="temporizadorb()"style="background-color:white;">
    <div class="barra">
        <table width=100%>
            <tr>
                <td><center><a href="index.php" id="dream">Dream Store</a></td></center></tr>
                          
        </table>
      
    </div>
    <div class="iniciar">
    <hr>
    <h3>Ya estas registrado,Inicia sesion</h3>
<hr>
<img src="../assets/imagenes/carga.gif" height="400px">
<hr>

</div>


