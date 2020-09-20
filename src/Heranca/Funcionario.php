<?php

declare(strict_types=1);

// cada pasta um novo namespace
namespace Alfa\Heranca;

class Funcionario {
    private string $nome;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }

    public function getSalario() : float {
        return 1000.00;
    }

    public function getBonificacao() : float {
        return $this->getSalario() * 1.3;
    }
}