<?php
    const EXAM_MAT =0.90;
    const TAREA_MAT=0.10;
    const EXAM_FIS=0.80;
    const TAREA_FIS=0.20;
    const EXAM_QUI=0.85;
    const TAREA_QUI=0.15;

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $exam_mat=$_POST['examenmat'];
        $taremat1=$_POST['tarea1mat'];
        $taremat2=$_POST['tarea2mat'];
        $taremat3=$_POST['tarea3mat'];

        $exam_fis=$_POST['examfis'];
        $tarefis1=$_POST['tarea1fis'];
        $tarefis2=$_POST['tarea2fis'];

        $exam_qui=$_POST['examqui'];
        $tarequi1=$_POST['tarea1qui'];
        $tarequi2=$_POST['tarea2qui'];
        $tarequi3=$_POST['tarea3qui'];

        $promedio_mat=($taremat1+$taremat2+$taremat3)/3;
        $notafinalmat=($exam_mat*EXAM_MAT)+($promedio_mat*TAREA_MAT);

        $promedio_fis=($tarefis1+$tarefis2)/2;
        $notafinalfis=($exam_fis*EXAM_FIS)+($promedio_fis*TAREA_FIS);

        $promedio_qui=($tarequi1+$tarequi2+$tarequi3)/3;
        $notafinalqui=($exam_qui*EXAM_QUI)+($promedio_qui*TAREA_QUI);

        echo "El promedio de sus notas será: ";
        echo "Matematicas: ".$notafinalmat;
        echo "Fisica: ".$notafinalfis;
        echo "Quimica: ".$notafinalqui;
    }
?>