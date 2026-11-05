<?php
    if($_SERVER["REQUEST_METHOD"] =="POST"){
        $producto1=$_POST['producto1'];
        $producto2=$_POST['producto2'];
        $producto3=$_POST['producto3'];

        $costo=$producto1+$producto2+$producto3;
        $costo_fin=$costo-$costo*0.15;

        $pro1= number_format($producto1, 2 ,',','.');
        $pro2= number_format($producto2, 2 ,',','.');
        $pro3= number_format($producto3, 2 ,',','.');

        $c= number_format($costo, 2 ,',','.');
        $c_fin=number_format($costo_fin, 2, ',','.');


        echo "Total compra ".$c." COP \n";
        echo " Total a pagar: ".$c_fin." COP";
    }
?>