<?php
include "../Codigo/database/conexion.php";
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" id="formularioRegistro"  novalidate>
        <input type="text" name="h" id="h">
        <button name="registro" id="registro"  type="submit">Registrarse</button>
    </form>
</body>
</html>


<?php

if(isset($_POST['registro'])){

    $db = $_POST['h'];

    $ddbb = "CREATE DATABASE $db";

   $result = mysqli_query($conexion,$ddbb);
   
   echo'<meta http-equiv="Refresh" content="1;url=../importacionBD.php?ddbb=$ddbb">';

         
}

?>