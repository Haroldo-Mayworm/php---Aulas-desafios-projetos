<?php 

$notas1 = [
  'Ana' => 10, 
  'Joao' => 5, 
  'Maria' => 7, 
  'Gustavo' => 9,
  'Leticia' => 8,
];
$notas2 = [
  'Ana' => 7, 
  'Joao' => 5, 
  'Maria' => 8, 
  'Gustavo' => 9
];

// retorna o item em que o VALOR nao aparece nas proximas arrays. No caso o valor '8'
var_dump(array_diff($notas1, $notas2));

// Retorna o item em que a CHAVE nao aparece nas proximas arrays. No caso a chave 'Leticia'
var_dump(array_diff_key($notas1, $notas2));

// Retorna a diferencas tanto nas chaves quanto nos valores
var_dump(array_diff_assoc($notas1, $notas2));