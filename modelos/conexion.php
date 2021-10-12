<?php 

class Conexion {


	static public function conectar()
	{
		$link = new PDO("mysql:host=localhost;dbname=pos",
						"root",
						"");

		//evaluar la informacion para aceptar caracteres latinos, etc
		$link->exec("set names utf8");

		return $link;
	}
} 