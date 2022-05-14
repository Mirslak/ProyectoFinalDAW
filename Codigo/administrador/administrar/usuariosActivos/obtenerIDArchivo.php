<?php

	session_start();
	require_once "../../clases/Archivo.php";
	$Archivo = new Archivo();
	$idArchivo = $_POST['idUsuario'];
	
	echo $Archivo->obtenerRutaArchivo($idArchivo);
?>	