<?php
ini_set('default_charset','UTF-8');
$email_destino = "l.carvalhoadv@bol.com.br";
if (isset($_POST['nome']) && isset($_POST['loja']) && isset($_POST['potencia']) && isset($_POST['oriente']) && isset($_POST['celular']) && isset($_POST['classe']))
{  
$nome      =  $_POST['nome'];
$loja      =  $_POST['loja'];
$potencia  =  $_POST['potencia'];
$oriente   =  $_POST['oriente'];
$celular   =  $_POST['celular'];
$email     =  $_POST['email'];
$end       =  $_POST['end'];
$numero    =  $_POST['numero'];
$compl     =  $_POST['compl'];
$bairro    =  $_POST['bairro'];
$cep       =  $_POST['cep'];
$cidade    =  $_POST['cidade'];
$classe    =  $_POST['classe'];
}

else
{
	echo "Os campos obrigatórios devem ser preenchidos!";
	exit;
}
$msg = "Nome: $nome\n";
$msg .= "Loja: $loja\n";
$msg .= "Potêmcia: $potencia\n";
$msg .= "Oriente: $oriente\n";
$msg .= "Celular: $celular\n";
$msg .= "E-mail: $email\n";
$msg .= "Endereço: $end\n";
$msg .= "Nº: $numero\n";
$msg .= "Complemento: $compl\n";
$msg .= "Bairro: $bairro\n";
$msg .= "CEP: $cep\n";
$msg .= "Cidade: $cidade\n";
$msg .= "Classe: $classe\n";

$msg .= "Nome: $nome";
mail($email_destino, "Nome", $msg, "From:$email", "-r $email");
echo "<script>alert('Formulário enviado com sucesso! Obrigado por fazer parte deste projeto');document.location='../view/home.php';</script>"
?>

