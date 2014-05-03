          <div class="box-fluid meed-grid debug">
            <div class="col-2 vist">
              <!--<center>
                  <div id="DivBotonVen">
                    <button class="botoncafe" id="BotonVen">
                      Nueva Venta
                    </button>
                  </div> 
                  
                  <div id="PTextVen"><p>Venta de Cotización No.</p></div>
                  <div id="NoVen"><input type="text"></div>

                  <div id="DivBotonCrearVen">
                    <button class="botoncafe" id="BotonCrearVen">
                      Crear Venta
                    </button>
                  </div> 
              </center> -->
<ul class="mktabs">
<form id="mkForm">
    <li class="mkli">
        <input type="radio" name="mktabs" id="mktab1" checked />
        <label class="mktablab" for="mktab1">1<br>Asiento</label>
        <div id="tab-content1" class="tab-content">
          <?php include("forms/f1.php");?>
        </div>
    </li>
    <li class="mkli">
        <input type="radio" name="mktabs" id="mktab2" />
        <label class="mktablab" for="mktab2">2<br>Respaldo</label>
        <div id="tab-content2" class="tab-content">
          <?php include("forms/f2.php");?>
        </div>
    </li>
    <li class="mkli">
        <input type="radio" name="mktabs" id="mktab3" />
        <label class="mktablab" for="mktab3">3<br>Brazos</label>
        <div id="tab-content3" class="tab-content">
          <?php include("forms/f3.php");?>
        </div>
    </li>
    <li class="mkli">
        <input type="radio" name="mktabs" id="mktab4" />
        <label class="mktablab" for="mktab4">4<br>Base</label>
        <div id="tab-content4" class="tab-content">
          <?php include("forms/f4.php");?>
        </div>
    </li>
    <li class="mkli">
        <input type="radio" name="mktabs" id="mktab5" />
        <label class="mktablab" for="mktab5">5 Accesorios</label>
        <div id="tab-content5" class="tab-content">
          <?php include("forms/f5.php");?>
        </div>
    </li>
    <li class="mkli">
        <input type="radio" name="mktabs" id="mktab6" />
        <label class="mktablab" for="mktab6">6<br>Otros</label>
        <div id="tab-content6" class="tab-content">
          <?php include("forms/f6.php");?>
        </div>
    </li>
    <li class="mkli">
        <input type="radio" name="mktabs" id="mktab7" />
        <label class="mktablab" for="mktab7">7<br>Cama</label>
        <div id="tab-content7" class="tab-content">
          <?php include("forms/f7.php");?> 
        </div>
    </li>
   </form>
</ul>
            </div>
            <div class="col-2 vist2">
              <br>
              <div id="logo" ><img src="images/logo.jpg"></div>
              <div id="mueble" ><img src="images/mueble.png"></div>             
            </div>
          </div>