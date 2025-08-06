<?php
require 'conexao.php';
$sql = "SELECT * FROM livro";
$stmt = $pdo->query($sql);
while ($livro = $stmt->fetch(PDO::FETCH_ASSOC)) {
echo "Id: " . $livro['id'] . "<br>";
echo "Titulo: " . $livro['titulo'] . "<br>";
echo "Genero: " . $livro['genero'] . "<br>";
echo "Ano: " . $livro['ano'] . "<br>";
echo "Autor: " . $livro['autor'] . "<br>";
echo "Paginas: " . $livro['paginas'] . "<br>
<br>";
}
?>