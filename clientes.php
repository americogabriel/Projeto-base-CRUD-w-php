<?php
    include_once("admin/conectaMYSQL.php");

    $sql = "SELECT * FROM pessoas";

    $todaspessoas = mysqli_query($connect,$sql);

    if(mysqli_num_rows($todaspessoas) > 0){
    ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Cliente</th>
                        <th>País</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    while(!empty($arraypessoas = mysqli_fetch_array($todaspessoas))){
                ?>
                    <tr>
                        <td><?=$arraypessoas['nome']?></td>
                        <td><?=$arraypessoas['pais']?></td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
            </table>
<?php
    }else{
        echo "<h2>Nenhum cliente cadastrado no momento.</h2>";
    }

?>