<?php
    require_once "classes/Usuario.php";

    if($_SERVER['REQUEST_METHOD'] === "POST") {
        $usuario = new Usuario();
        $login = $usuario->validarLogin($_POST['email'], $_POST['senha']);
    
        if ($login) {
            header('Location: index.php');
        } else {
            $erro = "Credenciais inválidas";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Login</h1>
    <form method="POST">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required><br>

        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha" required>
        <button type="submit">Entrar</button>
    </form>
    <?php if(isset($erro)): ?>
        <p><?= $erro ?></p>
    <?php endif; ?>
</body>
</html>