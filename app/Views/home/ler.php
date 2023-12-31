<?php echo $this->extend('layout/principal'); ?>

<?php echo $this->section('conteudo'); ?>

<div class="container">
  <section>

    <div class="jumbotron mt-3">
      <h4 class="text-muted text-center mb-5"><?php echo $publicacao->assunto; ?></h4>

      <div class="text-justify">
        <p><?php echo nl2br(htmlspecialchars($publicacao->descricao)); ?></p>
      </div>

      <div class="d-flex w-100 justify-content-start small">
        <p class="text-primary mr-5">Criado <?php echo $publicacao->criado_em->humanize(); ?></p>
        <p class="text-primary">Atualizado <?php echo $publicacao->atualizado_em->humanize(); ?></p>
      </div>

      <div class="text-right">
        <a href="<?php echo base_url("/") ?>" class="btn btn-sm btn-outline-success">Voltar</a>
      </div>
    </div>
  </section>
</div>

<?php $this->endSection(); ?>