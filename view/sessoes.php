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

<h3><strong><span class="glyphicon glyphicon-asterisk"></span>Bem vindo nobre Irmão - Relação de Instruções Anual </strong> | Hoje é: <?php echo date('d/m/Y');?></strong></h3><a href="../controller/logout.php">
	<div><span class="glyphicon glyphicon-remove-circle"></span> Clique para Sair</a></div>
 
 <div id="livro" class="table-responsive">    
                <table class="table table-hover" id="table">
                	
                                    <thead>
                                       <tr>
                                              <th>Data da Sessão</th>
                                              <th>Grau da Sessão</th>
                                              <th>Instrução a ser ministrada</th>
                                          </tr>
                                      </thead>
                    <?php
                    ini_set('default_charset','UTF-8');
                                    require "../conexao/conexao.php";
                                    $lista_visitantes = "SELECT * FROM instrucoes order by data";
                                    $resultado = mysqli_query($conexao, $lista_visitantes);
                                    while($linha = mysqli_fetch_array($resultado)){
                                     
                                      $data         =$linha['data'];
                                      $sessao       =$linha['sessao'];
                                      $inst_pal     =$linha['inst_pal'];
                                      ?>
                                    <tbody>
                                                <tr>              
                                                    <td><?=$data?></td>
                                                    <td><?=$sessao?></td>
                                                    <td><?=$inst_pal?></td>
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