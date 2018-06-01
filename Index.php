<?php include_once("php/config.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inicio | FT</title>
    <link rel="stylesheet" type="text/css" href="<?php echo host; ?>css/fonts.css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="<?php echo host; ?>css/styles.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="<?php echo host; ?>css/buttons.dataTables.css">
    <style media="screen">
    .dt-button .buttons-excel .buttons-html5 {
      color: #fff;
      background-color: #00bcd4;
      border-color: #00bcd4;
      -webkit-box-shadow: none;
      box-shadow: none
    }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-color-on-scroll navbar-transparent    fixed-top  navbar-expand-lg " color-on-scroll="100" id="sectionsNav">
       <div class="container">
           <div class="navbar-translate">
               <a class="navbar-brand" href="../index.html">ProFuturo </a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
                   <span class="navbar-toggler-icon"></span>
                   <span class="navbar-toggler-icon"></span>
               </button>
           </div>
           <div class="collapse navbar-collapse">
               <ul class="navbar-nav ml-auto">

                   <li class="button-container nav-item iframe-extern">
                       <a id="buttonclick" class="btn btn-round btn-block">
                           <i class="material-icons">exit_to_app</i> Salir
                       </a>
                   </li>
               </ul>
           </div>
       </div>
   </nav>

   <div class="main main-raised">
        <div class="section section-basic">
            <div class="container">

              <table id="data-table" class="table table-bordered hover">
                                                      <thead class="thead-default">
                                                        <th>N°</th>
                                                        <th>Nombres</th>
                                                        <th>Apellidos</th>
                                                        <th>Genero</th>
                                                        <th>Correo</th>
                                                        <th>Codigo Dane</th>
                                                        <th>Departamento</th>
                                                        <th>Ciudad</th>
                                                        <th>Institucion</th>
                                                        <th>Ambito</th>
                                                        <th>Caracter</th>
                                                        <th>Perfil</th>
                                                        <th>Area</th>
                                                        <th>Nivel</th>
                                                        <th>Participacion</th>
                                                        <th>Ruta Tic</th>
                                                        <th>Ruta de Inovacion</th>
                                                        <th>Fecha</th>
                                                      </thead>
                                                      <tfoot>

                                                      </tfoot>
                                                      <tbody>

                                                      </tbody>
                                                  </table>
            </div>
        </div>
    </div>



    <script src="http://localhost/Administrador/js/jquery.min.js"></script>
    <script src="http://localhost/Administrador/js/js.js" type="text/javascript"></script>

    <script src="<?php echo host2; ?>vendors/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
     <script src="<?php echo host2; ?>vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
     <script src="<?php echo host2; ?>vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
     <script src="<?php echo host2; ?>vendors/bower_components/jszip/dist/jszip.min.js"></script>
     <script src="<?php echo host2; ?>vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
  </body>
</html>
