/*  App.js  */

$(document).ready(function () {
  // transform table-results into datatable
  $('#table-results').DataTable({
    paging: true,
    ordering: true,
    pageLength: 10,
    pagingType: "full_numbers",

    //datatable in portuguese language
    language: {
      decimal: "",
      emptyTable: "Nenhum registro encontrado",
      info: "Mostrando _START_ ate _END_ de _TOTAL_ registros",
      infoEmpty: "Mostrando 0 até 0 de 0 registros",
      infoFiltered: "(Filtrados de _MAX_ registros)",
      infoPostFix: "",
      thousands: ".",
      lengthMenu: "_MENU_ resultados por pagina",
      search: "Pesquisar:",
      zeroRecords: "Nenhum registro encontrado",
      paginate: {
        first: "Primeiro",
        last: "Ultimo",
        next: "Proximo",
        previous: "Anterior",
      },
    },
  });
});
