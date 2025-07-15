<?php
require_once "classes/Ativo.php";
require_once "classes/Dividendo.php";

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

foreach ($dividendo as $item) {
    if (isset($dadosGrafico[$item['ativo']])) {
        $dadosGrafico[$item['ativo']]['dividendos'] = $item['total_dividendos'];
    }
}
?>

<?php include 'head.php'; ?>

<title>Relatório de Investimentos x Dividendos</title>
</head>

<body>

    <?php include 'header.php'; ?>

    <h1>Relatório de Investimentos x Dividendos</h1>

    <canvas id="graficoInvestimentosDividendos"></canvas>

    <script>
        const dados = <?php echo json_encode($dadosGrafico) ?>;

        const labels = Object.keys(dados);
        console.log(dados);
        console.log(labels);

        const dadosInvestidos = Object.values(dados).map(item => item.investido);
        const dadosDividendos = Object.values(dados).map(item => item.dividendos);
        console.log(dadosInvestidos);
        console.log(dadosDividendos);

        const grafico = document.getElementById('graficoInvestimentosDividendos').getContext('2d')
        new Chart(grafico, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                        label: 'Total Investido (R$)',
                        data: dadosInvestidos,
                        backgroudColor: 'rgba(54, 162, 235, 0.5)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Dividendos Recebidos  (R$)',
                        data: dadosDividendos,
                        backgroudColor: 'rgba(54, 162, 235, 0.5)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }
                ]
            }
        });
    </script>


    <?php include 'footer.php'; ?>