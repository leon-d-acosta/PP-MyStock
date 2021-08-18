<?php 
	include('conect.php');
	$id = $_GET['id'];
	$s = "SELECT * FROM stock WHERE id = '$id'";
	$modificar = $conect->query($s);
	$row = $modificar->fetch_row();

	if (isset($_POST['modificar'])) {
		$id = $_POST['id'];
		$nombre = $conect->real_escape_string($_POST['nombre']);
		$marca = $conect->real_escape_string($_POST['marca']);
		$unidades = $conect->real_escape_string($_POST['unidades']);

		$actualiza = "UPDATE stock SET nombre = '$nombre', marca = '$marca', unidades = '$unidades' 
						WHERE id = '$id'";
		$actualizar = $conect->query($actualiza);
		header('location:../pags/tabla.php');
	}

