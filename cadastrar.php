<?php
include 'conexao.php';

$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$ingredientes = $_POST['ingredientes'];
$preparo = $_POST['preparo'];
$imagem = $_FILES['imagem']['name'];
$caminho = "imagens/" . basename($imagem);

move_uploaded_file($_FILES['imagem']['tmp_name'], $caminho);

$sql = "INSERT INTO receitas (titulo, descricao, imagem, ingredientes, preparo)
        VALUES ('$titulo', '$descricao', '$caminho', '$ingredientes', '$preparo')";

if ($conn->query($sql) === TRUE) {
    echo "Receita cadastrada com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>