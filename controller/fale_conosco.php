<?php
$email_destino = "admin@obreirosdapaz19.com.br";
if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['mensagem']))
{  
$nome      =  $_POST['nome'];
$email     =  $_POST['email'];
$mensagem  =  $_POST['mensagem'];
}

else
{
	echo "Todos os campos devem ser preenchidos!";
	exit;
}

$msg = "Nome do Usuário: $nome\n";
$msg .= "E-mail: $email\n";
$msg .= "Mensagem: $mensagem";
mail($email_destino, "Mensagem", $msg, "From:$email", "-r $email");
echo "<script>alert('Mensagem enviada com sucesso! Em breve entraremos em contato');document.location='../view/home.php';</script>";
?>



