<?php
    $Name = $_POST["name"];
    $Dato1 = $_POST["materia"];
    $N1 = $_POST["n1"];

    echo 'El nombre del estudiate es: '.$Name;
    echo '<br>';
    echo 'La asignacion es: '.$Dato1;
    echo '<br>';

    if($N1<=6)
    {
        echo 'Reprobado';
    }
    else
    {
        echo 'Aprobado';
    }  
?>