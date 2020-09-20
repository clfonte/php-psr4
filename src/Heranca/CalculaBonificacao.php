<?php

declare(strict_types=1);

// cada pasta um novo namespace
namespace Alfa\Heranca;

// quando da extends pega todo os dados que a classe herdada possui
class CalculaBonificacao {

    // tipagem de classe
    public function calcula(Funcionario $funcionario) : float {

        return $funcionario->getBonificacao();
    }
}