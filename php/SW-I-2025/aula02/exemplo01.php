<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 01 - PHP</title>
</head>
<body>
    <?php
        $nome = "Anderson"
    ?>
    <h1>AULA 01 INTRODUTORIA DE PHP</h1>
    <H2>Prof. Anderson Vanin</H2>
    <p>Oi sou o prof anderson</p>
    <?php
        echo "<p>Oi sou o prof anderson</p>";
        echo "<p>Oi sou o prof $nome </p>";
        echo"<p> Oi sou o prof " . $nome . " </p>"
    ?>
</body>
</html>