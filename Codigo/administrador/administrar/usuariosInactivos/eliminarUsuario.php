<?php
    //Incluimos el conector a la Base de datos 
    include "../../../includes/Database.php";

    //Incluimos los ficheros donde están las funciones
    require '../../../includes/DAO/DAO_Usuarios.php';

    //Recogemos el ID recibido por URL
    $idURL= $_GET["id"];

    //Imagen Usuario: Primero borramos la ruta que tiene guardada y después añadimos la ruta que necesitamos.
    $get_usuario = mostrarUsuariosPorID($conexion, $idURL);
        
    $row_del = mysqli_fetch_assoc($get_usuario);
    
    $imagenUsuario = $row_del['imagenDni'];

    $eliminarRuta = str_replace("../", "", $imagenUsuario);

    $imagenRuta = "../../../" . $eliminarRuta;
    
    //Procedemos a eliminar al usuario de la base de datos
    $consulta = eliminarUsuario($conexion, $idURL);

    if($consulta){

        echo "<script>alert('El usuario ha sido eliminado correctamente.')</script>";

        echo "<script>window.open('usuariosInactivos.php','_self')</script>";

    } else {

        echo "<script>alert('El usuario no se ha podido eliminar.')</script>";
            
        echo "<script>window.open('usuariosInactivos.php','_self')</script>";
    }
?>