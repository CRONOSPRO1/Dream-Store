<?php

require_once'conexion.php';
    if (!$conexion) 
    {
        die("No hay conexión: ".mysqli_connect_error());
    }
    
    $nom_usu = $_POST["txtusuario"];
    $pass = $_POST["txtclave"];
    
    $query = mysqli_query($conexion,"SELECT * FROM administrador WHERE  usuario= '".$nom_usu."'and clave= '".$pass."'"); 
    $nr = mysqli_num_rows($query);

    if($nr == 1)
    {
    echo '<script>alert("Bienvenido");</script>';
    $consulta="SELECT usuario FROM administrador where usuario='".$nom_usu."'";
      $resultado=mysqli_query($conexion,$consulta);
      $administrador=mysqli_fetch_array($resultado);
       $_SESSION['administrador']=$administrador[0];
       echo $_SESSION['administrador'];
       if($_SESSION['administrador']){
          header('location:../administrador/index_administrador.php');
       }
       
    
    }
    else if ($nr == 0) 
    {
       
    echo '<script>alert("Usuario incorrecto");location = href = "../inicio-administrador.php"</script>';
    }
 
        
?>