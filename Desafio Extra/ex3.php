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

    echo "<h2>Resultado</h2>";
    echo "Paciente: $nome <br>";
    echo "Peso: $peso kg <br>";
    echo "Altura: $altura m <br>";
    echo "IMC: " . number_format($imc, 2, ',', '.') . "<br>";
    echo "Classificação: $classificacao";

}

?>

<h3>Quer cuidar melhor da sua saúde?</h3>

<p>Agende uma consulta com nossa nutricionista!</p>

</body>
</html>