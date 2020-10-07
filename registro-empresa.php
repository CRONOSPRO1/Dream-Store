<?php require_once'includes/barra.php' ?>
<div class="cont_registro">
    <div class="interior_registro">

        <p>Registrarse</p>
        <form action="index-empresa.html" method="">
            <p>NIT</p>
            <input type="number" class="input_registro" name="" value="" required>
            <p>Nombre empresa</p>
            <input type="text" class="input_registro" name="" value="" required>
            <p>Telefono</p>
            <input type="number" class="input_registro" name="" value="" required>
            <p>Direccion</p>
            <input type="text" class="input_registro" name="" value="" required>
            <iframe alt="Ubicacion va dentro de este campo" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.8752658004933!2d-74.0942309857368!3d4.616330943669952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f996f784e82a1%3A0xde1500803ab6185c!2sSENA%20Centro%20de%20Dise%C3%B1o%20y%20Metrolog%C3%ADa!5e0!3m2!1ses!2sco!4v1585098367679!5m2!1ses!2sco"
                width="500px" height="300px" frameborder="0" style="border:0;" allowfullscreen="" alt="Mapa de ubicacion" aria-hidden="false" tabindex="0"></iframe>
            <p>Ciudad</p>
            <input type="text" class="input_registro" name="" value="" required>
            <p>Correo electronico</p>
            <input type="email" class="input_registro" name="" value="" required>
            <p>Contraseña</p>
            <input type="password" class="input_registro" name="" value="" required>
            <p>¿A que categoria pertenece los productos que venderan?
                <select class="sel_reg" name="select">

                        <option value="">Ropa</option>
                        <option value="">Electrodomesticos</option>
                        <option value="">Tecnologia</option>
                        <option value="">Carros</option>
                        <option value="">Aseo</option>
                    </select></p>
            <br>




            <input type="submit" class="btn_submit" value="Registrar">
        </form>


    </div>


</div>

<?php require_once'includes/footer.php'?>