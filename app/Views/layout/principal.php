<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= MY_APP ?></title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,300;6..12,700&family=Nunito:wght@200;300;400&family=Roboto:wght@100;400;500;700&family=Shadows+Into+Light&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <link rel="stylesheet" href="<?php echo base_url("assets/fontawesome/css/all.min.css") ?>">

  <link href="https://cdn.datatables.net/v/bs5/dt-1.13.8/r-2.5.0/datatables.min.css" rel="stylesheet">


</head>

<body>
  <main class="">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="<?= base_url('noticias'); ?>">Início</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('noticias'); ?>">Notícias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link's</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="<?= base_url('perfil'); ?>" class="nav-link"><i class="fas fa-user"></i> &nbsp; <?php /*echo session()->get('user')->nome;*/ ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-warning" href="#"><i class="fas fa-sign-out-alt"></i>&nbsp; Sair</a>
            </li>
          </ul>
        </form>
      </div>
    </nav>
  </main>

  <div class="container">
    <?php echo $this->renderSection('conteudo'); ?>
  </div>

  <script src="<?php echo base_url("assets/jquery/jquery-3.7.0.min.js"); ?>"></script>

  <script src="https://cdn.datatables.net/v/bs5/dt-1.13.8/r-2.5.0/datatables.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>

  <script src="<?php echo site_url("assets/jquery/jquery.validate.js"); ?>"></script>
  <script src="<?php echo site_url('assets/jquery/jquery.mask.min.js'); ?>"></script>
  <script src="<?php echo base_url("assets/js/app.js") ?>"></script>
  <script src="<?php echo base_url("assets/js/comons.js") ?>"></script>

  <script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/decoupled-document/ckeditor.js"></script>

  <?php echo $this->renderSection('scripts'); ?>
</body>

</html>