<?php
require_once 'conexion.php';
$usuario = $_SESSION['usuario'];
if (isset($_POST['txtnombre'])) {
    $identificacion = $_POST['txtidentificacion'];
    $nombre = $_POST['txtnombre'];
    $apellido = $_POST['txtapellido'];
    $telefono = $_POST['txttelefono'];
    $direccion = $_POST['txtdireccion'];
    $fecha_nac = $_POST['txtfechanac'];
    $ciudad = $_POST['txtciudad'];
    $correo = $_POST['txtcorreo'];
    $clave = $_POST['txtclave'];
    $query = "UPDATE usuario SET identificacion='$identificacion',nombre='$nombre',apellido='$apellido',
telefono=$telefono,direccion='$direccion',fecha_nac='$fecha_nac',correo='$correo',ciudad='$ciudad',clave='$clave' WHERE nombre='$usuario'";
    $resultado = $conexion->query($query);
    if ($resultado) {
        $_SESSION['usuario'] = $nombre;
        echo "<script>alert('Usuario modificado correctamente');location=href='../usuario/index-usuario.php'</script>";
    } else {
        echo "Modificacion no exitosa";
    }
}
?>