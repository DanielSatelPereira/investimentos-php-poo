<?php

require_once 'classes/Ativo.php';
require_once 'classes/Dividendo.php';

function calcularTotalDividendos()
{
    $ativo = new Dividendo();
    $investimentos = $ativo->listarDividendos();

    $valor = 0;
    foreach ($investimentos as $item) {
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
