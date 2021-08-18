<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MyStock</title>

	<link rel="shortcut icon" href="fav.png">
	<link rel="stylesheet" href="style.css">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</head>
<body style="background-color: #313542;">
	<div class="login">
		<h1>LOGIN</h1>
		<form action="php/validate.php" method="post" class="form_entrar">
			<div class="container">
				<label for="email">Correo Electrónico</label>
				<input type="email" placeholder="Enter your e-mail" name="email" required>

				<label for="contra">Contraseña</label>
				<input type="password" placeholder="Enter your password" name="contra" required>

				<button type="submit">LOGIN</button>

				<p class="link_en"><a href="pags/register.php" class="link_en">¿Aún no tienes una cuenta? Regístrate aquí</a></p>
				<p class="link_en2"><a href="pags/cambia.php" class="link_en2">¿Olvidaste tu contraseña? Cambiala aquí</a></p>
			</div>	
		</form>
	</div>
</body>
</html>