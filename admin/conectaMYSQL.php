<?php

    $connect = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connect,"test");

    if (!$connect){
        echo "<h2>Falha ao conectar com o MYSQL Banco de Dados</h2>";
    }
?>