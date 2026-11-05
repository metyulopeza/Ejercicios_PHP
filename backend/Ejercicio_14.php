<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
            $a=$_POST['a']; 
            $b=$_POST['b']; 
            $c=$_POST['c'];
            $d=$_POST['d']; 
            $e=$_POST['e']; 
            $f=$_POST['f'];
 
            $den=($a*$e)-($b*$d);
 
            if($den!=0){
                $X=(($c*$e)-($b*$f))/$den;
                $Y=(($a*$f)-($c*$d))/$den;
 
                echo "Sistema: ".$a."X + ".$b."Y = ".$c." y ".$d."X + (".$e.")Y = ".$f."\n";
                echo "X = ".number_format($X, 2,',','.')."\n";
                echo "Y = ".number_format($Y, 2,',','.');
            } else {
                echo "El sistema no tiene solucion unica (ae - bd = 0)";
            }
    }
?>