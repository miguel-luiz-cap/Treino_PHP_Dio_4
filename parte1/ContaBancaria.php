<?php

declare(strict_types=1);

class ContaBancaria
{

    /**
     * @var string
     */
    private $banco;

    /**
     * @var string
     */
    private $nomeTitular;

    /**
     * @var string
     */
    private $numeroAgencia;

    /**
     * @var string
     */
    private $numeroConta;

    /**
     * @var float
     */
    private $saldo;

    public function __construct(
        string $banco, 
        string $nomeTitular, 
        string $numeroAgencia, 
        string $numeroConta, 
        float $saldo
    ) {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }

    public function obterSaldo() : string
    {
        return 'Saldo Atual: R$ ' . $this->saldo;
    }
    public function depositar(float $valor) : string
    {
        $this->saldo += $valor;
        return 'Foram depoistados R$ ' . $valor . 'com sucesso';
    }
    public function sacar(float $valor) : string
    {
        $this->saldo -= $valor;
        return 'Foram sacados R$ ' . $valor . 'com sucesso';
    }
}

$conta = new ContaBancaria(
    'Banco do Brasil', // public $banco;
    'Teste',    // public $nomeTitular;
    '22244',    // public $numeroAgencia;
    '33232-32',  // public $numeroConta;
    300.00      // public $saldo;

);

// var_dump($conta);
echo ($conta->obterSaldo()) . '<br/>';
$conta->depositar(300.00);
echo ($conta->obterSaldo()) . '<br/>';
$conta->sacar(200.00);
echo ($conta->obterSaldo()) . '<br/>';

/* var_dump($conta->saldo);
$conta->saldo = 0;
var_dump($conta->saldo); */