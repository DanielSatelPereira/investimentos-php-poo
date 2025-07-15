<?php
require_once 'classes/Compra.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $compra = new Compra();
    $resultado = $compra->adicionarCompra($_POST['ativo'], $_POST['quantidade'], $_POST['valor_unitario'], $_POST['data_compra']);
    //echo "<script>alert('Dividendo adicionado com sucesso!');</script>";

}


?>

<?php include 'head.php'; ?>

<title>Relatório de Investimentos x Dividendos</title>
</head>

<body>

    <?php include 'header.php'; ?>

    <h1>Cadastrar Compra</h1>
    <form method="POST">
        <label for="ativo">Ativo:</label>
        <input type="text" name="ativo" id="ativo" required><br>

        <label for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" id="quantidade" required><br>

        <label for="valor_unitario">Valor Unitário</label>
        <input type="number" name="valor_unitario" id="valor_unitario" required><br>

        <label for="data_compra">Data da Compra:</label>
        <input type="date" name="data_compra" id="data_compra" required><br>

        <button type="submit">Cadastrar</button>

    </form>
    <footer>
        <p>Gestão de Ativos. Todos os direitos reservados</p>
    </footer>


    <?php include 'footer.php'; ?>