<?php

class Venda 
{
    private $data;
    private $produto;
    private $quantidade;
    private $valorTotal;

    public function __construct($data, $produto, $quantidade, $valorTotal)
    {
        $this->data = $data;
        $this->produto = $produto;
        $this->quantidade = $quantidade;
        $this->valorTotal = $valorTotal;
    }
    public function obterDadosVenda() {
        $dados = "Data da venda: " . $this->data . "<br/>";
        $dados .= "Produto: " . $this->produto . "<br/>";
        $dados .= "Quantidade: " . $this->quantidade . "<br/>";
        $dados .= "Valor Total: R$ " . $this->valorTotal . "<br/>";

        return $dados;

    }
}

$venda = new Venda(
    '12/10/2022', // private $data;
    'Prod teste', // private $produto;
    1, // private $quantidade;
    300.0 // private $valorTotal;
);

echo $venda->obterDadosVenda();