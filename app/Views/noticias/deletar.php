<?php echo $this->extend('layout/principal'); ?>

<?php echo $this->section('conteudo'); ?>

<section class="container">
  <div class="nav">
    <ol class="breadcrumb my-3">
      <li class="breadcrumb-item"><a href="<?php echo site_url("notícias"); ?>">Início</a></li>
      <li class="breadcrumb-item"><a href="<?php echo site_url("noticias"); ?>">Todas as publicações</a></li>
      <li class="breadcrumb-item active" aria-current="page">Exclusão de publicação</li>
    </ol>
  </div>

  <div class="jumbotron">
    <p class="lead font-weight-bolder"><i class="fas fa-trash-alt text-danger"></i>&nbsp;Exclusão do registro:</p>

    <div class="text-center text-danger">
      <div class="row">
        <div class="col">
          <h4>Notícia: <?php echo $noticia->assunto; ?></h4>
        </div>
      </div>
      <hr class="my-4">
      <p class="lead">Confirma a exclusão do registro acima?</p>
      <a class="btn btn-secondary" href="<?= base_url('noticias'); ?>" role="button">Cancelar</a>
      <a class="btn btn-danger" href="<?= base_url('noticias/confirma_exclusao/' . encrypt($noticia->id)); ?>" role="button">Excluir</a>
    </div>
  </div>

</section>

<?php $this->endSection(); ?>