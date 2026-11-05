<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $capital = (float)$_POST['capital'];

    if ($capital < 0) {
        $prestamo = 10000 - $capital;
        $nuevo_saldo = 10000;
    } elseif ($capital <= 20000) {
        $prestamo = 20000 - $capital;
        $nuevo_saldo = 20000;
    } else {
        $prestamo = 0;
        $nuevo_saldo = $capital;
    }

    $computo = 5000;
    $mobiliario = 2000;
    $resto = $nuevo_saldo - ($computo + $mobiliario);

    if ($resto > 0) {
        $insumos = $resto / 2;
        $incentivos = $resto / 2;
    } else {
        $insumos = 0;
        $incentivos = 0;
    }

    echo "Capital actual: $" . number_format($capital, 2, ',', '.') . "<br>";
    echo "Préstamo bancario a solicitar: <strong>$" . number_format($prestamo, 2, ',', '.') . "</strong><br>";
    echo "Presupuesto disponible: $" . number_format($nuevo_saldo, 2, ',', '.') . "<br><br>";
    echo "<strong>Distribución del Presupuesto:</strong><br>";
    echo "- Equipo de cómputo: $5.000,00<br>";
    echo "- Mobiliario: $2.000,00<br>";
    echo "- Compra de insumos: <strong>$" . number_format($insumos, 2, ',', '.') . "</strong><br>";
    echo "- Incentivos al personal: <strong>$" . number_format($incentivos, 2, ',', '.') . "</strong>";
}
?>