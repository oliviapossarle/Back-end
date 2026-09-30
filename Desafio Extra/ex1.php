    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $preco = $_POST['combustivel'];
        $litros = $_POST['litros'];
        
        $total = $litros * $preco;

        echo "<br><br>";
        echo "Você abasteceu " . $litros . " litros.<br>";
        echo "Total: R$ " . number_format($total, 2, ',', '.');
    }
    ?>

</body>
</html>