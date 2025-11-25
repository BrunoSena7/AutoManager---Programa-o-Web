<?php
$arquivo = __DIR__ . '/../carros.json';
if (!file_exists($arquivo)) {
    file_put_contents($arquivo, json_encode([]));
}
$carros = json_decode(file_get_contents($arquivo), true);
if (!is_array($carros)) $carros = [];

function validar($valor) {
    return htmlspecialchars(trim($valor), ENT_QUOTES, 'UTF-8');
}

$marca = validar($_POST['marca'] ?? '');
$modelo = validar($_POST['modelo'] ?? '');
$ano = (int) ($_POST['ano'] ?? 0);
$preco = (float) str_replace(",", ".", $_POST['preco'] ?? 0);

if ($marca === '' || $modelo === '' || $ano < 1950 || $preco <= 0) {
    die("Dados inválidos. Volte e corrija.");
}

$novoId = count($carros) > 0 ? end($carros)['id'] + 1 : 1;
$carros[] = [
    'id' => $novoId,
    'marca' => $marca,
    'modelo' => $modelo,
    'ano' => $ano,
    'preco' => $preco
];

file_put_contents($arquivo, json_encode($carros, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
header("Location: listar_carros.php");
exit;