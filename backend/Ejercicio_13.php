<?php
    const N1=50000;
    const N2=20000;
    const N3=10000;
    const N4=5000;
    const N5=2000;
    const N6=1000;
    const N7=500;
    const N8=100;

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        
        $n1=$_POST['n1'];
        $n2=$_POST['n2'];
        $n3=$_POST['n3'];
        $n4=$_POST['n4'];
        $n5=$_POST['n5'];
        $n6=$_POST['n6'];
        $n7=$_POST['n7'];
        $n8=$_POST['n8'];
        

        $suma=($n1*N1)+($n2*N2)+($n3*N3)+($n4*N4)+($n5*N5)+($n6*N6)+($n7*N7)+($n8*N8);
        $total=number_format($suma, 2 ,',','.');

        echo "Total del dinero en el banco es: ";
        echo $total;
    }
?>