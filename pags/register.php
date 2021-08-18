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
	<div class="register">
		<h1>REGISTER</h1>
		<form action="../php/registration.php" method="post" class="form_reg">
			<div class="container">
				
				<label for="email">Correo Electrónico</label>
				<input type="email" placeholder="Enter your e-mail" name="email" required>

				<label for="empresa">Nombre de tu empresa</label>
				<input type="text" placeholder="Enter your business's name" name="empresa" required>

				<label for="contra">Contraseña</label>
				<input type="password" placeholder="Enter your password" name="contra" required>

				<button type="submit">REGISTRARSE</button>

				<p><a href="../index.php" class="link_en">¿Ya tienes una cuenta? Inicia sesión aquí</a></p>
			</div>	
		</form>
	</div>
</body>
</html>