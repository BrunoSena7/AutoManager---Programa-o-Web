<?php
$arquivo = __DIR__ . '/../carros.json';

if (!file_exists($arquivo)) {
    file_put_contents($arquivo, json_encode([]));
}

$carros = json_decode(file_get_contents($arquivo), true);
if (!is_array($carros)) {
    $carros = [];
}

$id = isset($_POST['id']) ? (int) $_POST['id'] : 0;

foreach ($carros as $indice => $c) {
    if ((int)$c['id'] === $id) {
        $carros[$indice]['marca']  = $_POST['marca']  ?? $c['marca'];
        $carros[$indice]['modelo'] = $_POST['modelo'] ?? $c['modelo'];
        $carros[$indice]['ano']    = $_POST['ano']    ?? $c['ano'];
        $carros[$indice]['preco']  = $_POST['preco']  ?? $c['preco'];
        break;
    }
}

file_put_contents($arquivo, json_encode($carros, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

header('Location: listar_carros.php');
exit;
