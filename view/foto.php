<?php
include "../includes/menu.php";
?>
<style>
#fotos{
  margin-top: 80px;
}
</style>

    <div class="row-fluid" id="fotos">
        <div class="col-md-3">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><strong><center>TRIANGULO - BUJARI</center></strong></a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a class="link" href="#"><strong>FESTA DE FUNDAÇÃO</strong></a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><strong><center>EVENTOS DIVERSOS</center></strong></a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a class="link" href="../view/foto4.php"><strong>INICIAÇÕES</strong></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="link" href="../view/foto5.php"><strong>FEIJOADA</strong></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="link" href="../view/foto6.php"><strong>COSTELÃO</strong></a>
                                    </td>
                                </tr>
          
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><strong><center>FESTAS DE FINAL DE ANO</center></strong></a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a class="link" href="../view/foto2.php"><strong>2016</strong></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#"><strong>2017</strong></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#"><strong>2018</strong></a>
                                    </td>
                                </tr>
                                
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><strong><center>NATAL DAS CRIANÇAS - BUJARI</center></strong></a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a class="link" href="../view/foto3.php"><strong>2016</strong></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#"><strong>2017</strong></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#"><strong>2018</strong></a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
 <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive"><strong><center>PROJETO CONSTRUTORES DO TEMPLO DA VIRTUDE</center></strong></a>
                        </h4>
                    </div>
                    <div id="collapseFive" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a class="link" href="../view/projeto_antes.php"><strong>TEMPLO - ANTES</strong></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="link" href="../view/projeto_depois.php"><strong>INÍCIO DOS TRABALHOS</strong></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#"><strong>TEMPLO - DEPOIS</strong></a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
          </div>
  </div>
<div class="container" id="fotos">
          <div class="row-fluid">
                  <div class="col-md-9">
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
