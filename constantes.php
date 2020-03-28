<?php
	$nome=$_REQUEST['nome'];
	$nivel=$_REQUEST['nivel'];
	$rg_usua=$_REQUEST['rg_usua'];
	
// FORMULARIOS
$CU='1';//FORMULARIO USUARIO
$CP='2';//FORMULARIO PROGRAMAS
$CM='3';//FORMULARIO MENSAGEM

//INSERIR DADOS
$CAD_U="include/insert/cad_usuario.php?nome=".$nome."&&nivel=".$nivel."&&rg_usua=$rg_usua";//CADASTRO USUARIO
$CAD_P="include/insert/cad_programas.php?nome=".$nome."&&nivel=".$nivel."&&rg_usua=$rg_usua";//CADASTRO PROGRAMAS
$CAD_M="include/insert/cad_mensagem.php?nome=".$nome."&&nivel=".$nivel."&&rg_usua=$rg_usua";//CADASTRO MENSAGENS

// SELCTION`s
$SU='4';//FORMULARIO USUARIO
$SP='5';//FORMULARIO PROGRAMAS
$SM='6';//FORMULARIO MENSAGEM
/*

$C='form/form_';//CADASTRO USUARIO
$C='form/form_';//CADASTRO MENSAGEM
$C='form/form_';//CADASTRO FALE CONOSCO
$C='form/form_';//CADASTRO RELATORIOS

//UPDATES
$UP='include/update/up_';//UP
$UP='include/update/alt_';//ALT_


//FUNCOES
$F_='funcoes/';//CADASTRO 
*/
?>