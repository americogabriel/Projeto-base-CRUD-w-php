<?php
    require_once("conectaMYSQL.php");

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome = $_POST['nome'];
        $pais = $_POST['pais'];
        $id = $_POST['id'];

        $sql = "UPDATE pessoas SET 
                nome = '$nome',
                pais = '$pais' 
                WHERE id = '$id'";/* String para atualizar em "nome,pais" na tabela "pessoas" os valores "$nome e $pais" mandados no form*/

        $adcionar = mysqli_query($connect,$sql);

        if (!$adcionar){
            echo "<h2> Não foi Possível adcionar o novo usuário no banco.";
        }
        else{
            echo "<h2> Usuário Atualizado com Sucesso no Banco de Dados";
        }
    }
    if ($_SERVER['REQUEST_METHOD']== 'GET'){
        $id = $_GET['id'];// Pega o ID do usuário mandado na URL como GET, no arquivo listarpessoas.php
        $sql = "SELECT * FROM pessoas WHERE id = '$id'";//Selecia a linha

        $pegartabela = mysqli_query($connect,$sql);

        if(mysqli_num_rows($pegartabela) > 0){// Conta o número de linhas da consulta da tabela e volta quantas linhas foram encontradas
            $dados = mysqli_fetch_array($pegartabela);// Traz os dados consultados de uma linha por vez da tabela em forma de array php, podendo ser utilizado
    

?>
<body>
    <form action="?query=formatualizar" method="POST">
        <input type="hidden" name="id" value="<?= $dados['id'] ?>">
        <input type="text" name="nome" placeholder="Digite seu nome" value="<?= $dados['nome']?>">
        <input type="text" name="pais" placeholder="Digite seu País" value="<?= $dados['pais']?>">

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
<?php
        }
        else{
        echo "<h2> Nenhum cliente encontrado na tabela </h2>";
        }
    }
?>