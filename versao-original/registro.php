<?php
$basePath = './';
require_once $basePath . 'classes/Usuario.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $usuario = new Usuario();
    $usuario->criarUsuario($_POST['nome'], $_POST['email'], $_POST['senha']);
    header('Location: login.php');
    exit;
}

$title = "Registro | Gestão de Ativos";
include $basePath . 'includes/head.php';
?>

<body>
    <?php include $basePath . 'includes/header.php'; ?>

    <main class="container">
        <h1>Registrar Usuário</h1>

        <form method="POST">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" required><br>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required><br>

            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" required><br>

            <button type="submit">Registrar</button>
        </form>
    </main>

    <?php include $basePath . 'includes/footer.php'; ?>