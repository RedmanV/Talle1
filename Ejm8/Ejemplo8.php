<?php
$sexo = $_POST['sexo'];
$edad = $_POST['edad'];

if($sexo == 'M'){
    if($edad>=63){
        echo 'TE PUEDES JUBILAR';
    }
    else{
        echo 'NO TE PUEDES JUBILAR';
    }
}elseif ($sexo == 'F') {
    if($edad>54){
        echo 'TE PUEDES JUBILAR';
    }
    else{
        echo 'NO TE PUEDES JUBILAR';
    }
}
?>