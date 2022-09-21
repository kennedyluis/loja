<?php
session_start();
include "../includes/menu.php";
include "../includes/header.php";
?>

<!--***************pop de iniciliazação da pagina*************-->
<link rel="stylesheet" type="text/css" href="../slides/style.css" />
<script type="text/javascript" src="../slides/jquery.js"></script>
<!--***************pop de iniciliazação da pagina*************-->
<div id="dialog" class="window">
    <!--<video class="img-responsive"  src="../videos/solidaria.mp4" controls ></video>-->
 <img class="img-responsive" src="../slides/slides/pop_up.jpg" alt="Loja Obreiros da Paz nº 19">-->
<div class="col-md-4 pop" id="pop">
     <a http-equiv="refresh" content="0" href="../view/form.php" class="btn btn-primary btn-lg btn-block btn-huge"><strong>SEJA UM DOADOR</strong></a>
</div>
<div class="col-md-4 pop" id="pop">
     <a http-equiv="refresh" content="0" href="../view/projeto.php" class="btn btn-primary btn-lg btn-block btn-huge"><strong>CONHEÇA O PROJETO</strong></a>
</div>
<div class="col-md-3 pop" id="pop">
     <a http-equiv="refresh" content="0" href="../view/fotos_projeto.php" class="btn btn-primary btn-lg btn-block btn-huge"><strong>FOTOS</strong></a>
</div>
<!--<h3 class="txt"><center>Mapa para o Arraial das Cunhadas</center></h3>-->

</div>
<div id="mask"></div>


<style>
.pop{
  margin-top: -80px;
  padding: 20px;
}
#noel{
  margin-top: -80px;
  position: fixed;
  z-index:999;
}
</style>

<div id="sidebar" class="left">
          <div class="item">
              <span class="glyphicon glyphicon-th-large"></span>
          </div>

            <div class="item active">
              <span class="glyphicon glyphicon-th-list"></span><a href="../view/projeto.php"><strong>PROJETO</strong></a>
                  </div>

            <div class="item">
            <span class="glyphicon glyphicon-log-out"></span><a href="#portfolio" class="scrollSuave"><strong>GALERIA</strong></a>
            </div>

            <div class="item">
            <span class="glyphicon glyphicon-log-in"></span><a href="#mapas" class="scrollSuave"><strong>MAPAS</strong></a>
          </div> 

            <div class="item">
              <span class="glyphicon glyphicon-th-large"></span><a href="../videos/solidaria.mp4" target="_blank"><strong>VIDEOS</strong></a>
            </div>
</div>
<!--*************************inserir e mudar slides ********************************-->
<!--*****************Texto passando***************-->
<marquee style="font-family: arial; font-size: 30px;" slide direction="left"><span style="color: rgb(255, 160, 120);">Seja bem vindo a Loja Obreiros da Paz. Conheça nosso Projeto e torne-se um doador.</span></marquee>
<br>
<br>
<br>
            <div class="row-fluid">
                  <div id="wowslider-container1">
                        <div class="ws_images">
                                <ul>
                                    <li><img src="../slides/slides/img3.jpg" href="../view/projeto.php" title=""/></li>
                                    <li><img src="../slides/slides/img1.png" title="Parabéns aos aniversariantes do bimestre"/></li>
                                </ul>
                        </div>
                                    <div class="ws_bullets">
                                            <a href="#" title=""></a>
                                            <a href="#" title="Parabéns aos aniversariantes do bimestre"></a>
                                    </div>
                                                      <br>
                                                      <br>
                                                      <script type="text/javascript" src="../slides/wowslider.js"></script>
                                                      <script type="text/javascript" src="../slides/script.js"></script>
                  </div>
            </div>

<br>
<br>
<br>
<br>
<!--********************Gestão da Loja***********************-->
<section class="bg-primary">
<div class="container">
  <div class="row-fluid">
                    <center>
                                <h1><strong>DIRETORIA / LUZES - <?php echo Date('Y'); ?></strong></h1>
                            </center> 
        <br>

      <div class="col-md-4">
            <img src="../img/exemplo.png" class="center-block img-circle img-responsive"><br>
            <br>
            <center>
            <h4><strong>Erick Pinheiro Caniso</strong></h4>
            <p>1º Vigilante</p>
            </center>
      </div>

      <div class="col-md-4">
            <img src="../img/exemplo.png" class="center-block img-circle img-responsive"><br>
            <br>
            <center>
            <h4><strong>Edemirton de Araújo Teixeira</strong></h4>
            <p>Venerável Mestre</p>
            </center>
      </div>

      <div class="col-md-4">
            <img src="../img/exemplo.png" class="center-block img-circle img-responsive"><br>
            <br>
            <center>
            <h4><strong>Glediston de Azevedo Mesquita</strong></h4>
            <p>2º Vigilante</p>
            </center>
      </div>        
</div>
</div>
</section>
<br>
<br>
<br>

<!-- Portfolio -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2><strong>G A L E R I A</strong></h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a http-equiv="refresh" content="0" href="#" data-toggle="modal" data-target="#palavra" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="../img/portfolio/livro-visitantes.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a http-equiv="refresh" content="0" href="http://informativojbnews.blogspot.com.br/" target="_blank" class="portfolio-link">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="../img/portfolio/jb.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                     <a http-equiv="refresh" content="0" href="#" data-toggle="modal" data-target="#sessoes" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                       <img src="../img/portfolio/sessoes.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a http-equiv="refresh" content="0" href="#" data-toggle="modal" data-target="#sessoes" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="../img/portfolio/game.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a http-equiv="refresh" content="0" href="http://solardasacacia.com/" target="_blank" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="../img/portfolio/safe.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="../img/portfolio/submarine.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="../img/portfolio/submarine.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="../img/portfolio/submarine.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="../img/portfolio/submarine.png" class="img-responsive" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
<br>
<br>
<section id="mapas">
<div class="container">
   <div class="row-fluid">
        <div class="col-md-6">
           
 <h4><center><strong>Onde nos reunimos as quartas-feiras</strong></center></h4>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.4788820012823!2d-67.81150978520604!3d-9.977243192866752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x917f8daa81fb25f7%3A0xf35720065d043884!2sLoja+ma%C3%A7%C3%B4nica+igualdade+Acreana!5e0!3m2!1spt-BR!2sbr!4v1474306612739" width="500" height="300" frameborder="0" style="border:0" allowfullscreen></iframe> 
            </div>
       
<div class="col-md-6">
 <h4><center><strong>Nosso Templo oriente de Bujari</strong></center></h4>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d982.7960486366411!2d-67.95245867083293!3d-9.834882399560277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x918027df7bb95225%3A0xc7932b678a3908c2!2sR.+Raio+de+Sol%2C+242%2C+Bujari+-+AC%2C+69923-000!5e0!3m2!1sen!2sbr!4v1523331935290" width="500" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
       
</div>
</div>
</section>

<!--*****************Modal do Livro de Visitantes***************-->
<div class="modal fade" id="palavra" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <form method="POST" action="../controller/visitantes.php">
        <center>
         <h5><strong>Livro de Visitantes</strong></h5>
             </center>    
              <div class="col-md-12">
                 <input type="password" name="palavra" class="form-control" placeholder="Digite a palavra semestral" required>
                 <br>
             </div>
         <center> 
        <input class="btn btn-primary btn-lg btn3d" type="submit" value="Visitar Livro"/>
     </center>
     <br>
        </form>
    </div>
  </div>
</div>
<!--*****************Modal das Sessões / Grau***************-->
<div class="modal fade" id="sessoes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <form method="POST" action="../controller/sessoes.php">
        <center>
         <h5><strong>Sessões / Grau</strong></h5>
             </center>    
              <div class="col-md-12">
                 <input type="password" name="palavra" class="form-control" placeholder="Digite a palavra semestral" required>
                 <br>
             </div>
         <center> 
        <input class="btn btn-primary btn-lg btn3d" type="submit" value="Consultar"/>
     </center>
     <br>
        </form>
    </div>
  </div>
</div>
<!--************************* Modal do link Lojas - GlEAC ********************************-->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
      <br>
         <br>
            <div class="row">
                <div class="col-lg-5 col-lg-offset-4">
                  <input type="search" id="search" class="form-control" placeholder="pesquisar loja">
                </div>  
            </div>
                    <br>
                  <div class="row" id="print" class="conteudo">
                        <div class="col-md-12">
      <table class="table" id="table">
 <thead>    
              <tr>
                  <th>Número</th>
                  <th>Loja</th>
                  <th>Dia/Sessão</th>
                  <th>Cidade</th>
                  <th>Fundação</th>
              </tr>
</thead>              
<tbody>
              <tr>      
                  <td>Loja 01</td>
                  <td>A. B. L. S. BANDEIRANTES DO ACRE</td>
                  <td>Segunda-feira</td>
                  <td>Xapuri</td>
                  <td>05/05/1906</td>
             </tr>
            <tr> 
                  <td>Loja 02</td>
                  <td>A. B. L. S. IGUALDADE ACREANA</td>
                  <td>Segunda-feira</td>
                  <td>Rio Branco</td>
                  <td>05/05/1906</td>
            </tr>
            <tr>      
                  <td>Loja 03</td>
                  <td>A. B. L. S. FRATERNIDADE E TRABALHO</td>
                  <td>Segunda-feira</td>
                  <td>Sena Madureira</td>
                  <td>18/08/1907</td>
            </tr>
             <tr>      
                  <td>Loja 04</td>
                  <td>A. B. L . S. LIBERTADORA ACREANA</td>
                  <td>Terça-feira</td>
                  <td>Tarauacá</td>
                  <td>13/07/1913</td>
            </tr>
             <tr>      
                  <td>Loja 05</td>
                  <td>A. B. L. S. TEREZA CRISTINA</td>
                  <td>Terça-feira</td>
                  <td>Brasiléia</td>
                  <td>28/09/1923</td>
            </tr>
             <tr>      
                  <td>Loja 06</td>
                  <td>A. B. L. S. CEL. JOSÉ PLÁCIDO DE CASTRO</td>
                  <td>Terça-Feira</td>
                  <td>Feijó</td>
                  <td>08/07/1976</td>
            </tr>
             <tr>      
                  <td>Loja 07</td>
                  <td>A. B. L. S. SETE DE SETEMBRO</td>
                  <td>Terça-feira</td>
                  <td>Rio Branco</td>
                  <td>24/08/1976</td>
            </tr>
             <tr>      
                  <td>Loja 08</td>
                  <td>A. B. L. S. MANOEL MARINHO MONTE</td>
                  <td>Terça-feira</td>
                  <td>Rio Branco</td>
                  <td>25/08/1979</td>
            </tr>
             <tr>      
                  <td>Loja 09</td>
                  <td>A. E. L. S. UNIÃO E TRABALHO</td>
                  <td>Quarta-feira</td>
                  <td>Rio Branco</td>
                  <td>14/03/1995</td>
            </tr>
             <tr>      
                  <td>Loja 10</td>
                  <td>A. E. L. S. JURUÁ FORÇA E TRABALHO</td>
                  <td>Segunda-feira</td>
                  <td>Cruzeiro do Sul</td>
                  <td>02/12/1995</td>
            </tr>
             <tr>      
                  <td>Loja 11</td>
                  <td>A. E. L. S. ADONAY BARBOSA DOS SANTOS</td>
                  <td>Sexta-feira</td>
                  <td>Rio Branco</td>
                  <td>28/03/1996</td>
            </tr>
             <tr>      
                  <td>Loja 12</td>
                  <td>A. R. L. S. UNIÃO E FORÇA DO ABUNÃ</td>
                  <td></td>
                  <td>Plácido de Castro</td>
                  <td>12/07/1997</td>
            </tr>
             <tr>      
                  <td>Loja 13</td>
                  <td>A. E. L. S. TEMPLÁRIOS DO DESERTO</td>
                  <td>Segunda-feira</td>
                  <td>Porto Acre</td>
                  <td>27/11/1999</td>
            </tr>
             <tr>      
                  <td>Loja 14</td>
                  <td>L. E. P. M. ATAÍDE VIANA BARBOSA</td>
                  <td>Última quinta do mês às 19h</td>
                  <td>Rio Branco</td>
                  <td>14/08/2000</td>
            </tr>
             <tr>      
                  <td>Loja 15</td>
                  <td>A. R. L. S. ESTRELA DO VALE DO ACRE</td>
                  <td></td>
                  <td>Epitaciolândia</td>
                  <td>05/09/2000</td>
            </tr>
             <tr>      
                  <td>Loja 16</td>
                  <td>A. E. L. S. SENTINELA DO PURUS</td>
                  <td> </td>
                  <td>Manoel Urbano</td>
                  <td>23/09/2000</td>
            </tr>
             <tr>      
                  <td>Loja 17</td>
                  <td>A. E. L. S. FRATERNO AMOR</td>
                  <td>Sexta-feira</td>
                  <td>Senador Guiomard</td>
                  <td>20/10/2001</td>
            </tr>
             <tr>      
                  <td>Loja 18</td>
                  <td>A. R. L. S. REI SALOMÃO</td>
                  <td>Segunda-feira</td>
                  <td>Rio Branco</td>
                  <td>23/08/2002</td>
            </tr>
             <tr>      
                  <td>Loja 19</td>
                  <td>A. E. L. S. OBREIROS DA PAZ</td>
                  <td>Quarta-feira</td>
                  <td>Bujari</td>
                  <td>05/09/2003</td>
            </tr>
             <tr>      
                  <td>Loja 20</td>
                  <td>A. R. L. S. IMPERADOR GALVEZ</td>
                  <td>Quarta-feira</td>
                  <td>Rio Branco</td>
                  <td>18/12/2003</td>
            </tr>
            <tr>      
                  <td>Loja 21</td>
                  <td>A. R. L. S. TEMPLÁRIOS DO RIO JORDÃO</td>
                  <td>Terça-feira</td>
                  <td>Jordão</td>
                  <td>09/06/2012</td>
            </tr>
</tbody>
        </table>
    </div>
  </div>
</div>
</div> 
</div>


</div>
</div>


<!--******************* Script de pesquisa *****************************-->
<script>
!function(a){function b(b,c){this.$element=a(b),this.settings=a.extend({},d,c),this.init()}var c="searchable",d={selector:"tbody tr",childSelector:"td",searchField:"#search",striped:!1,oddRow:{},evenRow:{},hide:function(a){a.hide()},show:function(a){a.show()},searchType:"default"};b.prototype={init:function(){this.$searchElems=a(this.settings.selector,this.$element),this.$search=a(this.settings.searchField),this.matcherFunc=this.getMatcherFunction(this.settings.searchType),this.bindEvents(),this.updateStriping()},bindEvents:function(){var b=this;this.$search.on("change keyup",function(){b.search(a(this).val()),b.updateStriping()}),""!==this.$search.val()&&this.$search.trigger("change")},updateStriping:function(){var b=this,c=["oddRow","evenRow"],d=this.settings.selector+":visible";this.settings.striped&&a(d,this.$element).each(function(d,e){a(e).css(b.settings[c[d%2]])})},search:function(b){var c,d,e,f,g,h,i,j;if(0===a.trim(b).length)return this.$searchElems.css("display",""),void this.updateStriping();for(d=this.$searchElems.length,c=this.matcherFunc(b),i=0;d>i;i++){for(h=a(this.$searchElems[i]),e=h.find(this.settings.childSelector),f=e.length,g=!0,j=0;f>j;j++)if(c(a(e[j]).text())){g=!1;break}g===!0?this.settings.hide(h):this.settings.show(h)}},getMatcherFunction:function(a){return"fuzzy"===a?this.getFuzzyMatcher:"strict"===a?this.getStrictMatcher:this.getDefaultMatcher},getFuzzyMatcher:function(a){var b,c=a.split("").reduce(function(a,b){return a+"[^"+b+"]*"+b});return b=new RegExp(c,"gi"),function(a){return b.test(a)}},getStrictMatcher:function(b){return b=a.trim(b),function(a){return-1!==a.indexOf(b)}},getDefaultMatcher:function(b){return b=a.trim(b).toLowerCase(),function(a){return-1!==a.toLowerCase().indexOf(b)}}},a.fn[c]=function(d){return this.each(function(){a.data(this,"plugin_"+c)||a.data(this,"plugin_"+c,new b(this,d))})}}(jQuery,window,document);


$(function () {
    $( '#table' ).searchable({
        striped: true,
        oddRow: { 'background-color': '#f5f5f5' },
        evenRow: { 'background-color': '#fff' },
        searchType: 'fuzzy'
    });
    
    $( '#searchable-container' ).searchable({
        searchField: '#container-search',
        selector: '.row',
        childSelector: '.col-xs-4',
        show: function( elem ) {
            elem.slideDown(100);
        },
        hide: function( elem ) {
            elem.slideUp( 100 );
        }
    })
});

//#scrolling do menu lateral
var $doc = $('html, body');
$('a').click(function() {
    $doc.animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 1000);
    return false;
});

</script>


<?php include "../includes/footer.php"; ?>
