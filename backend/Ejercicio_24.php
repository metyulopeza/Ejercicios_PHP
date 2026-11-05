<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $capital = (float)$_POST['capital'];
    $tasa = (float)$_POST['tasa'];

    $interes = $capital * ($tasa / 100);

    if ($interes > 7000) {
        $monto_final = $capital + $interes;
        echo "Los intereses generados ($" . number_format($interes, 2, ',', '.') . " COP) exceden $7.000 COP.<br>";
        echo "Decisión: <strong>Reinvertir los intereses</strong>.<br>";
        echo "Monto final en la cuenta: <strong>$" . number_format($monto_final, 2, ',', '.') . " COP</strong>";
    } else {
        echo "Los intereses generados ($" . number_format($interes, 2, ',', '.') . " COP) no exceden $7.000 COP.<br>";
        echo "Decisión: <strong>No reinvertir los intereses</strong>.<br>";
        echo "Saldo en la cuenta: <strong>$" . number_format($capital, 2, ',', '.') . " COP</strong>";
    }
}
?>