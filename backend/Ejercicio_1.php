
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $edad1=$_POST['edad1'];
                $edad2=$_POST['edad2'];
                $edad3=$_POST['edad3'];

                $suma=$edad1+$edad2+$edad3;
                $promedio=$suma/3;
                $prom_r = number_format($promedio, 2, ',', '.');

                echo "Entre las edades ".$edad1.", ".$edad2." y ".$edad3." tenemos un promedio resultante de: ".$prom_r;
            }
        ?>