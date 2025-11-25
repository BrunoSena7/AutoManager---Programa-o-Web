<?php
require __DIR__ . '/../includes/header.php';
require __DIR__ . '/../includes/navbar.php';

// Caminho do arquivo JSON
$arquivo = __DIR__ . '/../carros.json';

// Carregando carros
$carros = json_decode(file_get_contents($arquivo), true);
if (!is_array($carros)) {
    $carros = [];
}

// Obtendo ID
$id = (int) ($_GET['id'] ?? 0);

// Procurando o carro correto
$carro = null;
foreach ($carros as $c) {
    if ($c['id'] == $id) {
        $carro = $c;
        break;
    }
}

// Caso não encontre
if (!$carro) {
    echo '<p style="margin:20px;">Carro não encontrado.</p>';
    require __DIR__ . '/../includes/footer.php';
    exit;
}
?>

<h2>Editar Carro</h2>

<form action="atualizar_carro.php" method="POST" data-form-carro>
    <input type="hidden" name="id" value="<?= htmlspecialchars($carro['id']) ?>">

    <label>Marca:</label><br>
    <input type="text" name="marca" required value="<?= htmlspecialchars($carro['marca']) ?>"><br><br>

    <label>Modelo:</label><br>
    <input type="text" name="modelo" required value="<?= htmlspecialchars($carro['modelo']) ?>"><br><br>

    <label>Ano:</label><br>
    <input type="number" name="ano" required value="<?= htmlspecialchars($carro['ano']) ?>"><br><br>

    <label>Preço:</label><br>
    <input type="number" step="0.01" name="preco" required value="<?= htmlspecialchars($carro['preco']) ?>"><br><br>

    <button type="submit">Atualizar</button>
</form>

<?php
require __DIR__ . '/../includes/footer.php';
?>
