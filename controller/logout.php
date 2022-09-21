<?php 

	// renicia a sessão
	session_start();
	// se você não estiver usando o array $_SESSION, use session_unset()
	#$_SESSION = array();
	// Destrói a sessão por segurança
	session_destroy();
	// Redireciona o visitante de volta pro login

	header("Location: ../view/home.php");
	exit;

?>