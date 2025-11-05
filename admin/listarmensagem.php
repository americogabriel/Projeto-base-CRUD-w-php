<?php
    include_once("conectaMYSQL.php");

    $sql = "SELECT * FROM mensagens";

    $resultado = mysqli_query($connect,$sql);

    if($resultado){
        if(mysqli_num_rows($resultado) > 0){
            while (!empty($dados = mysqli_fetch_array($resultado))){

                $id = $dados['id'];
                echo "ID -". $dados['id']. "<br>";
                echo "Nome - ". $dados['nome']. "<br>";
                echo "Email - ". $dados['email']."<br>";
                echo "Mensagem - ". $dados['mensagem']. "<br>";
                echo "<a href='?query=atualizarmensagem&id=$id'>Atualizar</a>";
                echo "<a href='?query=deletarmensagem&id=$id'>Deletar</a>";
                echo "<hr></hr>"; 
            }
        }
    }


?>