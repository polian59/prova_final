<?php include "conexao.php"; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Visitantes</title>
</head>
<body>
    <h2>Lista de Visitantes</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Documento</th>
            <th>Motivo</th>
            <th>Entrada</th>
            <th>Saída</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM visitantes");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['nome']}</td>";
            echo "<td>{$row['documento']}</td>";
            echo "<td>{$row['motivo']}</td>";
            echo "<td>{$row['entrada']}</td>";
            echo "<td>{$row['saida']}</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <br><a href="index.php">Voltar ao Menu</a>
</body>
</html>