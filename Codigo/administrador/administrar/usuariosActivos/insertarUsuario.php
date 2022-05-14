<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php
    //Incluimos el conector a la Base de datos e iniciamos la sesión
    include "../../../database/conexion.php";
    session_start();

     //Incluimos el fichero donde están las funciones
     include '../../../DAO/Usuarios.php';
    
    //Esto impedirá que se acceda sin iniciar sesión y si el usuario logueado no tiene el rol de Admin volverá al login
    if (empty($_SESSION['rol_usuario'])){
        
        echo "<script>window.open('../../sesion/login.php','_self')</script>";
        
    }else{
?>

<?php include "../../includes/header.php"; ?>

<div align="center">
  <div class="card" style="max-width: 800px;">
    <div class="card-header" >
      <a href="usuariosActivos.php" style="color: black">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-left-circle-fill m-2" viewBox="0 0 16 16" >
          <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
        </svg>
      </a>
    </div>
    <h3 class="border-2 mt-3 text-uppercase" align="center">Insertar Usuario Activo</h3>
    <div class="card-body">
    <form method="post" id="formularioRegistro" class="row g-3 needs-validation" novalidate>
        <div class="col-md-6">
            <div class="input-group has-validation input-group-sm">
                <span class="input-group-text" id="inputGroupPrepend">Nombre</span>
                <input name="nombre" type="text" class="form-control" id="nombre" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                 Por favor, escriba su nombre.
                 </div>
            </div>
            <div class="valid-feedback">
            Correcto!
            </div>
        </div>

        <div class="col-md-6">
            <div class="input-group has-validation input-group-sm">
                <span class="input-group-text" id="inputGroupPrepend">Usuario</span>
                <input name="usuario" type="text" class="form-control" id="usuario" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                 Por favor, escriba su usuario.
                 </div>
            </div>
            <div class="valid-feedback">
            Correcto!
            </div>
        </div>

        <div class="col-md-6">
            <div class="input-group has-validation input-group-sm">
                <span class="input-group-text" id="inputGroupPrepend">Primer Apellido</span>
                <input name="apellido1" type="text" class="form-control" id="apellido1" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                 Por favor, escriba su apellido.
                 </div>
            </div>
            <div class="valid-feedback">
            Correcto!
            </div>
        </div>
        <div class="col-md-6">
            <div class="input-group has-validation input-group-sm">
                <span class="input-group-text" id="inputGroupPrepend">Email</span>
                <input name="email" type="email" class="form-control" id="email" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                 Por favor, escriba su email.
                 </div>
            </div>
            <div class="valid-feedback">
            Correcto!
            </div>
        </div>
        <div class="col-md-6">
            <div class="input-group has-validation input-group-sm">
                <span class="input-group-text" id="inputGroupPrepend">Segundo Apellido</span>
                <input name="apellido2" type="text" class="form-control" id="apellido2" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                 Por favor, escriba su apellido.
                 </div>
            </div>
            <div class="valid-feedback">
            Correcto!
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="input-group has-validation input-group-sm">
                <span class="input-group-text" id="inputGroupPrepend">Contraseña</span>
                <input name="password" type="password" class="form-control" id="password" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                 Por favor, escriba su contraseña.
                 </div>
            </div>
            <div class="valid-feedback">
            Correcto!
            </div>
        </div>

        <div class="col-md-4">
            <div class="input-group has-validation input-group-sm">
                <span class="input-group-text" id="inputGroupPrepend">Provincia</span>
                <select class="form-select" id="direccion" name="direccion" required>
                <option selected disabled value="">Seleccione...</option>
                <option value="melilla">Melilla</option>
                </select>
            </div>
            <div class="invalid-feedback">
            Por favor, selecione una provincia valida.
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="input-group has-validation input-group-sm">
                <span class="input-group-text" id="inputGroupPrepend">DNI</span>
                <input name="dni" type="text" class="form-control" id="dni" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                 Por favor, escriba su dni.
                 </div>
            </div>
            <div class="valid-feedback">
            Correcto!
            </div>
        </div>

        <div class="col-md-12">
            <div class="input-group has-validation input-group-sm">
                <span class="input-group-text" id="inputGroupPrepend">codigo Postal</span>
                <input name="Cpostal" type="text" class="form-control" id="Cpostal" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                 Por favor, escriba su Codigo Postal.
                 </div>
            </div>
            <div class="valid-feedback">
            Correcto!
            </div>
        </div>
        
  
  <div class="col-12 text-center">
    <button name="registro" class="btn btn-success" type="submit">Registrarse</button>
  </div>
</form>
  </div>
</div>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


</body>
</html>

<?php } ?>

<?php
if(isset($_POST['registro'])){

        $user = $_POST["usuario"];
        $password = $_POST["password"];
        $nombre = $_POST["nombre"];
        $apellido1 = $_POST["apellido1"];
        $apellido2 = $_POST["apellido2"];
        $email = $_POST["email"];
        $dni = $_POST["dni"];
        $direccion = $_POST['direccion'];
        $Cpostal = $_POST['Cpostal'];

        $rol = 0;
        $token = rand(1000,9999);

  //Realizamos el registro con los datos recibidos
  $consulta = "INSERT into usuario (user, password, nombre, apellido1, apellido2, email, dni, direccion,CodigoPOstal,usuario_verificado,rol_usuario,token) VALUES ('$user','$password','$nombre','$apellido1','$apellido2','$email','$dni','$direccion','$Cpostal','1','$rol','$token')";
  $result = mysqli_query($conexion, $consulta);
  if ($result) {
    echo "<script>
        Swal.fire({
        type: 'success',
        title: 'Usuario insertado correctamente.',
        showConfirmButton: false,
        });
        setTimeout(function(){
        Swal.close();
       
        }, 1500);
    </script>";
  } else {
    echo "<script>
        Swal.fire({
        type: 'error',
        title: 'Error al insertar el usuario.',
        showConfirmButton: false,
        });
        setTimeout(function(){
        Swal.close();
        
        }, 1500);
    </script>";
  }
}
?>