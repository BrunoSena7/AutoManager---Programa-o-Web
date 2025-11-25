<?php
$arquivo = __DIR__ . '/../carros.json';

// Carrega o arquivo JSON (se existir)
$carros = [];
if (is_file($arquivo)) {
    $conteudo = file_get_contents($arquivo);
    $carros = json_decode($conteudo, true);
}

// Garante que sempre teremos um array
if (!is_array($carros)) {
    $carros = [];
}

// Função de sanitização
function validar($valor) {
    return htmlspecialchars(trim((string)$valor), ENT_QUOTES, 'UTF-8');
}

// Recebe os dados do POST
$id     = isset($_POST['id']) ? (int) $_POST['id'] : 0;
$marca  = validar($_POST['marca'] ?? '');
$modelo = validar($_POST['modelo'] ?? '');
$ano    = isset($_POST['ano']) ? (int) $_POST['ano'] : 0;

// Converte preço (formato BR: vírgula → ponto)
$precoRaw = $_POST['preco'] ?? '0';
$preco    = (float) str_replace(',', '.', $precoRaw);

// Validação dos dados
if ($marca === '' || $modelo === '' || $ano < 1950 || $preco <= 0) {
    die("Dados inválidos. Volte e corrija.");
}

// Procura e atualiza o carro
$found = false;

foreach ($carros as &$c) {
    if (isset($c['id']) && (int)$c['id'] === $id) {
        $c['marca']  = $marca;
        $c['modelo'] = $modelo;
        $c['ano']    = $ano;
        $c['preco']  = $preco;
        $found = true;
        break;
    }
}

unset($c); // IMPORTANTE: quebra referência

if (!$found) {
    die("Carro não encontrado.");
}

// Salva o arquivo JSON
file_put_contents(
    $arquivo,
    json_encode($carros, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE),
    LOCK_EX
);

// Redireciona de volta à listagem
header("Location: listar_carros.php");
exit;
?>