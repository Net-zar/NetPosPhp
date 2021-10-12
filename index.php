<?php 

// requerimiento de los controladores
require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuarios.controlador.php";
//require_once "controladores/productos.controlador.php";
//require_once "controladores/ventas.controlador.php";

// requerimiento de los modelos 
require_once "modelos/usuarios.modelo.php";
//require_once "modelos/categorias.modelo.php";
//require_once "modelos/productos.modelo.php";
//require_once "modelos/ventas.modelo.php"; 




// objeto que instancia a la clase Plantilla del controlador
$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();
