<?php
require_once 'classes/Dividendo.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $compra = new Dividendo();
    $compra->adicionarDividendo($_POST['ativo'], $_POST['valor'], $_POST['data_recebimento']);
    //echo "<script>alert('Dividendo adicionado com sucesso!');</script>";

}
?>

<?php include 'head.php'; ?>

<title>Cadastro de Dividendos</title>
</head>

<body>

    <?php include 'header.php'; ?>

    <h1>Cadastrar Dividendos</h1>
    <form method="post">
        <label for="ativo">Ativo:</label>
        <input type="text" name="ativo" id="Ativo" required>
        <br>
        <label for="valor">Valor Recebido:</label>
        <input type="number" name="valor" id="valor" required>
        <br>
        <label for="data_recebimento">Data Recebimento:</label>
        <input type="date" name="data_recebimento" id="data_recebimento" required>
        <br>
        <button type="submit">Cadastrar</button>
    </form>

    <?php include 'footer.php'; ?>