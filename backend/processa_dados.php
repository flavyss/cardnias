<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clientescard";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Erro ao conectar ao banco de dados: " . $conn->connect_error);
}

$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$cartao = $_POST["cartao"];
$cvv = $_POST["cvv"];
$validade = $_POST["validade"];
$cep = $_POST["cep"];

$sql = "INSERT INTO card (nome, cpf, numero, cvv, validade, cep) VALUES ('$nome', '$cpf', '$cartao', '$cvv', '$validade', '$cep')";
if ($conn->query($sql) === TRUE) {
  echo "Dados inseridos com sucesso";
} else {
  echo "Erro ao inserir os dados: " . $conn->error;
}

$conn->close();
?>