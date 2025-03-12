<?php
    $nome = $_REQUEST['cxnome'];
    $N1 = $_REQUEST['cxN1'];
    $N2 = $_REQUEST['cxN2'];
    $N3 = $_REQUEST['cxN3'];
    $soma = $N1+$N2+$N3;
    $med =  $soma / 3;
    
    echo"A media de $nome é $med <br>";
?>