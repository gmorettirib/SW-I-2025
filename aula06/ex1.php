<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    
    <table>
        <?php
            $colunas = 4;
            $linhas = 8;

            for ($x = 1; $x <= $linhas; $x++){
                if ($x % 2 == 0){
                    $cor = "#0000FF";
                }else{
                    $cor = "#FF0000";
                }

                if ($x == 1){
                    echo "
                        <tr style=\"background-color:".$cor."\">
                            <th>coluna 1 </th>
                            <th>coluna 2 </th>
                            <th>coluna 3 </th>
                            <th>coluna 4 </th>
                        </tr>";
                }else{
                    echo"<tr style=\"background-color:".$cor."\"><td>linha ".$x." </td><td>linha ".$x." </td><td>linha ".$x." </td><td>linha ".$x." </td></tr>";
                }
            }
        ?>
    </table>


</body>
</html>