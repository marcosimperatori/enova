<?php echo $this->extend('layout/principal'); ?>

<?php echo $this->section('conteudo'); ?>

<section class="container">
  <div class="nav">
    <ol class="breadcrumb my-3">
      <li class="breadcrumb-item"><a href="<?php echo site_url("noticias"); ?>">Início</a></li>
      <li class="breadcrumb-item"><a href="<?php echo site_url("links"); ?>">Todos os links</a></li>
      <li class="breadcrumb-item active" aria-current="page">Exclusão de link</li>
    </ol>
  </div>

  <div class="jumbotron">
    <p class="lead font-weight-bolder"><i class="fas fa-trash-alt text-danger"></i>&nbsp;Exclusão do registro:</p>

    <div class="text-center text-danger">
      <div class="row">
        <div class="col">
          <h4>Link: <?php echo $link->nome_exibicao; ?></h4>
        </div>
      </div>
      <hr class="my-4">
      <p class="lead">Confirma a exclusão do registro acima?</p>
      <a class="btn btn-secondary" href="<?= base_url('links'); ?>" role="button">Cancelar</a>
      <a class="btn btn-danger" href="<?= base_url('links/confirma_exclusao/' . encrypt($link->id)); ?>" role="button">Excluir</a>
    </div>
  </div>

</section>

<?php $this->endSection(); ?>