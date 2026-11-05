<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $A = (float)$_POST['valA'];
    $B = (float)$_POST['valB'];
    $C = (float)$_POST['valC'];

    if ($A == 0) {
        echo "No es una ecuación cuadrática (A debe ser diferente de 0).";
    } else {
        $D = pow($B, 2) - (4 * $A * $C);
        echo "Discriminante (D) = " . $D . "<br><br>";

        if ($D == 0) {
            $x = -$B / (2 * $A);
            echo "El discriminante es 0 (Raíces reales e iguales):<br>";
            echo "<strong>X1 = X2 = " . number_format($x, 4, ',', '.') . "</strong>";
        } elseif ($D > 0) {
            $x1 = (-$B + sqrt($D)) / (2 * $A);
            $x2 = (-$B - sqrt($D)) / (2 * $A);
            echo "El discriminante es mayor a 0 (Raíces reales distintas):<br>";
            echo "<strong>X1 = " . number_format($x1, 4, ',', '.') . "</strong><br>";
            echo "<strong>X2 = " . number_format($x2, 4, ',', '.') . "</strong>";
        } else {
            echo "<strong>El discriminante es menor a 0. La ecuación no tiene solución en el conjunto de los números Reales.</strong>";
        }
    }
}
?>