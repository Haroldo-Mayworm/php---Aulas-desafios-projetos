<?php 

// Tomada de decisao com if/else

$idade = 21;
$acompanhado = false;


echo "So pode entrar quem ja tem 18 anos!".PHP_EOL;

if($idade>=18) {
  echo "Você tem $idade anos, pode entrar!";
} else if($acompanhado==true) {
  echo "Você so tem $idade anos, porem esta acompanhado. Pode entrar!";
} else {
  echo "Você so tem $idade anos, não pode entrar";
}