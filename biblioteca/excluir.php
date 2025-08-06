<?php
require 'conexao.php';
$id = 8;
$sql = "DELETE FROM livro WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id);
if ($stmt->execute()) {
echo "livro excluído";
} else {
echo "erro ao excluir";
}
?>