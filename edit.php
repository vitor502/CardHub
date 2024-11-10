<?php
// Inclui o arquivo de conexão com o banco de dados
require_once("dbConnection.php");

// Obtém o ID do usuário a ser editado a partir do parâmetro na URL (GET)
$id = $_GET['id'];

// Executa uma consulta SQL para selecionar os dados do usuário com o ID correspondente
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id = $id");

// Recupera os dados retornados pela consulta como um array associativo
$resultData = mysqli_fetch_assoc($result);

// Atribui os valores dos campos 'name', 'age' e 'email' a variáveis locais
$name = $resultData['name'];
$age = $resultData['age'];
$email = $resultData['email'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>	
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title> <!-- Título da página -->
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
    <h2>CardHub</h2> <!-- Cabeçalho da página -->
    <p style="text-align: center;">
        <!-- Link para retornar à página inicial -->
        <a href="index.php"><button>Home</button></a>
    </p>
	
	<!-- Formulário para editar os dados do usuário -->
	<form name="edit" method="post" action="editAction.php">
		<table border="0"> <!-- Tabela para exibir os campos do formulário -->
			<tr> 
				<td>Name</td> <!-- Campo para nome -->
				<td><input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>" required></td> <!-- Campo de entrada para o nome, com valor preenchido com o nome atual do usuário -->
			</tr>
			<tr> 
				<td>Age</td> <!-- Campo para idade -->
				<td><input type="text" name="age" value="<?php echo htmlspecialchars($age); ?>" required></td> <!-- Campo de entrada para a idade, com valor preenchido com a idade atual do usuário -->
			</tr>
			<tr> 
				<td>Email</td> <!-- Campo para email -->
				<td><input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>" required></td> <!-- Campo de entrada para o email, com valor preenchido com o e-mail atual do usuário -->
			</tr>
			<tr>
				<td><input type="hidden" name="id" value="<?php echo $id; ?>"></td> <!-- Campo oculto que armazena o ID do usuário (não visível para o usuário, mas necessário para identificar o registro no banco de dados) -->
				<td><input type="submit" name="update" value="Update"></td> <!-- Botão de envio do formulário (para atualizar os dados) -->
			</tr>
		</table>
	</form>
</body>
</html>