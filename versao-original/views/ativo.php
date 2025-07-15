<?php

require_once 'classes/Ativo.php';

$ativo = new Ativo();
$relatorio = $ativo->calcularPrecoMedio();

?>

<?php include 'head.php'; ?>

<title>Relatório de Ativos - Preço médio</title>
</head>

<body>

    <?php include 'header.php'; ?>

    <h1>Relatório de Ativos - Preço médio</h1>
    <table border="1">
        <tr>
            <th>Ativo</th>
            <th>Total comprado</th>
            <th>Preço Médio</th>
        </tr>
        <?php foreach ($relatorio as $linha): ?>
            <tr>
                <td><?= $linha['ativo'] ?></td>
                <td><?= $linha['total_quantidade'] ?></td>
                <td><?= number_format($linha['preco_medio'], 2, ',', '.') ?></td>
            </tr>
        <?php endforeach; ?>
    </table>


    <?php include 'footer.php'; ?>