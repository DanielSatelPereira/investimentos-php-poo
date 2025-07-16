<?php
$basePath = './';
$title = "Dashboard | Gestão de Ativos";
require_once $basePath . 'includes/functions.php';
include $basePath . 'includes/head.php';
?>

<body>
    <?php include $basePath . 'includes/header.php'; ?>

    <main>
        <section class="dashboard">
            <h1>Bem-vindo à Gestão de Ativos</h1>
            <p>Este sistema ajuda você a gerenciar seus investimentos em ativos</p>

            <div class="cards">
                <div class="card">
                    <h2>Total Investido</h2>
                    <p>R$ <?= calcularTotalInvestido(); ?></p>
                </div>
                <div class="card">
                    <h2>Total de Dividendos</h2>
                    <p>R$ <?= calcularTotalDividendos(); ?></p>
                </div>
            </div>
        </section>
    </main>

    <?php include $basePath . 'includes/footer.php'; ?>