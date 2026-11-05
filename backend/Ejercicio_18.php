<?php
const LITROS_GALON=3.785;
const PRECIO_LITRO=100;
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $galones=$_POST['galones'];
        
        $litros=$galones*LITROS_GALON;
        $cobro=$litros*PRECIO_LITRO;
 
        echo "Galones surtidos: ".$galones."\n";
        echo "Equivalen a: ".number_format($litros, 2,',','.')." litros \n";
        echo "Total a cobrar: ".number_format($cobro, 2,',','.')." Bs.";
    }
?>