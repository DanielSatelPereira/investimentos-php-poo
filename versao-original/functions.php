<?php

require_once 'classes/Ativo.php';
require_once 'classes/Dividendo.php';

function calcularTotalDividendos() {
    $dividendo = new Dividendo();
    $dividendos = $dividendo->listarDividendos();

    $total = 0;

    foreach($dividendos as $item) {
        $total += $item['valor'];
    }

    return number_format($total, 2, ',', '.');
}

function calcularTotalInvestido() {
    $ativo = new Ativo();
    $investimentos = $ativo->calcularPrecoMedio();

    $valor = 0;
    foreach($investimentos as $item){
        $valor += $item['total_valor'];
    }

    return number_format($valor, 2, ',', '.');
}