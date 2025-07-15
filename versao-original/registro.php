<?php
require_once 'classes/Usuario.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $usuario = new Usuario();
    $usuario->criarUsuario($_POST['nome'], $_POST['email'], $_POST['senha']);
    header('Location: login.php');
    exit;
}
?>

<?php include 'head.php'; ?>

<title>Registro</title>
</head>

<body>

    <?php include 'header.php'; ?>

    <h1>Registrar Usuario</h1>
    <form method="POST">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" required><br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required><br>

        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha" required><br>

        <button type="submit">Registrar</button>
    </form>


    <?php include 'footer.php'; ?>