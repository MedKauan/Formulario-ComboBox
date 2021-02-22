
<!-- Página principal / O que vai ser mostrado para o usuario -->

?php 
    include_once("config.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Formulario
        </title>
    </head>   
    <body>
        <form action = "insere_aluno.php" method = "post">
            Nome: <input type="text" name="nome" placeholder = "Digite o seu nome completo"><br><br>
            RA:<input type="text" name="ra" placeholder = "Digite o seu RA"><br><br>
            E-mail:<input type="email" name="email" placeholder = "Digite o seu email"><br><br>
            Escolha a Turma:
                <select name="select_turmas">
                    <option>Selecione</option>
                        <?php
                            $result_turmas = "SELECT * FROM turmas ";
                            $resultado_turmas = mysqli_query($conn, $result_turmas);
                            while($row_turmas = mysqli_fetch_assoc($resultado_turmas)){ ?>
                                <option value="<?php echo $row_turmas['codigo']; ?>"><?php echo $row_turmas['descricao']; ?></option> <?php
                            }
                        ?>
                </select><br><br>
            <input type="submit">
        </form>
    </body>
</html>
