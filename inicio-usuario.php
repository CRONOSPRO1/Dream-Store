
<?php require_once'includes/barra.php' ?>
    <div  class="iniciar">
      <br>
      <h3>Iniciar sesion como usuario</h3>
    
      <form action="includes/val_usu.php" method="POST">
        
          <p>Correo electronico</p>
          <br>
          <input type="email" class="inputs" name="txtcorreo" required>
          <br>
          <br>
          <p>Contraseña</p>
          <br>
          <input type="password" class="inputs" name="txtclave" value=""required>
          <br>
          <br>
          <input type="submit" class="btn_ingresar" value="Ingresar">

      </form>
      <br>
      
      <p style="font-size: 20px;">No tienes cuenta , <a href="registro-usuario.php">crear una cuenta</a></p>
      <br>
  </div>






  <?php require_once'includes/footer.php'?>