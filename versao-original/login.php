<?php
require_once 'classes/Usuario.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = new Usuario();
    $login = $usuario->validarLogin($_POST['email'], $_POST['senha']);

    if ($login) {
        header('Location: index.php');
        exit;
    } else {
        $erro = 'Credenciais inválidas';
    }
}
?>

<?php include 'head.php'; ?>

</head>

<body>

    <?php include 'header.php'; ?>
    <h1>Login</h1>

    <form>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required><br>

        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha" required><br>
        <button type="submit">Entrar</button>
    </form>
    <?php if (isset($erro)): ?>
        <p><?= $erro ?></p>
    <?php endif; ?>


    <?php include 'footer.php'; ?>