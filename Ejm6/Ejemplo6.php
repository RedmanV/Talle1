<?php
    $V_Volante = $_POST['Volantes'];
    $V_Postaers = $_POST['Posters'];
    $V_Tarjetas = $_POST['Tarjetas'];

    $totalV =  $V_Volante*2000;
    $totalP = $V_Postaers*5000;
    $totalT = $V_Tarjetas*500;

    $total = ($V_Volante*2000) + ($V_Postaers*5000) + ($V_Tarjetas*500);

    echo 'Valor de volantes:'.$totalV;
    echo '<br>';
    echo 'Valor de posters:'.$totalP;
    echo '<br>';
    echo 'Valor de Tarjetas:'.$totalT;
    echo '<br>';
    echo 'Pago total:'.$total
?>