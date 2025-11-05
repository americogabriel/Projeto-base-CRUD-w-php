<?php
    include_once("conectaMYSQL.php");

    $sql = "SELECT * FROM pessoas";/* String para trazer todos os campos existentes da tabela "pessoas"*/

    $pegartabela = mysqli_query($connect,$sql);

    if(mysqli_num_rows($pegartabela) > 0){// Conta o número de linhas da consulta da tabela e volta quantas linhas foram encontradas
        while(!empty($dados = mysqli_fetch_array($pegartabela))){ // Traz os dados consultados de uma linha por vez da tabela em forma de array php, podendo ser utilizado
            $id = $dados['id'];
            echo "ID: ".$id."<br>";
            echo  "NOME: ".$dados['nome']."<br>";
            echo  "PAÍS: ".$dados['pais']."<br>";
            echo "<a href='?query=formatualizar&id=$id'>Atualizar</a>";
            echo "<a href='?query=deletarcliente&id=$id'>-Deletar</a>";
            echo "<hr></hr>";
        }
    }
    else{
        echo "<h2> Não foi possível acessar as linhas da tabela.";
    }

?>