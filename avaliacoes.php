<?php
    include_once("admin/conectaMYSQL.php");

    $sql = "SELECT * FROM mensagens";
    $buscar = mysqli_query($connect,$sql);
    if(mysqli_num_rows($buscar) > 0){

    ?>
    <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Cliente</th>
                        <th>Avaliação</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    while(!empty($arraymensagens = mysqli_fetch_array($buscar))){
                ?>
                    <tr>
                        <td><?=$arraymensagens['nome']?></td>
                        <td><?=$arraymensagens['mensagem']?></td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
            </table>
<?php

    }else{
        echo "<h2> Tabela de mensagens se econtra vazia ou não foi possível buscá-la.";
    }