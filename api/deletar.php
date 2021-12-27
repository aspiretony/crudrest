<?php

if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {


    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


    include_once '../config/conexao.php';
    include_once 'empregados.php';

    $database = new Database();

    $db = $database->pegaConexao();

    $data = new Empregados($db);
    $data->id = isset($_GET['id']) ? $_GET['id'] : die();

    if ($data->deleteEmpregado()) {
        echo json_encode("E Se Foi os dados....");
    } else {
        echo json_encode("Algo de errado não está certo..");
    }
}else{
    http_response_code(405);
    echo json_encode("METODO NÃO AUTORIZADO");
}
?>