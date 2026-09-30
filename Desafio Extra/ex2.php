   <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $motorista = $_POST['motorista'];
        $valor_hora = $_POST['valor_hora'];
        $horas = $_POST['horas'];
        
        $total = $horas * $valor_hora;

        echo "<br><hr><br>";
        echo "Motorista: " . $motorista . "<br>";
        echo "Tempo: " . $horas . " horas<br>";
        echo "Total: R$ " . number_format($total, 2, ',', '.');
    }
    ?>