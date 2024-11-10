<?php
    // Inclui o arquivo de conexão com o banco de dados
    require_once("dbConnection.php");

    // Verifica se o formulário foi enviado (quando o botão 'submit' é pressionado)
    if (isset($_POST['submit'])) {
        // Escapa caracteres especiais para evitar injeção de SQL, tratando os dados recebidos do formulário
        $name = mysqli_real_escape_string($mysqli, $_POST['name']);   // Nome do usuário
        $age = mysqli_real_escape_string($mysqli, $_POST['age']);     // Idade do usuário
        $email = mysqli_real_escape_string($mysqli, $_POST['email']); // E-mail do usuário

        // Verifica se algum campo está vazio
        if (empty($name) || empty($age) || empty($email)) {
            // Se o campo 'name' estiver vazio, exibe uma mensagem de erro
            if (empty($name)) {
                echo "<div class='error'>Name field is empty.</div>";
            }

            // Se o campo 'age' estiver vazio, exibe uma mensagem de erro
            if (empty($age)) {
                echo "<div class='error'>Age field is empty.</div>";
            }

            // Se o campo 'email' estiver vazio, exibe uma mensagem de erro
            if (empty($email)) {
                echo "<div class='error'>Email field is empty.</div>";
            }

            // Exibe um link para voltar à página anterior
            echo "<div class='back-link'><a href='javascript:self.history.back();'>Go Back</a></div>";
        } else {
            // Se todos os campos estiverem preenchidos (não estiverem vazios)

            // Insere os dados no banco de dados
            $result = mysqli_query($mysqli, "INSERT INTO users (`name`, `age`, `email`) VALUES ('$name', '$age', '$email')");

            // Exibe uma mensagem de sucesso após a inserção dos dados
            echo "<div class='success'>Data added successfully!</div>";
            // Link para redirecionar para a página principal, onde os dados podem ser visualizados
            echo "<a href='index.php'>View Result</a>";
        }
    }
    ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data</title> <!-- Título da página -->
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #101728; /* Alterado para combinar com o segundo estilo */
        margin: 0;
        padding: 20px;
    }
    h2 {
        text-align: center;
        color: #fff; /* Alterado para branco */
        font-size: 3em; /* Ajustado para o mesmo tamanho */
        margin-bottom: 2em; /* Ajustado para o mesmo espaçamento */
        filter: drop-shadow(0 0 5px #9340ff) drop-shadow(0 0 25px #9340ff); /* Adicionado efeito de sombra */
    }
    .error {
        color: red;
        text-align: center;
        margin: 10px 0;
        font-weight: bold;
        filter: drop-shadow(0 0 5px #9340ff); /* Adicionado efeito de sombra */
    }
    .success {
        color: green;
        text-align: center;
        margin: 10px 0;
        font-weight: bold;
        filter: drop-shadow(0 0 5px #9340ff); /* Adicionado efeito de sombra */
    }
    a {
        text-decoration: none;
        color: #007BFF; /* Mantido o azul padrão */
        display: inline-block;
        margin-top: 10px;
        padding: 10px 15px;
        background-color: linear-gradient(to right, #9340ff, #ff3c5f); /* Alterado para ter fundo azul */
        color: white; /* Texto em branco */
        border-radius: 5px; /* Mantido o arredondamento */
        transition: background-color 0.3s; /* Transição suave */
        filter: drop-shadow(0 0 5px #9340ff) drop-shadow(0 0 25px #9340ff); /* Adicionado efeito de sombra */
    }
    a:hover {
        background-color: #0056b3; /* Mantido o efeito hover */
    }
    .back-link {
        display: block;
        text-align: center;
        margin-top: 15px;
    }
</style>
</head>

<body>
    <h2>CardHub</h2> <!-- Cabeçalho da página -->
</body>
</html>