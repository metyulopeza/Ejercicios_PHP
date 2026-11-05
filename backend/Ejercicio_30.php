<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $A = (int)$_POST['digA'];
    $B = (int)$_POST['digB'];
    $C = (int)$_POST['digC'];
    $D = (int)$_POST['digD'];

    $N = ($A * 1000) + ($B * 100) + ($C * 10) + $D;
    $redondeado = round($N, -2);

    echo "Número ingresado (N): <strong>" . $N . "</strong><br>";
    echo "Número redondeado a la centena más próxima: <strong>" . $redondeado . "</strong>";
}
?>