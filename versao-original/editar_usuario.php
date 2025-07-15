<?php
require_once 'classes/Usuario.php';

$usuario = new Usuario();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $usuarioSelecionado = $usuario->buscarUsuario($_GET['id']);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuarioSelecionado = $usuario->atualizarUsuario($_POST['id'], $_POST['nome'], $_POST['email']);
    header('Location: usuarios.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Editar Usuário</h1>
    <form method="POST">
        <input type="hidden" name="id" value="<?= $usuarioSelecionado['id'] ?>">

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="<?= $usuarioSelecionado['nome'] ?>" required>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="<?= $usuarioSelecionado['email'] ?>" required>
        <button type="submit">Salvar alterações</button>
    </form>
</body>

</html>