    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
             
            $valor_m=$_POST['metros'];
            $metro=1;
            $pulgadas=39.27;
            $pies_en_in=12;

            $pul_m=($valor_m*$pulgadas)/$metro;
            $pul_ft=($pul_m*1)/$pies_en_in;

            $in=number_format($pul_m, 2,',','.');
            $ft=number_format($pul_ft, 2,',','.');

            echo $valor_m."m metro(s) equivale(n) a: ".$in."in pulgadas \n";
            echo $valor_m."m metro(s) equivale(n) a: ".$ft."ft pies <br>";
        }
    ?>