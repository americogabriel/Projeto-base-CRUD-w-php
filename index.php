<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Site Exemplo para Exemplificar Banco de dados</h2>
    <header>
        <?php
            if (empty($_SERVER['QUERY_STRING'])){
                $dado = 'conteudo';
                include_once ("$dado.php");
            }
            else{
                $dado_get = $_GET['query'];
                include_onde("$dado_get.php");
            }
        ?>
    </header>
</body>
</html>