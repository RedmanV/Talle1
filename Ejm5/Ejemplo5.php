<?php
    $h1 = $_POST['H1'];
    $h2 = $_POST['H2'];

    if($h1>$h2){
        $resta = $h1-$h2;
        echo 'El hermano 1 es mayor que el hermano 2 ';
        echo '<br>';
        echo 'La diferencia de edad es de:'.$resta;
    }else{
        $resta = $h2-$h1;
        echo 'El hermano 2 es mayor que el hermano 1';
        echo '<br>';
        echo 'La diferencia de edad es de:'.$resta;
    }

?>