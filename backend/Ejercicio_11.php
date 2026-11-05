<?php
    const ACTUALIZACION_ACADEMICA = 25000;
    const BONO_HIJO = 17300;
    const PRIMA_HOGAR=18000;
    const RECARGO_HORA_EXTRA= 0.25;

    /*Deducciones*/

    const PARO_FORZOSO=0.05;
    const POLITICA_HAB=0.02;
    const CAJA_AHORRO=0.07;

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $nombre=$_POST['nombre'];
        $horas_t=$_POST['horanormal'];
        $horas_ex=$_POST['horaextra'];
        $hijos=$_POST['no_hijos'];

        $v_hn=$_POST['valorH'];
        $v_he=$v_hn+($v_hn*RECARGO_HORA_EXTRA);

        $sueldo_base=($horas_t*$v_hn)+($horas_ex*$v_he);

        $asig_hijo=$hijos*BONO_HIJO;
        $asignaciones=ACTUALIZACION_ACADEMICA+PRIMA_HOGAR+$asig_hijo;

        $deduccion_paro=$sueldo_base*PARO_FORZOSO;
        $deduccion_politica_hab=$sueldo_base*POLITICA_HAB;
        $deduccion_caja=$sueldo_base*CAJA_AHORRO;

        $deducciones=$deduccion_paro+$deduccion_politica_hab
        +$deduccion_caja;

        $sueldo_neto=$sueldo_base+$asignaciones-$deducciones;

        echo "Para el trabajador ".$nombre." se le pagara un salario neto de: ".$sueldo_neto;

        echo "Detalles: ";

        echo "Sueldo base ".$sueldo_base;

        echo "Asignaciones: \n Actualizacion academica ".ACTUALIZACION_ACADEMICA." \n Por cada hijo ",$asig_hijo."\n Prima por hogar".PRIMA_HOGAR;

        echo "Deducciones: \n"."Por Paro Forzoso 5%".$deduccion_paro."\n Por Politica Habitacional 2% ".$deduccion_politica_hab."\n Por Caja de Ahorro 7% ".$deduccion_caja;



    }
?>