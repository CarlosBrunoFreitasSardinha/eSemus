<?php
$nome=$_REQUEST['nome'];
$nivel=$_REQUEST['nivel'];
$rg_usua=$_REQUEST['rg_usua'];

$titulo=$_POST['titulo_prg'];
$data=$_POST['data_entrega_prg'];
$status=$_POST['status_prg'];
$rg=$_POST['rg_usua'];
$code=$_POST['codigo_prg'];

$campos="titulo_prg,status_prg,data_entrega_prg,codigo_prg,rg_usua";
$valores="'$titulo', $status, '$data', $code, $rg";
$tabela="programa";
$acao='2';
include("../connection.php");

$query="INSERT INTO $tabela($campos)VALUES($valores)";
$SQL=mysql_query($query) or die("Erro no comando SQL: ".mysql_error());

header("Location: ../../index2.php?nome=".$nome."&&nivel=".$nivel."&&rg_usua=$rg_usua&&acao=$acao&&cad=1");
?>