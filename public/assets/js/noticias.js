$("#lista-noticias").DataTable({
  oLanguage: DATATABLE_PTBR,
  ajax: {
    url: "noticias_get_all",
    beforeSend: function () {
      $("#tb-noticias").LoadingOverlay("show", {
        background: "rgba(165, 190, 100, 0.5)",
      });
    },
    complete: function () {
      $("#tb-noticias").LoadingOverlay("hide");
    },
  },
  columns: [
    {
      data: "assunto",
    },
    {
      data: "alterado",
    },
    {
      data: "acoes",
    },
  ],
  deferRender: true,
  processing: false,
  language: {
    processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>',
  },
  responsive: true,
  autoWidth: false,
  pagingType: $(window).width() < 768 ? "simple" : "simple_numbers",
  pageLength: 10,
  columnDefs: [
    {
      width: "120px",
      className: "text-center",
      targets: [1],
    },
    {
      width: "40px",
      className: "text-center",
      targets: [2],
    },
  ],
  order: [],
});

$("#form_cad_noticia").on("submit", function (e) {
  e.preventDefault();

  const baseUrl = window.location.href;

  if ($(this).hasClass("insert")) {
    var url = baseUrl.replace("noticias/criar", "noticias/cadastrar");
  } else if ($(this).hasClass("update")) {
    var url = "/noticias/atualizar"; //baseUrl.replace("escritorios/editar", "escritorios/atualizar");
  }

  $.ajax({
    type: "POST",
    url: url,
    data: new FormData(this),
    dataType: "json",
    contentType: false,
    cache: false,
    processData: false,
    beforeSend: function () {
      $("#response").html("");
      $("#form_cad_noticia").LoadingOverlay("show", {
        background: "rgba(165, 190, 100, 0.5)",
      });
    },
    success: function (response) {
      $("[name=csrf_test_name]").val(response.token);

      if (!response.erro) {
        if (response.info) {
          $("#response").html(
            '<div class="alert alert-warning alert-dismissible fade show" role="alert">' +
              response.info +
              '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
              '<span aria-hidden="true">&times;</span>' +
              "</button>" +
              "</div>"
          );
        } else {
          window.location.href = response.redirect_url;
        }
      } else {
        if (response.erros_model) {
          exibirErros(response.erros_model);
        }
      }
    },
    error: function () {
      alert("falha ao executar a operação");
    },
    complete: function () {
      $("#form_cad_noticia").LoadingOverlay("hide");
    },
  });
});

/*
$("#buscarButton").on("click", function () {
  var cnpj = $("#cnpjInput").val();
  if (cnpj) {
    // Faz a chamada à API usando o $.get()
    $.get("https://brasilapi.com.br/api/cnpj/v1/" + cnpj, function (data) {
      // Preenche os campos na tela com os dados da API
      $("#nomeEmpresa").val(data.nome);
      $("#enderecoEmpresa").val(data.endereco);
    });
  }
});*/
/*
$("#uf").change(function () {
  var selectedUF = $("#uf").val();

  if (selectedUF !== "") {
    // Mostra o texto de "Carregando" no select de cidades
    $("#cidade")
      .html("<option value=''>Carregando...</option>")
      .attr("disabled", true);

    $.get("municipio", { uf: selectedUF }, function (data) {
      $("#cidade").empty().attr("disabled", false); // Habilita o select de cidades

      if (data.length > 0) {
        $("#cidade").append("<option value=''>Selecione</option>");
        $.each(data, function (key, value) {
          $("#cidade").append(
            "<option value='" + value.id + "'>" + value.nome + "</option>"
          );
        });
      } else {
        $("#cidade").append(
          "<option value=''>Nenhuma cidade encontrada</option>"
        );
      }
    });
  } else {
    // Se nenhuma UF foi selecionada, limpa a lista de cidades e desativa o select
    $("#cidade").empty().attr("disabled", true);
  }
});

function buscaCNPJ() {
  $("#cnpjInput").on("blur", function (event) {
    console.log("estou aqui");
    var cnpj = $(this).val();
    if (cnpj) {
      // Faz a chamada à API usando o $.get()
      $.get("https://brasilapi.com.br/api/cnpj/v1/" + cnpj, function (data) {
        console.log(data); // Exibe os dados retornados pela API no console
        // Você pode manipular os dados aqui conforme necessário
      });
    }
  });
}*/
