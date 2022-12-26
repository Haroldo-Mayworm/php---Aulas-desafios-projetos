<?php

// Continue
for($contador = 1; $contador <= 15; $contador++) {
  if($contador == 13) {
    continue;
  }
  echo "#$contador" . PHP_EOL;
}

echo PHP_EOL;

// Break
for($contador = 1; $contador <= 15; $contador++) {
  if($contador == 10) {
    break;
  }
  echo "#$contador" . PHP_EOL;
}