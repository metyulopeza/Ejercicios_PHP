<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $N = (int)$_POST['valN'];
    $K = (int)$_POST['valK'];

    if ($K >= $N) {
        echo "Error: El valor de K debe ser estrictamente menor que N.";
    } else {
        echo "Secuencia desde N = " . $N . " hasta K = " . $K . ":<br><br>";
        $secuencia = [];
        for ($i = $N; $i >= $K; $i--) {
            $secuencia[] = $i;
        }
        echo "<strong>" . implode(", ", $secuencia) . "</strong>";
    }
}
?>