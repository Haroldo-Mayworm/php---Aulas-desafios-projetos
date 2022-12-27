<?php

$conta1 = [
  'titular' => 'Rafael',
  'saldo' => 1500
];
$conta2 = [
  'titular' => 'Jorge',
  'saldo' => 3420
];
$conta3 = [
  'titular' => 'Felipe',
  'saldo' => 460
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++) {
  echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}