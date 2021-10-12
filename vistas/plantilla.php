<?php 
session_start();
?>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>NetGes 1.0 | POS </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
 
  <!-- STYLES -->

  <link rel="stylesheet" href="vistas/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="vistas/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/dist/css/AdminLTE.css">
  <!-- AdminLTE Skins -->
  <link rel="stylesheet" href="vistas/dist/css/skins/_all-skins.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">

<!-- SCRIPTS --> 
  <!-- jQuery 3 -->
<script src="vistas/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="vistas/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="vistas/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="vistas/dist/js/adminlte.min.js"></script>
<!-- DataTables -->
<script src="vistas/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="vistas/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="vistas/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
<script src="vistas/bower_components/datatables.net-bs/js/responsive.bootstrap.min.js"></script>
<!-- SweetAlert -->
<script src="vistas/plugins/sweetalert2//sweetalert2.all.js"></script>


  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-collapse sidebar-mini login-page">


<?php

if(isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"]=="ok")
{
echo '<div class="wrapper">';
// includes de todas las partes de la pagina 
include "modulos/cabecera.php";
include "modulos/menu.php";

// CONTENIDO //

//si se recibe una variable get "ruta" y tiene valor de inicio, abre modulo inicio
if(isset($_GET["ruta"])){

  if($_GET["ruta"] == "home"||
    $_GET["ruta"] == "usuarios" ||
    $_GET["ruta"] == "categorias" ||
    $_GET["ruta"] == "productos" ||
    $_GET["ruta"] == "clientes" ||
    $_GET["ruta"] == "ventas" ||
    $_GET["ruta"] == "crear-venta" ||
    $_GET["ruta"] == "reportes" ||
    $_GET["ruta"]== "salir")
  {
    include "modulos/".$_GET["ruta"].".php"; 
  }
  else
  {
    include"modulos/404.php";
  }

}

// include"modulos/usuarios.php";

include "modulos/footer.php";
echo '</div>';
} else{

  include "modulos/login.php";
}
?>
  

<!-- ./wrapper -->
<script src="vistas/js/plantilla.js"></script>

</body>
</html>

