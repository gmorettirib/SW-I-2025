<?php
    include_once 'exercicio_03.php';
    $funcionario = new funcionario("Guilherme Moretti", 2000.00);
    $funcionario->aumentarsalario(10);
    $funcionario->exibirinformaçoes();
?>