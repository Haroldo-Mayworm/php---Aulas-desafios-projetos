<?php 

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

$contasCorrentes[222]['saldo'] -= 420;

$contasCorrentes[333]['saldo'] += 700;

foreach ($contasCorrentes as $idConta => $conta) {
  echo $idConta . ' ' . $conta['titular'] . ' ' . $conta['saldo'] . PHP_EOL;
}