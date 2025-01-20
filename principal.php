<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body style="justify-content: center; display: flex; align-content:center; align-items:center; align-self:center; width: 100%; height: 100%; position: fixed; background-color:#010101;">

  <div class="container">
    <div class="row">
      <div class="col">
        <h1 style="color:white;">Lista de Cadastros</h1>
        <nav class="navbar bg-body-tertiary" style="padding:1rem 1rem 1rem 0px;">
          <div class="container-fluid" style="padding:0;">
            <form class="d-flex" role="search" action="principal.php" method="POST">
              <input class="form-control me-2" type="search" placeholder="Nome" aria-label="Search" style="margin-right: 20px;" name="busca">
              <button class="btn btn-outline-success" type="submit">Pesquisar</button>
            </form>
          </div>
        </nav>
        <br>
        <table class="table" style="color:white;">
            <thead>
              <tr>
                <th scope="col">Codigo</th>
                <th scope="col">Nome</th>
                <th scope="col">Dias</th>
                <th scope="col">Funções</th>
              </tr>
            </thead>
            <tbody>
            <?php 
              $pesquisa = $_POST['busca'] ?? '';
              include "conexao.php";

              $sql = "SELECT * FROM distribuição where nome LIKE '%$pesquisa%'";
              $dados = mysqli_query($connection, $sql);

              while ($linha = mysqli_fetch_assoc($dados) ){
                $codigo = $linha['codigo'];
                $nome = $linha['nome'];
                $dia = $linha['dia'];
                
                echo " <tr>
                        <th scope='row'>$codigo</th>
                        <td>$nome</td>
                        <td>$dia</td> 
                        <td><a href='cadastro_edit.php?codigo=$codigo' class='btn btn-success btn-sm'>Editar</a>
                        <a class='btn btn-danger btn-sm' href='Confirma.php?codigo=$codigo'>Excluir</a></td>
                      </tr>
                      ";
              }
              ?>
          </tbody>
        </table>
      </div>
    </div>
    
    <a href="cadastro.php" class="btn btn-primary">Cadastrar</a>
    <a href="index.php" class="btn btn-primary">Deslogar</a>
  </div>
</div>
</body>

</html>