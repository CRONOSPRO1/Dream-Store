<?php 
require_once'conexion_pdo.php';
if ($_POST) {
    var_dump($_POST);
    $usuario=$_POST['usuario'];
    $nombre=$_POST['txtnombre'];
    $descripcion=$_POST['txtdescripcion'];
    $precio='$'.$_POST['txtprecio'];
    $cantidad=$_POST['txtcantidad'];
    $categoria=$_POST['txtcategoria'];
    $id=$_POST['id_usuario'];

    $cargarImagen= ($_FILES['imagen']['tmp_name']); //carga el archivo
	$imagen = fopen($cargarImagen, 'rb');

    $stmt = $conexion->prepare("INSERT INTO productos (nombre_producto,descripcion,precio,cantidad,categoria,imagen,nombre_vendedor,id_vendedor)
    VALUES
    (:nombre,:descripcion,:precio,:cantidad,:categoria,:imagen,:usuario,:id)" );
    
    $stmt->bindParam(':nombre',$nombre,PDO::PARAM_STR);
    $stmt->bindParam(':descripcion',$descripcion,PDO::PARAM_STR);
    $stmt->bindParam(':precio',$precio,PDO::PARAM_STR);
    $stmt->bindParam(':cantidad',$cantidad,PDO::PARAM_INT);
    $stmt->bindParam(':categoria',$categoria,PDO::PARAM_STR);
    $stmt->bindParam(':imagen',$imagen,PDO::PARAM_LOB);
    $stmt->bindParam(':usuario',$usuario,PDO::PARAM_STR);
    $stmt->bindParam(':id',$id,PDO::PARAM_INT);

    $stmt->execute();
echo'<script>alert("Producto agregado")</script>';
header('location: ../usuario/index-usuario.php');

}

?>