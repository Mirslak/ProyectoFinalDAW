<?php
    //Incluimos el conector a la Base de datos e iniciamos la sesión
    include("../database/conexion.php");
    session_start();
    
    //Esto impedirá que se acceda sin iniciar sesión y si el usuario logueado no tiene el rol de Admin volverá al login
    if (!($_SESSION['rol_usuario'] == '1')){
        
        echo "<script>window.open('sesion/login.php','_self')</script>";
        
    }else{
        echo"HE LLEGHADO";
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Zona Administrador</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body style="background-image: url('../../Imagenes/img-read/zonaAdmin-wall.png');">
    <!-- Barra de Navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="../../Imagenes/img-read/Distribuciones 2.png" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><span class="fas fa-home" style="color: white"></span> Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="administrar/usuariosActivos/usuariosActivos.php"><span class="fas fa-users" style="color: yellow"></span> Usuarios Activos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="administrar/usuariosInactivos/usuariosInactivos.php"><span class="fas fa-users" style="color: yellow"></span> Usuarios Inactivos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sesion/usuario/perfil.php"><span class="fas fa-address-card" style="color: white"></span> Mi Cuenta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sesion/salir.php" style="color: red"><span class="fas fa-power-off"></span> Salir</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <br>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 align="center" class="text-white">¡Bienvenido a la zona de Administrador!</h1>
                <div class="container responsive " >
                     <div class="row mt-3" >
                        <div class="card mb-3 bg-dark m-2" style="max-width: 400px; max-height: 200px;">
                            <a href=""><div class="row g-0">
                                <div class="col-md-4">
                                <img src="../../Imagenes/img-read/CRUD.png" class="img-fluid rounded-start mt-1" alt="...">
                                </div>
                                <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title text-white">GESTIÓN DE USUARIOS</h5>
                                    <p class="card-text text-white">Aquí pòdrás gestionar a los usuarios de tu página web, realizando CRUD's o mejor dicho editar, borrar, dar de alta a nuevos usuarios y gestionar sus roles.</p>
                                    
                                </div>
                                </div>
                            </div></a>
                        </div>
                        <div class="card mb-3 bg-dark m-2" style="max-width: 400px; max-height: 200px;">
                            <a href=""><div class="row g-0">
                                <div class="col-md-4">
                                <img src="../../Imagenes/img-read/CRUD.png" class="img-fluid rounded-start mt-1" alt="...">
                                </div>
                                <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title text-white">GESTIÓN DE PRODUCTOS</h5>
                                    <p class="card-text text-white">Aquí pòdrás gestionar a los productos de tu página web, realizando CRUD's  editar, borrar, dar de alta a nuevos productos.</p>
                                    
                                </div>
                                </div>
                            </div></a>
                        </div>
                        <div class="card mb-3 bg-dark m-2" style="max-width: 400px; max-height: 200px;">
                            <a href=""><div class="row g-0">
                                <div class="col-md-4">
                                <img src="../../Imagenes/img-read/CRUD.png" class="img-fluid rounded-start mt-1" alt="...">
                                </div>
                                <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title text-white">GESTIÓN DE EDITORES</h5>
                                    <p class="card-text text-white">Aquí pòdrás gestionar a los usuarios de tu página web, realizando CRUD's o mejor dicho editar, borrar, dar de alta a nuevos usuarios y gestionar sus roles.</p>
                                    
                                </div>
                                </div>
                            </div></a>
                        </div>
                        <div class="card mb-3 bg-dark m-2" style="max-width: 400px; max-height: 200px;">
                            <a href=""><div class="row g-0">
                                <div class="col-md-4">
                                <img src="../../Imagenes/img-read/CRUD.png" class="img-fluid rounded-start mt-1" alt="...">
                                </div>
                                <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title text-white">ALTA USUARIOS</h5>
                                    <p class="card-text text-white">Aquí pòdrás gestionar las altas de usuarios, ver las peticiones de nuevos usuarios.</p>
                                    
                                </div>
                                </div>
                            </div></a>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src=""></script>
</body>
</html>

<?php } ?>