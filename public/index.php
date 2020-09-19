<?php

declare(strict_types=1);

require_once '../vendor/autoload.php';

use Alfa\Conta;
use Alfa\Util\Date;

// tudo que é necessário para o sistema funcionar vai ser passado através desse construtor
$minhaConta = new Conta(1, "Camila", 5.00);
dump ( $minhaConta->saca ( 20.00 ) );

$minhaContaDoFuturo = new Conta(2, "Michaella", 1_000_00.00);

$minhaContaDoFuturo->tranfere($minhaConta, 10.00);

echo $minhaConta->pegaSaldo();

dump($minhaConta);
dump($minhaContaDoFuturo);
dump(Conta::$movimentacoes);