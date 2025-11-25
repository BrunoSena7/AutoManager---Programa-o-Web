<?php
// Inclui o cabeçalho e a barra de navegação
require __DIR__ . '/../includes/header.php';
require __DIR__ . '/../includes/navbar.php';
?>

<main>
    <h2>Sobre o Projeto AutoManager</h2>
    
    <p>O <strong>AutoManager</strong> é um sistema web desenvolvido como projeto prático para a disciplina de Programação Web.</p>

    <h3>Tecnologias Utilizadas:</h3>
    <ul>
        <li><strong>PHP 8+:</strong> Lógica de negócio e CRUD.</li>
        <li><strong>JSON:</strong> Persistência de dados (arquivo `carros.json`).</li>
    </ul>

    <p>O objetivo é demonstrar o desenvolvimento de um CRUD completo sem a utilização de bancos de dados relacionais.</p>
</main>

<?php
// Inclui o rodapé
require __DIR__ . '/../includes/footer.php';
?>