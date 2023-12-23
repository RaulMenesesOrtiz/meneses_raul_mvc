<?php
	
	class Conectar {
		
		public static function conexion(){
			
			$conexion = new mysqli("servidor", "usuario", "contraseña", "nombre_base");
			return $conexion;
			
		}
	}
?>