<?php

if ($_POST) {

    $nome = $_POST["nome"];
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];

    $imc = $peso / ($altura * $altura);

    if ($imc < 18.5) {
        $classificacao = "Abaixo do peso";
    } elseif ($imc < 25) {
        $classificacao = "Peso normal";
    } elseif ($imc < 30) {
        $classificacao = "Sobrepeso";
    } else {
        $classificacao = "Obesidade";
    }
}
?>

<h3>Quer cuidar melhor da sua saúde?</h3>

<p>Agende uma consulta com nossa nutricionista!</p>

</body>
</html>
