<?php
$arquivo = __DIR__ . '/../carros.json';

if (!file_exists($arquivo)) {
    file_put_contents($arquivo, json_encode([]));
}

$carros = json_decode(file_get_contents($arquivo), true);
if (!is_array($carros)) {
    $carros = [];
}

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

$carrosFiltrados = [];

foreach ($carros as $c) {
    if ((int)$c['id'] !== $id) {
        $carrosFiltrados[] = $c;
    }
}

file_put_contents($arquivo, json_encode($carrosFiltrados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

header('Location: listar_carros.php');
exit;