<?php
// Inclui o arquivo de conexão com o banco de dados.
require_once("dbConnection.php");

// Executa uma consulta no banco de dados para selecionar todos os registros da tabela 'users', ordenados pela coluna 'id' em ordem decrescente.
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CardHub</title> <!-- Título da página -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #101728;
            margin: 0;
            padding: 20px;
        }
        h2 {
            text-align: center;
            color: #fff; 
            font-size: 4em;
            margin-bottom: 2em;
            filter: drop-shadow(0 0 5px #9340ff) drop-shadow(0 0 25px #9340ff);
        }
        a {
            text-decoration: none;
            color: #007BFF;
        }
        a:hover {
            text-decoration: underline;
        }
        button {
            background: linear-gradient(to right, #9340ff, #ff3c5f);
            filter: drop-shadow(0 0 5px #9340ff) drop-shadow(0 0 25px #9340ff);
            border: none;
            border-radius: 30px;
            color: #fff;
            padding: 1em 3em;
            cursor: pointer;
        }
        table {
            filter: drop-shadow(0 0 20px #9340ff) drop-shadow(0 0 25px #9340ff);
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #9340ff;
            color: white;
        }
        td{
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #9340ff;
            background-color: #101728;
            color: #fff;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .actions a {
            margin-right: 10px;
            color: #dc3545; /* Cor vermelha para o link de excluir */
        }
    </style>
</head>

<body>
    <h2>CardHub</h2> <!-- Cabeçalho da página -->
    <p style="text-align: center;">
        <!-- Link para adicionar novos dados (irá redirecionar para 'add.php') -->
        <a href="add.php"><button>ADD CARD</button></a>
    </p>
    <!-- Tabela para exibir os dados dos usuários -->
    <table>
        <tr>
            <th>Name</th> <!-- Coluna para o nome do usuário -->
            <th>Age</th> <!-- Coluna para a idade do usuário -->
            <th>Email</th> <!-- Coluna para o email do usuário -->
            <th>Action</th> <!-- Coluna para as ações (editar ou excluir) -->
        </tr>
        <?php
        // Laço para percorrer todos os registros retornados pela consulta SQL
        while ($res = mysqli_fetch_assoc($result)) {
            echo "<tr>"; // Inicia uma nova linha na tabela
            echo "<td>".$res['name']."</td>"; // Exibe o nome do usuário
            echo "<td>".$res['age']."</td>"; // Exibe a idade do usuário
            echo "<td>".$res['email']."</td>"; // Exibe o email do usuário	
            // Coluna de ações: link para editar ou excluir o usuário
            echo "<td class='actions'><a href=\"edit.php?id=$res[id]\">Edit</a> | 
            <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
            echo "</tr>"; // Fecha a linha da tabela
        }
        ?>
    </table>
</body>
</html>