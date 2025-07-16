<?php
$basePath = '../';
require_once $basePath . 'classes/Dividendo.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dividendo = new Dividendo();
    $dividendo->adicionarDividendo(
        $_POST['ativo'],
        $_POST['valor'],
        $_POST['data_recebimento']
    );
}

$title = "Cadastrar Dividendos | Gestão de Ativos";
include $basePath . 'includes/head.php';
?>

<body>

    <?php include $basePath . 'includes/header.php'; ?>

    <main>
        <h1>Cadastrar Dividendos</h1>
        <form method="post">
            <label for="ativo">Ativo:</label>
            <input type="text" name="ativo" id="ativo" required>

            <label for="valor">Valor Recebido:</label>
            <input type="number" name="valor" id="valor" required>

            <label for="data_recebimento">Data Recebimento:</label>
            <input type="date" name="data_recebimento" id="data_recebimento" required>

            <button type="submit">Cadastrar</button>
        </form>
    </main>

    <?php include $basePath . 'includes/footer.php'; ?>