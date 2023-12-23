<?php
	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $data["titulo"]; ?></title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<script src="assets/js/bootstrap.min.js" ></script>
	</head>
	
	<body>
		<div class="container">
			
			<h2><?php echo $data["titulo"]; ?></h2>
			
			<form id="nuevo" name="nuevo" method="POST" action="index.php?c=clientes&a=actualizar" autocomplete="off">
				
				<input type="hidden" id="id" name="id" value="<?php echo $data["id"]; ?>" />
				
				<div class="form-group">
					<label for="nombre">Nombre</label>
					<input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $data["clientes"]["nombre"]?>" />
				</div>
				
				<div class="form-group">
					<label for="deuda">Deuda</label>
					<input type="number" class="form-control" id="deuda" name="deuda" value="<?php echo $data["clientes"]["deuda"]?>" />
				</div>
				
				<div class="form-group">
					<label for="dias_mora">Dias Mora</label>
					<input type="number" class="form-control" id="dias_mora" name="dias_mora" value="<?php echo $data["clientes"]["dias_mora"]?>" />
				</div>
				
				<div class="form-group">
					<label for="observaciones">Observaciones</label>
					<input type="text" class="form-control" id="observaciones" name="observaciones" value="<?php echo $data["clientes"]["observaciones"]?>" />
				</div>
				
				<div class="form-group">
					<label for="a_quien_debe">Empresa de deuda</label>
					<input type="text" class="form-control" id="a_quien_debe" name="a_quien_debe" value="<?php echo $data["clientes"]["a_quien_debe"]?>" />
				</div>
				
				<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
				
			</form>
		</body>
	</html>		