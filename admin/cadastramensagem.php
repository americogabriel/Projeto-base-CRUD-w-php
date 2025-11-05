<?php
    include_once("conectaMYSQL.php");
    include_once("formmensagem.php");

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $mensagem = $_POST['mensagem'];

        $sql = "INSERT INTO mensagens (nome,email,mensagem) VALUES ('$nome','$email','$mensagem')";

        $adcionar = mysqli_query($connect,$sql);
    
        if(!$adcionar){
            echo "<h2> ERRO ao adcionar nova mensagem no banco.";
        }
        else{
            echo "<h2> Mensagem Registrada com sucesso";
        }
    }



?>