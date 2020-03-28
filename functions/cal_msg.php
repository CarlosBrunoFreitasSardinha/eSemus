<?php
$rg=$_REQUEST['rg_usua'];
$tabela="mensagem";
include("include/connection.php");
$query="SELECT * FROM $tabela WHERE rg_usua=$rg";
$SQL=mysql_query($query) or die("Erro no comando SQL: ".mysql_error());
$k=mysql_num_rows($SQL);
echo "($k)";
?>