<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
            $M=452;    // kg de harina
            $N=197;    // litros de aceite
            $B1=132;   // bulto de 24 kg de harina
            $B2=180;   // caja de 15 litros de aceite
            $B3=7.5;   // kg de harina suelto
            $B4=14.5;  // litro de aceite suelto
 
            $bultos=intdiv($M, 24);
            $kg_sueltos=$M%24;
 
            $cajas=intdiv($N, 15);
            $lt_sueltos=$N%15;
 
            $ingreso=($bultos*$B1)+($cajas*$B2)+($kg_sueltos*$B3)+($lt_sueltos*$B4);
 
            echo "Bultos de harina: ".$bultos." (sobran ".$kg_sueltos." kg)<br>";
            echo "Cajas de aceite: ".$cajas." (sobran ".$lt_sueltos." litros)<br><br>";
            echo "Ingreso total por tonelada: ".number_format($ingreso, 2,',','.')." Bs.";
    }
?>