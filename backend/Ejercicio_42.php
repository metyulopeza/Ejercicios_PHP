<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $edad_meses = (int)$_POST['edad_meses'];
    $sexo = strtoupper(trim($_POST['sexo']));
    $hb = (float)$_POST['hemoglobina'];

    $min_hb = 0;

    if ($edad_meses <= 1) {
        $min_hb = 13;
    } elseif ($edad_meses <= 6) {
        $min_hb = 10;
    } elseif ($edad_meses <= 12) {
        $min_hb = 11;
    } elseif ($edad_meses <= 60) {
        $min_hb = 11.5;
    } elseif ($edad_meses <= 120) {
        $min_hb = 12.6;
    } elseif ($edad_meses <= 180) {
        $min_hb = 13;
    } else {
        if ($sexo == 'F') {
            $min_hb = 12;
        } else {
            $min_hb = 14;
        }
    }

    echo "Edad: " . $edad_meses . " meses (" . number_format($edad_meses / 12, 1) . " años)<br>";
    echo "Nivel de Hemoglobina registrado: " . $hb . " g%<br>";
    echo "Rango mínimo normal: " . $min_hb . " g%<br><br>";

    if ($hb < $min_hb) {
        echo "Resultado Diagnóstico: <strong style='color:red;'>POSITIVO PARA ANEMIA</strong>";
    } else {
        echo "Resultado Diagnóstico: <strong style='color:green;'>NEGATIVO PARA ANEMIA</strong>";
    }
}
?>