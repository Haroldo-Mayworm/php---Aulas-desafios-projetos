<?php 

function sacar(array $conta, float $valorSacar) : array 
{
  if($valorSacar > $conta['saldo']) {
    ExibirTela("Saldo infuficiente para saque.");
  } else {
    $conta['saldo'] -= $valorSacar;
  }
  return $conta;
}

function depositar(array $conta, float $valorDepositar) : array 
{
  if ($valorDepositar > 0) {
    $conta['saldo'] += $valorDepositar;
  } else {
    ExibirTela("São aceitos somente depositos positivos!");
  }
  return $conta;
}

function exibeConta(array $conta)
{
  ['titular' => $titular, 'saldo' => $saldo] = $conta;
  echo "<li>Titular: $titular - Saldo: $saldo</li>";
}

function exibirTela(string $mensagem) 
{
  echo $mensagem . '<br>';
}

function letrasMaiusculas(array &$conta)
{
  $conta['titular'] = strtoupper($conta['titular']);
}