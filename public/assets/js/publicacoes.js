$("#lista-publicacoes").DataTable({
  oLanguage: DATATABLE_PTBR,
  ajax: {
    url: "publicacoes_get_all",
    beforeSend: function () {
      $("#tb-publicacoes").LoadingOverlay("show", {
        background: "rgba(165, 190, 100, 0.5)",
      });
    },
    complete: function () {
      $("#tb-publicacoes").LoadingOverlay("hide");
    },
  },
  columns: [
    {
      data: "assunto",
    },
    {
      data: "descricao",
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
      width: "350px",
      className: "text-left",
      targets: [0],
    },
    {
      className: "text-left",
      targets: [1],
    },
  ],
  order: [],
});
