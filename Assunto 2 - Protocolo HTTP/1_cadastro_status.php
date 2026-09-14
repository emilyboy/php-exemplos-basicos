<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Status Codes</title>
</head>
<body>

<h1>Cadastro de Aluno (com status Code)</h1>
<form action="" method="post" action= "">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" required><br><br>

     <label for="idade">Idade:</label>
     <input type="text" name="idade" required><br><br>
   
    <button type="submit">Enviar</button>

</form>

<!--Linha horizontal-->
<hr>
<?php
// $_SERVER é uma variável superglobal do PHP que contém informações sobre requisição feitas pelo servidor.Aqui ele esta confirmando se a requisição é via POST (Protocolo HTTP)
if($_SERVER["REQUEST_METHOD"] == "POST") {
    //Se sim ele acessa as informações (Nome e idade)
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];

    // Tratando erros e interagindo.

    // Erro: Não prencheu nome e idade.
    if ($nome == "" || $idade == "") {}
    http_response_code(400),
    echo "<h2>Status 400 - Faltou nome ou idade</h2>";
} else {
    http_response_code(201);

}

} else {
    //Usuário ainda não enviou nada.
    http_response_code(200);
    echo "<p> Preencha "
}
?>

</body>
</html>