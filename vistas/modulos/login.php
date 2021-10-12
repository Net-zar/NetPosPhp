<div id="back"></div>

<div class="login-box">
  <div class="login-logo">
   <img src="vistas/img/plantilla/iconpage.png" alt="" class="img-responsive" style="height: 70px; width:70px; margin: auto;" >
   <b style="color: whitesmoke;">NETGES</b>Web
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Ingresar al sistema</p>

    <form method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" required=>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
        </div>
     
      </div>

      <?php
     

      // Objeto que instancia el controlador de usuarios
      $login = new ControladorUsuarios();
      // ejecuta el metodo del controlador
      $login->ctrIngresoUsuario();


      ?>
    </form>

  

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->