<?php
    include_once 'exercicio1.php';

    $produto = new Produto("Mouse", 150.00, 10);
    $produto->adicionarEstoque(5);
    $produto->removerEstoque(3);
    $produto->mostrarDetalhes();
?>