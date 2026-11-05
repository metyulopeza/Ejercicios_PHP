<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $precio = (float)$_POST['precio'];
    $pct_dev = (float)$_POST['devaluacion'] / 100;
    $pct_inc = (float)$_POST['incremento'] / 100;

    $devaluacion_acumulada = $precio * (1 - pow((1 - $pct_dev), 3));
    $incremento_acumulado = $precio * (pow((1 + $pct_inc), 3) - 1);

    echo "Devaluación del automóvil en 3 años: $" . number_format($devaluacion_acumulada, 2, ',', '.') . "<br>";
    echo "Incremento del valor del terreno en 3 años: $" . number_format($incremento_acumulado, 2, ',', '.') . "<br>";
    echo "Mitad del incremento del terreno: $" . number_format($incremento_acumulado / 2, 2, ',', '.') . "<br><br>";

    if ($devaluacion_acumulada <= ($incremento_acumulado / 2)) {
        echo "<strong>Recomendación: DEBE COMPRAR EL AUTOMÓVIL</strong> (La devaluación no supera la mitad del incremento del terreno).";
    } else {
        echo "<strong>Recomendación: NO DEBE COMPRAR EL AUTOMÓVIL</strong> (Es preferible adquirir el terreno).";
    }
}
?>