<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <style>
        h1{
            text-align: center;
        }

        table{
            width: 70%;
            border-collapse: collapse;
            margin: 20px auto;
            text-align: center;
        }

        th, td{
            border: 1px solid black;
            padding: 10px;
        }

        th {
            background-color: #cbdad5;
        }

        .vestuario{
            background-color: #89a7b1;
        }
        
        .acessorios{
            background-color:#566981;
        }
        .calcados{
            background-color:#3a415a;
        }
    </style>
    <table>
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Categoria</th>
        </tr>
        <?php

            $dados = [
                ["nome" => "agasalho", "preco" => "R$300,00", "categoria" => "vestuario"],
                ["nome" => "boné", "preco" => "R$85,00", "categoria" => "acessorios"],
                ["nome" => "tênis", "preco" => "R$450,00", "categoria" => "calcados"],
            ];

            foreach ($dados as $produto) {
                echo "<tr class='". $produto['categoria'] ."'>"; 
                echo "<td>". $produto['nome'] ."</td>";
                echo "<td>". $produto['preco'] ."</td>";
                echo "<td>". $produto['categoria'] ."</td>";
            }

        ?>
    </table>
</body>
</html>