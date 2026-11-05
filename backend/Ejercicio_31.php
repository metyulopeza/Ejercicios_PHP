<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cliente = htmlspecialchars($_POST['cliente']);
    $km = (float)$_POST['km'];

    $monto = 5000;

    if ($km <= 300) {
        $monto = 5000;
    } elseif ($km > 300 && $km <= 1000) {
        $monto += ($km - 300) * 200;
    } else {
        $monto += (700 * 200) + (($km - 1000) * 150);
    }

    echo "Cliente: <strong>" . $cliente . "</strong><br>";
    echo "Distancia recorrida: " . $km . " km<br>";
    echo "Total a pagar: <strong>Bs. " . number_format($monto, 2, ',', '.') . "</strong>";
}
?>