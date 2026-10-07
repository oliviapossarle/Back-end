<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $cat = $_POST["categoria"];
    $gen = $_POST["genero"];
    $obra = "";
    $desc = "";

        if ($cat == "Filme" && $gen == "Ação"){
        $obra = "Mad Max: Estrada da Fúria ";
        $desc = "Uma perseguição de carros implacável, explosiva e insana no deserto.";
    }
        elseif ($cat == "Filme" && $gen == "Ação" ){
        $obra = "O Cavaleiro das Trevas";
        $desc = "O combate tenso e violento entre Batman e o caótico Coringa.";
    }
        elseif ($cat == "Filme" && $gen == "Romance"){
        $obra = "La La Land";
        $desc = "O romance apaixonante e agridoce de dois artistas que buscam o sucesso.";
    }
        elseif ($cat == "Filme" && $gen == "Romance"){
        $obra = "Titanic";
        $desc = "Um amor proibido e intenso à deriva no naufrágio mais famoso da história.";
    }
        elseif ($cat == "Filme" && $gen == "Fantasia" ){
        $obra = "O Senhor dos Anéis";
        $desc = "A batalha final e épica para destruir o Anel e salvar o mundo.";
    }
        elseif ($cat == "Filme" && $gen == "Fantasia"){
        $obra = "Harry Potter 7";
        $desc = "• O confronto definitivo, mágico e sombrio entre Harry e Voldemort.";
    }


        elseif ($cat == "Série" && $gen == "Ação"){
        $obra = "Breaking Bad";
        $desc = "Um professor de química entra no perigoso e violento mundo do tráfico.";
    }
        elseif ($cat == "Série" && $gen == "Ação"){
        $obra = "The Boys";
        $desc = "Um grupo de humanos tenta derrubar super-heróis famosos que são corruptos e cruéis.";
    }
        elseif ($cat == "Série" && $gen == "Romance"){
        $obra = "Bridgerton";
        $desc = "Romances intensos, fofocas e dramas na alta sociedade da Inglaterra antiga.";
    }
        elseif ($cat == "Série" && $gen == "Romance"){
        $obra = "Normal People";
        $desc = "O envolvimento apaixonante, realista e complicado de dois jovens ao longo dos anos.
";
    }
        elseif ($cat == "Série" && $gen == "Fantasia"){
        $obra = "Game of Thrones";
        $desc = "Disputas políticas sangrentas, dragões e magia pelo controle de um trono.";
    }
        elseif ($cat == "Série" && $gen == "Fantasia"){
        $obra = "Stranger Things";
        $desc = "Crianças enfrentam monstros de outra dimensão e experimentos secretos nos anos 80.";
    }


      elseif ($cat == "Desenhos" && $gen == "Ação"){
        $obra = "Arcane";
        $desc = "Duas irmãs lutam em lados opostos de uma guerra de tecnologias e magia.";
    }
        elseif ($cat == "Desenhos" && $gen == "Ação"){
        $obra = "Dragon Ball Z";
        $desc = "Guerreiros poderosos defendem a Terra contra invasores alienígenas em lutas colossais.";
    }
        elseif ($cat == "Desenhos" && $gen == "Romance"){
        $obra = "A Bela e a Fera";
        $desc = "Uma jovem inteligente enxerga a beleza interior de um príncipe amaldiçoado.";
    }
        elseif ($cat == "Desenhos" && $gen == "Romance" ){
        $obra = "Your Name (Kimi no Na wa)";
        $desc = "Dois jovens trocam de corpo misteriosamente e tentam se encontrar no mundo real.";
    }
        elseif ($cat == "Desenhos" && $gen == "Fantasia"){
        $obra = "Avatar: A Lenda de Aang";
        $desc = "Um jovem monge precisa dominar os quatro elementos para salvar o mundo da opressão.";
    }
        elseif ($cat == "Desenhos" && $gen == "Fantasia"){
        $obra = "A Viagem de Chihiro";
        $desc = " Uma menina precisa salvar seus pais em um mundo mágico governado por deuses e espíritos.";
    }
    else{
        $obra = "Como Treinar o Seu Dragão";
        $desc = "Dragões, batalhas e muita aventura";
    }
    

}
else{
    header("Location: index.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineIA</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">

        <img src="logo2.jpg" width="200" alt="GeekIA Logo"> 
        <h2>Recomendação</h2>
         <strong>Obra:</strong>
        <?php echo $obra; ?>
        <br><br>
        <strong>Descrição:</strong>
        <?php echo $desc; ?>
    </div>
    <br><br>
    <a href="index.html">Voltar</a>
</body>
</html>