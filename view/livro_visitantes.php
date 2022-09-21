<?php
ini_set('default_charset','UTF-8');
   session_start(); 
    if (!isset($_SESSION["palavra"])) {
        header("Location: ../view/home.php");
        exit;
    }
include "../includes/menu.php";
include "../includes/header.php";
?>
<div class="container place">
<div class="row-fluid">
<div class="col-md-12">

<h3><strong><span class="glyphicon glyphicon-asterisk"></span>Bem vindo nobre Irmão ao nosso Livro de Visitantes </strong> | Hoje é: <?php echo date('d/m/Y');?></strong></h3><a href="../controller/logout.php">
	<div><span class="glyphicon glyphicon-remove-circle"></span> Clique para Sair do Livro de Visitantes</a></div>
 
<style> #livro{
z-index: -100;
}
</style>
 <img id="livro" src="../img/livro.png" class="img-responsive">
 <div id="livro" class="table-responsive">    
                <table class="table table-hover" id="table">
                	
                                    <thead>
                                       <tr>
                                              <th>Cadastro</th>
                                              <th>Nome</th>
                                              <th>Grau</th>
                                              <th>Loja</th>
                                              <th>Sessão</th>
                                              <th>Grau</th>
                                              <th>Data</th>
                                          </tr>
                                      </thead>
                    <?php
                    ini_set('default_charset','UTF-8');
                                    require "../conexao/conexao.php";
                                    $lista_visitantes = "SELECT * FROM livro_visita order by nome";
                                    $resultado = mysqli_query($conexao, $lista_visitantes);
                                    while($linha = mysqli_fetch_array($resultado)){
                                     
                                      $nome        =$linha['nome'];
                                      $autor       =$linha['autor'];
                                      $descricao   =$linha['descricao'];
                                      $data        =$linha['data'];
                                      $arquivo     =$linha['arquivo'];
                                      ?>
                                    <tbody>
                                                <tr>              
                                                    <td><?=$nome?></td>
                                                    <td><?=$autor?></td>
                                                    <td><?=$descricao?></td>
                                                    <td><?=$data?></td>
               
                                                </tr>
                                             </tbody>
                                                      <?php } ?>
                                </table>
                            </div>
                     

<div class="col-md-4">
<center><strong>_*Erick Pinheiro Caniso*_</strong></center>
<center>1º Vigilante</center>
</div>

<div class="col-md-4">
<center>
<strong>_*Edemirton de Araújo Teixeira*_</strong></center>
<center>Venerável Mestre</center>	
</div>

<div class="col-md-4">
<center>
<strong>_*Glediston de Azevedo Mesquita*_</strong></center>
<center>2º Vigilante</center>	
</div>

</div>
</div>
</div>
<?php include "../includes/footer.php"; ?>