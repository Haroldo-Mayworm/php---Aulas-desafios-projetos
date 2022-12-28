<?php 

$notas = [
  'Ana' => 10, 
  'Joao' => null, 
  'Maria' => 7, 
  'Gustavo' => 9
];

ksort($notas);
// var_dump($notas);

// verifica se existe a chave na array. Porem caso o valor seja true, ele retorna mesmo assim
var_dump(array_key_exists('Joao', $notas));

// verifica se existe e se nao é null
var_dump(isset($notas['Joao']));