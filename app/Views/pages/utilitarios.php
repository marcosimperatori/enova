<?php echo $this->extend('layout/principal'); ?>

<?php echo $this->section('conteudo'); ?>
<div class="">
  <div class="espaco-simples"></div>

  <div class="container">

    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-link text-warning"></i> &nbsp;Link´s úteis</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><i class="fas fa-link text-warning"></i> &nbsp;Links públicos e do Governo</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="cnd-tab" data-toggle="tab" data-target="#cnd" type="button" role="tab" aria-controls="cnd" aria-selected="false"><i class="fas fa-link text-warning"></i> &nbsp;CND´s</button>
      </li>
    </ul>

    <style>
      .custom-list-spacing li {
        margin-bottom: 20px;
      }
    </style>

    <div class="tab-content">
      <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <div class="row mt-4">
          <div class="link">
            <?php foreach ($links as $link) : ?>
              <?php if ($link->categoria == "Link´s úteis") : ?>
                <a href="<?php echo $link->link; ?>" target="_blank"><i class="fas fa-thumbtack"></i><?php echo $link->nome_exibicao; ?></a>
              <?php endif; ?>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

      <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <div class="row mt-4">
          <div class="link">
            <?php foreach ($links as $link) : ?>
              <?php if ($link->categoria == "Link´s do governo") : ?>
                <a href="<?php echo $link->link; ?>" target="_blank"><i class="fas fa-thumbtack"></i><?php echo $link->nome_exibicao; ?></a>
              <?php endif; ?>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

      <div class="tab-pane" id="cnd" role="tabpanel" aria-labelledby="cnd-tab">
        <div class="row mt-4">
          <div class="link">
            <?php foreach ($links as $link) : ?>
              <?php if ($link->categoria == "CND") : ?>
                <a href="<?php echo $link->link; ?>" target="_blank"><i class="fas fa-thumbtack"></i><?php echo $link->nome_exibicao; ?></a>
              <?php endif; ?>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

      <script>
        $(function() {
          $('#myTab li:last-child button').tab('show')
        })
      </script>
    </div>

    <div class="espaco-simples"></div>
  </div>
  <?php $this->endSection(); ?>

  <?php echo $this->section('scripts'); ?>
  <?php echo $this->endSection(); ?>