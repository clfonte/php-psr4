<?php

declare(strict_types=1);

require_once '../vendor/autoload.php';

use Alfa\Heranca\Funcionario;
use Alfa\Heranca\Gerente;

$funcionario = new Funcionario("Camila");
$gerente = new Gerente("Michaella");

dump($funcionario->getBonificacao());
dump($gerente->getBonificacao());