<?php
include "../includes/menu.php";
?>
<div class="container" id="fotos">
	<div class="row">
                       <h2>Stylish button list</h2>
         <ul class="ds-btn">
             <li>
                  <a class="btn btn-lg btn-danger link" href="../view/projeto_antes.php"><img src="../img/log.png"><span>Construtores do Templo da Virtude<br><small>Fotos antes dos trabalhos</small></span></a> 
             </li>
                     <li>
                         <a class="btn btn-lg btn-info link" href="../view/projeto_depois.php"><img src="../img/log.png"><span>Construtores do Templo da Virtude<br><small>Fotos da evolução dos trabalhos</small></span></a> 
                      </li>
         </ul>
    </div>
</div>
<div class="container" id="fotos">
          <div class="row-fluid">
                  <div class="col-md-12">
                             <div class="conteudo">
</div>
        </div>
                  </div>
                            </div>
<!-- apresentação do conteudo dos links -->
<script>     
  $(function(){       
    $(document).on('click', 'a.link', function (e) {        
      e.preventDefault(); // prevent normal link navigation        
      var $this = $(this), url = $this.attr('href');       
      $(".conteudo").load(url);       
      return false;    
    });
  });  
</script>
<script type="text/javascript">
      $(function() {
        $('#dg-container').gallery();
      });
    </script>
<style>
.ds-btn li{ list-style:none; float:left; padding:10px; }
.ds-btn li a span{padding-left:15px;padding-right:5px;width:100%;display:inline-block; text-align:left;}
.ds-btn li a span small{width:100%; display:inline-block; text-align:left;}
</style>