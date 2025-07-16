<?php
$basePath = '../';
require_once $basePath . "classes/Ativo.php";
require_once $basePath . "classes/Dividendo.php";

$ativo = new Ativo();
$dividendo = new Dividendo();

$investimentos = $ativo->calcularPrecoMedio();
$dividendos = $dividendo->calcularDividendosPorAtivo();

$dadosGrafico = [];

foreach ($investimentos as $item) {
    $dadosGrafico[$item['ativo']] = [
        'investido' => $item['total_valor'],
        'dividendos' => 0
    ];
}

foreach ($dividendos as $item) {
    if (isset($dadosGrafico[$item['ativo']])) {
        $dadosGrafico[$item['ativo']]['dividendos'] = $item['total_dividendos'];
    }
}

$title = "Relatório | Gestão de Ativos";
include $basePath . 'includes/head.php';
?>

<body>

    <?php include $basePath . 'includes/header.php'; ?>

    <main>
        <h1>Relatório de Investimentos x Dividendos</h1>
        <canvas id="graficoInvestimentosDividendos"></canvas>
    </main>

    <script>
    const dados = <?php echo json_encode($dadosGrafico); ?>;

    const labels = Object.keys(dados);
    const dadosInvestidos = Object.values(dados).map(item => item.investido);
    const dadosDividendos = Object.values(dados).map(item => item.dividendos);

    const grafico = document.getElementById('graficoInvestimentosDividendos').getContext('2d');
    new Chart(grafico, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                    label: 'Total Investido (R$)',
                    data: dadosInvestidos,
                    backgroundColor: 'rgba(54, 162, 235, 0.5)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Dividendos Recebidos (R$)',
                    data: dadosDividendos,
                    backgroundColor: 'rgba(75, 192, 192, 0.5)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }
            ]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    </script>

    <?php include $basePath . 'includes/footer.php'; ?>