<?php
    include("conexao.php");

    require("auten.php");
   
   

    if(isset($_POST['bt_login'])){
        $login = $_POST['bt_login'];
        $senha = $_POST['bt_senha'];

        $senha_nova = password_hash($_POST['bt_senha'], PASSWORD_DEFAULT);

        $mysqli->query ("INSERT INTO log (login, senha) VALUES ('$login', '$senha_nova')");
    }
?>

<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="cine.css">
        <title>Cadastro de Usuário</title>
    </head>
    <body>
    <nav class="navbar fixed-top" style="background-color: #ee3a73;">
      <div class="container-fluid">
        <img src="imgs/sovete.png" class="navbar-brand" height="150px" width="200px">
        <a class="navbar-brand" href="#"><h1 class="men"> Sorveterias</h1></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" style="background-color: #642399;" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
          <div class="offcanvas-header">
            <img src="imgs/sovete.png" alt="">
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html"><h2 class="man">Início</h2></a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="cadastro_sorv.html"><h2 class="man">Publique a sua sorveteria</h2></a>
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
    <br>
    <br>
        <div class="container">
            <h1>Cadastro de Usuário</h1>

            <form action="" method="post">
                <div class="mb-3">
                    <label class="form-label" for="bt_login">Digite o seu usuário: </label>
                    <input class="form-control" type="text" name="bt_login">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="bt_senha">Digite a sua senha: </label>            
                    <input class="form-control"  type="password" name="bt_senha">
                </div>                
                <input class="btn btn-primary" type="submit" value="Cadastrar">
                <input class="btn btn-danger" type="reset" value="Cancelar">
                <a class="byn btm-danger" href="sair.php">Sair</a>

            </form>
        </div>
       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>      
    </body>
</html>