<?php
    include_once "../Codigo/database/conexion.php";
    include_once "../Codigo/funciones/funciones.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Instalacion</title>
    <style>
        body{
            background-image: url(../Imagenes/img-read/fondo.jpg);
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

    <!-- sweetalert2 -->
    <script src="plugins/sweetalert2.all.min.js"></script>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body >

<div class=" rounded-3" id="div"  style="background: rgba(255,255,255,0.8);" >
    <a href="../index.php" class="text-danger ms-3 mt-3"><img  width="60px" style="float: none;" alt="" style="display:none;"></a><br>

    <div class="text-center">
        <img src="../Imagenes/img-read/Distribuciones 2.png"  width="110px" alt="">
    </div>

    <div class="text-center">
        <h1 class="fw-bold text-success">Bienvenido al formulario de Instalación</h1>
    </div>

    <div class="m-5 mt-2 mb-1">
        
    <form method="post" id="formularioRegistro" class="row g-3 needs-validation" novalidate>
        <div class="col-md-6">
            <div class="input-group has-validation input-group-sm">
                <span class="input-group-text" id="inputGroupPrepend">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-boxes" viewBox="0 0 16 16">
                        <path d="M7.752.066a.5.5 0 0 1 .496 0l3.75 2.143a.5.5 0 0 1 .252.434v3.995l3.498 2A.5.5 0 0 1 16 9.07v4.286a.5.5 0 0 1-.252.434l-3.75 2.143a.5.5 0 0 1-.496 0l-3.502-2-3.502 2.001a.5.5 0 0 1-.496 0l-3.75-2.143A.5.5 0 0 1 0 13.357V9.071a.5.5 0 0 1 .252-.434L3.75 6.638V2.643a.5.5 0 0 1 .252-.434L7.752.066ZM4.25 7.504 1.508 9.071l2.742 1.567 2.742-1.567L4.25 7.504ZM7.5 9.933l-2.75 1.571v3.134l2.75-1.571V9.933Zm1 3.134 2.75 1.571v-3.134L8.5 9.933v3.134Zm.508-3.996 2.742 1.567 2.742-1.567-2.742-1.567-2.742 1.567Zm2.242-2.433V3.504L8.5 5.076V8.21l2.75-1.572ZM7.5 8.21V5.076L4.75 3.504v3.134L7.5 8.21ZM5.258 2.643 8 4.21l2.742-1.567L8 1.076 5.258 2.643ZM15 9.933l-2.75 1.571v3.134L15 13.067V9.933ZM3.75 14.638v-3.134L1 9.933v3.134l2.75 1.571Z"/>
                    </svg>
                </span>
                <input name="nombreBD" type="text" class="form-control" id="nombreBD" aria-describedby="inputGroupPrepend" placeholder="Nombre de la BBDD" required>
                <div class="invalid-feedback">
                 Por favor, escriba el nombre de la BBDD.
                 </div>
            </div>
            <div class="valid-feedback">
            Correcto!
            </div>
        </div>

        <div class="col-md-6">
            <div class="input-group has-validation input-group-sm">
                <span class="input-group-text" id="inputGroupPrepend">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg>
                </span>
                <input name="nombre" type="text" class="form-control" id="nombre" aria-describedby="inputGroupPrepend" placeholder="Nombre" required>
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
                <span class="input-group-text" id="inputGroupPrepend">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
                    </svg>
                </span>
                <input name="nombre" type="text" class="form-control" id="nombre" aria-describedby="inputGroupPrepend" placeholder="Nombre de usuario" required>
                <div class="invalid-feedback">
                 Por favor, escriba su nombre de usuario, debe tener una longitud de 6 caracteres.
                </div>
            </div>
            <div class="valid-feedback">
            Correcto!
            </div>
        </div>

        <div class="col-md-6">
        <div class="input-group has-validation input-group-sm">
                <span class="input-group-text" id="inputGroupPrepend">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M10 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                    <path d="M2 1a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2ZM1 3a1 1 0 0 1 1-1h2v2H1V3Zm4 10V2h9a1 1 0 0 1 1 1v9c0 .285-.12.543-.31.725C14.15 11.494 12.822 10 10 10c-3.037 0-4.345 1.73-4.798 3H5Zm-4-2h3v2H2a1 1 0 0 1-1-1v-1Zm3-1H1V8h3v2Zm0-3H1V5h3v2Z"/>
                </span>
                <input name="nombre" type="text" class="form-control" id="nombre" aria-describedby="inputGroupPrepend" placeholder="Primer apellido" required>
                <div class="invalid-feedback">
                 Por favor, escriba su primer apellido.
                </div>
            </div>
            <div class="valid-feedback">
            Correcto!
            </div>
        </div>
        <div class="col-md-6">
        <div class="input-group has-validation input-group-sm">
                <span class="input-group-text" id="inputGroupPrepend">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                </span>
                <input name="nombre" type="text" class="form-control" id="nombre" aria-describedby="inputGroupPrepend" placeholder="Email" required>
                <div class="invalid-feedback">
                 Por favor, escriba un email válido.
                </div>
            </div>
            <div class="valid-feedback">
            Correcto!
            </div>
        </div>
        <div class="col-md-6">
        <div class="input-group has-validation input-group-sm">
                <span class="input-group-text" id="inputGroupPrepend">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M10 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                    <path d="M2 1a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2ZM1 3a1 1 0 0 1 1-1h2v2H1V3Zm4 10V2h9a1 1 0 0 1 1 1v9c0 .285-.12.543-.31.725C14.15 11.494 12.822 10 10 10c-3.037 0-4.345 1.73-4.798 3H5Zm-4-2h3v2H2a1 1 0 0 1-1-1v-1Zm3-1H1V8h3v2Zm0-3H1V5h3v2Z"/>
                </span>
                <input name="nombre" type="text" class="form-control" id="nombre" aria-describedby="inputGroupPrepend" placeholder="Segundo apellido" required>
                <div class="invalid-feedback">
                 Por favor, escriba su segundo apellido.
                </div>
            </div>
            <div class="valid-feedback">
            Correcto!
            </div>
        </div>
        
        <div class="col-md-6">
        <div class="input-group has-validation input-group-sm">
                <span class="input-group-text" id="inputGroupPrepend">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                </svg>
                </span>
                <input name="nombre" type="text" class="form-control" id="nombre" aria-describedby="inputGroupPrepend" placeholder="Contraseña" required>
                <div class="invalid-feedback">
                 Por favor, escriba una contraseña con Un caracter mayúscula, una minuscula, un número y un caracter especial.
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
                <span class="input-group-text" id="inputGroupPrepend">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M10 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                    <path d="M2 1a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2ZM1 3a1 1 0 0 1 1-1h2v2H1V3Zm4 10V2h9a1 1 0 0 1 1 1v9c0 .285-.12.543-.31.725C14.15 11.494 12.822 10 10 10c-3.037 0-4.345 1.73-4.798 3H5Zm-4-2h3v2H2a1 1 0 0 1-1-1v-1Zm3-1H1V8h3v2Zm0-3H1V5h3v2Z"/>
                </span>
                <input name="nombre" type="text" class="form-control" id="nombre" aria-describedby="inputGroupPrepend" placeholder="DNI" required>
                <div class="invalid-feedback">
                 Por favor, escriba un DNI válido.
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
    <script src="../Codigo/js/validarRegistro.js"></script>
</body>
</html>


<?php
 
    if(isset( $_POST['registro'])){
        $bd = $_POST["nombreBD"];
        $user = $_POST["usuario"];
        $password = $_POST["password"];
        $nombre = $_POST["nombre"];
        $apellido1 = $_POST["apellido1"];
        $apellido2 = $_POST["apellido2"];
        $email = $_POST["email"];
        $dni = $_POST["dni"];
        $direccion = $_POST['direccion'];

        //Por defecto el usuario registrado tendrá rol de usuario = 1
        $rol_usuario=1;
        $clase = 'admin';

    
        $bbdd= "CREATE DATABASE .$db.;
        
        CREATE TABLE `carrito` (
        `id_compra` int(4) NOT NULL,
        `id_usuario` int(2) NOT NULL,
        `fecha` date NOT NULL,
        `total` decimal(10,0) NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

        -- --------------------------------------------------------

        --
        -- Estructura de tabla para la tabla `categoria`
        --

        CREATE TABLE `categoria` (
        `id_categoria` int(2) NOT NULL,
        `nombre_categoria` varchar(100) NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

        --
        -- Volcado de datos para la tabla `categoria`
        --

        INSERT INTO `categoria` (`id_categoria`, `nombre_categoria`) VALUES
        (1, 'bebidas'),
        (2, 'bebidas alcoholicas'),
        (3, 'Zumos\r\n'),
        (4, 'Agua'),
        (5, 'Lacteos'),
        (6, 'Otros');

        -- --------------------------------------------------------

        --
        -- Estructura de tabla para la tabla `linea_carrito`
        --

        CREATE TABLE `linea_carrito` (
        `id_factura` int(2) NOT NULL,
        `id_producto` int(2) NOT NULL,
        `cantidad` int(11) NOT NULL,
        `precio` decimal(10,0) NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

        -- --------------------------------------------------------

        --
        -- Estructura de tabla para la tabla `noticias`
        --

        CREATE TABLE `noticias` (
        `id` int(3) NOT NULL,
        `titulo` varchar(100) NOT NULL,
        `descripcion` varchar(255) NOT NULL,
        `foto` varchar(50) NOT NULL,
        `fecha` date DEFAULT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

        --
        -- Volcado de datos para la tabla `noticias`
        --

        INSERT INTO `noticias` (`id`, `titulo`, `descripcion`, `foto`, `fecha`) VALUES
        (1, 'Distribuciones Carbónicas inaugura página web', 'Distribuciones Carbónicas S.L abre hoy su primera página web.', 'carbonicas.jpg', '2022-04-20');

        -- --------------------------------------------------------

        --
        -- Estructura de tabla para la tabla `producto`
        --

        CREATE TABLE `producto` (
        `id_producto` int(2) NOT NULL,
        `nombre` varchar(50) NOT NULL,
        `unidades` int(3) NOT NULL,
        `precio` decimal(3,0) NOT NULL,
        `descripcion` varchar(255) NOT NULL,
        `categoria_id` int(2) NOT NULL,
        `marca` varchar(50) NOT NULL,
        `foto` varchar(255) NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

        --
        -- Volcado de datos para la tabla `producto`
        --

        INSERT INTO `producto` (`id_producto`, `nombre`, `unidades`, `precio`, `descripcion`, `categoria_id`, `marca`, `foto`) VALUES
        (1, 'Cocacola lata Normal', 1, '8', 'Coca-Cola normal lata pack 24', 1, 'cocacola', 'cocaNlata.jpg'),
        (2, 'Monster Energy', 1, '9', 'Mosnter normal', 1, 'monster', 'monster.jpg'),
        (3, 'Fanta Naranja', 1, '7', 'Fanta Naranja lata pack 24', 1, 'fanta', 'fanta.jpg'),
        (4, 'Minute Maid melocotón', 1, '2', 'Minute Maid vidrio Naraja', 3, 'minute maid', 'minutemaid.jpg'),
        (5, 'Etiqueta Negra', 1, '9', 'Botella de Whisky Johnnie Walker Etiqueta Negra 1L', 2, 'johnnie walker', 'wiskyN.jpg\r\n'),
        (6, 'Coca Cola lata Light', 1, '8', 'Coca-Cola lata light pack 24 und.', 1, 'cocacola', 'cocaLlata.jpg'),
        (7, 'Coca Cola lata Zero', 1, '8', 'Coca-Cola lata Zero pack 24 und.', 1, 'cocacola', 'cocaZlata.jpg'),
        (8, 'Coca Cola lata Zero Zero', 1, '8', 'Coca-Cola lata Zero-Zero pack 24 und.', 1, 'cocacola', 'cocaZZlata.jpg\r\n'),
        (9, 'Coca Cola 1L Normal', 1, '9', 'Coca-Cola litro normal pack 6 und.', 1, 'cocacola', 'cocaNlitro.jpg'),
        (10, 'Coca Cola 1L Light', 1, '9', 'Coca-Cola 1L light pack 6 und.', 1, 'cocacola', 'cocaLlitro.jpg'),
        (11, 'Carrizal ', 1, '8', 'Agua Carrizal II 1,5L', 4, 'carrizal', 'carrizal15L.jpg'),
        (12, 'Queso asturiana', 1, '8', 'Queso Asturiana Clásico barra 3klg', 5, 'asturiana', 'queso3K.jpg\r\n'),
        (13, 'Mantel Papel', 1, '8', 'Mantel de papel', 6, 'mantel', 'mantelP.jpg\r\n');

        -- --------------------------------------------------------

        --
        -- Estructura de tabla para la tabla `usuario`
        --

        CREATE TABLE `usuario` (
        `id` int(2) NOT NULL,
        `user` varchar(16) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
        `password` varchar(16) NOT NULL,
        `nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
        `apellido1` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
        `apellido2` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
        `email` varchar(255) NOT NULL,
        `clase` varchar(30) NOT NULL,
        `dni` varchar(9) NOT NULL,
        `direccion` varchar(255) NOT NULL,
        `usuario_verificado` int(1) NOT NULL,
        `rol_usuario` int(1) NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

        --

        --
        -- Índices para tablas volcadas
        --

        --
        -- Indices de la tabla `carrito`
        --
        ALTER TABLE `carrito`
        ADD PRIMARY KEY (`id_compra`),
        ADD KEY `id_usuario` (`id_usuario`);

        --
        -- Indices de la tabla `categoria`
        --
        ALTER TABLE `categoria`
        ADD PRIMARY KEY (`id_categoria`);

        --
        -- Indices de la tabla `linea_carrito`
        --
        ALTER TABLE `linea_carrito`
        ADD KEY `id_factura` (`id_factura`),
        ADD KEY `id_producto` (`id_producto`);

        --
        -- Indices de la tabla `noticias`
        --
        ALTER TABLE `noticias`
        ADD PRIMARY KEY (`id`);

        --
        -- Indices de la tabla `producto`
        --
        ALTER TABLE `producto`
        ADD PRIMARY KEY (`id_producto`),
        ADD KEY `categoria_id` (`categoria_id`);

        --
        -- Indices de la tabla `usuario`
        --
        ALTER TABLE `usuario`
        ADD PRIMARY KEY (`id`);

        --
        -- AUTO_INCREMENT de las tablas volcadas
        --

        --
        -- AUTO_INCREMENT de la tabla `carrito`
        --
        ALTER TABLE `carrito`
        MODIFY `id_compra` int(4) NOT NULL AUTO_INCREMENT;

        --
        -- AUTO_INCREMENT de la tabla `categoria`
        --
        ALTER TABLE `categoria`
        MODIFY `id_categoria` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

        --
        -- AUTO_INCREMENT de la tabla `noticias`
        --
        ALTER TABLE `noticias`
        MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

        --
        -- AUTO_INCREMENT de la tabla `producto`
        --
        ALTER TABLE `producto`
        MODIFY `id_producto` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

        --
        -- AUTO_INCREMENT de la tabla `usuario`
        --
        ALTER TABLE `usuario`
        MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

        --
        -- Restricciones para tablas volcadas
        --

        --
        -- Filtros para la tabla `carrito`
        --
        ALTER TABLE `carrito`
        ADD CONSTRAINT `carrito_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON UPDATE CASCADE;

        --
        -- Filtros para la tabla `linea_carrito`
        --
        ALTER TABLE `linea_carrito`
        ADD CONSTRAINT `linea_carrito_ibfk_1` FOREIGN KEY (`id_factura`) REFERENCES `carrito` (`id_compra`) ON UPDATE CASCADE,
        ADD CONSTRAINT `linea_carrito_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`) ON UPDATE CASCADE;

        --
        -- Filtros para la tabla `producto`
        --
        ALTER TABLE `producto`
        ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id_categoria`) ON UPDATE CASCADE;
        COMMIT;

        /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
        /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
        /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
        ";
            
            
           // $query = "INSERT into usuario (user, password, nombre, apellido1, apellido2, email, clase, dni, direccion,rol_usuario,token) VALUES ('$user','$password','$nombre','$apellido1','$apellido2','$email','$clase','$dni','$direccion','$rol_usuario','$token')";
            $result = mysqli_query($conexion, $query,$bbdd);

         
            
            

         
    }

?>