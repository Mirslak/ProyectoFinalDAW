<?php

    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json; charset=UTF-8');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Max-Age: 3600');
    header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With');

    include_once('../confi/conexion.php');
    include_once('../clases/noticias.php');

    $database = new Database();
    $db = $database->getConnection();

    $item = new noticias($db);

    $stmt = $item->getNoticia();
    $itemCount = $stmt->rowCount();

    if ($itemCount > 0) {
        $noticiaArr = array();
        $noticiaArr['body'] = array();
        $noticiaArr['itemCount'] = $itemCount;

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            extract($row);
            $e = array(
                "id" => $id,
                "titulo" => $titulo,
                "descripcion" => $descripcion
            );

            array_push($noticiaArr["body"], $e);
        }
        echo json_encode(($noticiaArr));
    } else {
        http_response_code(404);
        echo json_encode(array(
            "message" => "No record found"
        ));
    }




?>