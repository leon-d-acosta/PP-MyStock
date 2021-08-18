<?php 

session_start();
include("conect.php");
include_once 'code.php';

$email = $_POST['email'];
$empresa = $_POST['empresa'];
$password1 = $_POST['contra'];

$select = "SELECT * FROM user WHERE email = '$email'";
$envio_select = $conect->query($select);
$num_rows = $envio_select->num_rows;

if ($num_rows == 1) {
	echo '<script language="javascript">alert("El mail que intenta registrar ya está en uso");</script>';
	header('location:../pags/register.php');
}
else{
	$contrahash = encriptar($password1);
	$insert = "INSERT INTO user(email, empresa, contra) VALUES ('$email', '$empresa', '$contrahash')";
	$envio_insert = $conect->query($insert);
	echo 'registro realizado';
	header('location:../index.php');
}