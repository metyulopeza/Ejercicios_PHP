<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $categoria = (int)$_POST['categoria'];
    $sueldo = (float)$_POST['sueldo'];

    switch ($categoria) {
        case 1:
            $pct = 0.15;
            break;
        case 2:
            $pct = 0.10;
            break;
        case 3:
            $pct = 0.08;
            break;
        case 4:
            $pct = 0.07;
            break;
        default:
            $pct = 0;
            break;
    }

    if ($pct > 0) {
        $aumento = $sueldo * $pct;
        $nuevo_sueldo = $sueldo + $aumento;
        echo "Categoría del trabajador: <strong>" . $categoria . "</strong><br>";
        echo "Sueldo anterior: $" . number_format($sueldo, 2, ',', '.') . "<br>";
        echo "Porcentaje de aumento: " . ($pct * 100) . "%<br>";
        echo "<strong>Nuevo sueldo: $" . number_format($nuevo_sueldo, 2, ',', '.') . "</strong>";
    } else {
        echo "Categoría no válida. Introduzca un número entre 1 y 4.";
    }
}
?>