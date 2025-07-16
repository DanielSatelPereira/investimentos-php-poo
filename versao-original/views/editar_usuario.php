<?php
$basePath = '../';
require_once $basePath . 'classes/Usuario.php';
session_start();

$usuario = new Usuario();

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $usuarioSelecionado = $usuario->buscarUsuario($_GET['id']);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario->atualizarUsuario($_POST['id'], $_POST['nome'], $_POST['email']);
    header('Location: usuarios.php');
    exit;
}

$title = "Editar Usuário | Gestão de Ativos";
include $basePath . 'includes/head.php';
?>

<body>
    <?php include $basePath . 'includes/header.php'; ?>

    <main class="container">
        <h1>Editar Usuário</h1>

        <form method="post">
            <input type="hidden" name="id" value="<?= $usuarioSelecionado['id'] ?? '' ?>">

            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" value="<?= $usuarioSelecionado['nome'] ?? '' ?>" required>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="<?= $usuarioSelecionado['email'] ?? '' ?>" required>

            <button type="submit">Salvar alterações</button>
        </form>
    </main>

    <?php include $basePath . 'includes/footer.php'; ?>