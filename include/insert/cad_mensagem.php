<?php include("../../constantes.php");
	  include("../connection.php");
	$nome=$_REQUEST['nome'];
	$nivel=$_REQUEST['nivel'];
	$rg_usua=$_REQUEST['rg_usua'];
$code=$_POST['codigo_prg'];
$remetente=$_POST['remetente_msg'];
$mensage=$_POST['mensagem_msg'];
$acao=$CM;
$tabela="programa";

$query="SELECT rg_usua FROM $tabela WHERE codigo_prg = $code";
$SQL=mysql_query($query) or die("Erro no comando SQL: ".mysql_error());

	
if (mysql_num_rows($SQL)>0){
	$sql=mysql_fetch_array($SQL);
	$destinatario=$sql['rg_usua'];
	
	$campos="codigo_prg,remetente_msg,mensagem_msg,rg_usua";
	$valores="$code, $remetente, '$mensage',$destinatario";
	$tabela="mensagem";

	$query="INSERT INTO $tabela($campos)VALUES($valores)";
	$SQL=mysql_query($query) or die("Erro no comando SQL: ".mysql_error());
	header("Location: ../../index2.php?nome=".$nome."&&nivel=".$nivel."&&rg_usua=$rg_usua&&acao=$acao&&cad=1");
	}
	else header("Location: ../../index2.php?nome=".$nome."&&nivel=".$nivel."&&rg_usua=$rg_usua&&acao=$acao&&cad=2");
?>