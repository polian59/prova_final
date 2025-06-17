<?php include "conexao.php"; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Registrar Entrada</title>
</head>
<body>
    <h2>Registrar Entrada</h2>
    <form method="POST">
        ID do Visitante: <input type="number" name="id" required><br>
        <input type="submit" value="Registrar Entrada">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST["id"];
        $sql = "UPDATE visitantes SET entrada=NOW() WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            echo "Entrada registrada!";
        } else {
            echo "Erro: " . $conn->error;
        }
    }
    ?>
    <br><a href="index.php">Voltar ao Menu</a>
</body>
</html>