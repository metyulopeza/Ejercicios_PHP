<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $monto = (int)$_POST['monto'];
    $billetes = [50000, 20000, 10000, 5000, 2000, 1000, 500, 100, 50, 20, 10];

    echo "Monto a desglosar: <strong>Bs. " . number_format($monto, 0, ',', '.') . "</strong><br><br>";
    echo "<strong>Desglose de billetes:</strong><br>";

    $resto = $monto;
    foreach ($billetes as $b) {
        $cant = floor($resto / $b);
        if ($cant > 0) {
            echo "- " . $cant . " billete(s) de Bs. " . number_format($b, 0, ',', '.') . "<br>";
            $resto = $resto % $b;
        }
    }

    if ($resto > 0) {
        echo "- Sobrante no desglosable: Bs. " . $resto;
    }
}
?>