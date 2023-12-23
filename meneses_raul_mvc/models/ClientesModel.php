<?php
	
	class Clientes_model {
		
		private $db;
		private $clientes;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->clientes = array();
		}
		
		public function get_clientes()
		{
			$sql = "SELECT * FROM clientes";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->clientes[] = $row;
			}
			return $this->clientes;
		}
		
		public function insertar($nombre, $deuda, $dias_mora, $observaciones, $a_quien_debe){
			
			$resultado = $this->db->query("INSERT INTO clientes (nombre, deuda, dias_mora, observaciones, a_quien_debe) VALUES ('$nombre', '$deuda', '$dias_mora', '$observaciones', '$a_quien_debe')");
			
		}
		
		public function modificar($id, $nombre, $deuda, $dias_mora, $observaciones, $a_quien_debe){
			
			$resultado = $this->db->query("UPDATE clientes SET placa='$nombre', marca='$deuda', modelo='$dias_mora', anio='$observaciones', color='$a_quien_debe' WHERE id = '$id'");			
		}
		
		public function eliminar($id){
			
			$resultado = $this->db->query("DELETE FROM clientes WHERE id = '$id'");
			
		}
		
		public function get_vehiculo($id)
		{
			$sql = "SELECT * FROM clientes WHERE id='$id' LIMIT 1";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}
	} 
?>