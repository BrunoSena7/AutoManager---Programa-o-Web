<?php
include __DIR__ . '/../includes/header.php';
include __DIR__ . '/../includes/navbar.php';

$arquivo = __DIR__ . '/../carros.json';
if (!file_exists($arquivo)) {
    file_put_contents($arquivo, json_encode([]));
}
$carros = json_decode(file_get_contents($arquivo), true);
if (!is_array($carros)) $carros = [];
?>

<h2>Lista de Carros</h2>

<?php if (count($carros) === 0): ?>
    <p style="margin:20px;">Nenhum carro cadastrado.</p>
<?php else: ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Ano</th>
            <th>Preço</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($carros as $c): ?>
            <tr>
                <td><?= htmlspecialchars($c['id']) ?></td>
                <td><?= htmlspecialchars($c['marca']) ?></td>
                <td><?= htmlspecialchars($c['modelo']) ?></td>
                <td><?= htmlspecialchars($c['ano']) ?></td>
                <td>R$ <?= number_format($c['preco'], 2, ',', '.') ?></td>
                <td>
                    <a href="editar_carro.php?id=<?= $c['id'] ?>">Editar</a> |
                    <a href="excluir_carro.php?id=<?= $c['id'] ?>" class="link-excluir">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>

<?php include __DIR__ . '/../includes/footer.php'; ?>