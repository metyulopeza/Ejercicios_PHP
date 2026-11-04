
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
        <h3>9-Salario por horas laborales</h3>
        <?php
            $horas=160;
            $precio_hora=12000;
            $imp=0.20;
 
            $sueldo_bruto=$horas*$precio_hora;
            $descuento=$sueldo_bruto*$imp;
            $sueldo_neto=$sueldo_bruto-$descuento;
 
            $s_br=number_format($sueldo_bruto, 2,',','.');
            $s_desc=number_format($descuento, 2,',','.');
            $s_net=number_format($sueldo_neto, 2,',','.');
 
            echo "Horas trabajadas: ".$horas." a ".number_format($precio_hora, 2,',','.')." c/u <br>";
            echo "Sueldo base: ".$s_br."<br>";
            echo "Descuento por impuestos (20%): ".$s_desc."<br>";
            echo "Salario neto: ".$s_net;
        ?>
    </section>
 
    <section class="tarjet" id="10">
        <h3>10-Cambio de divisas (Bolsa de Madrid)</h3>
        <?php
            // Pesetas equivalentes
            $chelines_100=956.871;   // 100 chelines austriacos
            $dolar_1=122.499;        // 1 dolar EEUU
            $dracmas_100=88.607;     // 100 dracmas griegos
            $franco_fr_1=20.110;     // 1 franco frances
            $liras_100=9.289;        // 100 liras italianas
 
            // Datos de entrada
            $chelines=250;
            $dracmas=1500;
            $pesetas=50000;
 
            // a) chelines -> pesetas
            $ptas_chel=($chelines*$chelines_100)/100;
 
            // b) dracmas -> francos franceses (pasando por pesetas)
            $ptas_drac=($dracmas*$dracmas_100)/100;
            $francos=$ptas_drac/$franco_fr_1;
 
            // c) pesetas -> dolares y liras
            $dolares=$pesetas/$dolar_1;
            $liras=($pesetas/$liras_100)*100;
 
            echo $chelines." chelines austriacos = ".number_format($ptas_chel, 2,',','.')." pesetas <br><br>";
            echo $dracmas." dracmas griegos = ".number_format($francos, 2,',','.')." francos franceses <br><br>";
            echo $pesetas." pesetas = ".number_format($dolares, 2,',','.')." dolares <br>";
            echo $pesetas." pesetas = ".number_format($liras, 2,',','.')." liras italianas";
        ?>
    </section>
 
    <section class="tarjet" id="11">
        <h3>11-Nomina del trabajador (asignaciones y deducciones)</h3>
        <?php
            $nombre="Carlos";
            $horas_normales=40;
            $pago_hora=8000;
            $horas_extras=5;
            $hijos=2;
 
            $pago_extra=$pago_hora*1.25; // 25% mas por hora extra
 
            $sueldo_base=$horas_normales*$pago_hora;
            $total_extras=$horas_extras*$pago_extra;
            $act_academica=25000;
            $total_hijos=17300*$hijos;
            $prima_hogar=18000;
 
            $asignaciones=$sueldo_base+$total_extras+$act_academica+$total_hijos+$prima_hogar;
 
            // Deducciones sobre el sueldo base
            $paro=$sueldo_base*0.05;
            $habitacional=$sueldo_base*0.02;
            $caja_ahorro=$sueldo_base*0.07;
            $deducciones=$paro+$habitacional+$caja_ahorro;
 
            $sueldo_neto=$asignaciones-$deducciones;
 
            echo "Trabajador: ".$nombre."<br><br>";
            echo "<b>Asignaciones</b><br>";
            echo "Sueldo base: ".number_format($sueldo_base, 2,',','.')."<br>";
            echo "Horas extras: ".number_format($total_extras, 2,',','.')."<br>";
            echo "Actualizacion academica: ".number_format($act_academica, 2,',','.')."<br>";
            echo "Hijos (".$hijos."): ".number_format($total_hijos, 2,',','.')."<br>";
            echo "Prima por hogar: ".number_format($prima_hogar, 2,',','.')."<br>";
            echo "Total asignaciones: ".number_format($asignaciones, 2,',','.')."<br><br>";
            echo "<b>Deducciones</b><br>";
            echo "Paro forzoso (5%): ".number_format($paro, 2,',','.')."<br>";
            echo "Politica habitacional (2%): ".number_format($habitacional, 2,',','.')."<br>";
            echo "Caja de ahorro (7%): ".number_format($caja_ahorro, 2,',','.')."<br>";
            echo "Total deducciones: ".number_format($deducciones, 2,',','.')."<br><br>";
            echo "<b>Sueldo neto: ".number_format($sueldo_neto, 2,',','.')."</b>";
        ?>
    </section>
 
    <section class="tarjet" id="12">
        <h3>12-Promedio de las tres materias mas dificiles</h3>
        <?php
            // Matematica: examen 90% + 10% promedio de 3 tareas
            $ex_mat=4.0;
            $prom_tar_mat=(3.5+4.2+4.8)/3;
            $nota_mat=($ex_mat*0.90)+($prom_tar_mat*0.10);
 
            // Fisica: examen 80% + 20% promedio de 2 tareas
            $ex_fis=3.6;
            $prom_tar_fis=(4.0+3.0)/2;
            $nota_fis=($ex_fis*0.80)+($prom_tar_fis*0.20);
 
            // Quimica: examen 85% + 15% promedio de 3 tareas
            $ex_qui=4.5;
            $prom_tar_qui=(4.0+4.5+5.0)/3;
            $nota_qui=($ex_qui*0.85)+($prom_tar_qui*0.15);
 
            $prom_general=($nota_mat+$nota_fis+$nota_qui)/3;
 
            echo "Matematica: ".number_format($nota_mat, 2,',','.')."<br>";
            echo "Fisica: ".number_format($nota_fis, 2,',','.')."<br>";
            echo "Quimica: ".number_format($nota_qui, 2,',','.')."<br><br>";
            echo "Promedio general: ".number_format($prom_general, 2,',','.');
        ?>
    </section>
 
    <section class="tarjet" id="13">
        <h3>13-Dinero en el banco (billetes)</h3>
        <?php
            $N1=10; // billetes de 50000
            $N2=15; // billetes de 20000
            $N3=20; // billetes de 10000
            $N4=30; // billetes de 5000
            $N5=40; // billetes de 2000
            $N6=50; // billetes de 1000
            $N7=60; // billetes de 500
            $N8=100; // billetes de 100
 
            $total=($N1*50000)+($N2*20000)+($N3*10000)+($N4*5000)+($N5*2000)+($N6*1000)+($N7*500)+($N8*100);
 
            echo "En el banco hay un total de: ".number_format($total, 2,',','.')." COP";
        ?>
    </section>
 
    <section class="tarjet" id="14">
        <h3>14-Sistema de ecuaciones lineales</h3>
        <?php
            // aX + bY = c
            // dX + eY = f
            $a=2; $b=3; $c=13;
            $d=1; $e=-1; $f=-1;
 
            $den=($a*$e)-($b*$d);
 
            if($den!=0){
                $X=(($c*$e)-($b*$f))/$den;
                $Y=(($a*$f)-($c*$d))/$den;
 
                echo "Sistema: ".$a."X + ".$b."Y = ".$c." y ".$d."X + (".$e.")Y = ".$f."<br><br>";
                echo "X = ".number_format($X, 2,',','.')."<br>";
                echo "Y = ".number_format($Y, 2,',','.');
            } else {
                echo "El sistema no tiene solucion unica (ae - bd = 0)";
            }
        ?>
    </section>
 
    <section class="tarjet" id="15">
        <h3>15-Consumo de luz electrica</h3>
        <?php
            $lectura_ant=1250;
            $lectura_act=1480;
            $costo_kw=650;
 
            $consumo=$lectura_act-$lectura_ant;
            $monto=$consumo*$costo_kw;
 
            echo "Consumo del mes: ".$consumo." kWh <br>";
            echo "Costo por kWh: ".number_format($costo_kw, 2,',','.')."<br>";
            echo "Monto total a pagar: ".number_format($monto, 2,',','.');
        ?>
    </section>
 
    <section class="tarjet" id="16">
        <h3>16-Piezas por lamina de hierro</h3>
        <?php
            $largo=4;
            $ancho=1.5;
            $consumo_pieza=0.5; // consumo de cada pieza (m2)
 
            $area_lamina=$largo*$ancho;
            $piezas=floor($area_lamina/$consumo_pieza);
            $desperdicio=$area_lamina-($piezas*$consumo_pieza);
 
            echo "Area de la lamina: ".number_format($area_lamina, 2,',','.')." m2 <br>";
            echo "Piezas fabricadas por lamina: ".$piezas."<br>";
            echo "Desperdicio: ".number_format($desperdicio, 2,',','.')." m2";
        ?>
    </section>
 
    <section class="tarjet" id="17">
        <h3>17-Porcentaje de descuento aplicado</h3>
        <?php
            $pvp=120000;
            $precio_pagado=96000;
 
            $porc_desc=(($pvp-$precio_pagado)/$pvp)*100;
 
            echo "PVP: ".number_format($pvp, 2,',','.')."<br>";
            echo "Precio pagado: ".number_format($precio_pagado, 2,',','.')."<br>";
            echo "Descuento aplicado: ".number_format($porc_desc, 2,',','.')."%";
        ?>
    </section>
 
    <section class="tarjet" id="18">
        <h3>18-Gasolinera (galones a litros)</h3>
        <?php
            $galones=8;
            $litros_galon=3.785;
            $precio_litro=100;
 
            $litros=$galones*$litros_galon;
            $cobro=$litros*$precio_litro;
 
            echo "Galones surtidos: ".$galones."<br>";
            echo "Equivalen a: ".number_format($litros, 2,',','.')." litros <br>";
            echo "Total a cobrar: ".number_format($cobro, 2,',','.')." Bs.";
        ?>
    </section>
 
    <section class="tarjet" id="19">
        <h3>19-Presupuesto del hospital</h3>
        <?php
            $presupuesto=900000000;
 
            $gineco=$presupuesto*0.40;
            $trauma=$presupuesto*0.30;
            $pediatria=$presupuesto*0.30;
 
            echo "Presupuesto anual: ".number_format($presupuesto, 2,',','.')."<br><br>";
            echo "Ginecologia (40%): ".number_format($gineco, 2,',','.')."<br>";
            echo "Traumatologia (30%): ".number_format($trauma, 2,',','.')."<br>";
            echo "Pediatria (30%): ".number_format($pediatria, 2,',','.');
        ?>
    </section>
 
    <section class="tarjet" id="20">
        <h3>20-Tasa de interes anual del prestamo</h3>
        <?php
            $capital=1000000;   // X
            $intereses=240000;  // Y
            $tiempo=4;
 
            // I = (Capital * Tiempo * Razon) / 100  ->  Razon = (I * 100) / (Capital * Tiempo)
            $razon=($intereses*100)/($capital*$tiempo);
 
            echo "Prestamo: ".number_format($capital, 2,',','.')." Bs. <br>";
            echo "Intereses pagados en ".$tiempo." años: ".number_format($intereses, 2,',','.')." Bs. <br>";
            echo "Porcentaje anual cobrado: ".number_format($razon, 2,',','.')."%";
        ?>
    </section>
 
    <section class="tarjet" id="21">
        <h3>21-Ganancia en la inversion de naranjas</h3>
        <?php
            $X=48000; // naranjas
            $Y=6;     // Bs. por docena
            $K=42000; // ingreso por la venta
 
            $docenas=$X/12;
            $inversion=$docenas*$Y;
            $ganancia=$K-$inversion;
            $porc_gan=($ganancia/$inversion)*100;
 
            echo "Inversion: ".number_format($inversion, 2,',','.')." Bs. <br>";
            echo "Ingreso por ventas: ".number_format($K, 2,',','.')." Bs. <br>";
            echo "Porcentaje de ganancia: ".number_format($porc_gan, 2,',','.')."%";
        ?>
    </section>
 
    <section class="tarjet" id="22">
        <h3>22-Recargo por pago en cuotas</h3>
        <?php
            $P=2500000;  // precio de contado
            $T=230000;   // valor de cada cuota
            $cuotas=12;
 
            $total_cuotas=$T*$cuotas;
            $recargo=$total_cuotas-$P;
            $porc_recargo=($recargo/$P)*100;
 
            echo "Precio de contado: ".number_format($P, 2,',','.')."<br>";
            echo "Total en ".$cuotas." cuotas: ".number_format($total_cuotas, 2,',','.')."<br>";
            echo "Recargo: ".number_format($recargo, 2,',','.')."<br>";
            echo "Porcentaje de recargo: ".number_format($porc_recargo, 2,',','.')."%";
        ?>
    </section>
 
    <section class="tarjet" id="23">
        <h3>23-Ingreso por tonelada de maiz</h3>
        <?php
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
        ?>
    </section>


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