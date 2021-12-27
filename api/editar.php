<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' OR $_SERVER['REQUEST_METHOD'] === 'PUT') {

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    include_once '../config/conexao.php';
    include_once 'empregados.php';

    $database = new Database();

    $db = $database->pegaConexao();

    $data = new Empregados($db);

    $data->id = isset($_GET['id']) ? $_GET['id'] : die();
    $data->nome = $_GET['nome'];
    $data->email = $_GET['email'];
    $data->setor = $_GET['setor'];
    $data->modificado = date('Y-m-d H:i:s');
    if ($data->updateEmpregados()) {
        echo json_encode("Empregado Atualizado.");
    } else {
        echo json_encode("Houve um erro estranho...");
    }
}else{
    http_response_code(405);
    echo json_encode("METODO NÃO AUTORIZADO");
}