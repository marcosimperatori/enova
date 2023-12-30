<?php echo $this->extend('layout/principal'); ?>

<?php echo $this->section('conteudo'); ?>

<section>
  <div class="nav">
    <ol class="breadcrumb my-3">
      <li class="breadcrumb-item"><a href="<?php echo site_url("noticias"); ?>">Início</a></li>
      <li class="breadcrumb-item"><a href="<?php echo site_url("noticias"); ?>">Todas as notícias</a></li>
      <li class="breadcrumb-item active" aria-current="page">Editar notícia</li>
    </ol>
  </div>

  <div class="jumbotron">
    <div id="response" class="col-12"></div>
    <div class="col-12">
      <div class="card mt-3 shadow">
        <div class="card-header bg-light gap-0">
          <h4 class="text-primary">Consultando notícia</h4>
        </div>
        <div class="card-body">
          <?php echo form_open('/', ['id' => 'form_cad_noticia', 'class' => 'update'], ['id' => "$noticia->id"]) ?>

          <?php echo $this->include('noticias/_form'); ?>

          <div class="d-flex justify-content-center mt-4">
            <a href="<?php echo site_url("noticias"); ?>" id="btn-cancelar" class="btn btn-secondary btn-sm mb-2 mx-2">Cancelar</a>
            <input id="btn-salvar" type="submit" value="Gravar" class="btn btn-success btn-sm mb-2">
          </div>

          <?php form_close(); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php $this->endSection(); ?>

<?php echo $this->section('scripts'); ?>
<script src="<?php echo base_url("assets/js/noticias.js") ?>"></script>
<?php echo $this->endSection(); ?>