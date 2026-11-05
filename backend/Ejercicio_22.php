<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $P=$_POST['contado'];  // precio de contado
        $T=$_POST['cuota'];   // valor de cada cuota
        $cuotas=$_POST['can_coutas'];
 
        $total_cuotas=$T*$cuotas;
        $recargo=$total_cuotas-$P;
        $porc_recargo=($recargo/$P)*100;
 
        echo "Precio de contado: ".number_format($P, 2,',','.')."\n";
        echo "Total en ".$cuotas." cuotas: ".number_format($total_cuotas, 2,',','.')."\n";
        echo "Recargo: ".number_format($recargo, 2,',','.')."\n";
        echo "Porcentaje de recargo: ".number_format($porc_recargo, 2,',','.')."%";
    
    }
?>