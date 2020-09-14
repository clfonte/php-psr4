<?php

declare(strict_types=1);

require_once '../vendor/autoload.php';

use Alfa\Conta;
use Alfa\Util\Date;

$minhaConta = new Conta();
$minhaConta->titular = "Camila";
$minhaConta->saldo = 5.00;

$minhaContaDoFuturo = new Conta();
$minhaContaDoFuturo->saldo = 1_000_000_000.00;
$minhaContaDoFuturo->titular = "Edneia";


$minhaContaDoFuturo->tranfere($minhaConta, 1_000_000.00);

dump($minhaConta);
dump($minhaContaDoFuturo);
dump(Conta::$movimentacoes);