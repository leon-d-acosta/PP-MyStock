<?php  
	include 'conect.php';
	$id = $_GET['id'];
	$eliminar = "DELETE FROM stock WHERE id = '$id'";
	$elimina = $conect->query($eliminar);
	header('location:../pags/tabla.php');
	$conect->close();