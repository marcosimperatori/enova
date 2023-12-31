<?php echo $this->extend('layout/principal'); ?>

<?php echo $this->section('conteudo'); ?>
<div class="container">
  <div class="jumbotron2 lead mt-3">
    <div class="card mb-3 shadow tb-noticias" style="max-width: 100%;">
      <div class="card-header">
        <h5>Publicações</h5>
      </div>
      <div class="card-body">
        <table id="publicacoes" class="table responsive table-hover">
          <thead class="">
            <tr>
              <th scope="col">Assunto</th>
              <th scope="col">Descrição</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>
</div>
<?php $this->endSection(); ?>


<?php echo $this->section('scripts'); ?>
<?php echo $this->endSection(); ?>