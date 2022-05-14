<?php
include_once "includes/cabecera.php";
include_once "database/conexion.php";
include_once "funciones/funciones.php";

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Inicio</title>
</head>
<body>

<!--Carrusel-->
<div align="center" class="col-sm-13" >
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="../Imagenes/coca-cola.jpg" class="d-block w-100" style="height: 400px;" alt="...">
        </div>
        <div class="carousel-item">
        <img src="../Imagenes/cabecera_fanta.jpg" class="d-block w-100" style="height: 400px;" alt="...">
        </div>
        <div class="carousel-item">
        <img src="../Imagenes/monster.jpg" class="d-block w-100" style="height: 400px;" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
</div>
<div class="bg-danger mb-2" style="height: 10px;">
</div>
<!--Titulo-->
<div align="center">
    <h2 class="text-success fw-bold fs-1 mt-5 mb-5">¡Bienvenido a Distribuciones Carbónicas!</h2>
    <div  align="center" style="width: 50%;"><p style="font-family: Arial, Helvetica, sans-serif; " class="fs-4" > Distribuciones Carbónicas S.L es una empresa especializada en la distribución de bebidas cárbonatadas originaria de la ciudad autónoma de Melilla  (España). Acceda a nuestro catálogo y disfrute de una alta gama de productos de primeras marcas , podrá comprar desde cualquier lugar para su negocio o para su hogar.</p></div>
</div>

<!--Carrito-->
<div align="center" class="mb-5" >
    <h2 class="text-danger  ms-3 text-center ">¿Desea comprar nuestros productos?</h2>
    <p>Haga clik aquí</p>

    <?php if(isset($_SESSION['user'])){ ?>
    
                    <a href="includes/carrito.php">
                    <button type="button" class="btn btn-danger">Comprar</button>
                    </a>

    <?php }else{?>
        <button type="button" class="btn btn-success">DEBE ESTAR LOGEADO PARA PODER COMPRAR</button>
    <?php } ?>
    
</div>

<!--Noticias-->

<?php include_once "includes/noticias.php"; ?>



<!--Scripts-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="js/app.js"></script>
</body>

<!--Footer-->
<?php include_once "includes/footer.php";?>

</html>