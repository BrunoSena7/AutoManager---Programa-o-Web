<?php 
require "../includes/header.php";
require "../includes/navbar.php";
?>

<h2 style="margin:20px;">Cadastrar Carro</h2>

<form action="salvar_carro.php" method="POST" style="margin:20px;">
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
require "../includes/footer.php";
?>
