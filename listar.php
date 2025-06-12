<?php
include 'conexao.php';

$sql = "SELECT * FROM receitas ORDER BY data_criacao DESC";
$result = $conn->query($sql);

$receitas = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $receitas[] = $row;
    }
}

echo json_encode($receitas);

$conn->close();
?>