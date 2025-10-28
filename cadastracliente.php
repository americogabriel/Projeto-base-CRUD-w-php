<?php
    include_once("conectaMYSQL.php");
    include_once("form.php");

    if ($_SERVER['REQUEST_METHOD']== "POST"){
        $nome = $_POST['nome'];
        $pais = $_POST['pais'];

        $sql = "INSERT INTO pessoas (nome,pais) VALUES ('$nome','$pais')";

        $adcionar = mysqli_query($connect,$sql);

        if (!$adcionar){
            echo "<h2> Não foi Possível adcionar o novo usuário no banco.";
        }
        else{
            echo "<h2> Novo usuário Adcionado com Sucesso no Banco de Dados";
        }
    }
    echo "<a href='index.php'>Voltar</a>";

?>