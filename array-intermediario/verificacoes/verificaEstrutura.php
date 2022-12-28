<?php 

$notas = [
  'Ana' => 10, 
  'Joao' => 5, 
  'Maria' => 7, 
  'Gustavo' => 9
];

$arrayNumerico = ['um', 'dois', 'tres', 'quatro'];


// Verifica se é uma array
if (is_array($notas)) {
  // echo 'isso é uma array' . PHP_EOL;
}


// Verifica se a array tem chaves numericas - True se tem, False se nao
//True
var_dump(array_is_list($arrayNumerico));
//False
// var_dump(array_is_list($notas));