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
        /* Adjust the value as needed */
      }
    </style>

    <div class="tab-content">
      <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <div class="row mt-4">
          <div class="col-lg-4 col-md-4">
            <div class="link">
              <a href="https://sd.mte.gov.br/sdweb/empregadorweb/index.jsf" target="_blank"><i class="fas fa-thumbtack"></i>Empregador Web - Seguro Desemprego</a>
              <a href="https://www.jucemg.mg.gov.br/" target="_blank"><i class="fas fa-thumbtack"></i>JUCEMG</a>
              <a href="https://solucoes.receita.fazenda.gov.br/Servicos/CertidaoInternet/PJ/emitir/" target="_blank"><i class="fas fa-thumbtack"></i>Certidão Negativa Débito Receita Federal(Pes. Jurídica)</a>
              <a href="https://consulta-crf.caixa.gov.br/consultacrf/pages/consultaEmpregador.jsf" target="_blank"><i class="fas fa-thumbtack"></i>Certidão Negativa Débito Caixa Econômica</a>
              <a href="https://www.tst.jus.br/certidao1" target="_blank"><i class="fas fa-thumbtack"></i>Certidão Negativa Débito Ministério do Trabalho</a>
              <a href="https://www2.fazenda.mg.gov.br/sol/ctrl/SOL/CDT/SERVICO_829?ACAO=INICIAR" target="_blank"><i class="fas fa-thumbtack"></i>Certidão Negativa Débito Receita Estadual </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-4">
            <div class="link">
              <a href="https://www.tse.jus.br/eleitor/servicos/titulo-de-eleitor/titulo-e-local-de-votacao/consulta-por-nome" target="_blank"><i class="fas fa-thumbtack"></i>Certidão de Quitação Eleitoral</a>
              <a href="https://www.gov.br/pt-br/servicos/emitir-certidao-de-antecedentes-criminais" target="_blank"><i class="fas fa-thumbtack"></i>Certidão de Antecedentes Criminais(Pol. Federal)</a>
              <a href="https://www.tjdft.jus.br/servicos/certidoes/certidao-nada-consta" target="_blank"><i class="fas fa-thumbtack"></i>Certidão de Falência e Recuperação Judicial</a>
              <a href="https://solucoes.receita.fazenda.gov.br/Servicos/certidaointernet/ITR/Emitir" target="_blank"><i class="fas fa-thumbtack"></i>Certidão Negativa de Débitos de Imóvel Rural</a>
              <a href="http://www8.receita.fazenda.gov.br/simplesnacional/aplicacoes.aspx?id=21" target="_blank"><i class="fas fa-thumbtack"></i>Consulta Optantes Simples Nacional</a>
              <a href="https://www.cjf.jus.br/cjf/certidao-negativa/" target="_blank"><i class="fas fa-thumbtack"></i>Justiça Federal</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-4">
            <div class="link">
              <a href="https://sistemas.trf1.jus.br/certidao/#/solicitacao" target="_blank"><i class="fas fa-thumbtack"></i>Tribunal Regional Federal da 1ª Região</a>
              <a href="https://balcaojus.trf2.jus.br/balcaojus/#/login" target="_blank"><i class="fas fa-thumbtack"></i>Tribunal Regional Federal da 2ª Região</a>
              <a href="https://web.trf3.jus.br/certidao-regional/" target="_blank"><i class="fas fa-thumbtack"></i>Tribunal Regional Federal da 3ª Região</a>
              <a href="https://www2.trf4.jus.br/trf4/processos/certidao/index.php" target="_blank"><i class="fas fa-thumbtack"></i>Tribunal Regional Federal da 4ª Região</a>
              <a href="https://www4.trf5.jus.br/certidoes/" target="_blank"><i class="fas fa-thumbtack"></i>Tribunal Regional Federal da 5ª Região</a>
              <a href="https://solucoes.receita.fazenda.gov.br/Servicos/certidaointernet/PF/Emitir"><i class="fas fa-thumbtack"></i>Certidão Negativa Débito Receita Federal(Pes. Física)</a>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <div class="row mt-4">
          <div class="col-lg-4 col-md-4">
            <div class="link">
              <a href="https://www.gov.br/receitafederal/pt-br" target="_blank"><i class="fas fa-thumbtack"></i>Receita Federal</a>

              <a href="https://www.gov.br/trabalho-e-previdencia/pt-br" target="_blank"><i class="fas fa-thumbtack"></i>Previdência Social</a>

              <a href="http://www8.receita.fazenda.gov.br/SimplesNacional/" target="_blank"><i class="fas fa-thumbtack"></i>Simples Nacional</a>

              <a href="http://sped.rfb.gov.br/" target="_blank"><i class="fas fa-thumbtack"></i>SPED</a>

              <a href="https://www.caixa.gov.br/Paginas/home-caixa.aspx" target="_blank"><i class="fas fa-thumbtack"></i>Caixa Econômica Federal</a>

              <a href="https://www.gov.br/pt-br" target="_blank"><i class="fas fa-thumbtack"></i>Portal do Brasil</a>

              <a href="https://www.gov.br/receitafederal/pt-br/assuntos/construcao-civil/cno" target="_blank"><i class="fas fa-thumbtack"></i>CNO - Cadastro Nacional de Obras</a>

              <a href="http://www.controlenanet.com.br/rpa/rpa.php" target="_blank"><i class="fas fa-thumbtack"></i>Emissão de RPA</a>

              <a href="https://cav.receita.fazenda.gov.br/autenticacao/login" target="_blank"><i class="fas fa-thumbtack"></i>ECAC</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-4">
            <div class="link">
              <a href="https://www.gov.br/planalto/pt-br" target="_blank"><i class="fas fa-thumbtack"></i>Planalto</a>

              <a href="https://www.gov.br/empresas-e-negocios/pt-br/empreendedor" target="_blank"><i class="fas fa-thumbtack"></i>Portal do Empreendedor</a>

              <a href="https://www.gov.br/pgfn/pt-br" target="_blank"><i class="fas fa-thumbtack"></i>Procuradoria da União e Fazenda</a>

              <a href="https://www.stj.jus.br/sites/portalp/Inicio" target="_blank"><i class="fas fa-thumbtack"></i>Superior Tribunal de Justiça</a>

              <a href="https://www.idinheiro.com.br/calculadoras/calculadora-custo-de-funcionario-para-empresa/" target="_blank"><i class="fas fa-thumbtack"></i>Calculadora de custo de funcionários</a>

              <a href="https://www.detran.mg.gov.br/" target="_blank"><i class="fas fa-thumbtack"></i>Detran MG</a>

              <a href="https://conectividadesocialv2.caixa.gov.br/sicns/" target="_blank"><i class="fas fa-thumbtack"></i>Conectividade Social</a>

              <a href="https://solucoes.receita.fazenda.gov.br/Servicos/cnpjreva/Cnpjreva_Solicitacao.asp" target="_blank"><i class="fas fa-thumbtack"></i>Consulta CNPJ</a>

              <a href="https://www.gov.br/esocial/pt-br" target="_blank"><i class="fas fa-thumbtack"></i>eSocial Portal</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-4">
            <div class="link">
              <a href="http://www.mtecbo.gov.br/cbosite/pages/home.jsf" target="_blank"><i class="fas fa-thumbtack"></i>CBO - Classificação Brasileira de Ocupações</a>

              <a href="https://www.correios.com.br/" target="_blank"><i class="fas fa-thumbtack"></i>Correios</a>

              <a href="http://www.planalto.gov.br/ccivil_03/Leis/_Lei-principal.htm" target="_blank"><i class="fas fa-thumbtack"></i>Leis</a>

              <a href="http://www.planalto.gov.br/ccivil_03/decreto/_dec_principal.htm" target="_blank"><i class="fas fa-thumbtack"></i>Decretos</a>

              <a href="http://www.planalto.gov.br/ccivil_03/decreto-lei/principal_ano.htm" target="_blank"><i class="fas fa-thumbtack"></i>Decretos - Leis</a>

              <a href="https://concla.ibge.gov.br/busca-online-cnae.html" target="_blank"><i class="fas fa-thumbtack"></i>CNAE Online</a>

              <a href="https://sicalc.receita.economia.gov.br/sicalc/principal" target="_blank"><i class="fas fa-thumbtack"></i>SICALC WEB</a>

              <a href="https://servicos.receita.fazenda.gov.br/Servicos/CPF/ConsultaSituacao/ConsultaPublica.asp" target="_blank"><i class="fas fa-thumbtack"></i>Consulta CPF</a>

              <a href="https://meu.inss.gov.br/#/login" target="_blank"><i class="fas fa-thumbtack"></i>Meu INSS</a>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="cnd" role="tabpanel" aria-labelledby="cnd-tab">
        <div class="row mt-4">
          <div class="col-lg-4 col-md-4">
            <div class="link">
              <a href="https://www.gov.br/receitafederal/pt-br" target="_blank"><i class="fas fa-thumbtack"></i>Receita Federal</a>

              <a href="https://www.gov.br/trabalho-e-previdencia/pt-br" target="_blank"><i class="fas fa-thumbtack"></i>Previdência Social</a>

              <a href="http://www8.receita.fazenda.gov.br/SimplesNacional/" target="_blank"><i class="fas fa-thumbtack"></i>Simples Nacional</a>

              <a href="http://sped.rfb.gov.br/" target="_blank"><i class="fas fa-thumbtack"></i>SPED</a>

              <a href="https://www.caixa.gov.br/Paginas/home-caixa.aspx" target="_blank"><i class="fas fa-thumbtack"></i>Caixa Econômica Federal</a>

              <a href="https://www.gov.br/pt-br" target="_blank"><i class="fas fa-thumbtack"></i>Portal do Brasil</a>

              <a href="https://www.gov.br/receitafederal/pt-br/assuntos/construcao-civil/cno" target="_blank"><i class="fas fa-thumbtack"></i>CNO - Cadastro Nacional de Obras</a>

              <a href="http://www.controlenanet.com.br/rpa/rpa.php" target="_blank"><i class="fas fa-thumbtack"></i>Emissão de RPA</a>

              <a href="https://cav.receita.fazenda.gov.br/autenticacao/login" target="_blank"><i class="fas fa-thumbtack"></i>ECAC</a>
            </div>
          </div>

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