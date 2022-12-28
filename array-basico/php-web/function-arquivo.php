<?php

require_once 'function-funcoes.php';

$contasCorrentes = [
  111 => [
    'titular' => 'Rafael',
    'saldo' => 1500
  ],
  222 => [
    'titular' => 'Jorge',
    'saldo' => 3420
  ],
  333 => [
    'titular' => 'Felipe',
    'saldo' => 460
  ]
];

$contasCorrentes[111] = sacar($contasCorrentes[111], 500);

$contasCorrentes[333] = depositar($contasCorrentes[333], 640);

// letrasMaiusculas($contasCorrentes[111]);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php na web</title>
</head>
<body>
  <h1>Contas Correntes</h1>
  <dl>
    <?php foreach($contasCorrentes as $idConta => $conta) { ?>
    <dt><h4><?=$idConta;?> - <?=$conta['titular'];?></h4><dt>
      <dd>Saldo: <?=$conta['saldo'];?></dd>
    <?php } ?>
  </dl>
</body>
</html>