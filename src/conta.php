<?php

declare(strict_types=1);

namespace Alfa;

// nome do arquivo tem que estar de acordo com a classe e o namespace de acordo com a config
// private apenas a própria classe tem acesso

class Conta {
    private int $numero;
    private String $titular;
    private float  $saldo;
    private float  $taxa = 2;
    private float  $limite = 100.00;
    public static array $movimentacoes = [];

    public function __construct( int $numero, string $titular, float $saldo )
    {
        $this->numero   = $numero;
        $this->titular  = $titular;
        $this->saldo    = $saldo;
    }

    // função que já calcula retirando o valor
    public function saca( float $valor ): bool {

        if ( !$this->possuiSaldo( $valor ) ) {
            return false;
        }

        $this->saldo -= $valor;
        // palavra reservada para usar propriedades estáticas | vai alocar a próxima posição dentro do array
        self::$movimentacoes[] = sprintf("[%s] Saque %s", $this->titular, $valor);

        return true;
    }

    private function possuiSaldo(float $valor) : bool {
        
        return ($this->pegaSaldo() >= $valor);
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

    // método para verificar saldo
    public function pegaSaldo() : float {
        return $this->saldo - $this->taxa + $this->limite;
    }
}
