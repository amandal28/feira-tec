<?php 
$assunto = $_POST['assunto'];
$descricao = $_POST['descricao'] ;
$palestra = $_POST['palestrante'] ;
$horario = $_POST['horario']
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Cadastro</title>
  <link rel="stylesheet" href="envio.css">
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
    <h2>Cadastro da Palestra Enviada</h2>
    <main>
    <p> O Cadastro da palestra foi enviado com sucesso! </p>
</main>
    </section>

</body>
</html>