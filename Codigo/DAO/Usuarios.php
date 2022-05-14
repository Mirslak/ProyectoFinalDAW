<?php

function insertarUsuario($conexion, $usuario, $password, $nombre, $apellido1, $apellido2, $email, $dni, $direccion, $provincia, $poblacion, $token){
        $consulta = "INSERT INTO `usuarios` (`user`, `password`, `nombre`, `apellido1`, `apellido2`, `email`,`dni`,`direccion`, `Telefono`, `Provincia`, `Poblacion`, `DNI`, `Token`, `Rol`) VALUES ('$usuario', '$password', '$nombre', '$apellido1', '$apellido2', '$email', '$direccion', '$provincia', '$poblacion', '$dni', '$token', 'Usuario')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }


    function mostrarUsuariosActivos($conexion){
        $consulta = "SELECT * FROM `usuario` WHERE `usuario_verificado` = '1'";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
    function mostrarUsuariosInactivos($conexion){
        $consulta = "SELECT * FROM `usuario` WHERE `usuario_verificado` = '0'";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }


?>