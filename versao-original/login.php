<?php
$basePath = './';
require_once $basePath . 'classes/Usuario.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = new Usuario();
    $login = $usuario->validarLogin($_POST['email'], $_POST['senha']);

    if ($login) {
        $_SESSION['usuario'] = $login; // Armazena dados do usuário logado
        header('Location: index.php');
        exit;
    } else {
        $erro = 'Credenciais inválidas';
    }
}

$title = "Login | Gestão de Ativos";
include $basePath . 'includes/head.php';
?>

<body>
    <?php include $basePath . 'includes/header.php'; ?>

    <main class="container">
        <h1>Login</h1>

        <form method="POST" action="">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required><br>

            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" required><br>

            <button type="submit">Entrar</button>
        </form>

        <?php if (isset($erro)): ?>
        <p style="color: red;"><?= $erro ?></p>
        <?php endif; ?>
    </main>

    <?php include $basePath . 'includes/footer.php'; ?>