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
        $('#addProduct').hide();
        $('#editProduct').hide();
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
                <td><?php if($row[12] == 1){?><a href="#" class="delete" product="<?php echo $row[0];?>"><span class="icon-close"></span></a><?php }else{ ?><a href="#" class="add" product="<?php echo $row[0];?>"><span class="icon-plus"></span></a><?php }?>
                  <a href="#" class="edit" product="<?php echo $row[0];?>"><span class="icon-pencil"></span></a>
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
                location.reload();
              });
            });

            $('.add').click(function(){
              var product = $(this).attr('product');
              $.post("inventario_api.php?f=add", {id_product: product})
              .done(function(data){
                alert("Producto agregado correctamente");
                console.log(data);
                location.reload();
              });
            });

            $('.edit').click(function(){
              $('#addProduct').hide("slow");
              $('#editProduct').show("slow");
              var product = $(this).attr('product');
              $.post("inventario_api.php?f=get", {id_product: product})
              .done(function(data){
                data = JSON.parse(data);
                console.log(data);
                $('#e_codigo').val(data[1]);
                $('#e_nombre').val(data[2]);
                $('#e_marca').val(data[3]);
                $('#e_modelo').val(data[4]);
                $('#e_cantidad').val(data[5]);
                $('#e_medida').val(data[6]);
                $('#e_compra').val(data[7]);
                $('#e_venta').val(data[8]);
                $('#e_descripcion').val(data[10]);
                $('#e_tipo').val(data[11]);
                $('#e_activo').val(data[12]);
                $('#ed_fecha').val(data[13]);
                $('#ed_hora').val(data[14]);
                $('#idproduct').val(data[0]);
                $('#image').val(data[9]);
              });
            });
          </script>
    </div>
    <div id="DivBotonAddCon">
      <button class="botoncafe" id="BotonAddCon">
        Agregar Concepto
      </button>
    </div> 
    <script type="text/javascript">
      $('#BotonAddCon').click(function(){
              $('#addProduct').show("slow");
            });
    </script>
    <br>
    <br>
    <br>
    <div id="addProduct">
      <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="codigo">Código</label>
        <input type="text" name="codigo" id="codigo">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">
        <label for="marca">Marca</label>
        <input type="text" name="marca" id="marca">
        <label for="modelo">Modelo</label>
        <input type="text" name="modelo" id="modelo">
        <label for="cantidad">Cantidad</label>
        <input type="text" name="cantidad" id="cantidad">
        <label for="medida">Medida</label>
        <input type="text" name="medida" id="medida">
        <label for="compra">Costo compra</label>
        <input type="text" name="compra" id="compra">
        <label for="venta">Costo venta</label>
        <input type="text" name="venta" id="venta">
        <label for="file">Imagen</label>
        <input type="file" name="file" id="file">
        <label for="descripcion">Descripción</label>
        <textarea name="descripcion" id="descripcion"></textarea>
        <label for="tipo">Tipo</label>
        <input type="text" name="tipo" id="tipo">
        <label for="activo">Activo</label>
        <input type="text" name="activo" id="activo">
        <label for="fecha">Fecha</label>
        <input type="date" name="fecha" id="fecha">
        <label for="hora">Hora</label>
        <input type="time" name="hora" id="hora">
        <input type="hidden" name="action" value="add">
        <input type="submit" value="Agregar">
      </form>
      
    </div>
    <div id="editProduct">
      <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="codigo">Editar</label>
        <input type="text" name="e_codigo" id="e_codigo">
        <label for="nombre">Nombre</label>
        <input type="text" name="e_nombre" id="e_nombre">
        <label for="marca">Marca</label>
        <input type="text" name="e_marca" id="e_marca">
        <label for="modelo">Modelo</label>
        <input type="text" name="e_modelo" id="e_modelo">
        <label for="cantidad">Cantidad</label>
        <input type="text" name="e_cantidad" id="e_cantidad">
        <label for="medida">Medida</label>
        <input type="text" name="e_medida" id="e_medida">
        <label for="compra">Costo compra</label>
        <input type="text" name="e_compra" id="e_compra">
        <label for="venta">Costo venta</label>
        <input type="text" name="e_venta" id="e_venta">
        <label for="file">Imagen</label>
        <input type="file" name="e_file" id="e_file">
        <label for="descripcion">Descripción</label>
        <textarea name="e_descripcion" id="e_descripcion"></textarea>
        <label for="tipo">Tipo</label>
        <input type="text" name="e_tipo" id="e_tipo">
        <label for="activo">Activo</label>
        <input type="text" name="e_activo" id="e_activo">
        <label for="fecha">Fecha</label>
        <input type="date" name="e_fecha" id="e_fecha">
        <label for="hora">Hora</label>
        <input type="time" name="e_hora" id="e_hora">
        <input type="hidden" name="action" value="edit">
        <input type="hidden" name="idproduct" id="idproduct">
        <input type="hidden" name="image" id="image">
        <input type="hidden" name="ed_fecha" id="ed_fecha">
        <input type="hidden" name="ed_hora" id="ed_hora">
        <input type="submit" value="Guardar cambios">
      </form>
      
    </div>
    <br>
    <br>
  </div> <!-- fin conteiner-->
 

                  
