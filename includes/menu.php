<!DOCTYPE html> 
<html>
<lang =pt-br> 
<head>     
<meta charset="utf-8"/>
<meta name="author" content="obreirosdapaz19">
<meta name="description" content="obreirosdapaz19">
<meta name="keywords" content="obreiros, grande, loja, maçonaria, obreirosdapaz19, gleac">
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta http-equiv="Content_Type" content="text/html; charset=iso-8859-1">
<title>Obreiros da Paz nº 19</title>     
<link rel="stylesheet" type="text/css" href="../lib/css/bootstrap.min.css">    
<link rel="stylesheet" type="text/css" href="../lib/css/style.css">
<link rel="stylesheet" type="text/css" href="../lib/css/mobile.css">
<link rel="stylesheet" href="../lib/css/colorbox.css">
<link rel="shortcut icon" href="../img/favicon.ico" type="img/x-icon">
<link rel="icon" href="../img/favicon.ico" type="img/x-icon">
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
<link rel="stylesheet" href="../lib/css/lightbox.css"/>
<script src="../lib/jquery/jquery-3.1.0.min.js"></script>
<script src="../lib/js/lightbox.min.js"></script>
<script type="text/javascript" src="../lib/js/bootstrap.min.js"></script>

<script>
 <a href="someurl" id="mylink"> Abrir lightbox </a> 
$ ( '# mylink') ekkoLightbox (opções).;
</script>
</head> 
<body>
<!--***************linha que bloqueia o botão direito do mouse*************-->
<body oncontextmenu='return false' onselectstart='return false' ondragstart='return false'>
<!--*********************barra de menu***************************************-->
<div class="container menu">
  <div class="col-md-12">
    <nav class="navbar navbar-fixed-top menu">
       <div class="navbar-inner">
         <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class=" navbar navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                          <span class="sr-only"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                         </button>

               <a class="navbar-brand" href="../view/home.php"><img style="margin-top: -30px;" class="img-responsive" src="../img/logo.png"></a>
    </div>
     <div id="navbar" class="navbar-collapse collapse">
    <ul class="nav navbar-nav navbar-right">
   <li><a http-equiv="refresh" content="0" href="../view/projeto.php"><span class="glyphicon glyphicon-book"></span><strong> PROJETO</strong></a></li>
    <li><a http-equiv="refresh" content="0" href="../view/sobrealoja.php"><span class="glyphicon glyphicon-book"></span><strong> SOBRE A LOJA</strong></a></li>
   <li><a http-equiv="refresh" content="0" href="#" data-toggle="modal" data-target="#exampleModal"><span class="glyphicon glyphicon-earphone"></span><strong> CONTATO</strong></a></li>
    <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><strong>.<sup>.</sup>. INSTITUCIONAL</strong> <span class="caret"></span></a>
          <ul class="dropdown-menu">
     <li><a href="http://gleac.com.br" target="_blank">Grande Loja Maçônica do Estado do Acre - GLEAC</a></li>
      <li><a href="http://sc33.org.br/" target="_blanq">Supremo Conselho do Grau 33</a></li>
      <li><a href="http://www.cmsb.org.br/index.php/template/grandes-lojas-do-brasil" target="_blanq">Grandes Lojas Confederadas</a></li>
      <li><a href="http://www.cmi.world" target="_blanq">Confederação Maçônica Interamericana - CMI</a></li>
      <li><a href="http://cmsb.org.br" target="_blank">Confederação da Maçonaria Simbólica do Brasil - CMSB</a></li>
          </ul>
        </li>
            <li><a http-equiv="refresh" content="0" href="../view/historia.php"><span class="glyphicon glyphicon-book"></span><strong> HISTÓRIA</strong></a></li>
            <li><a http-equiv="refresh" content="0" href="../view/foto.php"><span class="glyphicon glyphicon-camera"></span><strong> FOTOS</strong></a></li>
            <li><a http-equiv="refresh" content="0" href="https://webmail1.weblink.com.br/?_task=logout&_token=2n4T6rB0kxS6kQeY5pqUGLAd0ly6Dood" target="_blank"><span class="glyphicon glyphicon-envelope"></span><strong> WEBMAIL</strong></a></li>
    </ul>
      </li>
</nav>
</div>
          </div>
       </div> 
<!--*****************Formulário de Contato***************-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <form method="POST" action="../controller/fale_conosco.php">
        <center>
         <h5><strong>Loja Obreiros da Paz nº 19</strong></h5>
             </center>    
            <div class="col-md-12">
                <label for="recipient-name" class="control-label">Nome:</label>
                  <input type="text" name="nome" class="form-control" placeholder="Digite seu nome" required autofocus>
                    <br>
            </div>
              <div class="col-md-12">
                <label for="message-text" class="control-label">E-mail:</label>
                 <input type="email" name="email" class="form-control" placeholder="Digite seu e-mail" required>
                 <br>
             </div>
             <div class="col-md-12">
                  <label for="message-text" class="control-label">Mensagem:</label>
                   <textarea name="mensagem" class="form-control" required></textarea>
                   <br>
             </div>
         <center> 
        <input class="btn btn-primary btn-lg btn3d" type="submit" value="Enviar Mensagem"/>
     </center>
     <br>
        </form> 
    </div>
  </div>
</div>


<script>
//<!--******************* Script dropdow menu dislizante ********************************-->
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("50");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("50");
            $(this).toggleClass('open');       
        }
    );
});
//<!--******************* Script bloqueador do crtl + P ********************************-->
window.onload = function() {
  document.onkeydown = function(e) {
    var code = e.keyCode || e.which;
    if(e.ctrlKey && (code == 80 || code == 112)) {
      e.preventDefault && e.preventDefault();
      return false;
    }
  }
}

</script>