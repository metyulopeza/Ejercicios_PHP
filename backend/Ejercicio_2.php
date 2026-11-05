        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){

                $user=$_POST['name'];
                $inversion=$_POST['inver'];
                $ganancia=$inversion*0.02;  

                $inv= number_format($inversion, 2, ',','.');
                $gan=number_format($ganancia, 2, ',','.');

                echo "Estimado(a) ".$user." su inversion de ".$inv." COP. \n Le daran una ganancia mensual de: ".$gan." COP";
            }
            
        ?>