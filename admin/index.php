<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Site Exemplo para Exemplificar Banco de dados</h2>
    <a href="?query=cadastracliente">Cadastrar cliente</a>
    <a href="?query=cadastramensagem">Cadastrar Mensagem</a>
    <a href="?query=listarmensagem">Listar Mensagem</a>
    <a href="?query=listarpessoas">Listar cliente</a>
    <header>
        <?php
            if (empty($_SERVER['QUERY_STRING'])){
                $dado = 'conteudo';
                include_once ("$dado.php");
            }
            else{
                $dado_get = $_GET['query'];
                include_once("$dado_get.php");
                echo "<a href='index.php'>Voltar para a Página Inicial</a>";
            }
        ?>
    </header>
    
</body>
</html>