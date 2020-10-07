<?php
$us = $_REQUEST['us'];
include 'conexion.php';
$query = "DELETE FROM usuario where nombre='$us'";
$resultado = $conexion->query($query);
if ($resultado) {
    header("location:../administrador/usuarios_registrados.php");
} else {
    echo "Modificacion no exitosa";
}
?>