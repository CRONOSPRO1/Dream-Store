<?php
require_once 'conexion.php';
$id = $_REQUEST['id'];
$_SESSION['bolsa'][] = $id;
echo '<script>alert("Producto agregado");location=href="../usuario/index-usuario.php"</script>';
