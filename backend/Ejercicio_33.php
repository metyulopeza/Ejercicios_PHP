<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $monto = (float)$_POST['monto'];

    if ($monto < 500) {
        $porcentaje = 0;
    } elseif ($monto <= 1000) {
        $porcentaje = 0.05;
    } elseif ($monto <= 7000) {
        $porcentaje = 0.11;
    } elseif ($monto <= 15000) {
        $porcentaje = 0.18;
    } else {
        $porcentaje = 0.25;
    }

    $descuento = $monto * $porcentaje;
    $total_pagar = $monto - $descuento;

    echo "Cliente: <strong>" . $nombre . "</strong><br>";
    echo "Monto de la compra: $" . number_format($monto, 2, ',', '.') . "<br>";
    echo "Descuento aplicado (" . ($porcentaje * 100) . "%): $" . number_format($descuento, 2, ',', '.') . "<br>";
    echo "<strong>Monto final a pagar: $" . number_format($total_pagar, 2, ',', '.') . "</strong>";
}
?>