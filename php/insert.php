<?php 
session_start();
include('conect.php');

$email = $_SESSION['email'];
$nombre = $_POST['nombre'];
$marca = $_POST['marca'];
$unidades = $_POST['unidades'];

$insert = "INSERT INTO stock(nombre, marca, unidades, email) VALUES ('$nombre', '$marca', '$unidades', '$email')";
$envio_insert = $conect->query($insert);
$select = "SELECT * FROM stock";
$envio_select = $conect->query($select);
$num_rows = $envio_select->num_rows;
if ($num_rows > 0) {
	echo 'registro realizado';
	header('location:../pags/tabla.php');
}
else{
	echo '<script language="javascript">alert("ocurrió un error al agregar un producto a su stock");</script>';
	header('location:../pags/nuevo.php');
}

