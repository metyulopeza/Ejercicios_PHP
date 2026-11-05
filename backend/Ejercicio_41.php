<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hectareas = (float)$_POST['hectareas'];
    $metros_cuadrados = $hectareas * 10000;

    if ($metros_cuadrados > 1000000) {
        $pct_pino = 0.70;
        $pct_oyamel = 0.20;
        $pct_cedro = 0.10;
    } else {
        $pct_pino = 0.50;
        $pct_oyamel = 0.30;
        $pct_cedro = 0.20;
    }

    $m2_pino = $metros_cuadrados * $pct_pino;
    $m2_oyamel = $metros_cuadrados * $pct_oyamel;
    $m2_cedro = $metros_cuadrados * $pct_cedro;

    $num_pinos = floor(($m2_pino / 10) * 8);
    $num_oyameles = floor(($m2_oyamel / 15) * 15);
    $num_cedros = floor(($m2_cedro / 18) * 10);

    echo "Superficie total: " . number_format($hectareas, 2, ',', '.') . " Ha (" . number_format($metros_cuadrados, 0, ',', '.') . " m²)<br><br>";
    echo "<strong>Distribución de siembra:</strong><br>";
    echo "- Pinos a sembrar: <strong>" . number_format($num_pinos, 0, ',', '.') . "</strong> (" . ($pct_pino * 100) . "% de la superficie)<br>";
    echo "- Oyameles a sembrar: <strong>" . number_format($num_oyameles, 0, ',', '.') . "</strong> (" . ($pct_oyamel * 100) . "% de la superficie)<br>";
    echo "- Cedros a sembrar: <strong>" . number_format($num_cedros, 0, ',', '.') . "</strong> (" . ($pct_cedro * 100) . "% de la superficie)";
}
?>