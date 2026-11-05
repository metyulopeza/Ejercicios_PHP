<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $sueldo = (float)$_POST['sueldo'];

    if ($sueldo < 40000) {
        $porcentaje = 0.15;
    } else {
        $porcentaje = 0.12;
    }

    $aumento = $sueldo * $porcentaje;
    $nuevo_sueldo = $sueldo + $aumento;

    echo "Trabajador: <strong>" . $nombre . "</strong><br>";
    echo "Sueldo actual: Bs. " . number_format($sueldo, 2, ',', '.') . "<br>";
    echo "Porcentaje de aumento aplicado: " . ($porcentaje * 100) . "%<br>";
    echo "Monto del aumento: Bs. " . number_format($aumento, 2, ',', '.') . "<br>";
    echo "<strong>Nuevo sueldo: Bs. " . number_format($nuevo_sueldo, 2, ',', '.') . "</strong>";
}
?>