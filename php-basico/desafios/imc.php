<?php

$peso = 50;
$altura = 1.80;
$imc = $peso / ($altura**2);

echo $imc . PHP_EOL;

if($imc < 18) {
  echo "Seu imc esta abaixo do ideal!";
} else if($imc < 25) {
  echo "Seu imc esta ideal!";
} else {
  echo "Seu imc esta mais alto do que o ideal!";
}