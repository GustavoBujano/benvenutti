      <style type="text/css" media="screen">
      @import "css/demo_table_jui.css";
      @import "css/jquery-ui-1.7.2.custom.css";
      .dataTables_info { padding-top: 0; }
      .dataTables_paginate { padding-top: 0; }
      .css_right { float: right; }
      #tablas_wrapper .fg-toolbar { font-size: 0.8em }
      #theme_links span { float: left; padding: 2px 10px; }
      #tablas_wrapper { -webkit-box-shadow: 2px 2px 6px #666; box-shadow: 2px 2px 6px #666; border-radius: 5px; }
      #example tbody {
        border-left: 1px solid #AAA;
        border-right: 1px solid #AAA;
      }
      #example thead th:first-child { border-left: 1px solid #AAA; }
      #example thead th:last-child { border-right: 1px solid #AAA; }
      .ui-state-default{
        width: 5% !important;
      }
      #fw_container {
        margin-bottom: 0;
        margin-left: auto;
        margin-right: auto;
        margin-top: 0;
        padding-top: 2em;
        width: 100%;
      }
      #example{
        width: 100%;
        margin-bottom: 0px;
      }
      .ui-widget-header {
        background-color: rgba(47, 196, 41, .5);
      }
    </style>
    <script type="text/javascript" src="js/complete.min.js"></script>
    <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
      function fnFeaturesInit ()
      {
        $('ul.limit_length>li').each( function(i) {
          if ( i > 10 ) {
            this.style.display = 'none';
          }
        } );
        $('ul.limit_length').append( '<li class="css_link">Show more<\/li>' );
        $('ul.limit_length li.css_link').click( function () {
          $('ul.limit_length li').each( function(i) {
            if ( i > 5 ) {
              this.style.display = 'list-item';
            }
          } );
          $('ul.limit_length li.css_link').css( 'display', 'none' );
        } );
      }
      $(document).ready( function() {
        fnFeaturesInit();
        $('#example').dataTable( {
          "aaSorting": [[ 0, "desc" ]],
          "bJQueryUI": true,
          "sPaginationType": "full_numbers"
        } );
        SyntaxHighlighter.config.clipboardSwf = 'media/javascript/syntax/clipboard.swf';
        SyntaxHighlighter.all();
      } );
    </script>
    <link rel="stylesheet" type="text/css" href="css/fonts.css">
    <div class="container">
    <div id='fw_container'>
    <?php
      include ('query/conexion.php');
      $inventario = $db->query("SELECT * from Inventario"); 
      if (!$inventario) {
          die('Consulta no válida: ' . mysql_error());
      }else{ ?>
      
        <table cellpadding='0' cellspacing='0' border='0' class='table table-striped' id='example'>
        <thead>
          <tr>
            <th>Código</th>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Cantidad</th>
            <th>Medida</th>
            <th>Costo compra</th>
            <th>Imágen</th>
            <th>Descripción</th>
            <th>Tipo</th>
            <th>Activo</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Opciones</th>
          </tr>
        </thead>
          <tbody>
            <?php  
            while($row = mysqli_fetch_array($inventario, MYSQLI_NUM)){ ?>
            <tr>
                <td><?php echo $row[1]; ?></td>
                <td><?php echo $row[2]; ?></td>
                <td><?php echo $row[3]; ?></td>
                <td><?php echo $row[4]; ?></td>
                <td><?php echo $row[5]; ?></td>
                <td><?php echo $row[6]; ?></td>
                <td><?php echo $row[7]; ?></td>
                <td><?php echo $row[9]; ?></td>
                <td><?php echo $row[10]; ?></td>
                <td><?php echo $row[11]; ?></td>
                <td><?php echo $row[12]; ?></td>
                <td><?php echo $row[13]; ?></td>
                <td><?php echo $row[14]; ?></td>
                <td><a href="#" class="delete" product="<?php echo $row[0];?>"><span class="icon-close"></span></a><a href="#" class="add" product="<?php echo $row[0];?>"><span class="icon-plus"></span></a>
                </td>
            </tr>
            <?php  } ?>
               </tbody>
            </table>
          <?php  }
          ?>
          <script type="text/javascript">
            $('.delete').click(function(){
              var product = $(this).attr('product');
              $.post("inventario_api.php?f=delete", {id_product: product})
              .done(function(data){
                alert("Producto eliminado correctamente");
                console.log(data);
              });
            });
          </script>
    </div>
    <div id="DivBotonAddCon">
      <button class="botoncafe" id="BotonAddCon">
        Agregar Concepto
      </button>
    </div> 
  </div> <!-- fin conteiner-->
 

                  
