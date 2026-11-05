<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $cal_par1=$_POST['parcial1'];
        $cal_par2=$_POST['parcial2'];
        $cal_par3=$_POST['parcial3'];

        $ex_fin=$_POST['examenfin'];
        $trab_fin=$_POST['trabajofin'];
        $parciales=($cal_par1+$cal_par2+$cal_par3)/3;

        $nota_fin=($parciales*0.55)+($ex_fin*0.3)+($trab_fin*0.15)/3;
        $nt_fin=number_format($nota_fin, 2, ',','.');

        echo "Su nota final es: ".$nt_fin;
    }
?>