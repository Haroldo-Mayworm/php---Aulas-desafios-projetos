<?php

$notas = [
  [
    'aluno' => 'Marcos',
    'nota' => 8,
  ],
  [
    'aluno' => 'Bia',
    'nota' => 6,
  ],
  [
    'aluno' => 'Juliana',
    'nota' => 9,
  ],
];

// function ordenaNotas(array $nota1, array $nota2): int
// {
//   if ($nota1['nota'] > $nota2['nota']) {
//     return -1;
//   }

//   if ($nota2['nota'] > $nota1['nota']) {
//     return 1;
//   }
//   return 0;
// }

function ordenaNotas(array $nota1, array $nota2): int 
{
  return $nota2['nota'] <=> $nota1['nota'];
}

usort($notas, 'ordenaNotas');
var_dump($notas);