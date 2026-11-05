<?php
    /* Cada constante es igual a su valor en pesetas*/
    const CHELINES_AUSTRIACOS_100 = 956.871;
    const DRACMAS_GRIEGOS_100 = 88.607;
    const FRANCOS_BELGAS_100= 323.728;
    const LIRAS_ITALIANAS_100=9.289;
    const FRANCO_FRANCES_1=20.110;
    const LIBRA_ESTERLINA_1=178.938;
    const DOLAR_EEUU_1=122.499;
    /*
    chelines austriacos a pesetas
    100 ca =  956.871 pesetas
    50 ca = x

    dracmas a francos
    100 dg = 88.607
    50 dg = x

    pesetas a dolares y liras italianas
    122.499 ps = 1 dolar
    5445 ps = x 

    9.289 ps = 100

    PS A FF
    323.758 = 100
    assad

    */
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $CA=(float)$_POST['chelinesA'];
        $DC=(float)$_POST['dracmasG'];
        $PS=(float)$_POST['pesetas'];

        /* Chelines Austriacios a pesetas*/
        $CA_PS=($CA*CHELINES_AUSTRIACOS_100)/100;
        $CA_PSS=number_format($CA_PS,3 ,',','.');

        echo $CA." Chelines austriacos, son equivalentes a ".$CA_PS." Pesetas \n";

        /*Dracmas Griegos a Francos franceses */
        $DC_PS=($DC*DRACMAS_GRIEGOS_100)/100;
        $PS_FF=($DC_PS*100)/FRANCO_FRANCES_1;
        

        $PS_FFS=number_format($PS_FF,3,',','.');

        echo $DC." Dracmas griegos, son equivalentes a ".$PS_FFS." Francos franceses \n";

        /*Pesetas a Dolares EEUU y Liras Italianas */

        $PS_USD=$PS/DOLAR_EEUU_1;
        $PS_USDS=number_format($PS_USD, 3 ,',','.');

        echo $PS." Pesetas, son equivalentes a ".$PS_USDS." Dolares EEUU \n";

        $PS_LI=($PS*LIRAS_ITALIANAS_100)/100;
        $PS_LIS=number_format($PS_LI, 3 ,',','.');

        echo $PS." Pesetas, son equivalentes a ".$PS_LIS." Liras Italianas";
    }
?>