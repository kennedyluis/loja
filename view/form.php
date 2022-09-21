<?php
include "../includes/menu.php";
?>

<center>
<h1><strong>Projeto Construtores do Templo da Virtude</strong></h1>
</center>

<!--FORMULÁRIO PARTE DOS DADOS PESSOAIS-->
<div class="container"> 
<form method="POST" action="../controller/projeto.php">

<fieldset><legend><strong>Formulário de Doador</strong></legend>

<div class="form-group col-md-4">
   <label>Nome</label>
   <input type="text" class="form-control" required name="nome" autofocus maxlength="50" placeholder="digite seu nome">
</div>

<div class="form-group col-md-5">
   <label>Loja</label>
   <input type="text" class="form-control" required name="loja" maxlength="50">
</div>

<div class="form-group col-md-3">
   <label>Potência</label>
   <input type="text" class="form-control" required name="potencia" maxlength="50">
</div>

<div class="form-group col-md-4">
   <label>Oriente</label>
   <input type="text" class="form-control" required name="oriente" maxlength="50">
</div>

<div class="form-group col-md-3">
           <label>Telefone Celular</label>
          <input type="tel" class="form-control" required name="celular" onkeypress="mascara(this, '## ####-####')" maxlength="15">
</div>

<div class="form-group col-md-5">
           <label>E-mail</label>
          <input type=email class="form-control" name="email" maxlength="30">
</div>

 <div class="form-group col-md-6">
           <label>Endereço</label>
           <input type="text" class="form-control" name="end" maxlength="40">
          </div>

<div class="form-group col-md-1">
           <label>Número</label>
           <input type="text" class="form-control" name="numero" maxlength="4">
          </div>

<div class="form-group col-md-5">
           <label>Complemento</label>
           <input type="text" class="form-control" name="compl" maxlength="30">
          </div>

<div class="form-group col-md-4">
           <label>Bairro</label>
           <input type="text" class="form-control" name="bairro" maxlength="20">
          </div>

<div class="form-group col-md-2">
           <label>CEP</label>
           <input type="text" class="form-control" name="cep" maxlength="10">
          </div>

<div class="form-group col-md-3">
           <label>Cidade</label>
           <input type="text" class="form-control" name="cidade" maxlength="12">
          </div>

<div class="form-group col-md-3">
    <label>Classe</label> 
    <select class="form-control" required name="classe">
      <option value="#">Selecione</option> 
      <option value="Obreiro Fiel">Obreiro Fiel</option>
      <option value="Intendente de Obras">Intendente de Obras</option>
      <option value="Arquiteto Geral">Arquiteto Geral</option>
</select>   
</div>
 <center> 
        <input class="btn btn-primary btn-lg btn3d" type="submit" value="Enviar formulário"/>
     </center>
</form>
<br>
<center>
<!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
<form action="https://pagseguro.uol.com.br/checkout/v2/donation.html" target="_blank" method="post">
<!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
<input type="hidden" name="currency" value="BRL" />
<input type="hidden" name="receiverEmail" value="admin@obreirosdapaz19.com.br" />
<input type="hidden" name="iot" value="button" />
<input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/doacoes/209x48-doar-azul-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
</form>
<!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
                          </center>
  </fieldset>
</div>
<br>

<div class="container">
<div class="row-fluid">
<div class="col-md-4 doador">
<p><style>.doador{text-align: justify;}</style>Classe 1 - <strong>Obreiro Fiel</strong> - Doará 12 parcelas mensais de R$ 50,00, recebe um certificado de agradecimento e reconhecimento e uma camisa comemorativa.</p>
</div>
<div class="col-md-4 doador">
<p>Classe 2 - <strong>Intendente de Obras</strong> - Doará 12 parcelas mensais de R$ 80,00, recebe um certificado de agradecimento e reconhecimento, camisa comemorativa e uma comenda.</p>
</div>
<div class="col-md-4 doador">
<p>Classe 3 - <strong>Arquiteto Geral</strong> - Doará 12 parcelas mensais de R$ 120,00, recebe certificado, camisa, comenda e terá uma lajota de agradecimento afixada com seus dados pessoais em uma das paredes da sala dos passos perdidos.</p>
</div>
</div>
</div>
<?php
include "../includes/footer.php";
?>