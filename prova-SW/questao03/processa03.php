<?php

    $num = $_GET['num'] ;

    
    for ($x = 1; $x <= 10; $x++) {
        $resultado = $num * $x;
        echo "$num x $x = $resultado<br>";
    }

?>