<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../config/conexao.php';
include_once 'empregados.php';
$database = new Database();

$db = $database->pegaConexao();

$dados = new Empregados($db);
$requsicao = $dados->getEmpregados();
$contador = $requsicao->num_rows;

echo json_encode($contador);
if ($contador > 0){
    $dadosJson = array();
    $dadosJson ["body"] = array();
    $dadosJson ["contarItens"] = $contador;

    while ($linha = $requsicao->fetch_assoc()){
        array_push($dadosJson["body"], $linha);
    }
    echo json_encode($dadosJson);
}else{
    http_response_code(404);
    echo json_encode(
        array("message" => "Nenhum resultado encontrado")
    );
}