<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $P = (int)$_POST['valP'];
    $Q = (int)$_POST['valQ'];

    $expresion = pow($P, 3) + pow($Q, 4) - (2 * pow($P, 2));

    if ($expresion > 680) {
        echo "Los valores satisfacen la expresión P^3 + Q^4 - 2*P^2 > 680.<br>";
        echo "Valor de P: <strong>" . $P . "</strong><br>";
        echo "Valor de Q: <strong>" . $Q . "</strong><br>";
        echo "Resultado de la expresión: <strong>" . number_format($expresion, 2, ',', '.') . "</strong> (> 680)";
    } else {
        echo "Los valores P = " . $P . " y Q = " . $Q . " NO satisfacen la condición.<br>";
        echo "Resultado obtenido: <strong>" . number_format($expresion, 2, ',', '.') . "</strong> (menor o igual a 680)";
    }
}
?>