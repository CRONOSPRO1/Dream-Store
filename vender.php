<?php require_once'includes/barra.php' ?>
<div class="cont_ubicacion">
    <div class="vender_imagen">

        <center>
            <p>Tus sueños a un solo click!</p>
            
        </center>
        <img src="assets/imagenes/logo.jpg" class="imagen_insertar">
        <br>
        <br>
        <center>
            <button onclick="registrar()" class="btn_ingresar" onclick="insetar()">Publicar</button></center>
    </div>
    <div class="vender_texto">
        <h1><a href="registro-usuario.php">Registrarse</a> para vender tus productos!</h1>
       

        <br>
        <form action="index.html">
            <p>Nombre del producto</p>
            <input type="text" class="inputs" placeholder="Escribe aqui tu ciudad" required>
            <p>Descripcion </p>
            <input type="text" class="inputs" placeholder="Escribe aqui la descripcion" required>
            <p>Precio</p>

            <input type="number" class="inputs" placeholder="Escribe el precio de tu producto" required>
            <p>Cantidad</p>
            <input type="number" class="inputs" placeholder="Escribe la cantidad de productos" required>
            <br>
            <br>
            <p>¿A que categoria pertenece el producto?
                <select class="sel_reg" name="select">

        <option value="">Ropa</option>
        <option value="">Electrodomesticos</option>
        <option value="">Tecnologia</option>
        <option value="">Carros</option>
        <option value="">Aseo</option>
    </select></p>



            <input type="submit" class="btn_ingresar" value="Filtrar">
        </form>

    </div>


</div>








<?php require_once'includes/footer.php'?>