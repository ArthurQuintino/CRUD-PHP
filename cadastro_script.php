<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="
  justify-content:center; display:flex; align-content:center; align-items:center; align-self:center; width: 100%; height: 100%; position: fixed; background-color:#010101;">
    <div class="container" style="display:flex;">
            <?php 

            include "conexao.php";

            $nome = $_POST['nome'];
            $dia = $_POST['dia'];

            $sql = "INSERT INTO `distribuição`(`nome`, `dia`)
                    VALUES('$nome', '$dia')";

            if(mysqli_query($connection, $sql))
            {
                echo '<p style="color:white;">Cadastrado com sucesso</p>';
            }else{
                echo '<p style="color:white;>Não cadastrado</p>';
            }
            
            ?>
            <div style="margin-left: 30px"> <button class="btn btn-primary"><a href="principal.php" style="color:white;">Voltar</a></button></div>
    </div>
</body>
</html>
