<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de Cadastro</title>
    <link rel="stylesheet" href="envio-cadastro.css">
</head>
<body>
    <nav>
        <h2>Feira Tecnológica</h2>

                <a href="index.html"> HOME </a>
                <a href="cadastro-palestra.html"> CADASTRO PALESTRA</a>
                <a href="cadastro.html"> CADASTRO </a>
                <a href="contato.html"> CONTATO </a>
                <a href="mapa.html"> MAPA </a>
</nav>

<section>
    <?php
// Coleta os dados do formulário
$nome = $_POST['nome'] ?? '';
$idade = $_POST['idade'] ?? '';
$telefone = $_POST['telefone'] ?? '';
$palestra = $_POST['palestra'] ?? '';
$tipo = $_POST['tipo'] ?? '';
$rm = $_POST['rm'] ?? '';
$cpf = $_POST['cpf'] ?? '';




    echo "<h2>Cadastro realizado com sucesso!</h2>";
    echo "<p>Nome: $nome</p>";
    echo "<p>Idade: $idade</p>";
    echo "<p>Telefone: $telefone</p>";
    echo "<p>Palestra: $palestra</p>";
    echo "<p>Participante: $tipo</p>";

    if ($tipo === 'aluno') {
        echo "<p>RM: $rm</p>";
    } else {
        echo "<p>CPF: $cpf</p>";
    }
?>
</section>

</body>
</html>