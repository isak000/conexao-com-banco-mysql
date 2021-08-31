<?php
include_once("conexao.php");
$nome = $_POST["nome"];
$email = $_POST["email"];

$conn = getConnection();



$sql = "INSERT INTO usuarios_teste (nome,email)  VALUES ('$nome','$email')";

