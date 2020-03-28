<?php
// Inicia sessѕes 
session_start(); 

// Recupera o login 
$login = isset($_POST["login"]) ? addslashes(trim($_POST["login"])) : FALSE; 
// Recupera a senha, a criptografando em MD5 
$senha = isset($_POST["senha"]) ? md5(trim($_POST["senha"])) : FALSE; 

	include ("connection.php");
	$query = "SELECT count(*) AS quant FROM usuario WHERE rg_usua='$_POST[login]' AND senha_usua='$_POST[senha]'";
	$resultado = mysql_query($query)or die("Erro No Comando SQL:".mysql_error());
	
	if($resultado){//significa que a consulta foi executada com sucesso;
		$linha = mysql_fetch_array($resultado);
		if($linha["quant"] == "1"){//encontrou um usuario com o Login e Senha iguais ao fornecido
			include ("connection.php");
			$query = "SELECT * FROM usuario WHERE rg_usua='$_POST[login]' AND senha_usua='$_POST[senha]'";
			$resultado = mysql_query($query)or die("Erro No Comando SQL:".mysql_error());
		 	$SQL=mysql_fetch_array($resultado);
			header("location: ../index2.php?nome=".$SQL['nome_usua']."&&nivel=".$SQL['id_permissao']."&&rg_usua=".$SQL['rg_usua']);
		}else{//nуo encontrou um usuario, Login ou Senha errados
			header("location: ../index.php?erro=1");
		}
	}else{
		//significa que deu erro na execuчуo da consulta ou no BD
		header("location: ../index.php?erro=2");
	}
?>