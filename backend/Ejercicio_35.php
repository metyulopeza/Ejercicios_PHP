<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $temp = (float)$_POST['temp'];

    if ($temp > 85) {
        $deporte = "Natación";
    } elseif ($temp > 70 && $temp <= 85) {
        $deporte = "Tenis";
    } elseif ($temp > 32 && $temp <= 70) {
        $deporte = "Golf";
    } elseif ($temp > 10 && $temp <= 32) {
        $deporte = "Esquí";
    } else {
        $deporte = "Marcha";
    }

    echo "Temperatura ingresada: <strong>" . $temp . " °F</strong><br>";
    echo "Deporte apropiado para practicar: <strong>" . $deporte . "</strong>";
}
?>