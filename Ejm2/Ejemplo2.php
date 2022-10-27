<?php
    $dato1 = $_POST['Nombre'];
    $dato2 = $_POST['Asignacion'];
    $dato3 = $_POST['N1'];
    $dato4 = $_POST['N2'];
    $dato5 = $_POST['N3'];
    $resultado = ($dato3 + $dato4 + $dato5) /3;

    echo 'Su nombre es: '.$dato1;
    echo "<br>";
    echo 'Asignacion: '.$dato2;
    echo "<br>";
    echo 'Su promedio es: '.$resultado;

?>