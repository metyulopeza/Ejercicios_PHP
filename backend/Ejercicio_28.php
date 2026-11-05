<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $monto = (float)$_POST['monto'];

    if ($monto > 500000) {
        $inversion_propia = $monto * 0.55;
        $prestamo_banco = $monto * 0.30;
        $credito_fabricante = $monto * 0.15;
    } else {
        $inversion_propia = $monto * 0.70;
        $prestamo_banco = 0;
        $credito_fabricante = $monto * 0.30;
    }

    $intereses_fabricante = $credito_fabricante * 0.20;

    echo "Monto total de la compra: $" . number_format($monto, 2, ',', '.') . "<br><br>";
    echo "Inversión de fondos propios: $" . number_format($inversion_propia, 2, ',', '.') . "<br>";
    echo "Préstamo bancario: $" . number_format($prestamo_banco, 2, ',', '.') . "<br>";
    echo "Crédito al fabricante: $" . number_format($credito_fabricante, 2, ',', '.') . "<br>";
    echo "Monto a pagar por intereses al fabricante (20%): $" . number_format($intereses_fabricante, 2, ',', '.');
}
?>