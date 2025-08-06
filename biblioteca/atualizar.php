<?php
require 'conexao.php';
$id = 5;
$novoAno =2006;
$sql = "UPDATE livro SET ano = :ano WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':ano', $novoAno);
$stmt->bindParam(':id', $id);
if ($stmt->execute()) {
echo "livro atualizado";
} else {
echo "erro ao atualizar o livro";
}
?>