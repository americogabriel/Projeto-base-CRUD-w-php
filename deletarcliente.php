<?php
    include_once("conectaMYSQL.php");

    $id = $_GET['id'];

    $sql = "DELETE FROM pessoas WHERE id = $id";

    $remover = mysqli_query($connect,$sql);

    if (!$remover){
        echo "<h2> Erro ao Remover usuário </h2><br>";
        echo "<a href='?query=listarpessoas'>voltar</a>";
    }
    else{
        echo "<h2> Usuário removido com sucesso!!";
        echo "<a href='query=listarpessoas'>Voltar</a>";
    }

?>