<?php

declare(strict_types=1);

// cada pasta um novo namespace
namespace Alfa\Heranca;

// quando da extends pega todo os dados que a classe herdada possui
class Gerente extends Funcionario {
    // sobrescrever o método apenas para determinada classe
    public function getBonificacao() : float {

        // herdando o método em questão, para que não seja necessário mudar aqui sempre que aumentar a porcentagem
        // pode apenas utilizar o método que ele irá aplicar sem mudar aqui
        return parent::getBonificacao() * 1.1;
    }
}