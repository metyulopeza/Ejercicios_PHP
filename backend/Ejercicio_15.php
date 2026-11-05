<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $lectura_ant=$_POST['lect_ant'];
        $lectura_act=$_POST['lect_act'];
        $costo_kw=$_POST['costo_kw'];
 
        $consumo=$lectura_act-$lectura_ant;
        $monto=$consumo*$costo_kw;
 
        echo "Consumo del mes: ".$consumo." kWh \n";
        echo "Costo por kWh: ".number_format($costo_kw, 2,',','.')."\n";
        echo "Monto total a pagar: ".number_format($monto, 2,',','.');
    }
?>