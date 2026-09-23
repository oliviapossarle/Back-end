<?php

$peixes = $_POST['valor'];

$multa = ($peixes-50)*4;
if ($peixes > 50) {
    echo "Sua multa é de:", $multa;
} else {
    echo "Sem multas!";
}
?>