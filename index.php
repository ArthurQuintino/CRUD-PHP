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
    <h3>Bem vindo</h3>
    <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Usuario</label>
                <input type="text" class="form-control" id="TextBoxUser" placeholder="Insira o seu Usuario" name="usuario">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Senha</label>
                <input type="password" class="form-control" id="TextBoxPass" placeholder="Insira sua Senha" name="senha">
            </div>
            <button type="button" onclick="Verificar()" class="btn btn-primary">Entrar</button>
        </form>
    </div>
    <script>
        function Verificar() {
        let textboxUser = document.getElementById('TextBoxUser').value;
        let textboxPass = document.getElementById('TextBoxPass').value;

        if (textboxUser.toLowerCase() === 'paodequeijo' && textboxPass === '1234567') {
            alert('Bem Vindo ao Sistema')
            window.location.href = 'principal.php';
        } else {
            alert('Usuário ou senha incorretos');
        }
        }
                
    </script>
</body>
</html>

