<?php

declare(strict_types=1);

require_once '../vendor/autoload.php';

use Alfa\Heranca\Funcionario;
use Alfa\Heranca\Gerente;
use Alfa\Heranca\CalculaBonificacao;

$calculaBonificacao = new CalculaBonificacao();

$funcionario = new Funcionario("Camila");
$gerente = new Gerente("Michaella");

dump ($calculaBonificacao->calcula($funcionario));
dump ($calculaBonificacao->calcula($gerente));
