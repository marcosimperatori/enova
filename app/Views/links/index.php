<?php echo $this->extend('layout/principal'); ?>

<?php echo $this->section('conteudo'); ?>

<div class="container">
  <section>
    <div class="my-3">
      <?php echo $this->include('layout/mensagem'); ?>
    </div>

    <div class="jumbotron2 mt-3">
      <div class="card mb-3 shadow tb-links" style="max-width: 100%;">
        <div class="card-header">
          <h4>Links registrados</h4>
        </div>
        <div class="card-body">
          <a href="<?php echo base_url('links/criar'); ?>" class="btn btn-primary mb-4" title="Permite incluir um novo link no sistema">Novo link</a>
          <table id="links" class="table responsive table-hover">
            <thead class="">
              <tr>
                <th scope="col">Categoria</th>
                <th scope="col">Nome para exibição</th>
                <th scope="col">Link</th>
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
<script src="<?php echo base_url("assets/js/links.js") ?>"></script>
<?php echo $this->endSection(); ?>