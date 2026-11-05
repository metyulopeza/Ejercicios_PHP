<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $largo= $_POST['largo'];
        $ancho= $_POST['ancho'];
        $consumo_pieza = $_POST['consumo_pieza'];

        $area_lamina=$largo*$ancho;
        $piezas=floor($area_lamina/$consumo_pieza);
        $desperdicio=$area_lamina-($piezas*$consumo_pieza);
 
        echo "Area de la lamina: ".number_format($area_lamina, 2,',','.')." m2 \n";
        echo "Piezas fabricadas por lamina: ".$piezas."\n";
        echo "Desperdicio: ".number_format($desperdicio, 2,',','.')." m2";
    }
?>