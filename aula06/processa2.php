<style>
    table {
        width: 50%;
        text-align: center;
    }
    th{
        background-color:#FF0000;
    }
    td{
        background-color:#0000FF;
    }
    table, th, td {
            text-align: center;
            margin: auto;
            border: 1px;
            padding: 1%;
        }
           


</style>


<?php

    $linhas = $_POST['linhas'];
    $colunas = $_POST['colunas'];

    if ($linhas > 0 && $colunas > 0){
        echo "<table>";
    }

    echo "<tr>";
    for ($c = 1; $c <= $colunas; $c++) {
        echo "<th>Coluna $c</th>";
    }

    $l = 0;
    while ($l < $linhas){
        echo "<tr>";
        $l++;

        $c = 0;
    while ($c < $colunas){
            echo "<td>Linha ".($l+1)."</td>";
            $c++;
    }
    }    
    
?>
