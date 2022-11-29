<?php
    include("conexao.php");

    require("auten.php");


    $sql_mensagens = "SELECT * FROM  cadastro_sorv ";
    $consulta_mensagens = $mysqli->query($sql_mensagens) or die($mysqli->error);
    $quantidade_mensagens = $consulta_mensagens->num_rows;
?>

<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
            <title>Ice Screen</title>
            <link rel="stylesheet" href="estilo.css">
        </head>
        <body>
        <nav class="navbar fixed-top" style="background-color:  #ee3a73;">
      <div class="container-fluid   ">
        <img src="ice.png" class="navbar-brand" height="150px" width="200px">
        <a class="navbar-brand" href="#"><h1 class="men">Ice Screen</h1></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" style="background-color: #ee3a73;" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
          <div class="offcanvas-header">
            <img src="ice.png" alt="" width="300px" height="300px">
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html"><h2 class="man">Início</h2></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cadastro_sorv.php"><h2 class="man">Publique a sua sorveteria</h2></a>
              </li>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contato.html"><h2 class="man"></h2  ></a>
            </li>
              <li class="nav-item dropdown">
          </div>
        </div>
      </div>
    </nav>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="container">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <th>ID</th>
                    <th>Nome da sorveteria</th>
                    <th>Endereço</th>
                    <th>Telefone</th>
                    <th>Imagem da sorveteria</th>
                    <th>Data</th>
                </thead>
                <tbody>
                <?php if ($quantidade_mensagens == 0 ){ ?>
                        <tr>
                            <td colspan="6">Nenhuma  mensagem encontrada</td>
                        </tr>
                    <?php
                        } else {
                            while ($mensagem = $consulta_mensagens -> fetch_assoc()){

                                $data = date ("d/m/Y H:i", strtotime ($mensagem['data']));
                    ?>
                    <tr>
                        <td> <?php echo $mensagem['id']; ?> </td>
                        <td> <?php echo $mensagem['endereco']; ?> </td>
                        <td> <?php echo $mensagem['nome']; ?> </td>
                        <td> <?php echo $mensagem['numero']; ?> </td>
                        <td> <img src="<?php echo $mensagem['img']; ?>" alt=""> </td>
                        <td> <?php echo $data; ?> </td>
                    </tr>
                    <?php 
                    }
                    ?>
                    <?php 
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script> 
        </body>
    </html>
