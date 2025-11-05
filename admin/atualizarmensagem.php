<?php
    include_once('conectaMYSQL.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $mensagem = $_POST['mensagem'];

        $sql = "UPDATE mensagens SET
                nome = '$nome',
                email = '$email',
                mensagem = '$mensagem'
                WHERE id = '$id'";
        
        $atualizar = mysqli_query($connect,$sql);

        if(!$atualizar){
            echo "<h2> Não foi Possível atualizar a mensagem no banco de dados.";
        }
        else{
            echo "<h2> Mensagem Atualizada com sucesso!!";
        }
    }

    if ($_SERVER['REQUEST_METHOD'] == 'GET'){

        $id = $_GET['id'];
        $sql = "SELECT * FROM mensagens WHERE id = '$id'";
        $buscar = mysqli_query($connect,$sql);
        if (mysqli_num_rows($buscar) > 0){
            $dados = mysqli_fetch_array($buscar);
        
        ?>
            <form action="?query=atualizarmensagem" method="POST">
                <input type="hidden" name="id" value="<?= $dados['id'] ?>">
                <input type="text" name="nome" value="<?= $dados['nome']?>">
                <input type="email" name="email" value="<?= $dados['email']?>">
                <textarea cols="50" rows="10" name="mensagem"><?=$dados['mensagem']?></textarea>

                <button type="submit">Enviar</button>
            </form>

        <?php
        }else{
        echo "Tabela não possui nenhum dado";
        }
    }
        ?>






