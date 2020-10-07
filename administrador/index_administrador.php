<?php require_once'../includes/conexion.php'?>
<?php if(isset($_SESSION['administrador'])){?>
<?php require_once'../includes/barra-administrador.php';?>
    <div class="cont_ubicacion">
        <div class="bolsa">
            <h2>Bienvenido <?php echo $_SESSION['administrador']; ?></h2>
        </div>
        <div class="bolsa">
            <center>
                <h2>¿Quieres publicar otro producto?</h2>
                <img src="imagenes/publicar.jpg" ><br>
            <input type="submit" class="btn_ingresar" value="Publicar">
            <h3>Tus estadisticas</h3>
            <input type="submit" class="btn_ingresar" value="Ver">
            <h3>Tus articulos vendidos</h3>
            <input type="submit" class="btn_ingresar" value="Ver">
            <h3>Tus clientes</h3>
            <input type="submit" class="btn_ingresar" value="Ver">
            <h3>Ayuda</h3>
            <input type="submit" class="btn_ingresar" value="Ver">
        </center>
            
           
        </div>

    </div>

    <?php require_once'../includes/footer.php'?>
            <?php }else {
                echo "<script>location=href='../includes/ini_desa.php';</script>";
            } ?>