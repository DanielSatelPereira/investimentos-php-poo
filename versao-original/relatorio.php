<?php
    require_once "classes/Ativo.php";
    require_once "classes/Dividendo.php";

    $ativo = new Ativo();
    $dividendo = new Dividendo();

    $investimentos  = $ativo->calcularPrecoMedio();
    $dividendos = $dividendo->calcularDividendosPorAtivo();

    $dadosGrafico = [];

    foreach($investimentos as $item) {
        $dadosGrafico[$item['ativo']] = [
            'investido' => $item['total_valor'],
            'dividendos' => 0
        ];
    }

    foreach($dividendos as $item) {
        if (isset($dadosGrafico[$item['ativo']])) {
            $dadosGrafico[$item['ativo']]['dividendos'] = $item['total_dividendos'];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Investimentos x Dividendos</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h1>Relatório de Investimentos x Dividendos</h1>

    <canvas id="graficoInvestimentosDividendos"></canvas>

    <script>
        const dados = <?php echo json_encode($dadosGrafico); ?>;

        const labels = Object.keys(dados);
        console.log(dados);
        console.log(labels);

        const dadosInvestidos = Object.values(dados).map(item => item.investido);
        const dadosDividendos = Object.values(dados).map(item => item.dividendos);
        console.log(dadosInvestidos);
        console.log(dadosDividendos);

        const grafico = document.getElementById('graficoInvestimentosDividendos').getContext('2d');
        new Chart(grafico, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [
                    {
                        label: "Total Investido (R$)",
                        data: dadosInvestidos,
                        backgroundColor: 'rgba(54, 162, 235, 0.5)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Dividendos Recebidos (R$)',
                        data: dadosDividendos,
                        backgroundColor: 'rgba(75,192, 192, 0.5)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }
                ]
            }
        });
    </script>
</body>
</html>