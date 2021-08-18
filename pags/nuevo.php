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
			<h2>Nuevo registro</h2>
		</div>
		<div class="container_body">
			<form action="../php/insert.php" method="post">
				<div class="form_div">
					<label for="nombre">Nombre del producto</label>
					<input type="text" placeholder="Nombre del producto" name="nombre" required>
					<label for="marca">Marca del producto</label>
					<input type="text" placeholder="Marca del producto" name="marca" required>
					<label for="unidades">Cantidad de unidades</label>
					<input type="number" placeholder="Cantidad de unidades en poder" name="unidades" required>
				</div>
				<div class="form_btn">
					<button class="btn" type="submit">Subir registro</button>
				</div>
			</form>	
		</div>
	</div>
</body>
</html>