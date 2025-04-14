<?php

function calculaDesconto($preco, $percentual) {
    $desconto = $preco * ($percentual / 100);
    return $preco - $desconto;
}
    $preco = $_POST['preco'] ;
    $percentual = $_POST['percentual'] ;
    $precoFinal = calculaDesconto($preco, $percentual);
    
    echo "O valor final com o desconto aplicado é $precoFinal";
?> 