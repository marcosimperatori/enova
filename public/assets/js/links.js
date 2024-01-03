$("#links").DataTable({
  oLanguage: DATATABLE_PTBR,
  ajax: {
    url: "links_get_all",
    beforeSend: function () {
      $("#tb-links").LoadingOverlay("show", {
        background: "rgba(165, 190, 100, 0.5)",
      });
    },
    complete: function () {
      $("#tb-links").LoadingOverlay("hide");
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

$("#form_cad_link").on("submit", function (e) {
  e.preventDefault();

  const baseUrl = window.location.href;

  if ($(this).hasClass("insert")) {
    var url = baseUrl.replace("links/criar", "links/cadastrar");
  } else if ($(this).hasClass("update")) {
    var url = "/links/atualizar";
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
      $("#form_cad_link").LoadingOverlay("hide");
    },
  });
});
