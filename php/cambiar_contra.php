<?php 

include 'conect.php';
include 'code.php';

if (isset($_POST['modificar'])) {
		$mail = $conect->real_escape_string($_POST['email']);
		$nueva_pass = $conect->real_escape_string($_POST['contra']);
		cambiar_contraseña($nueva_pass, $mail, $conect);
		header('location:../index.php');
	}