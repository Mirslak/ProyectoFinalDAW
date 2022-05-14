<?php
    //Incluimos el conector a la Base de datos e iniciamos la sesión
    include "../../../includes/Database.php";
    session_start();

    //Incluimos los ficheros donde están las funciones
    include "../../../includes/DAO/DAO_Usuarios.php";
    
    //Esto impedirá que se acceda sin iniciar sesión y si el usuario logueado no tiene el rol de Admin volverá al login
    if (!isset($_SESSION['rol'])){
        
        echo "<script>window.open('../../sesion/login.php','_self')</script>";
        
    }else{
?>

<?php include "../../includes/header.php"; ?>



<?php

    //Recogemos el ID recibido por URL
    $idURL = $_GET["id"];
        
    //Buscamos la imagen del Usuario
    $get_usuario = mostrarUsuariosPorID($conexion, $idURL);
        
    $row_edit = mysqli_fetch_assoc($get_usuario);
    
    //Guardamos los datos del usuario
    $idUsuario = $row_edit['idUsuario'];
        
    $Usuario = $row_edit['usuario'];

    $Password = $row_edit['password'];

    $Nombre = $row_edit['nombre'];

    $Apellido = $row_edit['apellido1'];

    $Apellido2 = $row_edit['apellido2'];

    $Correo = $row_edit['correo'];

    $imagen = $row_edit['imagenDni'];

    //Eliminamos la ruta de la imagen

    $imagen = str_replace("../", "", $imagen);

    $Fecha = $row_edit['fechaValidez'];

    $Telefono = $row_edit['telefono'];

    $Dni = $row_edit['dni'];

    $estado = $row_edit['estado'];

?>

<br>
<div class="card text-center">
    <div class="card-header">
        Editar Usuario
    </div>
    <div class="card-body">
        <img src="../../../img/EditarUsuarios.png" width="150" height="150" style="border-radius: 20px;">
        <form id="editarUsuario" enctype="multipart/form-data" method="post" class="needs-validation">
            <div class="row">  
                <!-- Usuario -->
                <div class="col-md-6">
                    <div align="left"><h5> Usuario</h5></div>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                            </svg>
                        </span>
                        <input type="text" name="usuario" id="usuario" class="form-control" value="<?php echo $Usuario; ?>">
                        <div class="invalid-feedback">El usuario tiene una longitud mínima de 6 caracteres y máximo de 20 caracteres, no se permiten acentos, espacios ni caracteres especiales.</div>
                    </div>
                </div>
                <!-- Termina Usuario -->

                <!-- Nombre -->
                <div class="col-md-6">
                    <div align="left"><h5> Nombre</h5></div>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-fonts" viewBox="0 0 16 16">
                                <path d="M12.258 3h-8.51l-.083 2.46h.479c.26-1.544.758-1.783 2.693-1.845l.424-.013v7.827c0 .663-.144.82-1.3.923v.52h4.082v-.52c-1.162-.103-1.306-.26-1.306-.923V3.602l.431.013c1.934.062 2.434.301 2.693 1.846h.479L12.258 3z"/>
                            </svg>
                        </span>
                        <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $Nombre; ?>">
                        <div class="invalid-feedback">El nombre tiene una longitud mínima de 3 caracteres y máximo de 20 caracteres.</div>
                    </div>
                </div>
            </div>
            <!-- Termina Nombre -->  

            <br>

            <!-- Contraseña -->
            <div class="row">
                <div class="col-md-6">
                    <div align="left"><h5> Contraseña</h5></div>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                                <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
                            </svg>
                        </span>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                </div>
                <!-- Termina Contraseña -->

                <!-- Apellido -->
                <div class="col-md-6">
                    <div align="left"><h5> Apellido 1</h5></div>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-fonts" viewBox="0 0 16 16">
                                <path d="M12.258 3h-8.51l-.083 2.46h.479c.26-1.544.758-1.783 2.693-1.845l.424-.013v7.827c0 .663-.144.82-1.3.923v.52h4.082v-.52c-1.162-.103-1.306-.26-1.306-.923V3.602l.431.013c1.934.062 2.434.301 2.693 1.846h.479L12.258 3z"/>
                            </svg>
                        </span>
                        <input type="text" name="apellido" id="apellido" class="form-control" value="<?php echo $Apellido; ?>">
                        <div class="invalid-feedback">Los apellidos tienen una longitud mínima de 4 caracteres y máxima de 20 caracteres.</div>
                    </div>
                </div>
            </div>
            <!-- Termina Apellido -->

            <br>

            <!-- Dirección -->
            <div class="row">
            <div class="col-md-6">
                    <div align="left"><h5> DNI</h5></div>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-text" viewBox="0 0 16 16">
                                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                                <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                        </span>
                        <input type="text" name="dni" id="dni" class="form-control" value="<?php echo $Dni; ?>" readonly>
                    </div>
                </div>
                <!-- Termina Dirección -->

                <!-- Apellido 2 -->
                <div class="col-md-6">
                    <div align="left"><h5> Apellido 2</h5></div>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-fonts" viewBox="0 0 16 16">
                                <path d="M12.258 3h-8.51l-.083 2.46h.479c.26-1.544.758-1.783 2.693-1.845l.424-.013v7.827c0 .663-.144.82-1.3.923v.52h4.082v-.52c-1.162-.103-1.306-.26-1.306-.923V3.602l.431.013c1.934.062 2.434.301 2.693 1.846h.479L12.258 3z"/>
                            </svg>
                        </span>
                        <input type="text" name="apellido2" id="apellido2" class="form-control" value="<?php echo $Apellido2; ?>">
                        <div class="invalid-feedback">Los apellidos tienen una longitud mínima de 4 caracteres y máxima de 20 caracteres.</div>
                    </div>
                </div>
            </div>
            <!-- Termina Apellido 2 -->

            <br>

            <!-- Correo -->
            <div class="row">
                <div class="col-md-6">
                    <div align="left"><h5> Correo</h5></div>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                            </svg>
                        </span>
                        <input type="email" name="correo" id="correo" class="form-control" value="<?php echo $Correo; ?>">
                        <div class="invalid-feedback">El correo no es válido.</div>
                    </div>
                </div>
                <!-- Termina Correo -->

                <!-- Fecha -->
                <div class="col-md-6">
                    <div align="left"><h5> Fecha de Validez</h5></div>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-fill" viewBox="0 0 16 16">
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5h16V4H0V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5z"/>
                            </svg>
                        </span>
                        <input type="date" name="fechaValidez" id="fechaValidez" class="form-control" value="<?php echo $Fecha; ?>" >
                    </div>
                </div>
            </div>
            <!-- Termina Fecha -->

            <br>

            <div class="row">
                <!-- Teléfono -->
                <div class="col-md-6">
                    <div align="left"><h5> Teléfono</h5></div>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                            </svg>
                        </span>
                        <input type="number" name="telefono" id="telefono" class="form-control" value="<?php echo $Telefono; ?>">
                        <div class="invalid-feedback">El teléfono no es válido.</div>
                    </div>
                </div>
                <!-- Termina Teléfono -->

                <!-- DNI -->
                <div class="col-md-6">
                    <div align="left"><h5> Estado</h5></div>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-text" viewBox="0 0 16 16">
                                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                                <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                        </span>
                        <input type="text" name="estado" id="estado" class="form-control" value="<?php echo $estado; ?>" readonly>
                    </div>
                </div>
            </div>
            <!-- Termina DNI -->

            <br><!-- Imagen -->
            <div class="col-md-12">
                <h5 align="left"> Imagen</h5>
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-image-fill" viewBox="0 0 16 16">
                            <path d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"/>
                        </svg>
                    </span>
                    <img src="../../../<?php echo $imagen; ?>" width="100" height="80">
                    <input type="file" id="img" name="img">
                </div>
            </div>
            <!-- Termina Imagen -->

            <br>

            <input name="actualizar" value="Actualizar Usuario" type="submit" class="btn btn-warning form-control" style="border: black 2px solid">
        </form>
    </div>
    <div class="card-footer text-muted">
        <a href="usuariosInactivos.php">Ir a los Usuarios</a>
    </div>
</div>

<br>

<?php } ?>

<?php
if(isset($_POST['actualizar'])){

    //Recogemos los datos del formulario
    $idUsuario = $_GET["id"];

    $usuario = $_POST["usuario"];

    $nombre = $_POST["nombre"];

    $apellido1 = $_POST["apellido"];

    $apellido2 = $_POST["apellido2"];

    $telefono = $_POST["telefono"];

    $email = $_POST["correo"];

    //Imagen
	$nombreImg = $_FILES['img']['name'];
	$ruta      = $_FILES['img']['tmp_name'];
	$destino   = "../../../img/documentos/" . $nombreImg;

    $fechaValidez = $_POST["fechaValidez"];

    $estado = $_POST["estado"];

    if(!empty($_POST['password'])) {
		$password = $_POST["password"];
		$password = hash('sha256', $password);
		$consulta = ModificarUsuario($conexion, $idUsuario, $usuario, $password, $nombre, $apellido1, $apellido2, $email, $telefono, $destino, $fechaValidez, $estado);
        if($consulta){
            move_uploaded_file($ruta, $destino); //Movemos la imagen a la carpeta
            echo "<script>alert('Usuario modificado correctamente.')</script>"; 
            echo "<script>window.open('usuariosInactivos.php','_self')</script>";
        } else {
            echo "<script>alert('Error al editar el usuario.')</script>"; 
        }
	} else {
		$consulta = ModificarUsuario2($conexion, $idUsuario, $usuario, $nombre, $apellido1, $apellido2, $email, $telefono, $destino, $fechaValidez, $estado);
        if($consulta){
            move_uploaded_file($ruta, $destino); //Movemos la imagen a la carpeta
            echo "<script>alert('Usuario modificado correctamente.')</script>"; 
            echo "<script>window.open('usuariosInactivos.php','_self')</script>";
        } else {
            echo "<script>alert('Error al editar el usuario.')</script>"; 
        }
	}
}

?>