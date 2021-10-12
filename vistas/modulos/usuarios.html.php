<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Administrar Usuarios 
        
      </h1>
      <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i>Inicio</a></li>
       
       
        <li class="active">Administrar Usuarios</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content"> 

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
      
          <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">Agregar Usuario</button>
         
        </div>
        <div class="box-body">
          
        <table class="table table-bordered table-striped dt-responsive tablajs">
          
          <thead>
            <tr>
              <th style="width:10px;">#</th>
              <th>Nombre</th>
              <th>Usuario</th>
              <th>Foto</th>
              <th>Perfil</th>
              <th>Estado</th>
              <th>Ultimo Login</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Usuario Administrador</td>
              <td>Admin</td>
              <td><img src="vistas/img/usuarios/user.png" class="img-thumbnail" width="40px"></td>
              <td>Administrador</td>
              <td><button class="btn btn-success btn-xs">Activado</button></td>
              <td>2021-08-23</td>
              <td>
                <div class="btn-g">
                  <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                    <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                </div>
              </td>
            </tr>
          </tbody>
        </table>

        </div>
  
        
      </div>
   

    </section>
   
  </div>

  <!-- Modal Agregar usuario -->

  <!-- The Modal -->
<div id="modalAgregarUsuario" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">
      <div class="modal-header" style="background-color: #3c8dbc; color: white;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Agregar Usuario</h4>
      </div>
      <div class="modal-body">
        <div class="box-body">
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" class="form-control input-group-lg" name="nuevoNombre" placeholder="Ingresar nombre" required>
              
            </div>
          </div>

           <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-key"></i></span>
              <input type="text" class="form-control input-group-lg" name="nuevoUsuario" placeholder="IngresarUsuario" required>
              
            </div>
          </div>
           <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-lock"></i></span>
              <input type="password" class="form-control input-group-lg" name="nuevoPassword" placeholder="Ingresar contraseña" required>
              
            </div>
          </div>

           <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
             <select name="nuevoPerfil" class="form-control input-group-lg">
               <option value="">Seleccionar Perfil</option>
               <option value="Administrador">Administrador</option>
               <option value="Especial">Especial</option>
               <option value="Vendedor">Vendedor</option>
             </select>
              
            </div>
          </div>

          <div class="form-group">
            <div class="panel">Subir Foto</div>
            <input type="file" id="nuevaFoto" name="nuevaFoto">
            <p class="help-block">Peso máximo de la foto 5MB</p>
            <img src="vistas/img/usuarios/user.png" class="img-thumbnail" width="100 px">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

        <button type="submit" class="btn btn-primary">Guardar Usuario</button>
      </div>
    </div>

</form>
  </div>
</div>