    <?php
        
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $horas=$_POST['horas'];
            $precio_hora=$_POST['valor'];
            define("IMP", 0.20);
 
            $sueldo_bruto=$horas*$precio_hora;
            $descuento=$sueldo_bruto*IMP;
            $sueldo_neto=$sueldo_bruto-$descuento;
 
            $s_br=number_format($sueldo_bruto, 2,',','.');
            $s_desc=number_format($descuento, 2,',','.');
            $s_net=number_format($sueldo_neto, 2,',','.');
 
            echo "Horas trabajadas: ".$horas." a ".number_format($precio_hora, 2,',','.')." COP c/u \n";
            echo "Sueldo base: ".$s_br." COP \n";
            echo "Descuento por impuestos (20%): ".$s_desc." COP \n";
            echo "Salario neto: ".$s_net." COP";
        }
    ?>