    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $A=$_POST['ladoA'];
            $B=$_POST['ladoB'];
            $C=$_POST['ladoC'];

            $P=($A+$B+$C)/2;

            $Area=sqrt($P*($P-$A)*($P-$B)*($P-$C));
            $Area_re=number_format($Area , 2,',','.');
            
            echo "El area del triango con lados ".$A.", ".$B." y ".$C, " equivale a: ".$Area_re;
        }
    ?>