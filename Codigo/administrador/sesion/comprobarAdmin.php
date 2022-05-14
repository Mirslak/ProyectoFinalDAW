<?php

  include_once "../../database/conexion.php";

  include_once "../../DAO/Administradores.php";

  //Recogemos los datos del formulario
  $email = $_POST['email'];

  $password = $_POST['password'];

  //Realizamos el login con los datos recibidos
  $consulta = consultaLogin($conexion, $email, $password);

  if (mysqli_num_rows($consulta)==1) {
		$fila = mysqli_fetch_assoc($consulta);
		crearSesion($fila);
        echo "<script>window.open('../index.php','_self')</script>";
	} else {
        echo "<script>alert('Error al iniciar sesión, datos incorrectos.')</script>"; 
		echo "<script>window.open('login.php','_self')</script>";
	}

?>