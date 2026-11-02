<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Secuencial</title>
    
</head>
<body>
    <H1>Estructuras de control secuencial</H1>
    <section class="tarjet" id="1">
        <h3>1-Promedio de tres edades</h3>
    
        <?php
            $edad1=22;
            $edad2=12;
            $edad3=25;

            $promedio=($edad1+$edad2+$edad3)/3;
            $prom_r = number_format($promedio, 2, ',', '.');

            echo "Entre las edades ".$edad1.", ".$edad2." y ".$edad3." tenemos un promedio resultante de: ".$prom_r
        ?>
    </section>
    
    <section class="tarjet" id="2">
        <h3>2-Ganancia al mes</h3>

        <?php
            $individuo="Usuario";
            $inversion=230000;
            $ganancia=$inversion*0.02;  

            $inv= number_format($inversion, 2, ',','.');
            $gan=number_format($ganancia, 2, ',','.');

            echo "Estimado usuario, su inversion de ".$inv."COP. <br> Le daran una ganancia mensual de: ".$gan."COP";
            
        ?>
    </section>
    
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

            $suel_tt= number_format($sueldo_tt, 2,',','.');
            $suel_b= number_format($sueldo_base, 2, ',','.');
            $com=number_format($comision, 2,',','.');

            echo "El vendedor".$nombre_emp." recibirá un sueldo total de: ".$suel_tt."<br><br> Los cuales estan repartidos en: ";
            
            echo "Sueldo base ".$suel_b."<br><br>";
            echo "Comisiones ".$com

        ?>
    </section>
    
    <section class="tarjet" id="4">
        <h3>4-Descuento total venta</h3>
        <?php
            $producto1=23000;
            $producto2=35000;
            $producto3=19000;

            $costo=$producto1+$producto2+$producto3;
            $costo_fin=$costo-$costo*0.15;

            $pro1= number_format($producto1, 2 ,',','.');
            $pro2= number_format($producto2, 2 ,',','.');
            $pro3= number_format($producto3, 2 ,',','.');

            $c= number_format($costo, 2 ,',','.');
            $c_fin=number_format($costo_fin, 2, ',','.');

            echo $pro1.$pro2.$pro3;

            echo "Total compra".$c."<br>";
            echo "Total a pagar: ".$c_fin
        ?>
    </section>
    
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
            $nt_fin=number_format($nota_fin, 2, ',','.');

            echo "Su nota final es: ".$nt_fin
        ?>
    </section>

    <section class="tarjet" id="6">
        <h3>6-Porcentaje de un grupo por genero</h3>

        <?php
            $can_m=12;
            $can_f=17;
            $total_p=$can_m+$can_f;

            $porc_m=($can_m/29)*100;
            $porc_f=($can_f/29)*100;
            $h=number_format($porc_m, 2,',','.');
            $m=number_format($porc_f, 2,',','.');

            echo "En un grupo de 29 estudiantes encontramos que el porcentaje de mujeres es;".$m." y de hombres es; ".$h
        ?>
    </section>
    
    <section class="tarjet" id="7">
        <h3>Conversor M a IN & FT</h3>
        <?php
             
            $valor_m= 3 ;
            $metro=1;
            $pulgadas=39.27;
            $pies_en_in=12;

            $pul_m=($valor_m*$pulgadas)/$metro;
            $pul_ft=($pul_m*1)/$pies_en_in;

            $in=number_format($pul_m, 2,',','.');
            $ft=number_format($pul_ft, 2,',','.');

            echo $valor_m."m metro(s) equivale(n) a: ".$in."in pulgadas <br>";
            echo $valor_m."m metro(s) equivale(n) a: ".$ft."ft pies <br>";
        ?>
    </section>

    <section class="tarjet" id="8">
        <h3>Area de un triangulo (usando los lados)</h3>
        <?php
            $A=5;
            $B=6;
            $C=9;
            $P=($A+$B+$C)/2;
            $Area=sqrt($P*($P-$A)*($P-$B)*($P-$C));
            $Area_re=number_format($Area , 2,',','.');
            echo "El area del triango con lados ".$A.", ".$B." y ".$C, " equivale a: ".$Area_re;
        ?>
    </section>
    <section class="tarjet" id="9">
        <h3>Salario por horas laborales</h3>
        <?php  
        ?>
    </section>
    <section class="tarjet" id="10">
        <h3></h3>
    </section>
    <section class="tarjet" id="11">
        <h3></h3>
    </section>
    <section class="tarjet" id="12">
        <h3></h3>
    </section>
    <section class="tarjet" id="13">
        <h3></h3>
    </section>
    <section class="tarjet" id="14">
        <h3></h3>
    </section>
    <section class="tarjet" id="15">
        <h3></h3>
    </section>
    <section class="tarjet" id="16">
        <h3></h3>
    </section>
    <section class="tarjet" id="17">
        <h3></h3>
    </section>
    <section class="tarjet" id="18">
        <h3></h3>
    </section>
    <section class="tarjet" id="19">
        <h3></h3>
    </section>
    <section class="tarjet" id="20">
        <h3></h3>
    </section>

    /*
    9.Calcular el salario neto de un trabajador en función del número de horas trabajadas, el precio de la hora y considerando un descuento fijo al sueldo base por concepto de impuestos del 20%.
    10.El cambio de divisas en la bolsa de Madrid el 25/08/1987 fue el siguiente: 100 chelines austríacos = 956.871 pesetas 1 dólar EEUU = 122.499 pesetas 100 dracmas griegos = 88.607 pesetas 100 francos belgas = 323.728 pesetas 1 franco francés = 20.110 pesetas 1 libra esterlina = 178.938 pesetas 100 liras italianas = 9.289 pesetas Lea una cantidad en chelines austriacos e imprima el equivalente en pesetas. Lea una cantidad en dracmas griegos e imprima su equivalente en francos franceses. Finalmente, lea una cantidad en pesetas e imprima su equivalente en dólares y liras italianas.
    11.Se conoce de un trabajador su nombre, el número de horas normales trabajadas, el pago de una hora normal y el número de horas extras trabajadas. Además, que, cada hora extra se paga 25% más del valor de una hora normal. Si se deducen al trabajador sobre el sueldo base 5% del paro forzoso, 2% de política habitacional y 7% para caja de ahorro. Si se le asignan 25000 Bolívares por actualización académica, 17300 Bolívares por cada hijo y una prima por hogar de 18000 Bolívares. Calcule y muestre las asignaciones, las deducciones y el sueldo neto del trabajador.
    12.Calcule y muestre, a un alumno, cuál será su promedio general en las tres materias más difíciles que cursa y cuál será el promedio que obtendrá en cada una de ellas. Estas materias se evalúan como se muestra a continuación: Matemática: Examen 90% y 10% del promedio de tres tareas. Física: Examen 80% y 20% del promedio de dos tareas. Química: Examen 85% y 15% del promedio de tres tareas.
    13.Determine cuánto dinero hay en un banco que contiene N1 billetes de 50000, N2 billetes de 20000, N3 billetes de 10000, N4 billetes de 5000, N5 billetes de 2000, N6 billetes 1000, N7 billetes de 500 y N8 billetes de 100.
    14.El siguiente sistema de ecuaciones lineales: aX + bY = c dX + eY = f se resuelve con las fórmulas: X = (ce - bf) / (ae - bd) Y = (af - cd) / (ae - bd) calcule y muestre el valor de X e Y.
    15.Calcular y mostrar el monto total a pagar en un mes de luz eléctrica, teniendo como dato la lectura anterior, la lectura actual y el costo por kilovatio.
    16.Una empresa X trabaja con láminas de hierro para fabricar una pieza. Se conoce que (a) la lámina mide en promedio 4 metros de largo por 1.5 metros de ancho; (b) la pieza a fabricar consume 0.5 metros en total. Se requiere que calcule y muestre cuántas piezas se fabrican con una lámina y cuánto será el desperdicio.
    17.Dados como datos el precio final pagado por un producto y su precio de venta al público (PVP), se requiere que calcule y muestre el porcentaje de descuento que le ha sido aplicado.
    18.Resuelva el problema que tienen en una gasolinera. Los surtidores de la misma registran lo que surten en galones, pero el precio de la gasolina está fijado en litros. Se requiere que calcule y muestre lo que hay que cobrarle a un cliente, considerando que: (a) cada galón tiene 3.785 litros; (b) el precio del litro es de 100 Bolívares.
    19.En un hospital rural existen tres áreas: Ginecología, Pediatría y Traumatología. El presupuesto anual del hospital se reparte conforme a la siguiente tabla: Área - Porcentaje del presupuesto Ginecología - 40% Traumatología - 30% Pediatría - 30% Obtener la cantidad de dinero que recibirá cada área, para cualquier monto presupuestado.
    20.Calcule qué tanto por ciento anual cobraron por un préstamo de Bolívares X, si se pagaron Bolívares Y de intereses en 4 años. La fórmula del interés es: I = (Capital * Tiempo * Razón) / 100
    21.Un mayorista compra a un agricultor un lote de X naranjas a Bs. Y la docena. Después de vender todas las naranjas a los detallistas, obtiene Bs. K. Calcular el porcentaje de ganancia obtenida en la inversión. Pruebe su programa con los siguientes valores: X=48000, Y=6, K=42000 para obtener 75% como resultado.
    22.Un comerciante de computadores ofrece P precio por compra al contado ó 12 cuotas de T Bolívares cada una. Desarrolle un programa para calcular y mostrar cuál es el porcentaje que se cobra por el recargo en el pago del computador por cuotas.
    23.Suponga que a partir de una Tonelada de maíz una planta productora obtiene M kilogramos de harina y N litros de aceite. La planta vende cada bulto de 24 paquetes de un kilogramo de harina en Bs. B1 y cada caja de 15 envases de aceite en Bs. B2. Suponiendo que la planta vende todo lo que produce, calcular el ingreso total por la venta de cada tonelada de maíz, sabiendo además que cada kilogramo de harina y cada litro de aceite que restan del embalaje se venden al detal a los precios de Bs. B3 y Bs. B4 respectivamente. Pruebe su algoritmo o programa con los sig. Valores: M=452, N=197, B1=132, B2= 180, B3= 7,50 y B4= 14,50. Respuesta: 4895
    */

    <style>
        .tarjet{
            border: 1px solid black;
            border-radius: 5px;
            border-color: black;
            padding: 10px;
            margin:10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 400px; 
            background-color: gray;

        }
        h1 {
            flex-basis: 100%;          
            text-align: center;       
            margin-bottom: 10px;      
            color: #333;
        }              

        h3{
            color:lightgray;
        }
        body {
            display: flex;
            flex-wrap: wrap;           
            flex-direction: row;       
            gap: 20px;                 
            padding: 20px;             
            justify-content: center;   
            background-color: darkgrey; 
        }
        
    </style>
</body>
</html>