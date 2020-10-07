<?php
$nombre = $_REQUEST['nombre'];
include 'conexion.php';
$query = "DELETE FROM productos where id_producto='$nombre'";
$resultado = $conexion->query($query);
if ($resultado) {
    header("location:../usuario/mis_productos.php");
} else {
    echo "Modificacion no exitosa";
}
?>