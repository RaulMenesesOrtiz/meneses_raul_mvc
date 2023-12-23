<?php
	
	class ClientesController {
		
		public function __construct(){
			require_once "models/ClientesModel.php";
		}
		
		public function index(){
			
			
			$clientes = new Clientes_model();
			$data["titulo"] = "Clientes";
			$data["clientes"] = $clientes->get_clientes();
			
			require_once "views/clientes/clientes.php";	
		}
		
		public function nuevo(){
			
			$data["titulo"] = "Clientes";
			require_once "views/clientes/clientes_nuevo.php";
		}
		
		public function guarda(){
			
			$nombre = $_POST['nombre'];
			$deuda = $_POST['deuda'];
			$dias_mora = $_POST['dias_mora'];
			$observaciones = $_POST['observaciones'];
			$a_quien_debe = $_POST['a_quien_debe'];
			
			$clientes = new Clientes_model();
			$clientes->insertar($nombre, $deuda, $dias_mora, $observaciones, $a_quien_debe);
			$data["titulo"] = "Clientes";
			$this->index();
		}
		
		public function modificar($id){
			
			$clientes = new Clientes_model();
			
			$data["id"] = $id;
			$data["clientes"] = $clientes->get_clientes($id);
			$data["titulo"] = "Clientes";
			require_once "views/clientes/clientes_modifica.php";
		}
		
		public function actualizar(){

			$id = $_POST['id'];
			$nombre = $_POST['nombre'];
			$deuda = $_POST['deuda'];
			$dias_mora = $_POST['dias_mora'];
			$observaciones = $_POST['observaciones'];
			$a_quien_debe = $_POST['a_quien_debe'];

			$clientes= new Clientes_model();
			$clientes->modificar($id, $nombre, $deuda, $dias_mora, $observaciones, $a_quien_debe);
			$data["titulo"] = "Clientes";
			$this->index();
		}
		
		public function eliminar($id){
			
			$clientes = new Clientes_model();
			$clientes->eliminar($id);
			$data["titulo"] = "Clientes";
			$this->index();
		}	
	}
?>