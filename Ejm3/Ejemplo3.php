<?php
    $ganados = $_POST['PG'];
    $empate = $_POST['PE'];
    $perdidos = $_POST['PP'];

    $multi = ($ganados*3) + ($empate*1) + ($perdidos*0);

    echo 'Su total de puntos es:'.$multi;
?>