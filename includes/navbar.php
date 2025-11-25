<?php ?>
<style>
    nav {
        background: #1e1e2f;
        padding: 15px 0;
        font-family: Arial, sans-serif;
        
        /* 💡 CORREÇÃO AQUI */
        width: 90%;       /* Define uma largura para o bloco (ex: 90% da tela) */
        margin: 0 auto;   /* Centraliza o bloco na horizontal */
    }

    nav ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center; /* Isto já centraliza os links DENTRO do nav */
        gap: 30px;
    }
    /* ... (Seus outros estilos para li e a) ... */
</style>

<nav>
    <ul>
        <li><a href="/AUTO-MANAGER/index.php">Início</a></li>
        <li><a href="/AUTO-MANAGER/pages/cadastro_carro.php">Cadastrar Carro</a></li>
        <li><a href="/AUTO-MANAGER/pages/listar_carros.php">Listar Carros</a></a></li>
        <li><a href="/AUTO-MANAGER/pages/sobre.php">Sobre</a></li> 
    </ul>
</nav>