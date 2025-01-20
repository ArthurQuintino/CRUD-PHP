<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="
  justify-content: center; display: flex; align-content:center; align-items:center; align-self:center; width: 100%; height: 100%; position: fixed; background-color:#010101;">
    <div class="Container" style="width: 300px; height: 300px; margin: 20px; background-color:#101010; padding: 20px; color:white;">
    <form action="cadastro_script.php" method="POST">
        <h3>Cadastro</h3>
            <div class="form-group">
                <label for="exampleInputEmail1">Nome:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Insira o Nome do contribuinte" name="nome" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Dias Recebidos o leite:</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Insira sua Senha" name="dia" required>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <a href="principal.php" class="btn btn-primary">Voltar</a>
        </form>
    </div>
</body>
</html>
