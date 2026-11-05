<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $capital=$_POST['captial'];  
        $intereses=$_POST['intereses'];  
        $tiempo=$_POST['tiempo'];
 
        $razon=($intereses*100)/($capital*$tiempo);
 
        echo "Prestamo: ".number_format($capital, 2,',','.')." Bs. \n";
        echo "Intereses pagados en ".$tiempo." años: ".number_format($intereses, 2,',','.')." Bs. \n";
        echo "Porcentaje anual cobrado: ".number_format($razon, 2,',','.')."%";
    }
?>