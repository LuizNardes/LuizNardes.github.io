<!doctype html>
<html lang="en">
  <head>
    <link rel = "shortcut icon" type = "imagem/x-icon" href = "imagens/8s.ico"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Sistema 8S</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/floating-labels/">

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      input[type="radio"]{
        margin-left: 15px;
        width: 20px;
        height: 20px
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .row{
        width: 100%;
        float: left;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
      }
      .check{
        width: 18px;
        height: 18px;
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="floating-labels.css" rel="stylesheet">
  </head>
  <body>
  <form method="POST" class="form-signin" action="autenticar.php" style="margin-top: 8%; width: 100%" >
  <div class="text-center mb-4">
    <img class="mb-4" src="imagens/korber_preto.png"  width="200">
  </div>

  <div class="form-label-group">
    <input type="text" id="fieldUser" class="form-control" name="fieldUser" placeholder="Matrícula" autocomplete="off" required autofocus>
    <label for="inputEmail">Matrícula</label>
  </div>

  <div class="form-label-group">
    <input type="password" id="fieldPassword" class="form-control" name="fieldPassword" placeholder="Senha" required>
    <label for="inputPassword">Senha</label>
  </div>

  <button class="btn btn-lg btn-primary btn-block" style="background-color: rgb(0,96,255);border:none;margin-top: 3%" type="submit">Pronto</button>
  <p style="text-align: center;">Autenticação do Usuário do Windows</p>
  <p style="text-align: center;">Digite suas credenciais do Windows!</p>
  <p class="mt-5 mb-3 text-muted text-center">Fabio Perini Brasil &copy; 2020</p>
 
</form>
</body>
</html>
