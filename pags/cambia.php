<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MyStock</title>
	<link rel="shortcut icon" href="fav.png">
	<link rel="stylesheet" href="../style.css">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</head>
<body style="background-color: #313542;">
	<div class="container_nuevo col-8">
		<div class="container_head">	
			<h2>Cambiar contraseña</h2>
		</div>
		<div class="container_body">
			<form action="../php/cambiar_contra.php" method="post">
				<div class="form_div">
					<label for="email">Correo electronico</label>
					<input type="email" placeholder="Ingrese su correo electronico" name="email" required>
					<label for="contra">Contraseña nueva</label>
					<input type="password" placeholder="Ingrese su contraseña" name="contra" required>
				</div>
				<div class="form_btn_act">
					<button class="btn" name="modificar" type="submit">RALIZAR CAMBIO</button>
				</div>
			</form>	
		</div>
	</div>
</body>
</html>