<?php

declare(strict_types=1);

class Produto
{
    /**
     * @var PDO
     */
    private $conexao;

    /**
     * @var String
     */
    private $sql;

    /**
     * @var Object
     */
    private $preparar;

    public function __construct()
    {
        try {
            $this->conexao = new PDO('mysql:host=127.0.0.1:3306;dbname=dio_curso_php4', 'root', '');
        } catch (Exception $e) {
            echo $e->getMessage();
            die();
        }
    }

    public function list() : array
    {
        $this->sql = 'select * from produtos';

        $produtos = [];

        foreach ($this->conexao->query($this->sql) as $key => $value) {
            array_push($produtos, $value);
        }
        return $produtos;
    }
    public function insert(string $descricao) : int
    {
        $this->sql = 'insert into produtos(descricao) values(?)';
        $this->preparar = $this->conexao->prepare($this->sql);
        $this->preparar->bindParam(1, $descricao);
        return $this->executarComando();
    }
    public function update(int $id, string $descricao) : int
    {
        $this->sql = 'update produtos set descricao = ? where id = ?';
        $this->preparar = $this->conexao->prepare($this->sql);
        $this->preparar->bindParam(1, $descricao);
        $this->preparar->bindParam(2, $id);
        return $this->executarComando();
    }
    public function delete(int $id) : int
    {
        $this->sql = 'delete from produtos where id = ?';
        $this->preparar = $this->conexao->prepare($this->sql);
        $this->preparar->bindParam(1, $id);
        return $this->executarComando();
    }
    private function executarComando() : int {
        $this->preparar->execute();
        return $this->preparar->rowCount();
    }
}
