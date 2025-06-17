<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "controle_visitantes";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>