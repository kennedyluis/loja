<?php
$servidor 	= "localhost";
$usuario 	= "root";
$senha 		= "";
$banco 		= "obreiros";

$conexao 	= mysqli_connect($servidor, $usuario, $senha, $banco) or die ("Não foi possível se Conectar com o Mysql: ".mysqli_error()); 
?>