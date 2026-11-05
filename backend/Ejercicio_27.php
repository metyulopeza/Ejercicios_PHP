<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $v1 = (float)$_POST['valor1'];
    $v2 = (float)$_POST['valor2'];
    $v3 = (float)$_POST['valor3'];

    $area_triangulo = ($v1 * $v2) / 2;
    $area_circulo = M_PI * pow($v1, 2);
    $area_rectangulo = $v1 * $v2;

    $coincidencia = false;

    echo "Área esperada a comparar: " . $v3 . "<br><br>";

    if (abs($area_triangulo - $v3) < 0.01) {
        echo "¡Coincidencia encontrada! La figura corresponde a un <strong>Triángulo</strong> (Área = " . number_format($area_triangulo, 2, ',', '.') . ")<br>";
        $coincidencia = true;
    }
    if (abs($area_circulo - $v3) < 0.01) {
        echo "¡Coincidencia encontrada! La figura corresponde a un <strong>Círculo</strong> (Área = " . number_format($area_circulo, 2, ',', '.') . ")<br>";
        $coincidencia = true;
    }
    if (abs($area_rectangulo - $v3) < 0.01) {
        echo "¡Coincidencia encontrada! La figura corresponde a un <strong>Rectángulo</strong> (Área = " . number_format($area_rectangulo, 2, ',', '.') . ")<br>";
        $coincidencia = true;
    }

    if (!$coincidencia) {
        echo "Ninguna figura conocida (Triángulo, Círculo o Rectángulo) coincide exactamente con el valor 3 suministrado.";
    }
}
?>