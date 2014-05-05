  <div class="gallery">
  <div class="miniatura-1">
    <img src="images/galeria/uno.jpg" alt="" />
    <div class="caption">
      <h3 id="TitMin">####</h3>
      <h4 id="SubTitMin">No. 0X</h4>
    </div>  
  </div>
  <div class="expgrande-1">
    <img src="images/galeria/uno.jpg" alt="" />
    <span class="close">&#x2715;</span>
  </div>
  <div class="miniatura-2">
    <img src="images/galeria/dos.jpg" alt="" />
    <div class="caption">
      <h3 id="TitMin">####</h3>
      <h4 id="SubTitMin">No. 0X</h4>  
    </div> 
  </div>
  <div class="expgrande-2">
    <img src="images/galeria/dos.jpg" alt="" />
    <span class="close">&#x2715;</span>
  </div>
  <div class="miniatura-3">
    <img src="images/galeria/tres.jpg" alt="" />
    <div class="caption">
      <h3 id="TitMin">####</h3>
      <h4 id="SubTitMin">No. 0X</h4>  
    </div> 
  </div>
  <div class="expgrande-3">
    <img src="images/galeria/tres.jpg" alt="" />
    <span class="close">&#x2715;</span>
  </div>
  <div class="miniatura-4">
    <img src="images/galeria/cuatro.jpg" alt="" />
    <div class="caption">
      <h3 id="TitMin">####</h3>
      <h4 id="SubTitMin">No. 0X</h4>  
    </div> 
  </div>
  <div class="expgrande-4">
    <img src="images/galeria/cuatro.jpg" alt="" />
    <span class="close">&#x2715;</span>
  </div>  
  <div class="miniatura-5">
    <img src="images/galeria/cinco.jpg" alt="" />
    <div class="caption">
      <h3 id="TitMin">####</h3>
      <h4 id="SubTitMin">No. 0X</h4>  
    </div> 
  </div>
  <div class="expgrande-5">
    <img src="images/galeria/cinco.jpg" alt="" />
    <span class="close">&#x2715;</span>
  </div> 
  <div class="miniatura-6">
    <img src="images/galeria/seis.jpg" alt="" />
    <div class="caption">
      <h3 id="TitMin">####</h3>
      <h4 id="SubTitMin">No. 0X</h4>  
    </div> 
  </div>
  <div class="expgrande-6">
    <img src="images/galeria/seis.jpg" alt="" />
    <span class="close">&#x2715;</span>
  </div> 
  <div class="miniatura-7">
    <img src="images/galeria/siete.jpg" alt="" />
    <div class="caption">
      <h3 id="TitMin">####</h3>
      <h4 id="SubTitMin">No. 0X</h4>  
    </div> 
  </div>
  <div class="expgrande-7">
    <img src="images/galeria/siete.jpg" alt="" />
    <span class="close">&#x2715;</span>
  </div> 
  <div class="miniatura-8">
    <img src="images/galeria/ocho.jpg" alt="" />
    <div class="caption">
      <h3 id="TitMin">####</h3>
      <h4 id="SubTitMin">No. 0X</h4>  
    </div> 
  </div>
  <div class="expgrande-8">
    <img src="images/galeria/ocho.jpg" alt="" />
    <span class="close">&#x2715;</span>
    <!--<span class="prev">&lsaquo;</span>
    <span class="next">&rsaquo;</span>--> 
  </div> 
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



<script src="js/jqueryv1.11.js"></script>
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