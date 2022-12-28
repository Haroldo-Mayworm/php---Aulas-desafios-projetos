<?php

$array1 = array(1, 2, 3);

$array2 = [1, 2, 3];

$array3 = [
  1 => 'um',
  2 => 'dois',
  3 => 'tres',
];

$array4 = [
  'um' => 1,
  'dois' => 2,
  'tres' => 3,
];

// Foreach e count

$pauta = [
  1 => 'Ana',
  2 => 'Bruno',
  3 => 'Carlos',
  4 => 'Diana',
  5 => 'Elen',
];

foreach($pauta as $chave => $nome) {
  echo $chave, ' ', $nome . PHP_EOL;
}
echo "Total de alunos: " . count($pauta) . PHP_EOL;