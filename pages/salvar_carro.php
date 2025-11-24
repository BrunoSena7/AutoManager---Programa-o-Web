<?php

$arquivo = __DIR__ . '/../carros.json';


if (!file_exists($arquivo)) {
    file_put_contents($arquivo, json_encode([]));
}

$carros = json_decode(file_get_contents($arquivo), true);

if (!is_array($carros)) {
    $carros = [];
}

// gera um ID novo (último id + 1)
$novoId = 1;
if (count($carros) > 0) {
    $ids = array_column($carros, 'id');
    $novoId = max($ids) + 1;
}

// monta o novo carro
$novoCarro = [
    'id'     => $novoId,
    'marca'  => $_POST['marca']  ?? '',
    'modelo' => $_POST['modelo'] ?? '',
    'ano'    => $_POST['ano']    ?? '',
    'preco'  => $_POST['preco']  ?? '',
];

$carros[] = $novoCarro;

// Salva de volta no JSON
file_put_contents($arquivo, json_encode($carros, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

// Redireciona para a lista
header('Location: listar_carros.php');
exit;
