<?php
    $login = $_REQUEST['cxlogin'];
    $senha = $_REQUEST['cxsenha'];
    
    if($login == "etec" and $senha == "informática" ){
        echo "voce está logado";
    } 
    else
        echo "login incorreto"

    
?>