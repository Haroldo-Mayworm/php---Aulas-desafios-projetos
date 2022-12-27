<?php

require_once 'function-funcoes.php';

$contasCorrentes = [
  111 => [
    'titular' => 'Rafael',
    'saldo' => 1500
  ],
  222 => [
    'titular' => 'Jorge',
    'saldo' => 3420
  ],
  333 => [
    'titular' => 'Felipe',
    'saldo' => 460
  ]
];

$contasCorrentes[111] = sacar($contasCorrentes[111], 500);

$contasCorrentes[333] = depositar($contasCorrentes[333], 640);

letrasMaiusculas($contasCorrentes[111]);

foreach ($contasCorrentes as $idConta => $conta) {
  ['titular' => $titular, 'saldo' => $saldo] = $conta;
  exibirTela("$idConta $titular $saldo");
}
?>