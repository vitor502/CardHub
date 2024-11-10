<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data</title> <!-- Título da página -->
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
            font-size: 3em;
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
        form {
            background-color:#101728;
            padding: 20px;
            border-radius: 5px;
            max-width: 400px;
            margin: 20px auto;
            color:#fff;
        }
        table {
            filter: drop-shadow(0 0 5px #9340ff) drop-shadow(0 0 25px #9340ff);
            width: 100%;
        }
        td {
            padding: 10px;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background: linear-gradient(to right, #9340ff, #ff3c5f);
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 20px;
            cursor: pointer;
            font-size: 20px;
            filter: drop-shadow(0 0 px #9340ff) drop-shadow(0 0 25px #9340ff);
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <h2>CardHub</h2> <!-- Cabeçalho da página, indicando que é a seção de adição de dados -->
    <p style="text-align: center;">
        <!-- Link para a página inicial, redirecionando o usuário para 'index.php' -->
        <a href="index.php"><button>Home</button></a>
    </p>

    <!-- Formulário para adicionar novos dados (usuário) ao banco de dados -->
    <form action="addAction.php" method="post" name="add"> <!-- Formulário enviado via POST para a página addAction.php -->
        <table>
            <tr> 
                <td>Name</td> <!-- Rótulo (label) para o campo de nome -->
                <td><input type="text" name="name" required></td> <!-- Campo de texto para o nome do usuário -->
            </tr>
            <tr> 
                <td>Age</td> <!-- Rótulo (label) para o campo de idade -->
                <td><input type="text" name="age" required></td> <!-- Campo de texto para a idade do usuário -->
            </tr>
            <tr> 
                <td>Email</td> <!-- Rótulo (label) para o campo de e-mail -->
                <td><input type="text" name="email" required></td> <!-- Campo de texto para o e-mail do usuário -->
            </tr>
            <tr> 
                <td></td> <!-- Célula vazia (não exibe nada) -->
                <td><input type="submit" name="submit" value="Add"></td> <!-- Botão de envio do formulário com o valor 'Add' -->
            </tr>
        </table>
    </form>
</body>
</html>