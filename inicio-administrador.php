
<?php require_once'includes/barra.php' ?>
    <div  class="iniciar">
      <br>
      <h3>Iniciar sesion como administrador</h3>
    
      <form action="includes/val_admin.php" method="POST">
        
          <p>Usuario</p>
          <br>
          <input type="text" class="inputs" name="txtusuario" required>
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
      
  </div>



  <?php require_once'includes/footer.php'?>