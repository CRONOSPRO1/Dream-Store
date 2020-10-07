<?php require_once '../includes/conexion.php' ?>
<?php if (isset($_SESSION['usuario'])) { ?>
    <?php require_once '../includes/barra_usuario.php'; ?>
    <div class="cont_ubicacion">
        <div class="vender_imagen">

            <center>
                <p>Vender productos</p>
            </center>
            <br>
            
            <img src="../assets/imagenes/logo.jpg" class="imagen_insertar">
        </div>
        <div class="vender_texto">
            <center>
                <h2>Vende tu producto a un solo click!</h2>
            </center>
            <BR>

            <form action="../includes/registrar_productos.php" method="POST" enctype="multipart/form-data">
                <p>Nombre del producto</p>
                <input type="hidden" value="<?php echo $_SESSION['usuario'] ?>" name="usuario">
                <input type="hidden" value="<?php echo $_SESSION['id'] ?>" name="id_usuario">
                
                <input type="text" name="txtnombre" id="" class="inputs" placeholder="Escribe aqui tu ciudad" required>
                
                <p>Descripcion </p>
                <input type="text" name="txtdescripcion" id="" class="inputs" placeholder="Escribe aqui la descripcion" required>
                
                <p>Precio</p>
                <input type="number" name="txtprecio" id="" class="inputs" placeholder="Escribe el precio de tu articulo" required>
                
                <p>Cantidad</p>
                <input type="number" name="txtcantidad" id="" class="inputs" placeholder="Escribe la cantidad de productos" required>
               
                <p>Imagen</p>
                <input type="file" name="imagen" id="" " placeholder="Ingrese la foto del producto" required>
                <br>
                <br>
                <p>¿A que categoria pertenece el articulo?
                    <select class="sel_reg" name="txtcategoria">

                        <option value="Ropa">Ropa</option>
                        <option value="Electrodomesticos">Electrodomesticos</option>
                        <option value="Tecnologia">Tecnologia</option>
                        <option value="Carros">Carros</option>
                        <option value="Aseo">Aseo</option>
                    </select></p>



                <input type="submit" class="btn_ingresar" value="Publicar">
            </form>

        </div>


    </div>

    <?php require_once '../includes/footer.php' ?>
<?php } else {
    echo "<script>alert('No has iniciado sesion');location=href='../inicio-usuario.php';</script>";
} ?>