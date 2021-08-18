<?php 

session_start();
include "conect.php";
include 'code.php';
//include 'registration.php';

$email = $_POST['email'];
$password = $_POST['contra'];
$contra="SELECT contra FROM user WHERE email = '$email'";
$env_con = $conect->query($contra);
$fila = mysqli_fetch_assoc($env_con);
$passhash = $fila['contra'];
$contador = 0;

if (password_verify($password, $passhash)) {
	$contador++;
}
else{
	header('location:../index.php');
}


if ($contador > 0) {
	$password = $passhash;
	$sel = "SELECT * FROM user WHERE email = '$email' && contra = '$password'";
	$env_sel = $conect->query($sel);
	$num = $env_sel->num_rows;

	if ($num > 0) {
		$empresa = "SELECT empresa AS empresa FROM user WHERE email = '$email' && contra = '$password'";
		$envio = $conect->query($empresa);
		$row = mysqli_fetch_assoc($envio);
		$_SESSION['email'] = $email;
		$_SESSION['empresa'] = $row['empresa'];
		header('location:../pags/tabla.php');
	}
	else{
		header('location:../index.php');
	}
}
else{
	header('location:../index.php');
}




















/*

$select = "SELECT * FROM user WHERE email = '$email' && contra = '$password'";
$envio_select = $conect->query($select);
$num_rows = $envio_select->num_rows;

if ($num_rows > 0) {
	session_start();
	$empresa = "SELECT empresa AS empresa FROM user WHERE email = '$email' && contra = '$password'";
	$envio = $conect->query($empresa);
	$row = mysqli_fetch_assoc($envio);
	$_SESSION['email'] = $email;
	$_SESSION['empresa'] = $row['empresa'];
	header('location:../pags/tabla.php');
}
else {
	header('location:../index.php');
}
}
else{
header('location:../index.php');
}*/