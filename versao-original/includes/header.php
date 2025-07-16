<?php
if (!isset($basePath)) {
    $basePath = './';
}
?>

<header>
    <nav>
        <ul class="menu">
            <li><a href="<?= $basePath ?>index.php">Início</a></li>
            <li><a href="<?= $basePath ?>views/compras.php">Cadastrar Compras</a></li>
            <li><a href="<?= $basePath ?>views/ativo.php">Preço Médio</a></li>
            <li><a href="<?= $basePath ?>views/dividendos.php">Cadastrar Dividendos</a></li>
            <li><a href="<?= $basePath ?>views/relatorio.php">Relatório</a></li>
            <li><a href="<?= $basePath ?>views/posts.php">Posts</a></li>
            <li><a href="<?= $basePath ?>views/usuarios.php">Usuários</a></li>
            <li><a href="<?= $basePath ?>views/editar_usuario.php">Editar Usuários</a></li>
            <li><a href="<?= $basePath ?>login.php">Login</a></li>
            <li><a href="<?= $basePath ?>registro.php">Registro</a></li>
        </ul>
    </nav>
</header>