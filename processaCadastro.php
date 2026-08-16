<?php

$nome = $_POST["nome"];
$idade = $_POST["idade"];
$profissao = $_POST["profissao"];
$salario = $_POST["salario"];
$experiencia = $_POST["experiencia"];

echo "<h1>Cadastro realizado!</h1>";
echo "<div style='text-align: center;'>";

echo "<p>Nome: $nome</p>";
echo "<p>Idade: $idade</p>";
echo "<p>Profissão: $profissao</p>";
echo "<p>Salário pretendido: $salario</p>";
echo "<p>Experiência anterior: $experiencia</p>";

echo "<p>Obrigado, $nome! Seu cadastro foi recebido com sucesso.</p>";
echo "<p><a href='cadastro.html'>Voltar ao formulário</a></p>";
echo "</div>";
?>
