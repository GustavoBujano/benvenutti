<?php
session_start();

if(isset($_SESSION['valido_user'])==1){

}else{
     header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="es" class="no-js">
    <head>
        <title>Benvenutti</title>
        <meta charset="UTF-8" />
	    <link rel="shortcut icon" type="image/x-icon" href="imagenes/favicon.ico" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
        <link href="css/sticky-footer.css" type="text/css" rel="stylesheet"/>
        <link rel="stylesheet" type="text/css" href="css/default.css" />
        <link rel="stylesheet" type="text/css" href="css/component.css" />
        <link href="css/style_benvenutti.css" type="text/css" rel="stylesheet"/>
        <link href="css/style_benvenutti_1.css" type="text/css" rel="stylesheet"/>
        <script src="js/modernizr.custom.js"></script>
        
        <style>
            #area_work{
                height: 100%;
            }
        </style>

    </head>
    <body>
        <?php include('header.php'); ?>
        <div class="container">

    <div id="area_work"><!--Todo el contenido en area work-->
                
    <div class="tabs-wrapper">

    <input type="radio" name="tab" id="tab1" class="tab-head" checked="checked"/>
    <label id="labeltab" for="tab1">Cotización</label>

    <input type="radio" name="tab" id="tab2" class="tab-head" />
    <label id="labeltab" for="tab2">Ventas</label>

    <input type="radio" name="tab" id="tab3" class="tab-head" />
    <label id="labeltab" for="tab3">Punto de Venta</label>

    <input type="radio" name="tab" id="tab4" class="tab-head" />
    <label id="labeltab" for="tab4">Inventario</label>

    <input type="radio" name="tab" id="tab5" class="tab-head" />
    <label id="labeltab" for="tab5">Calendario</label>

    <input type="radio" name="tab" id="tab6" class="tab-head" />
    <label id="labeltab" for="tab6">Galería</label>
 
    <div class="tab-body-wrapper">
        <div id="contenido">
            <div id="tab-body-1" class="tab-body"><!--Sistema de Cotizaciones BENVENUTTI-->
                <h3>Sistema de Cotizaciones BENVENUTTI</h3>
                <?php include('cotizacion.php'); ?>
            </div>
            <div id="tab-body-2" class="tab-body"><!--Sistema de Ventas BENVENUTTI-->
                <h3>Sistema de Ventas BENVENUTTI</h3>
                <?php include('ventas.php'); ?>
            </div>
            <div id="tab-body-3" class="tab-body"><!--Sistema de Punto de Venta BENVENUTTI-->
                <h3>Sistema de Punto de Venta BENVENUTTI</h3>
                <?php include('puntodeventa.php'); ?>
            </div>
            <div id="tab-body-4" class="tab-body"><!--Sistema de Inventario BENVENUTTI-->
                <h3>Sistema de Inventario BENVENUTTI</h3>
                <?php include('inventario.php'); ?>
            </div>
            <div id="tab-body-5" class="tab-body"><!--Calendario de Entregas BENVENUTTI-->
                <h3>Calendario de Entregas BENVENUTTI</h3>
                <?php include('calendario.php'); ?>
            </div>
            <div id="tab-body-6" class="tab-body"><!--Galeria BENVENUTTI-->
                <h3>Galería BENVENUTTI</h3>
                <?php include('galeria.php'); ?>
            </div>
        </div>
    </div>
</div>
            </div> <!--NO QUITAR DE AQUI AUNQUE ESTE VACIO fin de area work-->
        <?php include("footter.php"); ?>
        </div>

        <script src="js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function() {
                //Handles menu drop down
                $('.dropdown-menu').find('form').click(function(e) {
                    e.stopPropagation();
                });              
                $("#area_work").click(function() {
                    var isVisible = $( "#showBottom" ).hasClass("active");
                    if(isVisible){
                        $("#showBottom").trigger("click");
                    }
                });
            });
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

