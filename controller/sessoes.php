 <?php 
ini_set('default_charset','UTF-8');	
	// obtém os valores digitados

	$palavra = filter_input(INPUT_POST, "palavra", FILTER_SANITIZE_STRING);

	// acesso ao banco de dados
	require("../conexao/conexao.php");

	$resultado = mysqli_query($conexao, "SELECT * FROM semestral WHERE palavra = md5('$palavra')");

	if (mysqli_num_rows($resultado) == 1){ // testa se a consulta retornou algum registro
		while($dados = mysqli_fetch_array($resultado)){
			// usuário e senha corretos. Vamos criar as sessões
			session_start();
	     if($_SESSION['palavra']  	= $dados["palavra"]){
				header("Location: ../view/sessoes.php");
     }
}
}
	else{ // manda de volta para tela de login caso não exista esse usuario
echo "<script>alert('Palavra Semestral Inválida!');window.location='../view/home.php';</script>";
		exit;

	}

?>