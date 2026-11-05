<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $can_m=$_POST['mujeres'];
        $can_h=$_POST['hombres'];
        $total_p=$can_m+$can_h;

        $porc_m=($can_m/$total_p)*100;
        $porc_h=($can_h/$total_p)*100;
        $m=number_format($porc_m, 2,',','.');
        $h=number_format($porc_h, 2,',','.');

        echo "En un grupo de ".$total_p." estudiantes encontramos que el porcentaje de mujeres es; ".$m."% y de hombres es; ".$h."%";    
    }
?>