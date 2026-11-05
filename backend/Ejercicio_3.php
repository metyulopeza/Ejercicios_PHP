        <?php
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                $nombre_emp=$_POST['name'];

                $sueldo_base=$_POST['sueldobase'];
                $venta1=$_POST['venta1'];
                $venta2=$_POST['venta2'];
                $venta3=$_POST['venta3'];

                $comision=($venta1*0.1)+($venta2*0.1)+($venta3*0.1);

                $sueldo_tt=$sueldo_base+$comision;

                $suel_tt= number_format($sueldo_tt, 2,',','.');
                $suel_b= number_format($sueldo_base, 2, ',','.');
                $com=number_format($comision, 2,',','.');

                echo "El vendedor ".$nombre_emp." recibirá un sueldo total de: ".$suel_tt." COP Los cuales estan repartidos en: \n";
                
                echo " Sueldo base ".$suel_b." COP \n";
                echo " Comisiones ".$com." COP";
            }

        ?>