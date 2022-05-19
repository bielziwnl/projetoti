<?php

require("../functions/funcoes.php");

$Nome = $_POST["txtNome"] . "<br>";

$Mes = $_POST["txtMes"] . "<br>";

$Cpf = $_POST["txtCpf"] . "<br>";

$Cep = $_POST["txtCep"] . "<br>";

$Bairro = $_POST["txtBairro"] . "<br>";

$Endereco = $_POST["txtEndereco"] . "<br>";

$Cidade = $_POST["txtCidade"] . "<br>";

$UF = $_POST["txtUF"] . "<br>";

$Email = $_POST["txtEmail"] . "<br>";

$Fone = $_POST["txtFone"] . "<br>";

$body = "====================================" .  "<br>";

$body = $body . "FALE CONOSCO - TESTE EXIBIÇÃO" . "<br>";

$body = $body . "====================================" .  "<br>";

$body = $body . "Nome: " .  $nome ;

$body = $body . "Email: " .  $email ;

$body = $body . "Telefone: " .  $tel ;

//Chama a função dia_atual

    $dia = dia_atual();

echo $body;


?>