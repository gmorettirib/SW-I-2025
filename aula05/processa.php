<?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if ($email == "aluno@email.com" && $senha == "1234"){
        //manda para autorizado.php
        
        header('Location: painel/autorizado.php');
    }else{
        //manda para naoautorizado.php
        echo "NÃO AUTORIZADO";
        header('Location: painel/naoautorizado.html');
    }



    
?>