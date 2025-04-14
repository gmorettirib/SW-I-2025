<?php
    $numero = 1;  
    $soma = 0;    

    while ($numero <= 100) {
        if ($numero % 2 == 0) {
            $soma += $numero;
        }
        $numero++;
    }

    echo "A soma de todos os numeros pares de 1 a 100 é: $soma";
?>