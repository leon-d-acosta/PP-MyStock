<?php 
include 'conect.php';

function encriptar($password){
	$hash = password_hash($password, PASSWORD_DEFAULT);
	return $hash;
}	

function desencriptar($password, $hash){
	$verif = password_verify($password, $hash);
	return $verif;
}

function logout(){
	session_start();
	session_unset();
	session_destroy();
	header('location:../index.php');
}

function cambiar_contraseña($nueva_contra, $email, $conect){
	$nueva_contra_hash = encriptar($nueva_contra);
	$actualiza = "UPDATE user SET contra = '$nueva_contra_hash' 
					WHERE email = '$email'";
	$actualizar = $conect->query($actualiza);
}