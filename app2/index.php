<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Contato</title>
</head>
<body>
    <h1>Fale Conosco</h1>

    <form method="POST" action="">
    <label for="nome"> Nome: </label><br>
        <input type="text" name="nome" id="nome" required><br><br>

        <label for="email"> Emai: </label><br>
        <input type="email" name="email" id="email" required><br><br>

        <label for="mensagem"> Mensagem: </label><br>
        <textarea name="mensagem" id="mensagem" rows="5" required></textarea><br><br>

        <input type="submit" value="Enviar">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nome = html:specialchars($_POST["nome"]);
        $email = html:specialchars($_POST["email"]);
        $mensagem = html:specialchars($_POST["mensagem"]);

        echo "<h2>Dados Recebidos</h2>";
        echo "<p><strong>Nome:</strong></p>";
        echo "<p><strong>Email:</strong></p>";
        echo "<p><strong>Mensagem:</strong></p>";
    }
        ?>
</body>
</html>
