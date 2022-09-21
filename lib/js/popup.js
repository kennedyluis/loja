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