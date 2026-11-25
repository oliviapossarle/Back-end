<?php

include "config/conexao.php";

$nome = $_POST["nome"];
$email = $_POST["email"];   
$senha = $_POST["senha"];

$senha = password_hash($senha, PASSWORD_DEFAULT);

$sql = "SELECT * FROM usuarios WHERE email = '$email'";

$resultado = $conexao->query($sql);

if($resultado->rowCount() > 0){
    echo "Usuário já existe, use outro!";
}
else {

$sql = "INSERT INTO usuarios(nome, email, senha)
        VALUES ('$nome', '$email', '$senha')";
        
        if($conexao->query($sql)){
         echo "Usuário cadastrado com sucesso!";
         echo "<br>";
         echo "<a href='login.html'>Ir para Login</a>";
        }
        else{
            echo "❌Erro ! Tentar novamente";
        }
}