<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendendo SQL</title>
    <style>
        body {
            text-align: center;
        }
        table {
            width: 60%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Hello, World!</h1>
    <h2>Tabela Carros</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Ano</th>
            <th>Placa</th>
        </tr>

    <?php
        require 'conexao.php';
    ?>

    <?php

        $sql = "SELECT * FROM Carros";
        $resultado = $conn->query($sql);

        if ($resultado->num_rows > 0) {
            while($linha = $resultado->fetch_assoc()) {
                echo "<tr>
                        <td>{$linha['id']}</td>
                        <td>{$linha['nome']}</td>
                        <td>{$linha['ano']}</td>
                        <td>{$linha['placa']}</td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Nenhum carro foi encontrado.</td></tr>";
        }
    ?>
    </table>

    <h2>Tabela Família</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Função</th>
            <th>Idade</th>
        </tr>

    <?php
        $sql = "SELECT * FROM familia
        ORDER BY idade DESC;";
        $resultado = $conn->query($sql);

        if ($resultado->num_rows > 0) {
            while($linha = $resultado->fetch_assoc()) {
                echo "<tr>
                        <td>{$linha['id']}</td>
                        <td>{$linha['nome']}</td>
                        <td>{$linha['funcao']}</td>
                        <td>{$linha['idade']}</td>
                    </tr>";
            }
        }

        $conn->close();
    ?>
    </table>
</body>
</html>