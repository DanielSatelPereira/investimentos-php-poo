<?php
$basePath = '../';
require_once $basePath . 'classes/Usuario.php';
session_start();

$usuario = new Usuario();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['excluir'])) {
        $usuario->excluirUsuario($_POST['id']);
        header('Location: usuarios.php');
        exit;
    }
}

$usuarios = $usuario->listarUsuarios();

$title = "Gerenciar Usuários | Gestão de Ativos";
include $basePath . 'includes/head.php';
?>

<body>
    <?php include $basePath . 'includes/header.php'; ?>

    <main class="container">
        <h1>Gerenciar Usuários</h1>

        <table class="border">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario): ?>
                <tr>
                    <td><?= $usuario['id'] ?></td>
                    <td><?= $usuario['nome'] ?></td>
                    <td><?= $usuario['email'] ?></td>
                    <td>
                        <form method="POST" style="display:inline;">
                            <input type="hidden" name="id" value="<?= $usuario['id'] ?>">
                            <button type="submit" name="excluir">Excluir</button>
                        </form>
                        <form method="GET" action="editar_usuario.php" style="display:inline;">
                            <input type="hidden" name="id" value="<?= $usuario['id'] ?>">
                            <button type="submit">Editar</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>

    <?php include $basePath . 'includes/footer.php'; ?>