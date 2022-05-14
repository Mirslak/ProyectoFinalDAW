<?php

    function consultaLogin($conexion, $usuario, $password){
        $consulta = "SELECT * FROM `usuarios` WHERE `usuario` = '$usuario' AND `password` = '$password'";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }


    function crearSesion($usuario){
        //Queremos que el id de sesión sea su usuario
        session_id($usuario['usuario']);
        //Creamos la conexion
        session_start();
        //Almacenamos en la sesión los datos del usuario
        foreach($usuario as $indice=>$valor){
            $_SESSION[$indice] = $valor;
        }
    }

    function mostrarUsuariosPorID($conexion, $idUsuario){
        $consulta = "SELECT * FROM `usuario` WHERE id = '$idUsuario'";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function ModificarUsuario($conexion, $idUsuario, $usuario, $password, $nombre, $apellido1, $apellido2, $email,$estado){
        $consulta = "UPDATE `usuario` SET `user` = '$usuario', `password` = '$password', 
        `nombre` = '$nombre',`apellido1` = '$apellido1', `apellido2` = '$apellido2',
         `email` = '$email',`usuario_verificado` = '$estado' WHERE `id` = '$idUsuario'";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }
    function ModificarUsuario2($conexion, $idUsuario, $usuario, $nombre, $apellido1, $apellido2, $email,$estado){
        $consulta = "UPDATE `usuario` SET `user` = '$usuario',`nombre` = '$nombre',`apellido1` = '$apellido1', `apellido2` = '$apellido2',
         `email` = '$email',`usuario_verificado` = '$estado' WHERE `id` = '$idUsuario'";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function eliminarUsuario($conexion, $idUsuario){
        $consulta = "DELETE FROM `usuario` WHERE `id` = '$idUsuario'";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

    function insertarUsuario($conexion, $usuario, $password, $nombre, $apellido1, $apellido2, $email, $dni, $direccion, $Cpostal, $rol,$token){
        $consulta = "INSERT into usuario (user, password, nombre, apellido1, apellido2, email, dni, direccion,CodigoPOstal,usuario_verificado, 
        rol_usuario,token) VALUES ('$user','$password','$nombre','$apellido1','$apellido2','$email','$dni','$direccion','$Cpostal','1','$rol_usuario','$token')";
        $resultado = mysqli_query($conexion, $consulta);
        return $resultado;
    }

?>
