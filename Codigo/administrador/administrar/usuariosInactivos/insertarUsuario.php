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

<div class="container mt-5" style="max-width: 800px; max-height:400px;">
      <form enctype="multipart/form-data" method="post" class="needs-validationC">
      <fieldset class="p-5 rounded-3 text-white" style="background: rgba(74,91,99,0.3);">
      <div align="center"><img  src="../img/RED (2).png" alt="" width="150" ></div>
          <h3 class="border-2" align="center" ">Insertar Usuario Inactivo</h3>
        <div class="row">
          <div class="col-sm-6">
            <p class="text-uppercase mt-2 fw-light"><b>Usuario:</b></p>
            <input class="form-control" type="text" name="usuario" id="usuario" autofocus required>
            <div class="invalid-feedback">
            El nombre de usuario debe tener una logitud entre 6 y 20 caracteres.
            </div>
          </div>
          <div class="col-sm-6">
            <p class="text-uppercase mt-2 fw-light"><b>Contraseña:</b></p>
            <input class="form-control" type="password" name="password" id="password" required>
            <div class="invalid-feedback">
            La contraseña debe contener: UN NUMERO, UN CARACTER ESPECIAL, UNA MAYUSCULA Y UNA MINUSCULA.
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <p class="text-uppercase mt-2 fw-light mt-2"><b>Telefóno:</b></p>
            <input class="form-control" type="number" name="telefono" id="telefono" required>
            <div class="invalid-feedback">
            Teléfono incorrecto.
            </div>
          </div>
          <div class="col-sm-6">
            <p class="text-uppercase mt-2 fw-light mt-2"><b>Correo:</b></p>
            <input class="form-control" type="email" name="email" id="email" required>
            <div class="invalid-feedback">
            Email no valido.
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <p class="text-uppercase mt-2 fw-light"><b>Apellido 1:</b></p>
            <input class="form-control" type="text" name="apellido1" id="apellido1" required>
            <div class="invalid-feedback">
            Apellido no valido
            </div>
          </div>
          <div class="col-sm-6">
            <p class="text-uppercase mt-2 fw-light"><b>Apellido 2:</b></p>
            <input class="form-control" type="text" name="apellido2" id="apellido2" required>
            <div class="invalid-feedback">
            Apellido no valido
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <p class="ttext-uppercase mt-2 fw-light"><b>Nombre:</b></p>
            <input class="form-control" type="text" name="nombre" id="nombre" required>
            <div class="invalid-feedback">
            Nombre no valido
            </div>
          </div>
          <div class="col-sm-6">
            <p class="text-uppercase mt-2 fw-light"><b>DNI:</b></p>
            <input class="form-control" type="text" name="dni" id="dni" required>
            <div class="invalid-feedback">
            DNI no valido
            </div>
          </div>
        </div>
        <div class="col-12">
          <p class="fw-bold"> DOCUMENTACIÓN DEL SOLICITANTE (MAX. 2 MB):<input class="ms-3 mt-3" id="img" name="img" type="file" accept=".jpg,.png,.pdf" required></p>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto mt-4">
          <input name="insertar" value="INSERTAR USUARIO" type="submit" class="btn text-white p-3" style="background-color: #42515E;">
          </div>
        </fieldset>
      </form>
    </div>

    <script src="../../../includes/js/validarRegistro.js"></script>

<?php } ?>

<?php
if(isset($_POST['insertar'])){

  include_once "../../../includes/database.php";

  include_once "../../../includes/DAO/DAO_Usuarios.php";

  //Recogemos los datos del formulario
  $usuario = $_POST['usuario'];

  $password = hash('sha256', $_POST['password']);

  $telefono = $_POST['telefono'];

  $email = $_POST['email'];

  $apellido1 = $_POST['apellido1'];

  $apellido2 = $_POST['apellido2'];

  $nombre = $_POST['nombre'];

  $dni = $_POST['dni'];

  //Imagen
  $nombreImg = $_FILES['img']['name'];
  $ruta      = $_FILES['img']['tmp_name'];
  $dniIMG   = "../../../img/documentos/" . $nombreImg;

  //Generamos un token aleatorio
  $token = bin2hex(random_bytes(15));

  //Realizamos el registro con los datos recibidos
  $consulta = registrarUsuario($conexion, $usuario, $password, $nombre, $apellido1, $apellido2, $dni, $email,
  $telefono, $dniIMG, $token);

  if ($consulta) {
		move_uploaded_file($ruta, $dniIMG); //Movemos la imagen a la carpeta
    echo "<script>
        Swal.fire({
        type: 'success',
        title: 'Usuario insertado correctamente.',
        showConfirmButton: false,
      });
        setTimeout(function(){
          Swal.close();
          window.open('usuariosInactivos.php','_self')
          }, 1500);
      </script>";
	} else {
    echo "<script>
        Swal.fire({
        type: 'error',
        title: 'Error al registrar el usuario.',
        showConfirmButton: false,
      });
        setTimeout(function(){
          Swal.close();
        }, 1500);
      </script>";
	}
}

?>