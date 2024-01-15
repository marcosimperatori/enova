<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">


  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,400;6..12,700&family=Nunito:wght@200;300;400&family=Roboto:wght@100;400;500;700&family=Shadows+Into+Light&display=swap" rel="stylesheet">

  <title><?= MY_APP ?></title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


  <style>
    body {
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .form-signin {
      width: 100%;
      max-width: 330px;
      padding: 15px;
      margin: auto;
    }

    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <link href="signin.css" rel="stylesheet">
</head>

<body class="text-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 col-md-10 col-sm-12">
        <div class="card">
          <form class="form-signin" action="<?= base_url('logar'); ?>" method="post">
            <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
            <img class="mb-4" src="<?php echo base_url('assets/img/favicon.ico') ?>" alt="" width="172" height="172">
            <h1 class="h3 mb-3 font-weight-normal">Entre com suas credenciais</h1>

            <div>
              <label for="inputEmail" class="sr-only">Usuário</label>
              <input type="text" id="usuario" name="usuario" class="form-control mb-1" placeholder="Usuário" required autofocus>
              <?php if (isset($erros['usuario'])) : ?>
                <div class="alert alert-danger" role="alert">
                  <?= $erros['usuario'] ?>
                </div>
              <?php endif; ?>
            </div>

            <div>
              <label for="inputPassword" class="sr-only">Senha</label>
              <input type="password" id="senha" name="senha" class="form-control mb-3" placeholder="Senha" required>
              <?php if (isset($erros['senha'])) : ?>
                <div class="alert alert-danger" role="alert">
                  <?= $erros['senha'] ?>
                </div>
              <?php endif; ?>
            </div>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
            <a href="<?php echo base_url('/'); ?>" class="btn btn-sm btn-secondary mt-3">Voltar</a>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>