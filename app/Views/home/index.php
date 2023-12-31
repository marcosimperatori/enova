<?php echo $this->extend('layout/principal'); ?>

<?php echo $this->section('conteudo'); ?>

<div class="container-fluid">
  <div id="carousel">
    <div class="">
      <div class="">
        <img src="<?php echo base_url("assets/img/header.jpeg") ?>" class="d-block w-100" style="object-fit: cover; height: 600px;" alt=" ...">
      </div>
    </div>
  </div>
</div>

<div class="container mt-1">
  <div class="espaco-simples">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card shadow" style="background-color: #0077b6;">
          <div class="card-body">
            <div class="valores">
              <i class="fas fa-briefcase"></i>
              <div class="mt-3">
                <h5 class="strong text-light">Visão empresarial</h5>
              </div>
              <p class="text-center mt-2">
                Ser reconhecido pela disponibilidade de soluções contábeis, garantindo seu
                fortalecimento e solidez, firmando uma aliança séria e duradoura
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card shadow" style="background-color: #0077b6;">
          <div class="card-body">
            <div class="valores">
              <i class="fas fa-bullseye"></i>
              <div class="mt-3">
                <h5 id="missao" class="strong text-light">Nossa missão</h5>
              </div>
              <p class="text-center mt-2">
                Fornecer serviços de qualidade aos nossos clientes, pois sabemos que o empresário
                necessita ter tranquilidade para poder tomar decisões.
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4  col-md-6 col-sm-12">
        <div class="card shadow" style="background-color: #0077b6;">
          <div class="card-body">
            <div class="valores">
              <i class="fas fa-eye"></i>
              <div class="mt-3">
                <h5 id="missao" class="strong text-light">Valores</h5>
              </div>
              <p class="text-center mt-2">
                Ética profissional, comprometimento e qualidade. Trabalho em equipe. Dinanismo. Transparência, integridade e responsabilidade.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="espaco-simples"></div>

  <hr class="featurette-divider" style="color: #03045e;">

  <div class="row featurette mb-5">
    <div class="col-md-7">
      <h2 class="featurette-heading fw-normal lh-1 text-muted">Venha conhecer nossas instalações.
        <span class="text-muted">Será uma grande satisfação tê-lo como nosso cliente!</span>
      </h2>
    </div>
    <div class="col-md-5">


    </div>
  </div>

  <div class="espaco-simples container">
    <h3 class="text-center text-muted" style="margin-top: 15px; margin-bottom: 35px"> Nossos departamentos</h3>

    <div class="row info-clientes clientes">

      <div class="card mt-3 shadow" style="width: 15rem;background-color: #0077b6;">
        <div class="efeito text-center">
          <h5 class="titulo">Administrativo</h5>
        </div>
        <div class="card-body">
          <div class="valores">
            <p class="text-center">
              Estamos preparados para lhe atender desde a constituição de sua empresa, passando por
              alterações contratuais e baixa.
            </p>
          </div>
        </div>
      </div>


      <div class="card mt-3 shadow" style="width: 15rem;background-color: #0077b6;">
        <div class="efeito text-center">
          <h5 class="titulo">Fiscal</h5>
        </div>
        <div class="card-body">
          <div class="valores">
            <p class="text-center">
              Assessoramos e orientamos nas rotinas de emissão de notas fiscais, conforme as normas vigentes.
            </p>
          </div>
        </div>
      </div>

      <div class="card mt-3 shadow" style="width: 15rem;background-color: #0077b6;">
        <div class="efeito text-center">
          <h5 class="titulo">Contábil</h5>
        </div>
        <div class="card-body">
          <div class="valores">
            <p class="text-center">
              Tenha sua contabilidade ao seu alcance, elaboramos todos os documentos conforme regras do CRC.
            </p>
          </div>
        </div>
      </div>

      <div class="card mt-3 shadow" style="width: 15rem;background-color: #0077b6;">
        <div class="efeito text-center">
          <h5 class="titulo">Pessoal</h5>
        </div>
        <div class="card-body">
          <div class="valores">
            <p class="text-center">
              Rotinas trabalhistas e previdenciárias, GFIP, eSocial, DCTFWEB. Estamos prontos para lhe
              atender.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-center">

      <a href="departamentos" class="btn btn-outline-primary btn-sm mt-4">Saiba mais sobre nossos departamentos...</a>

    </div>
  </div>

  <div class="espaco-simples container">

    <div class="strong text-center mt-3">
      <h3 class="text-muted">Últimas publicações</h3>
    </div>




    <div class="row">
      <?php foreach ($ultimas_noticias as $noticia) : ?>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="card mx-1 my-3 shadow" style="height: 300px;">
            <span class="badge badge-light text-light" style="background-color: #0077b6;"><?= $noticia->atualizado_em->humanize(); ?></span>
            <div class="card-body">
              <h5 class="card-title"><?= $noticia->assunto; ?></h5>
              <p class="card-text"><?= $noticia->resumo; ?></p>
              <div class="text-right">
                <a href="<?= site_url('publicacao/' . $noticia->codigo) ?>" class="btn btn-outline-primary btn-sm">Leia mais</a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>


  <div class="espaco-simples"></div>

  <div class="container mb-3">
    <hr class="featurette-divider" style="color: #03045e;">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1"><span class="text-muted">Quer ver sua empresa crescer?</span></h2>
        <p class="text-muted">Venha ser nosso cliente, temos as melhores ferramentas e conhecimento técnico para lhe ajudar a
          alcançar suas metas.</p>
      </div>
      <div class="col-md-5 order-md-1">
      </div>
    </div>
  </div>

  <div class="espaco-simples"></div>
</div>

<?php $this->endSection(); ?>


<?php echo $this->section('scripts'); ?>
<?php echo $this->endSection(); ?>