<?php
require_once 'conexion.php';
$usuario = $_SESSION['usuario'];
echo $_SESSION['usuario'];
$query = "DELETE  FROM usuario where nombre='$usuario'";
$resultado = $conexion->query($query);
if ($resultado) {
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

    <body style="background-color:white;">
        <div class="barra">
            <table width=100%>
                <tr>
                    <td><a href="" id="dream">Dream Store</a></td>
                </tr>

            </table>

        </div>
        <div class="iniciar">
            <hr>
            <h3>Eliminamos tu cuenta correctamente <?php if (isset($_SESSION['usuario'])) echo $_SESSION['usuario'] ?></h3>
            <hr>
            <img src="../assets/imagenes/carga.gif" height="400px">
            <hr>
        </div>


    <?php
    session_destroy();
    echo "<script>temporizador();</script>";
} else {
    echo "Modificacion no exitosa";
}
    ?>