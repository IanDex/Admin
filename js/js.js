$(document).ready(function() {
  var urlx = window.location.href;
  var urly = "http://localhost/Administrador/Login/";
  var urlz = "http://localhost/Administrador/";
  if (urlx == urly || urlx == urlz) {
    $("#loginModal").modal('show');
  }


  datostabla();
      function datostabla(){
        var dat = new Date();
        var fecha = "InscritosProfuturo_" + dat.getDate() + "-" + (dat.getMonth() +1) + "-" + dat.getFullYear();
        var hora = dat.getHours() + '-' + dat.getMinutes() + '-' + dat.getSeconds();

      if ($("#data-table")[0]) {
          $("#data-table").DataTable({
              responsive: !0,
              autoWidth: true,
              aaSorting: [[17, "desc" ]],
              processing : true,
              "scrollX": true,
              "scrollY": 400,
              sAjaxSource: "http://localhost/Administrador/php/pro.php",
              sServerMethod: "POST",
              /*stateSave: true,*/
              "columnDefs": [
                  {
                      "targets": [ 5 ],
                      "visible": false,
                      "searchable": false
                  },
                  {
                      "targets": [ 9 ],
                      "visible": false
                  },
                  {
                      "targets": [ 10 ],
                      "visible": false
                  },
                  {
                      "targets": [ 11 ],
                      "visible": false
                  },
                  {
                      "targets": [ 12 ],
                      "visible": false
                  },
                  {
                      "targets": [ 13 ],
                      "visible": false
                  },
                  {
                      "targets": [ 14 ],
                      "visible": false
                  },
                  {
                      "targets": [ 15 ],
                      "visible": false
                  },
                  {
                      "targets": [ 16 ],
                      "visible": false
                  }
              ],
              columns:[
                {"data": "id_InscripcionPF"},
                {"data": "Nombre"},
                {"data": "Apellido"},
                {"data": "Genero"},
                {"data": "email"},
                {"data": "Codigo_dane"},
                {"data": "nombre"},
                {"data": "Ciudad"},
                {"data": "Institucion"},
                {"data": "Ambito"},
                {"data": "ICaracter"},
                {"data": "Perfil"},
                {"data": "Area"},
                {"data": "Nivel_En"},
                {"data": "HAs_Participacion"},
                {"data": "Ruta_Tic"},
                {"data": "Ruta_Inovacion"},
                {"data": "Fecha"},
              ],
              lengthMenu: [
                  [15, 30, 45, -1],
                  ["15 Filas", "30 Filas", "45 Filas", "Todos"]
              ],
              language: {
                  "searchPlaceholder": "Buscar registros...",
                  "sProcessing":     "Procesando...",
                  "sLengthMenu":     "Mostrar _MENU_ ",
                  "sZeroRecords":    "No se encontraron resultados",
                  "sEmptyTable":     "Ningún dato disponible en esta tabla",
                  "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                  "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                  "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                  "sInfoPostFix":    "",
                  "sUrl":            "",
                  "sInfoThousands":  ",",
                  "sLoadingRecords": "Cargando...",
                  "oPaginate": {
                      "sFirst":    "Primero",
                      "sLast":     "Último",
                      "sNext":     "Siguiente",
                      "sPrevious": "Anterior"
                  },
                  "oAria": {
                      "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                      "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                  }
              },
              sDom: '<"dataTables__top"lfB>rt<"dataTables__bottom"ip><"clear">',
              buttons: [{
                extend: "excelHtml5",
                title: fecha + "_" + hora
            }],

          }), $(".dataTables_filter input[type=search]").focus(function() {
              $(this).closest(".dataTables_filter").addClass("dataTables_filter--toggled")
          }), $(".dataTables_filter input[type=search]").blur(function() {
              $(this).closest(".dataTables_filter").removeClass("dataTables_filter--toggled")
          }), $("body").on("click", "[data-table-action]", function(a) {
              a.preventDefault();
              var b = $(this).data("table-action");
              if ("excel" === b && $(this).closest(".dataTables_wrapper").find(".buttons-excel").trigger("click"), "csv" === b && $(this).closest(".dataTables_wrapper").find(".buttons-csv").trigger("click"), "print" === b && $(this).closest(".dataTables_wrapper").find(".buttons-print").trigger("click"), "fullscreen" === b) {
                  var c = $(this).closest(".card");
                  c.hasClass("card--fullscreen") ? (c.removeClass("card--fullscreen"), $("body").removeClass("data-table-toggled")) : (c.addClass("card--fullscreen"), $("body").addClass("data-table-toggled"))
              }

          })
      }
      }

                    if (true) {
                      $("#buttonclick").click(function() {
                        $(".dataTables_filter input[type=search]").focus(function() {
                            $(this).closest(".dataTables_filter").addClass("dataTables_filter--toggled")
                        }), $(".dataTables_filter input[type=search]").blur(function() {
                            $(this).closest(".dataTables_filter").removeClass("dataTables_filter--toggled")
                        }), $("body").on("click", "[data-table-action]", function(a) {
                            a.preventDefault();
                            var b = ("excel");
                            if ("excel" === b && $(this).closest(".dataTables_wrapper").find(".buttons-excel").trigger("click"), "csv" === b && $(this).closest(".dataTables_wrapper").find(".buttons-csv").trigger("click"), "print" === b && $(this).closest(".dataTables_wrapper").find(".buttons-print").trigger("click"), "fullscreen" === b) {
                                var c = $(this).closest(".card");
                                c.hasClass("card--fullscreen") ? (c.removeClass("card--fullscreen"), $("body").removeClass("data-table-toggled")) : (c.addClass("card--fullscreen"), $("body").addClass("data-table-toggled"))
                            }

                        });
                      });

                    }

});
