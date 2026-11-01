<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Secuencial</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <H1>Estructuras de control secuencial</H1>
    <section class="tarjet" id="1">
        <h3>1-Promedio de tres edades</h3>
        <br>
        <?php
            $edad1=22;
            $edad2=12;
            $edad3=25;

            $promedio=($edad1+$edad2+$edad3)/3;

            echo "Entre las edades".$edad1.", ".$edad2." y ".$edad3." tenemos un promedio resultante de: ".$promedio
        ?>
    </section>
        <br>
    <section class="tarjet" id="2">
        <h3>2-Ganancia al mes</h3>

        <?php
            $individuo="Usuario";
            $inversion=230000;
            $ganancia=$inversion*0.02;

            echo "Estimado usuario, su inversion de ".$inversion." Pesos colombianos. <br> Le daran una ganancia mensual de: ".$ganancia
            
        ?>
    </section>
        <br>
    <section class="tarjet" id="3">
        <h3>3-Comisiones</h3>
        <?php
            $nombre_emp="Pepito";

            $sueldo_base=1500000;
            $venta1=250000;
            $venta2=160000;
            $venta3=405000;

            $comision=($venta1*0.1)+($venta2*0.1)+($venta3*0.1);

            $sueldo_tt=$sueldo_base+$comision;

            echo "El ".$nombre_emp." recibirá un sueldo total de: ".$sueldo_tt."<br><br> Los cuales estan repartidos en: ";
            
            echo "Sueldo base ".$sueldo_base."<br><br>";
            echo "Comisiones ".$comision

        ?>
    </section>
        <br>
    <section class="tarjet" id="4">
        <h3>4-Descuento total venta</h3>
        <?php
            $producto1=23000;
            $producto2=35000;
            $producto3=19000;

            $costo=$producto1+$producto2+$producto3;
            $costo_fin=$costo-$costo*0.15;

            echo "Total compra".$costo."<br>";
            echo "Total a pagar: ".$costo_fin
        ?>
    </section>
        <br>
    <section class="tarjet" id="5">
        <h3>5-Nota final (Ponderada)</h3>
        <?php
            $cal_par1=4.2;
            $cal_par2=2;
            $cal_par3=5;

            $ex_fin=3.9;
            $trab_fin=4.8;
            $parciales=($cal_par1+$cal_par2+$cal_par3)/3;

            $nota_fin=($parciales*0.55)+($ex_fin*0.3)+($trab_fin*0.15)/3;

            echo "Su nota final es: ".$nota_fin
        ?>
    </section>
        <br>
    <section class="tajet" id="6">
        <h3>6-Porcentaje de un grupo por genero</h3>

        <?php
            $can_m=12;
            $can_f=17;
            $total_p=$can_m+$can_f;

            $porc_m=($can_m/29)*100;
            $porc_f=($can_f/29)*100;

            echo "En un grupo de 29 estudiantes encontramos que el porcentaje de mujeres es;".$porc_f." y de hombres es; ".$porc_m
        ?>
    </section>
</body>
</html>