<?php
    include_once '../database/conexion.php';

    $query = "SELECT * FROM noticias";

    $result = mysqli_query($conexion, $query);

    if(!$result){
        die('Query Failed'. mysqli_error($conexion));
    }

    $json= array();
    while($row = mysqli_fetch_array($result)){
        $json[]=array(
            'titulo' => $row['titulo'],
            'descripcion' => $row['descripcion'],
            'id' => $row['id'],
            'foto'=> $row['foto'],
            'fecha' => $row['fecha']
        );
    }

    $jsonString = json_encode($json);

    echo $jsonString;
?>


