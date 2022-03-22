<?php

require "Produto.php";

$produto = new Produto();

$status = null;

switch ($_GET['operacao']) {
    case 'list':
        // var_dump($produto->list());
        echo '<h3>Produtos:</h3>';

        foreach ($produto->list() as $value) {
            echo 'ID: ' . $value['id'] . '<br/> Descrição: ' . $value['descricao'] . '<hr/>';
        }
        return true;

    case 'insert':
        $status = $produto->insert($_GET['descricao']);
        break;
    case 'update':
        $status = $produto->update($_GET['id'], $_GET['descricao']);
        break;
    case 'delete':
        $status = $produto->delete($_GET['id']);
        break;
}

if(!$status) {
    echo "Houve uma falha na operação";
}
else echo "Operação efetuada com sucesso";
