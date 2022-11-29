<?php
    include("conexao.php");

    if(isset($_POST['bt_login'])){
        $login = $_POST['bt_login'];
        $senha = $_POST['bt_senha'];

        $sql = "SELECT * FROM log WHERE login ='$login' limit 1";
        $sql_exec = $mysqli->query($sql) or die ($mysqli->error);

        $usuario = $sql_exec->fetch_assoc();



        if(password_verify($senha, $usuario['senha'])){
            

            if(!isset($_SESSION)){
                session_start();


                $_SESSION['user_ativo'] = $usuario['id_senha'];

                header("location:adm.php");


            }


        }else{
            echo "Falha ao logar! Login ou senha incorreto";
        }


        
    }
    
?>

<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=], initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="estilo.css">
        <title>Tela de Login</title>
    </head>
    <body>
    <nav class="navbar fixed-top" style="background-color: #ee3a73;">
      <div class="container-fluid">
        <img src="ice.png" class="navbar-brand" height="150px" width="200px">
        <a class="navbar-brand" href="#"><h1 class="men"> Sorveterias</h1></a>
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
    <br>
        <div class="container col-11 col-md9" id="form-container">
            <div class="row align-items-center gx-5">
                <div class="col-md-6 order-md-2">
                    <h1>Tela de Login </h1>
                    <form action="" method="post">
                        <div class="form-floating mb-3">
                            <input class="form-control" type="text" placeholder="Digite o seu login" name="bt_login">
                            <label class="form-label" for="bt_login">Login</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" type="password" placeholder="Digite a sua senha" name="bt_senha">
                            <label class="form-label" for="bt_senha">Senha:</label>
                        </div>                       
                        
                        <input class="btn btn-success" type="submit" value="Entrar">
                        <input class="btn btn-danger" type="reset" value="Cancelar">
                    </form>
                </div>                   
                <div class="col-md-6 order-md-1">
                    <div class="col-12">
                        <img src="https://uploads.metropoles.com/wp-content/uploads/2019/10/25200853/58410069_692856461163484_1715489500096984068_n-600x400.jpg" alt="" class="img-fluid">
                    </div>
                </div>           
            </div>                 
        </div> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>      
              
    </body>
</html>