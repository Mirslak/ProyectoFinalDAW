
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Zona de Administrador</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- sweetalert2 -->
  <script src="../plugins/sweetalert2.all.min.js"></script>
</head>
<body style="background-image: url('../../../Imagenes/img-read/zonaAdmin-wall.png');">
    <br>
    <div id="bloqueo" class="card bg-transparent border-0 text-white" style="margin-top:10%;">
        <article class="card-body mx-auto"  style="background: rgba(74,91,99,0.3);">
            <h4 class="card-title mt-3 text-center">Contenido Bloqueado.</h4>
            <p class="text-center">Introduzca la contraseña para mostrar el contenido.</p>
            <form method="POST">
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <div class="input-group">
                            <span class="input-group-text ms-5" id="basic-addon1">
                                <span><i class="fa fa-lock"></i></span>
                            </span>
                            <input type="password" name="passwordC" id="passwordC" class="form-control " placeholder="*********">
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-group ms-4">
                	<button type="submit" name="codigo" class="btn btn-primary btn-block"> Mandar Código</button>
			<button class="btn btn-primary btn-block ms-3"> <a style="color: white; text-decoration:none;" href="../../index.php">Página Principal</a></button>
                </div>   
            </form>
        </article>
    </div>
</body>
</html>

<?php
if(isset($_POST['codigo'])){

//Recogemos la contraseña introducida en el formulario
$password = $_POST["passwordC"];

//Si la contraseña no coincide con el código echaremos al intruso. Si es correcto se mostrará el login del admin
if ($password != 'Admin$17') { 
	echo "<script>alert('Código incorrecto, echando de la página.')</script>";
	echo "<script>window.open('../../index.php','_self')</script>";
	}else{
?>
    <style>#bloqueo{display: none;}</style>
	<div class="container text-white mt-5 p-5" style="background: rgba(74,91,99,0.3); width:30%;">
    <div align="center" class="m-5" ><img  src="../../../Imagenes/img-read/Distribuciones 2.png" alt="" width="150" ></div>
      <h3 align="center">INICIAR SESIÓN EN ZONA ADMINISTRADOR</h3>
      <form action = "comprobarAdmin.php" id="formLogin" method="post" class="needs-validation ms-5 me-5">
        <p class="text-uppercase"><b>Correo:</b></p>
        <input class="form-control" type="email" name="email" id="email" autofocus required>
        <p class="text-uppercase"><b>Contraseña:</b></p>
        <input class="form-control" type="password" name="password" id="password" required>
        <br>
        <div class="d-grid gap-2 col-6 mx-auto mt-4">
          <input name="login" value="INICIAR SESIÓN" type="submit" class="btn text-white p-3 mb-" style="background-color: #42515E;">
        </div>
      </form>
    </div>

	<!-- Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	<!-- Validación -->
	<script src="../js/validacionLogin.js"></script>
<?php 
	}
} 