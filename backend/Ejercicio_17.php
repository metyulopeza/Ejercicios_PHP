<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $pvp=$_POST['pvp'];
        $precio_pagado=$_POST['p_pg'];
 
        $porc_desc=(($pvp-$precio_pagado)/$pvp)*100;
 
        echo "PVP: ".number_format($pvp, 2,',','.')."\n";
        echo "Precio pagado: ".number_format($precio_pagado, 2,',','.')."\n";
        echo "Descuento aplicado: ".number_format($porc_desc, 2,',','.')."%";
    }
?>