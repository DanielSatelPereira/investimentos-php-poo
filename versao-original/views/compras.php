<?php
$basePath = '../';
require_once $basePath . 'classes/Compra.php';
session_start();

$mensagem = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $compra = new Compra();
    $resultado = $compra->adicionarCompra(
        $_POST['ativo'],
        $_POST['quantidade'],
        $_POST['valor_unitario'],
        $_POST['data_compra']
    );

    if ($resultado) {
        $mensagem = "Compra cadastrada com sucesso!";
    } else {
        $mensagem = "Erro ao cadastrar compra.";
    }
}

$title = "Cadastrar Compra | Gestão de Ativos";
include $basePath . 'includes/head.php';
?>

<body>
    <?php include $basePath . 'includes/header.php'; ?>

    <main class="container">
        <h1>Cadastrar Compra</h1>

        <?php if ($mensagem): ?>
        <p style="color: green;"><?= $mensagem ?></p>
        <?php endif; ?>

        <form method="POST">
            <label for="ativo">Ativo:</label>
            <input type="text" name="ativo" id="ativo" required><br>

            <label for="quantidade">Quantidade:</label>
            <input type="number" name="quantidade" id="quantidade" required><br>

            <label for="valor_unitario">Valor Unitário:</label>
            <input type="number" step="0.01" name="valor_unitario" id="valor_unitario" required><br>

            <label for="data_compra">Data da Compra:</label>
            <input type="date" name="data_compra" id="data_compra" required><br>

            <button type="submit">Cadastrar</button>
        </form>
    </main>

    <?php include $basePath . 'includes/footer.php'; ?>