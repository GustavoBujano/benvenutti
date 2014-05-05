<!DOCTYPE html>
<html>

<head>
  <title>Index2</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
        <link href="css/sticky-footer.css" type="text/css" rel="stylesheet"/>

        <link rel="stylesheet" type="text/css" href="css/default.css" />
        <link rel="stylesheet" type="text/css" href="css/component.css" />
        <link href="css/stylemeed.css" type="text/css" rel="stylesheet"/>
        <script src="js/modernizr.custom.js"></script>
        <script src="js/modernizr.custom.mod.js"></script>

  <script>
    window.open    = function(){};
    window.print   = function(){};
    if (false) {
      window.ontouchstart = function(){};
    }
  </script>

</head>

<body class="cbp-spmenu-push">

<?php 
  include("header.php");
    ?>

  <div class="tabs-wrapper">

    <input type="radio" name="tab" id="tab1" class="tab-head" checked="checked"/>
    <label for="tab1">Cotización</label>

    <input type="radio" name="tab" id="tab2" class="tab-head" />
    <label for="tab2">Ventas</label>

    <input type="radio" name="tab" id="tab3" class="tab-head" />
    <label for="tab3">Inventario</label>

    <input type="radio" name="tab" id="tab4" class="tab-head" />
    <label for="tab4">Calendario</label>

    <input type="radio" name="tab" id="tab5" class="tab-head" />
    <label for="tab5">Galería</label>

        <div class="tab-body-wrapper">
      <div id="tab-body-1" class="tab-body">
        <h1>Sistema de Cotizaciones BENVENUTTI</h1>
          <div class="box-fluid meed-grid debug">
            <div class="col-2">
              <br>
              <center>
                  <button id="Boton">
                      Nueva Cotización
                  </button>

                  <p id="PText" >Editar Cotización No.</p>
                  <input type="text">

                </INPUT>
              </center> 
            </div>
            <div class="col-2">
              <br>
            </div>
          </div>
      </div>
      <div id="tab-body-2" class="tab-body">
        <h1>Sistema de Cotizaciones BENVENUTTI</h1>
        <div class="box-fluid meed-grid debug">
            <div class="col-2">
              <br>
            </div>
            <div class="col-2">
              <br>
            </div>
          </div>
      </div>
      <div id="tab-body-3" class="tab-body">
        <h1>Sistema de Cotizaciones BENVENUTTI</h1>
        <div class="box-fluid meed-grid debug">
            <div class="col-2">
              <br>
            </div>
            <div class="col-2">
              <br>
            </div>
          </div>
      </div>
      <div id="tab-body-4" class="tab-body">
        <h1>Sistema de Cotizaciones BENVENUTTI</h1>
        <div class="box-fluid meed-grid debug">
            <div class="col-2">
              <br>
            </div>
            <div class="col-2">
              <br>
            </div>
          </div>
      </div>
      <div id="tab-body-5" class="tab-body">
        <h1>Sistema de Cotizaciones BENVENUTTI</h1>
        <div class="box-fluid meed-grid debug">
            <div class="col-2">
              <br>
            </div>
            <div class="col-2">
              <br>
            </div>
          </div>
      </div>
    </div>
  </div>
        <div class="container"><!-- Begin page container -->
        <?php include("footter.php"); ?>
        </div>


  <script>
    if (document.location.search.match(/type=embed/gi)) {
      window.parent.postMessage('resize', "*");
    }
  </script>

<script src="js/classie.js"></script>
        <script>
            var menuBottom = document.getElementById('cbp-spmenu-s4'),
                    showBottom = document.getElementById('showBottom'),
                    body = document.body;
            showBottom.onclick = function() {
                classie.toggle(this, 'active');
                
                classie.toggle(menuBottom, 'cbp-spmenu-open');
                disableOther('showBottom');
            };
            
            
            
            function disableOther(button) {
                if (button !== 'showBottom') {
                    classie.toggle(showBottom, 'disabled');
                }
            }
        </script>

        
</body>

</html>
