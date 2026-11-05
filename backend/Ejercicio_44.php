<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inv_total = (float)$_POST['inversion'];
    $hipoteca = (float)$_POST['hipoteca'];

    if ($hipoteca < 1000000) {
        $aporte_propio = $inv_total * 0.50;
        $aporte_socio = $inv_total * 0.50;
    } else {
        $aporte_propio = $hipoteca;
        $restante = $inv_total - $hipoteca;
        if ($restante > 0) {
            $aporte_propio += ($restante / 2);
            $aporte_socio = ($restante / 2);
        } else {
            $aporte_socio = 0;
        }
    }

    echo "Inversión total del negocio: $" . number_format($inv_total, 2, ',', '.') . "<br>";
    echo "Monto ofertado por la hipoteca: $" . number_format($hipoteca, 2, ',', '.') . "<br><br>";
    echo "<strong>Aportes a la inversión:</strong><br>";
    echo "- Aporte personal (con hipoteca/cuenta): <strong>$" . number_format($aporte_propio, 2, ',', '.') . "</strong><br>";
    echo "- Aporte del socio: <strong>$" . number_format($aporte_socio, 2, ',', '.') . "</strong>";
}
?>