<?php include "conexao.php"; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Registrar Saída</title>
</head>
<body>
    <h2>Registrar Saída</h2>
    <form method="POST">
        ID do Visitante: <input type="number" name="id" required><br>
        <input type="submit" value="Registrar Saída">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST["id"];
        $sql = "UPDATE visitantes SET saida=NOW() WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            echo "Saída registrada!";
        } else {
            echo "Erro: " . $conn->error;
        }
    }
    ?>
    <br><a href="index.php">Voltar ao Menu</a>
</body>
</html>