<?php 
include __DIR__ . '/../includes/header.php';
include __DIR__ . '/../includes/navbar.php';
?>

<h2>Lista de Carros</h2>

<?php
$arquivo = __DIR__ . '/../carros.json';

if (!file_exists($arquivo)) {
    file_put_contents($arquivo, json_encode([]));
}

$carros = json_decode(file_get_contents($arquivo), true);

if (!is_array($carros) || count($carros) === 0): ?>
    <p style="margin:20px;">Nenhum carro cadastrado.</p>
<?php else: ?>
    <table border="1" cellpadding="10" style="margin:20px; background:#fff; border-collapse: collapse;">
        <tr style="background:#eee;">
            <th>ID</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Ano</th>
            <th>Preço</th>
            <th>Ações</th>
        </tr>

        <?php foreach ($carros as $c): ?>
            <tr>
                <td><?php echo htmlspecialchars($c['id']); ?></td>
                <td><?php echo htmlspecialchars($c['marca']); ?></td>
                <td><?php echo htmlspecialchars($c['modelo']); ?></td>
                <td><?php echo htmlspecialchars($c['ano']); ?></td>
                <td>R$ <?php echo htmlspecialchars($c['preco']); ?></td>
                <td>
                    <a href="editar_carro.php?id=<?php echo $c['id']; ?>">Editar</a> |
                    <a href="excluir_carro.php?id=<?php echo $c['id']; ?>" 
                       onclick="return confirm('Tem certeza que deseja excluir este carro?');">
                        Excluir
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>

<?php 
include __DIR__ . '/../includes/footer.php';
?>

