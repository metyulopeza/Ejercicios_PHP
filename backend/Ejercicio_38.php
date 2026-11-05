<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fecha_nac = $_POST['fnac'];
    $fecha_dt = new DateTime($fecha_nac);
    $hoy = new DateTime();
    $edad = $hoy->diff($fecha_dt)->y;

    $dia = (int)$fecha_dt->format('d');
    $mes = (int)$fecha_dt->format('m');

    $signo = "";

    if (($mes == 3 && $dia >= 21) || ($mes == 4 && $dia <= 20)) $signo = "Aries";
    elseif (($mes == 4 && $dia >= 21) || ($mes == 5 && $dia <= 21)) $signo = "Tauro";
    elseif (($mes == 5 && $dia >= 22) || ($mes == 6 && $dia <= 21)) $signo = "Géminis";
    elseif (($mes == 6 && $dia >= 22) || ($mes == 7 && $dia <= 22)) $signo = "Cáncer";
    elseif (($mes == 7 && $dia >= 23) || ($mes == 8 && $dia <= 23)) $signo = "Leo";
    elseif (($mes == 8 && $dia >= 24) || ($mes == 9 && $dia <= 22)) $signo = "Virgo";
    elseif (($mes == 9 && $dia >= 23) || ($mes == 10 && $dia <= 22)) $signo = "Libra";
    elseif (($mes == 10 && $dia >= 23) || ($mes == 11 && $dia <= 21)) $signo = "Escorpión";
    elseif (($mes == 11 && $dia >= 22) || ($mes == 12 && $dia <= 21)) $signo = "Sagitario";
    elseif (($mes == 12 && $dia >= 22) || ($mes == 1 && $dia <= 20)) $signo = "Capricornio";
    elseif (($mes == 1 && $dia >= 21) || ($mes == 2 && $dia <= 19)) $signo = "Acuario";
    elseif (($mes == 2 && $dia >= 20) || ($mes == 3 && $dia <= 20)) $signo = "Piscis";

    echo "Fecha de nacimiento: " . $fecha_dt->format('d/m/Y') . "<br>";
    echo "Edad calculada: <strong>" . $edad . " años</strong><br>";
    echo "Signo Zodiacal: <strong>" . $signo . "</strong>";
}
?>