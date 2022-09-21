<!--**********************Redes Sociais***************-->
<style>
.footer{
    background-color: #333333;
}
.color{
    color: #FFFFFF;
    text-align: center;
    margin-top: 10px;
}
.rodape{
    background-color: #15456f;
    padding: 10px;
}
.sociais{
    margin-top: 10px;
}
.titulo{
    text-indent: 50px;
     color: #FFFFFF;
}
.list > a:hover, 
.list > a:focus {
   color: #FFFFFF; 
}
</style>          




<!--*******************links sob o footer*********************-->
<div class="container">
 <hr>
 </div>
<div class="col-md-12 rodape">
<div class="col-md-3">
  <h4 class="titulo"><strong>Links</strong></h4>
    <ul>
        <li class="list"><a class="video" href="../videos/solidaria.mp4" target="_blank">Maçonaria Solidária</a></li>
        <li class="list"><a href="../view/historia.php">Um pouco de Maçonaria</a></li>
         <li class="list"><a href="../view/projeto.php">Construtores do Templo da Virtude</a></li>
        </ul>    
</div>
<div class="col-md-3">
    <div align=center><a href='https://contador.s12.com.br'><img src='https://contador.s12.com.br/img-62wZC66ay18Yz8Bw-3.gif' border='0' alt='contador'></a><script type='text/javascript' src='https://contador.s12.com.br/ad.js?id=62wZC66ay18Yz8Bw'></script></div>
<!--*******************calendário*********************

 <div class="col-md-3 hero-spacer">
        <div class="responsive-calendar">
            <div class="controls">
                <a class="pull-left" data-go="prev">
                    <div class="btn btn-primary"><i class="fa fa-angle-double-left" aria-hidden="true"></i>
                    </div>
                </a>
                <h4><span data-head-month></span> <span data-head-year></span></h4>
                <a class="pull-right" data-go="next">
                    <div class="btn btn-primary"><i class="fa fa-angle-double-right" aria-hidden="true"></i>
                    </div>
                </a>
            </div>
            <hr/>
            <div class="day-headers">
                <div class="day header">Seg</div>
                <div class="day header">Ter</div>
                <div class="day header">Qua</div>
                <div class="day header">Qui</div>
                <div class="day header">Sex</div>
                <div class="day header">Sáb</div>
                <div class="day header">Dom</div>
            </div>
            <div class="days" data-group="days">

            </div>
        </div>-->
</div>
<!--*******************Login de Acesso ao Sistema do Obreiro*********************-->
<div class="col-md-3">
 <a href="https://play.google.com/store/search?q=obreiros%20da%20paz&hl=pt_BR" target="_blank"><img class="img-responsive" src="../img/google_play.png"></a>
</div>
<div class="col-md-3">
  <center>
    <h3 class="color"><span class="glyphicon glyphicon-user"></span> Área restrita ao Obreiro</h3>
    <a http-equiv="refresh" content="0" href="https://www.obreirosdapaz19.com.br/sistema" target="_blank"><button type="button" class="btn btn-primary btn-lg btn3d"><span class="glyphicon glyphicon-cog"></span> Acessar</button></a>
<br>  
</div>

</div>
<!--*******************Rodapé*********************-->
<div class="col-md-12 footer">
<div class="col-md-6 sociais">
<a href="https://www.facebook.com.br" target="_blank"><img class="social" src="../img/ico-facebook.png"></a>
<a href="https://twitter.com" target="_blank"><img class="social" src="../img/ico-twitter.png"></a>
<a href="http://www.youtube.com" target="_blank"><img class="social" src="../img/ico-youtube.png"></a>
<a href="https://www.google.com.br/maps/@-9.9385994,-67.8152491,15z" target="_blank"><img class="social" src="../img/maps.png"></a>
<a href="https://apps.google.com/intx/pt-BR/products/googleplus/?utm_medium=cpc&utm_source=google&utm_campaign=latam-br-pt-gafw-bkws-all-trial-b&utm_term=%2Bgoogle%2B&KWID=%5B*TrackerID*%5D" target="_blank"><img class="social" src="../img/google+.png"></a>
<a href="https://www.instagram.com" target="_blank"><img class="social" src="../img/Instagram.png"></a>
<a href="https://accounts.google.com/ServiceLogin?sacu=1&scc=1&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&osid=1&service=mail&ss=1&ltmpl=default&rm=false#identifier" target="_blank"><img class="social" src="../img/gmail.png"></a>
<a href="https://www.linkedin.com" target="_blank"><img class="social" src="../img/linkedin.png"></a>
</div>
<div class="col-md-6">
<p class="color"><strong>À G.<sup>.</sup>. D.<sup>.</sup>. G.<sup>.</sup>. A.<sup>.</sup>. D.<sup>.</sup>. U.<sup>.</sup>.<br>
Loja Obreiros da Paz Nº 19, sessões nas quartas-feiras.
<br>Copyright © <?php echo Date('Y'); ?> Todos os direitos reservados a Loja Obreiros da Paz nº 19.</strong></p> 
</div>
</div>
</body>
  
<script src="../lib/jquery/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="../lib/js/bootstrap.min.js"></script>



<script src="../lib/js/responsive-calendar.min.js"></script>
<link rel="stylesheet" type="text/css" href="../lib/css/calendar.css"/>


<script src='https://www.google.com/recaptcha/api.js?hl=pt-BR'></script>
<!--*******************script do pop up de inicialização da página*********************-->
<script>
$(document).ready(function() { 
var id = '#dialog';
//Obter a altura da tela e largura
var maskHeight = $(document).height();
var maskWidth = $(window).width();
//Jogo em altura e largura para mascarar a preencher toda a tela
$('#mask').css({'width':maskWidth,'height':maskHeight});
//efeito de transição
$('#mask').fadeIn(500);
$('#mask').fadeTo("slow",0.9); 
//Obter a altura da janela e largura
var winH = $(window).height();
var winW = $(window).width();
//Definir a janela de pop-up para o centro
$(id).css('top',  winH/2-$(id).height()/2);
$(id).css('left', winW/2-$(id).width()/2);
//transition effect
$(id).fadeIn(2000);  
//se botão de fechar é clicado
$('.window .close').click(function (e) {
//Cancelar o comportamento ligação
e.preventDefault();
$('#mask').hide();
$('.window').hide();
});
//Se a máscara é clicado
$('#mask').click(function () {
$(this).hide();
$('.window').hide();
});
});
</script>
<!--*******************script do calendario*********************-->
<script type="text/javascript">
    $(document).ready(function () {
        data = new Date();
        var dataFormatada = data.getFullYear() + '-0' + (data.getMonth() + 1) + '-' + (data.getDate());
        var json = '{"' + dataFormatada + '":{}}';

        $(".responsive-calendar").responsiveCalendar({
            time: data.getFullYear() + '-0' + (data.getMonth() + 1) + '-0' + (data.getDate()),
            translateMonths: ["Janeiro", "Fevereiro", "Março", "abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"],
            events: JSON.parse(json)
        });
    });
</script>

<script>
    $(document).ready(function () {
        var $modalPalavra = $("#palavraModal");

        
        
        

        $(window).load(function () {
            $modalPalavra.modal()
        })
    })

 //#to-top button appears after scrolling
    var fixed = false;
    $(document).scroll(function() {
        if ($(this).scrollTop() > 250) {
            if (!fixed) {
                fixed = true;
                // $('#to-top').css({position:'fixed', display:'block'});
                $('#to-top').show("slow", function() {
                    $('#to-top').css({
                        position: 'fixed',
                        display: 'block'
                    });
                });
            }
        } else {
            if (fixed) {
                fixed = false;
                $('#to-top').hide("slow", function() {
                    $('#to-top').css({
                        display: 'none'
                    });
                });
            }
        }
    });

</script>

</html>