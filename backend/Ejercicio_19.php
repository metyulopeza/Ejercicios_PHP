<?php
const GINECOLOGIA= 0.40;
const TRAUMATOLOGIA = 0.30;
const PEDIATRIA= 0.30;
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $presupuesto=$_POST['presuesto'];
        
        $monto_gin=$presupuesto*GINECOLOGIA;
        $monto_tra=$presupuesto*TRAUMATOLOGIA;
        $monto_ped=$presupuesto*PEDIATRIA;
 
        echo "Presupuesto para el area de Ginecologia: ".number_format($monto_gin, 2,',','.')." COP\n";
        echo "Presupuesto para el area de Traumatologia: ".number_format($monto_tra, 2,',','.')." COP\n";
        echo "Presupuesto para el area de Pediatria: ".number_format($monto_ped, 2,',','.')." COP";
    }
?>