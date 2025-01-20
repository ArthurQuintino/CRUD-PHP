<?php 
    $server = "localhost";
    $user = "root";
    $pass = "12345678";
    $bd = "db_leite";


    if($connection = mysqli_connect($server, $user, $pass, $bd)){
        // echo 'conectado'; foi achado o servidor...

    }else{
        echo 'servidor nao encontrado';
    }


?>