<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $salario = (float)$_POST['salario'];
    $v1 = (float)$_POST['ventas1'];
    $v2 = (float)$_POST['ventas2'];
    $v3 = (float)$_POST['ventas3'];

    $ventas_totales = $v1 + $v2 + $v3;
    $meta_33 = $ventas_totales * 0.33;
    $incentivo = $salario * 0.20;

    echo "Ventas totales de la empresa: $" . number_format($ventas_totales, 2, ',', '.') . "<br>";
    echo "Monto umbral (33%): $" . number_format($meta_33, 2, ',', '.') . "<br><br>";

    $recibe1 = ($v1 > $meta_33) ? ($salario + $incentivo) : $salario;
    $recibe2 = ($v2 > $meta_33) ? ($salario + $incentivo) : $salario;
    $recibe3 = ($v3 > $meta_33) ? ($salario + $incentivo) : $salario;

    echo "Vendedores Depto 1: Recibirán $" . number_format($recibe1, 2, ',', '.') . (($v1 > $meta_33) ? " (Incluye incentivo del 20%)" : " (Sin incentivo)") . "<br>";
    echo "Vendedores Depto 2: Recibirán $" . number_format($recibe2, 2, ',', '.') . (($v2 > $meta_33) ? " (Incluye incentivo del 20%)" : " (Sin incentivo)") . "<br>";
    echo "Vendedores Depto 3: Recibirán $" . number_format($recibe3, 2, ',', '.') . (($v3 > $meta_33) ? " (Incluye incentivo del 20%)" : " (Sin incentivo)");
}
?>