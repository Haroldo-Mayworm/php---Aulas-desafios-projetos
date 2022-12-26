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

foreach ($contasCorrentes as $idConta => $conta) {
  echo $conta['titular'] . PHP_EOL;
}