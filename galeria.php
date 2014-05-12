  <?php

      include ('query/conexion.php');
      $inventario = $db->query("SELECT * from Inventario WHERE Tipo = 1"); 
      if (!$inventario) {
          die('Consulta no válida: ' . mysql_error());
      }else{ ?>
  <div class="gallery">
  <?php while($row = mysqli_fetch_array($inventario, MYSQLI_NUM)){ ?>
    <div class="miniatura-1">
    <img src="upload/<?php echo $row[9];?>" alt="" />
    <div class="caption">
      <h3 id="TitMin"><?php echo $row[2];?></h3>
      <h4 id="SubTitMin">No. <?php echo $row[1];?></h4>
      <p><?php echo $row[10];?></p>
    </div>  
  </div>
  <div class="expgrande-1">
    <img src="images/galeria/uno.jpg" alt="" />
    <span class="close">&#x2715;</span>
  </div>
<?php  }?>

  

</div>
<?php } ?>
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