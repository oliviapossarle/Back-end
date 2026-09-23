<?php

$email = $_POST['email'];
$senha = $_POST['senha'];

if($email == "omap123@senai.br"
    && $senha == "omap123"){
        echo "Login, bem sucedido!";
    }else{
        echo "Login ou senha invalido!";
    }
?>