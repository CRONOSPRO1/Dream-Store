<?php require_once'includes/barra.php' ?>
    <div class="cont_ubicacion">
        <div class="ubicacion_mapa">
           <center> <p>Mapa</p></center>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.8752658004933!2d-74.0942309857368!3d4.616330943669952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f996f784e82a1%3A0xde1500803ab6185c!2sSENA%20Centro%20de%20Dise%C3%B1o%20y%20Metrolog%C3%ADa!5e0!3m2!1ses!2sco!4v1585579319048!5m2!1ses!2sco"  class="ubicacion_mapa_api" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="ubicacion_text">
<p>Filtro para ver productos cerca de ti!</p>
<BR>

<form action="index.html">
    <p>Ciudad</p>
    <input type="text"  class="inputs" placeholder="Escribe aqui tu ciudad" required>
   
    <p>Localidad</p>
    <input type="text" class="inputs" placeholder="Escribe aqui tu localidad" required>
    
    <p>Barrio</p>
<input type="text" class="inputs" placeholder="Escribe aqui tu barrio">
<br>
<br>
<input type="submit" class="btn_ingresar" value="Filtrar">
</form>

        </div>


    </div>







    <?php require_once'includes/footer.php'?>