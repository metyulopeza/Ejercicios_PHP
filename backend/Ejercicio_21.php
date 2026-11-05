<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $X=$_POST['naranjas']; // Suguerido 48000 naranjas
        $Y=$_POST['bs_docena'];     // Suguerido 6 Bs. por docena
        $K=$_POST['ingreso_venta']; // Suguerido 42000 ingreso por la venta
 
        $docenas=$X/12;
        $inversion=$docenas*$Y;
        $ganancia=$K-$inversion;   
        $porc_gan=($ganancia/$inversion)*100;    
        
        echo "Inversion: ".number_format($inversion, 2,',','.')." Bs. \n";
        echo "Ingreso por ventas: ".number_format($K, 2,',','.')." Bs. \n";
        echo "Porcentaje de ganancia: ".number_format($porc_gan, 2,',','.')."%";
    }
?>