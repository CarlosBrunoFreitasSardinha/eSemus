<?php
$nome=$_REQUEST['nome'];
$nivel=$_REQUEST['nivel'];
$rg_usua=$_REQUEST['rg_usua'];

$nome =$_POST["nome_usua"];
$rg   =$_POST['rg_usua'];
$cpf  =$_POST['cpf_usua'];
$fone =$_POST['fone_usua'];
$email=$_POST['email_usua'];
$senha=$_POST['senha_usua'];
$nivel=$_POST['id_permissao'];

$campos="rg_usua,cpf_usua,fone_usua,nome_usua,email_usua,senha_usua,id_permissao";
$valores=" $rg, $cpf,'$fone','$nome','$email',$senha, $nivel";
$tabela="usuario";
$acao='1';
include("../connection.php");
$query="INSERT INTO $tabela($campos)VALUES($valores)";
$SQL=mysql_query($query) or die("Erro no comando SQL: ".mysql_error());

header("Location: ../../index2.php?nome=".$nome."&&nivel=".$nivel."&&rg_usua=$rg_usua&&acao=$acao&&cad=1");
?>