<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php
    include_once "../database/conexion.php";
    include_once "../funciones/funciones.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Registro</title>
    <style>
        body{
            background-image: url(../../Imagenes/img-read/fondo.jpg);
        }

        #div{
            position: relative;
            height: 40rem;
            width: 60rem;
            margin: auto;
            margin-top: 5rem;
        }




    </style>

    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--SweetAlert-->
    <script src="../plugins/sweetalert2.all.min.js"></script>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body >

<div class=" rounded-3" id="div"  style="background: rgba(255,255,255,0.8);" >
    <a href="../index.php" class="text-danger ms-3 mt-3"><img src="../../Imagenes/img-read/flecha.png" width="60px" style="float: none;" alt=""></a><br>

    <div class="text-center">
        <img src="../../Imagenes/img-read/Distribuciones 2.png"  width="110px" alt="">
    </div>

    <div class="text-center">
        <h1 class="fw-bold text-success">Formulario de registro</h1>
    </div>

    <div class="m-5 mt-2 mb-1">
        
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
                La contraseña debe contener: UN NUMERO, UN CARACTER ESPECIAL, UNA MAYUSCULA Y UNA MINUSCULA
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
        
        <div class="col-md-4">
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

        <div class="col-md-4">
            <div class="input-group has-validation input-group-sm">
                <span class="input-group-text" id="inputGroupPrepend">Teléfono</span>
                <input name="telefono" type="text" class="form-control" id="telefono" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                 Por favor, escriba su telefono.
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
                 Por favor, escriba su dni.
                 </div>
            </div>
            <div class="valid-feedback">
            Correcto!
            </div>
        </div>
        
       
  <div class="col-12">
    <div class="form-check input-group-sm">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck"></label>
        Acepto los terminos y condiciones
      <div class="invalid-feedback">
       Debe aceptar los terminos y condiciones para registrarse.
      </div>
    </div>
  </div>
  
  <div class="col-12 text-center">
    <button name="registro" class="btn btn-success" type="submit">Registrarse</button>
  </div>
</form>
</div>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
            })
        })()
</script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="../js/validarRegistro.js"></script>
</body>
</html>


<?php
 
    if(isset( $_POST['registro'])){
        
        $user = $_POST["usuario"];
        $password = $_POST["password"];
        $nombre = $_POST["nombre"];
        $apellido1 = $_POST["apellido1"];
        $apellido2 = $_POST["apellido2"];
        $email = $_POST["email"];
        $dni = $_POST["dni"];
        $direccion = $_POST['direccion'];
        $Cpostal = $_POST['Cpostal'];
        $telefono = $_POST['telefono'];

        //Por defecto el usuario registrado tendrá rol de usuario = 0
        $rol_usuario=0;
        
        include_once('../mail/mail.php');

        if($enviado){
        $query = "INSERT into usuario (user, password, nombre, apellido1, apellido2, email, telefono,dni, direccion,CodigoPOstal,usuario_verificado,rol_usuario,token) VALUES ('$user','$password','$nombre','$apellido1','$apellido2','$email','$telefono','$dni','$direccion','$Cpostal','1','$rol_usuario','$token')";
        $result = mysqli_query($conexion, $query);
        
            
                echo'<meta http-equiv="Refresh" content="1;url=confirm.php?email='.$email.'">';

        }else{
            die('Query Failed.');
        }        
    }

?>