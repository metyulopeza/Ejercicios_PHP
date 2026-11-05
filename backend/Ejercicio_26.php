<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $A = (int)$_POST['valA'];
    $B = (int)$_POST['valB'];
    $C = (int)$_POST['valC'];
    $D = (int)$_POST['valD'];

    if ($D == 0) {
        $resultado = pow(($A - $C), 2);
        echo "Puesto que D es igual a 0, se aplica la expresión: (A - C)^2<br>";
        echo "Resultado: <strong>" . number_format($resultado, 2, ',', '.') . "</strong>";
    } elseif ($D > 0) {
        $resultado = pow(($A - $B), 3) / $D;
        echo "Puesto que D es mayor que 0, se aplica la expresión: (A - B)^3 / D<br>";
        echo "Resultado: <strong>" . number_format($resultado, 2, ',', '.') . "</strong>";
    } else {
        echo "El valor de D debe ser mayor o igual a 0 para esta evaluación.";
    }
}
?>