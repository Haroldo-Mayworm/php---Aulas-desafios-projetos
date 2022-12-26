<?php

// Operacoes matematicas com variaveis

// -operacoes basicas

$idadeJoao = 20 + 10;
$troco = 40 - 20;
$metade = 10 / 2;
$multiplo = 10 * 10;
$potencia = 2 ** 3;
$restoDaDivisao = 10 % 3;
// echo $idadeJoao . PHP_EOL, $troco . PHP_EOL, $metade . PHP_EOL, $multiplo . PHP_EOL, $potencia . PHP_EOL, $restoDaDivisao . PHP_EOL;


// -operacoes com outra variavel

$idadeHoje = 27;
$idadeHaXAnos = $idadeHoje - 10;
// echo $idadeHaXAnos;

$valorUnitario = 32;
$quantComprada = 3;
$valorFinal = $valorUnitario * $quantComprada;
// echo $valorFinal;

$n1 = 10;
$n2 = 35;
$n3 = 60;
$operacao = ($n1 + $n3) / $n2;
// echo $operacao;