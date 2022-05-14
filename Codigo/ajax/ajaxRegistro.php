<?php

//No operativo

    include_once '../database/conexion.php';

 if(isset($_POST['registro'])){
    $user = $_POST['user'];
    $password = $_POST['pass'];
    $nombre = $_POST['nombre'];
    $apellido1 = $_POST['apellido1'];
    $apellido2 = $_POST['apellido2'];
    $email = $_POST['email'];
    $dni = $_POST['dni'];
    $direccion = $_POST['direccion'];
    $query = "INSERT into usuario (user,pass,nombre, apellido1, apellido2, email, direccion) VALUES ('$user','$password','$nombre','$apellido1','$apellido2','$email','$dni','$direccion')";
    $result = mysqli_query($conexion, $query);
    if(!$result){
        die('Query Failed.');
    }
    echo'Tarea añadida correctamente';
}
?>