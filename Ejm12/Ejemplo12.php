<?php
    $capital = $_GET['capital'];

    if($capital<500){
        $resultado = $capital + ($capital*0.2);
        echo 'La tasa de interes es del 2% mensual y su total es de: '.$resultado;
    }elseif($capital>=500 && $capital<1500 ){
        $resultado2 = $capital + ($capital*0.45);
        echo 'La tasa de interes es del 4,5% mensual y su total es de: '.$resultado2;
    
    }else{
        $resultado4 = $capital + ($capital*0.7);
        echo 'La tasa de interes es del 7% mensual y su total es de: '.$resultado4;
    }
?>