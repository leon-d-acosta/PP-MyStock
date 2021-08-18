<?php 
	session_start();
	include('../php/conect.php');
	include('../php/update.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MyStock</title>

	<link rel="shortcut icon" href="../fav.png">
	<link rel="stylesheet" href="../style.css">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</head>
<body style="background-color: #313542;">
	
	<div class="bar col-12">
		<h1>MyStock</h1>
	</div>

	<div class="container_nuevo col-8">
		<div class="container_head">	
			<h2>Actualizar registro</h2>
		</div>
		<div class="container_body">
			<form action="../php/update.php" method="post">
				<div class="form_div">
					<input type="hidden" name="id" value="<?php echo $row[0]; ?>">
					<label for="nombre">Nombre del producto</label>
					<input type="text" value="<?php echo $row[1]; ?>" name="nombre" required>
					<label for="marca">Marca del producto</label>
					<input type="text" value="<?php echo $row[2]; ?>" name="marca" required>
					<label for="unidades">Cantidad de unidades</label>
					<input type="number" value="<?php echo $row[3]; ?>" name="unidades" required>
				</div>
				<div class="form_btn">
					<button class="btn" name="modificar" type="submit">RALIZAR CAMBIOS</button>
				</div>
			</form>	
		</div>
	</div>
</body>
</html>