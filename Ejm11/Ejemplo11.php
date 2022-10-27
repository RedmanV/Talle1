<?php
    $valor = $_POST['precio'];

    $resultado = $valor + ($valor*0.15);
    echo "El valor del artículo es de ".$resultado;
?>