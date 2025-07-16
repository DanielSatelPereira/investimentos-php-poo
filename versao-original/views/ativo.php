<?php
$basePath = '../';

require_once $basePath . 'classes/Ativo.php';

$ativo = new Ativo();
$relatorio = $ativo->calcularPrecoMedio();

$title = "Preço Médio | Gestão de Ativos";
include $basePath . 'includes/head.php';
?>

<body>
    <?php include $basePath . 'includes/header.php'; ?>

    <main>
        <h1>Relatório de Ativos - Preço Médio</h1>

        <table>
            <thead>
                <tr>
                    <th>Ativo</th>
                    <th>Total Comprado</th>
                    <th>Preço Médio</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($relatorio as $linha): ?>
                <tr>
                    <td><?= $linha['ativo'] ?></td>
                    <td><?= $linha['total_quantidade'] ?></td>
                    <td><?= number_format($linha['preco_medio'], 2, ',', '.') ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>

    <?php include $basePath . 'includes/footer.php'; ?>