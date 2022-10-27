<?php
$precio = $_POST['valor'];

if($precio>=20000){
    $resultado = $precio - ($precio*0.2);
    echo 'El costo total es de '.$resultado.' Se aplica el 20% de descuento';
}else{
    echo 'El costo total es de '.$precio.' No se aplica el 20% de descuento';
}
?>