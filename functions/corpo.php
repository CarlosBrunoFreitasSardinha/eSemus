<?php 
$acao=$_GET["acao"];
if($acao=='1')include("form/form_usuario.php");
if($acao=='2')include("form/form_programa.php");
if($acao=='3')include("form/form_mensagem.php");

if($acao=='4')include("include/select/slt_usuario.php");
if($acao=='5')include("include/select/slt_programas.php");
if($acao=='6')include("include/select/slt_mensagens.php");

?>