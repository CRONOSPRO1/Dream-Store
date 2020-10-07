<?php

require_once 'conexion.php';
if (!$conexion) {
    die("No hay conexión: " . mysqli_connect_error());
}

$correo = $_POST["txtcorreo"];
$pass = $_POST["txtclave"];

$query = mysqli_query($conexion, "SELECT * FROM usuario WHERE  correo= '" . $correo . "' and clave = '" . $pass . "'");
$nr = mysqli_num_rows($query);


if ($nr == 1) {
    echo '<script>alert("Bienvenido");</script>';
    $consulta = "SELECT nombre,id_usuario FROM usuario where correo='" . $correo . "'";
    $resultado = mysqli_query($conexion, $consulta);
    $usuario = mysqli_fetch_array($resultado);
    session_start();
    $_SESSION['usuario'] = $usuario[0];
    $_SESSION['id']=$usuario[1];
    var_dump($usuario);
    echo $_SESSION['usuario'];
    if ($_SESSION['usuario']) {
       header('location:../usuario/index-usuario.php');
    } else {
        echo 'lol';
    }
} else if ($nr == 0) {

    echo '<script>alert("Usuario incorrecto");location = href = "../inicio-usuario.php"</script>';
}
?>
