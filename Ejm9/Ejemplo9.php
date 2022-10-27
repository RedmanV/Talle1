<?php
    $dato1 = $_POST['name'];
    $dato2 = $_POST['materia'];
    $dato3 = $_POST['nota1'];   
    $dato4 = $_POST['nota2']; 
    $dato5 = $_POST['nota3']; 

    echo 'Nombre: '.$dato1;
    echo '<br>';
    echo "Asignación: ".$dato2;
    echo '<br>';
    $resultado = ($dato3 * 0.3) + ($dato4 * 0.3) + ($dato5 * 0.4);

    if($resultado>=4){
        echo 'Aprobado';
    }else{
        echo 'Reprobado';
    }
?>