<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração de Cadastro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="
  justify-content: center; display: flex; align-content:center; align-items:center; align-self:center; width: 100%; height: 100%; position: fixed; background-color:#010101;">
  <?php 
    include "conexao.php";

    $codigo = $_GET['codigo'] ?? '';
    $sql = "SELECT * FROM distribuição where codigo = $codigo";

    $dados = mysqli_query($connection, $sql);
    $linha = mysqli_fetch_assoc($dados)
  ?>
    <div class="Container" style="width: 300px; height: 500px; margin: 20px; background-color:#101010; padding: 20px; color:white;">
    <h1>Alteração de Cadastro</h1>
    <form action="edit_script.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Codigo</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Codigo do Contribuinte" name="Codigo" required value="<?php echo $linha['codigo']; ?>" Readonly>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nome:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nome do contribuinte" name="nome" required value="<?php echo $linha['nome']; ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Dias Recebidos o leite:</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Dias Recebidos do Contribuinte" name="dia" required value ="<?php echo $linha['dia']?>">
            </div>
            <button type="submit" class="btn btn-primary" value="Salvar Alterações">Cadastrar</button>
            <a class="btn btn-primary" href="principal.php">Voltar</a>
        </form>
    </div>
</body>
</html>
