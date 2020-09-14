<?php

declare(strict_types=1);

namespace Alfa;

// nome do arquivo tem que estar de acordo com a classe e o namespace de acordo com a config

class Conta {
    public int $numero;
    public String $titular;
    public float $saldo;
    public static array $movimentacoes = [];

    // função que já calcula retirando o valor
    public function saca(float $valor): bool {

        if ($this->saldo < $valor) {
            return false;
        }

        $this->saldo -= $valor;
        // palavra reservada para usar propriedades estáticas | vai alocar a próxima posição dentro do array
        self::$movimentacoes[] = sprintf("[%s] Saque %s", $this->titular, $valor);

        return true;
    }

    public function depositar(float $valor): void {
        $this->saldo += $valor;
        self::$movimentacoes[] = sprintf("[%s] Depósito %s", $this->titular, $valor);
    }

    public function tranfere(Conta $contaDestino, float $valor): bool {
        $retirada =  $this->saca($valor);
        if ($retirada) {
            $contaDestino->depositar($valor);
        }
        return $retirada;
    }
}
