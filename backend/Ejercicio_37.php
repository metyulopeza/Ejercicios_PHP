<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = (float)$_POST['ladoA'];
    $b = (float)$_POST['ladoB'];
    $c = (float)$_POST['ladoC'];

    $lados = [$a, $b, $c];
    sort($lados);

    if (($lados[0] + $lados[1]) > $lados[2]) {
        if ($a == $b && $b == $c) {
            $tipo = "Equilátero";
        } elseif ($a == $b || $a == $c || $b == $c) {
            $tipo = "Isósceles";
        } else {
            $tipo = "Escaleno";
        }

        $s = ($a + $b + $c) / 2;
        $area = sqrt($s * ($s - $a) * ($s - $b) * ($s - $c));

        echo "Los lados " . $a . ", " . $b . " y " . $c . " <strong>SÍ forman un triángulo</strong>.<br>";
        echo "Tipo de triángulo: <strong>" . $tipo . "</strong><br>";
        echo "Área calculada: <strong>" . number_format($area, 2, ',', '.') . " unidades cuadradas</strong>";
    } else {
        echo "Los lados proporcionados <strong>NO forman un triángulo válido</strong> (la suma de los dos lados menores debe ser mayor al lado mayor).";
    }
}
?>