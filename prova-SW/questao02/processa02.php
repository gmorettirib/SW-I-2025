<?php
    $nome = $_POST['nome'] ;
    $idade = $_POST['idade'] ;
    
    if($idade >= 18){ 
        
        echo "Olá, $nome! Com $idade anos, voce é maior de idade";
    }
       
    else
        echo "Olá, $nome! Com $idade anos, voce é menor de idade"
    
    
?>