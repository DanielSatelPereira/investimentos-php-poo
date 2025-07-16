<?php
require_once __DIR__ . '/../classes/Ativo.php';
require_once __DIR__ . '/../classes/Dividendo.php';

function calcularTotalDividendos()
{
    $dividendo = new Dividendo();
    $lista = $dividendo->listarDividendos();

    $valor = 0;
    foreach ($lista as $item) {
        $valor += $item['valor'];
    }

    return number_format($valor, 2, ',', '.');
}

function calcularTotalInvestido()
{
    $ativo = new Ativo();
    $investimentos = $ativo->calcularPrecoMedio();

    $valor = 0;
    foreach ($investimentos as $item) {
        $valor += $item['total_valor'];
    }

    return number_format($valor, 2, ',', '.');
}