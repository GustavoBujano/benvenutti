<div class="box-fluid meed-grid debug">
            <div class="col-2 vist">
              <br>

              <center>
              <div id="PTextCot"><p>No.Cotizacion
                <input type="text" />
              </p>
                <div id="NoCot2"></div>
              </div>
              <div id="PTextProd">
                <p>Producto
                <input type="text" />
              </p>
                <div id="NoCot2"></div>
              </div>
<div id="PTextCot"><p>Medidas</p></div>
<p><BR>
              Brazos
              <input type="radio" />
              Si
               <input type="radio" />
               No</p>
<p>Largo
  <input type="text" />
Ancho
  <input type="text" />
Altura
<input type="text" />
</p>
<div >
             Patas
              <input type="radio" />
              Si
               <input type="radio" />
               No</p>
<p>Largo
  <input type="text" />
</p>
</div>
<div >
<label />Respaldo
<input type="radio" name="respaldo" checked="checked" />si
<input type="radio" name="respaldo"  />no
<p>Largo
  <input type="text" />
</p>
</div>
<div >
             Cojin
              <input type="radio" />
              Si
               <input type="radio" />
               No

</div>
<div >
             Cojin asiento
              <input type="radio" />
              Pegado
               <input type="radio" />
               Despegado

</div>
<div >
             Cojin respaldo
              <input type="radio" />
              Pegado
               <input type="radio" />
               Despegado

</div>


                       <div id="DivBotonCot"></div>
                     <div id="DivBotonCot">
                       <button class="botoncafe" id="BotonCot" > CREAR </button>
                    <button class="botoncafe" id="BotonCot" >
                    CANCELAR
                    </button>
                  </div>
              </center>
            </div>
            <div class="col-2 vist2">
              <br>
              <div id="logo" ><img src="images/logo.jpg"></div>
              <div id="mueble" ><img src="images/mueble.png"></div>


            </div>
          </div>











                           <script>
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




































































































































































  <script>
    $.noConflict();
    jQuery( document ).ready(function( $ ) {
      $("[class^='miniatura-']").click(function(){
        $("[class^='miniatura-']").slideToggle("fast");
        $(this).next("[class^='expgrande-']").slideToggle();
      });
      $(".close").click(function(){
        $("[class^='expgrande-']:visible").toggle();
        $("[class^='miniatura-']").fadeToggle("fast");; 
      }); 
    });
  </script>
































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
