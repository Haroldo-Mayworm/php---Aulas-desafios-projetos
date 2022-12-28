<?php 

$notas = [
  'Ana' => 10, 
  'Joao' => 10, 
  'Maria' => 7, 
  'Gustavo' => 9
];

// verifica se existe o valor na array
var_dump(in_array(10, $notas));
var_dump(in_array(2, $notas));

// exibe a chave apartir do valor
echo array_search(10, $notas);