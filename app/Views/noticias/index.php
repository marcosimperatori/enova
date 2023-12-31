<?php echo $this->extend('layout/principal'); ?>

<?php echo $this->section('conteudo'); ?>

<div class="container">
  <section>
    <div class="my-3">
      <?php echo $this->include('layout/mensagem'); ?>
    </div>

    <div class="jumbotron2 mt-3">
      <div class="card mb-3 shadow tb-noticias" style="max-width: 100%;">
        <div class="card-header">
          <h4>Publicações cadastradas</h4>
        </div>
        <div class="card-body">
          <a href="<?php echo base_url('noticias/criar'); ?>" class="btn btn-primary mb-4" title="Permite incluir uma nova notícia no sistema">Nova publicação</a>
          <table id="lista-noticias" class="table responsive table-hover">
            <thead class="">
              <tr>
                <th scope="col">Assunto</th>
                <th scope="col">Atualizado em</th>
                <th scope="col" class="text-center">Ações</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </section>
</div>

<?php $this->endSection(); ?>


<?php echo $this->section('scripts'); ?>
<script src="<?php echo base_url("assets/js/noticias.js") ?>"></script>
<?php echo $this->endSection(); ?>