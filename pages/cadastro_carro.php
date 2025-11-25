<?php
require __DIR__ . '/../includes/header.php';
require __DIR__ . '/../includes/navbar.php';
?>

<h2>Cadastrar Carro</h2>

<form action="salvar_carro.php" method="POST" data-form-carro>
    <label>Marca:</label><br>
    <input type="text" name="marca" required><br><br>

    <label>Modelo:</label><br>
    <input type="text" name="modelo" required><br><br>

    <label>Ano:</label><br>
    <input type="number" name="ano" required><br><br>

    <label>Preço:</label><br>
    <input type="number" step="0.01" name="preco" required><br><br>

    <button type="submit">Salvar</button>
</form>

<?php
require __DIR__ . '/../includes/footer.php';
?>
