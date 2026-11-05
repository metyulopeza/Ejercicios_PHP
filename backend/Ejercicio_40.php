<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $anterior = (float)$_POST['anterior'];
    $actual = (float)$_POST['actual'];

    $consumo = $actual - $anterior;

    if ($consumo < 0) {
        echo "Error: La lectura actual debe ser mayor o igual a la lectura anterior.";
    } else {
        if ($consumo <= 100) {
            $monto = 2622.00;
        } elseif ($consumo <= 300) {
            $monto = $consumo * 79.78;
        } elseif ($consumo <= 500) {
            $monto = $consumo * 89.52;
        } else {
            $monto = $consumo * 97.95;
        }

        echo "Consumo total de energía: <strong>" . $consumo . " Kwh</strong><br>";
        echo "Total a pagar (Luz y Aseo Urbano): <strong>Bs. " . number_format($monto, 2, ',', '.') . "</strong>";
    }
}
?>