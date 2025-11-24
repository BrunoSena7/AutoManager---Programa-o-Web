<?php
include __DIR__ . '/../includes/header.php';
include __DIR__ . '/../includes/navbar.php';

$arquivo = __DIR__ . '/../carros.json';

if (!file_exists($arquivo)) {
    file_put_contents($arquivo, json_encode([]));
}

$carros = json_decode(file_get_contents($arquivo), true);
if (!is_array($carros)) {
    $carros = [];
}

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
$carroEncontrado = null;

foreach ($carros as $c) {
    if ((int)$c['id'] === $id) {
        $carroEncontrado = $c;
        break;
    }
}

if (!$carroEncontrado): ?>
    <p style="margin:20px;">Carro não encontrado.</p>
<?php 
    include __DIR__ . '/../includes/footer.php';
    exit;
endif;
?>

<h2>Editar Carro</h2>

<form action="atualizar_carro.php" method="POST" style="margin:20px;">
    <input type="hidden" name="id" value="<?php echo htmlspecialchars($carroEncontrado['id']); ?>">

    <label>Marca:</label><br>
    <input type="text" name="marca" required 
           value="<?php echo htmlspecialchars($carroEncontrado['marca']); ?>"><br><br>

    <label>Modelo:</label><br>
    <input type="text" name="modelo" required 
           value="<?php echo htmlspecialchars($carroEncontrado['modelo']); ?>"><br><br>

    <label>Ano:</label><br>
    <input type="number" name="ano" required 
           value="<?php echo htmlspecialchars($carroEncontrado['ano']); ?>"><br><br>

    <label>Preço:</label><br>
    <input type="number" step="0.01" name="preco" required 
           value="<?php echo htmlspecialchars($carroEncontrado['preco']); ?>"><br><br>

    <button type="submit">Atualizar</button>
</form>

<?php 
include __DIR__ . '/../includes/footer.php';
?>
