<?php
    $servidor ="localhost";
    $usuario="igor";        
    $senha="1234";      
    $banco="sorvete";

    $mysqli = new mysqli($servidor, $usuario, $senha, $banco);

    if ($mysqli->connect_errno){
        echo "Não deu certo " . $mysqli->connect_error;
        exit();
    }

?>