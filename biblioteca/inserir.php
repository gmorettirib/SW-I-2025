<?php
require 'conexao.php';
$titulo = "Diário de um Banana: Rodrick é o Cara";
$genero = "Humor";
$ano = 2008;
$autor = "Jeff kinney";
$paginas = 224;

$sql = "INSERT INTO livro (titulo, genero, ano, autor, paginas) VALUES (:titulo, :genero, :ano, :autor, :paginas)";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':titulo', $titulo);
$stmt->bindParam(':genero', $genero);
$stmt->bindParam(':ano', $ano);
$stmt->bindParam(':autor', $autor);
$stmt->bindParam(':paginas', $paginas);

if ($stmt->execute()) {
echo "livro inserido";
} else {
echo "Erro ao inserir";
}
?>