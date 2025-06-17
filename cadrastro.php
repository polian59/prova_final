<?php include "conexao.php"; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Visitante</title>
</head>
<body>
    <h2>Cadastrar Novo Visitante</h2>
    <form method="POST">
        Nome: <input type="text" name="nome" required><br>
        Documento: <input type="text" name="documento" required><br>
        Motivo: <input type="text" name="motivo" required><br>
        <input type="submit" value="Cadastrar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $documento = $_POST["documento"];
        $motivo = $_POST["motivo"];

        $sql = "INSERT INTO visitantes (nome, documento, motivo) VALUES ('$nome', '$documento', '$motivo')";
        if ($conn->query($sql) === TRUE) {
            echo "Visitante cadastrado com sucesso!";
        } else {
            echo "Erro: " . $conn->error;
        }
    }
    ?>
    <br><a href="index.php">Voltar ao Menu</a>
</body>
</html>