<?php

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
    $data->getUmEmpregado();


    if ($data->nome != null) {
        $retorno = array(
            "id" => $data->id,
            "nome" => $data->nome,
            "email" => $data->email,
            "setor" => $data->setor,
            "criado" => $data->criado,
            "modificado" => $data->modificado
        );
        http_response_code(200);
        echo json_encode($retorno);
    } else {
        http_response_code(404);
        echo json_encode("Empregado Não Existe");
    }
