<?php 
$nome = $_POST['nome'];
$email = $_POST['email'] ;
$telefone = $_POST['tel'] ;
$endereço = $_POST ['endereço'];
$cep = $_POST ['cep'];
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
    <h2>Contato Enviada</h2>
    <main>
    <p> O contato de <?php echo "<strong> $nome </strong>" ?> foi enviado com sucesso! </p>
</main>
    </section>

</body>
</html>