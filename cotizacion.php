          <div class="box-fluid meed-grid debug">
            <div class="col-2 vist">
              <br>
              <script>
              function NuevaCotizacion(){
                $("#contenido").empty();
                $("#contenido").load("cotizacion/Nuevacotizacion.php");
              }
              </script>
              <center>
                  <div id="DivBotonCot">
                    <button class="botoncafe" id="BotonCot" onClick="NuevaCotizacion();">
                      Nueva Cotización
                    </button>
                  </div> 
                  
                  <div id="PTextCot"><p>Editar Cotización No.</p></div>
                  <div id="NoCot"><input type="text"></div>

                  <div id="DivBotonEditCot">
                    <button class="botoncafe" id="BotonEditCot">
                      Editar
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