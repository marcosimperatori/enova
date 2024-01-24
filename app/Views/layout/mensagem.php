'<?php if (session()->has('sucesso')) : ?>

  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Sucesso!</strong> <?php echo session('sucesso'); ?>.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

<?php endif; ?>

<?php if (session()->has('info')) : ?>

  <div class="alert alert-info alert-dismissible fade show" role="alert">
    <strong>Informação!</strong> <?php echo session('info'); ?>.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

<?php endif; ?>

<?php if (session()->has('atencao')) : ?>

  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Atenção!</strong> <?php echo session('atencao'); ?>.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

<?php endif; ?>

<!-- Utilizado quando o post é sem ajax request -->
<?php if (session()->has('erros_model')) : ?>

  <ul>
    <?php foreach ($erros_model as $erro) : ?>
      <li class="text-danger"><?php echo $erro; ?></li>
    <?php endforeach; ?>
  </ul>

<?php endif; ?>

<?php if (session()->has('error')) : ?>

  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Falha!</strong> <?php echo session('error'); ?>.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

<?php endif; ?>