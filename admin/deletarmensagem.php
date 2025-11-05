<?php
    include_once('conectaMYSQL.php');

    $id = $_GET['id'];
    $sql = "DELETE FROM mensagens WHERE id = '$id'";

    $deletar = mysqli_query($connect,$sql);

    if(!$deletar){
        echo "<h2> Não foi possível deletar a mensagem.";
    }
    else{
        echo "<h2> Mensagem deletada com sucesso!!";
    }








?>