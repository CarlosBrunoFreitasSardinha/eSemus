<?php

$rg=$_REQUEST['rg_usua'];
$tabela="usuario";
include("include/connection.php");
$query="SELECT * FROM $tabela";
$SQL=mysql_query($query) or die("Erro no comando SQL: ".mysql_error());
$qt=mysql_num_rows($SQL);

for ($a=0;$a<$qt;$a++){
	$Sql=mysql_fetch_array($SQL);
	$linha[$a]['0']=$Sql['rg_usua'];
	$linha[$a]['1']=$Sql['nome_usua'];
}

$tabela="programa";
include("include/connection.php");
$query="SELECT * FROM $tabela WHERE rg_usua=$rg";
$SQL=mysql_query($query) or die("Erro no comando SQL: ".mysql_error());
	$Sql=mysql_fetch_array($SQL);
	$linha1[$a]['1']=$Sql['titulo_prg'];

$tabela="mensagem";
include("include/connection.php");
$query="SELECT * FROM $tabela WHERE rg_usua=$rg";
$SQL=mysql_query($query) or die("Erro no comando SQL: ".mysql_error());
$k=mysql_num_rows($SQL);
if($k>0){
		echo "<table width=\"585\"border=\"0\">
				<tr><td colspan=\"6\" bgcolor=\"#000000\" align=\"center\"><font color=\"#FFFFFF\"><b>$tabela</td></tr><br>
				<tr><td>&nbsp;</td>
					<td>&nbsp;</td>
				<td><font color=\"#000099\" size=\"2\"><center><b>Código</td>
				<td><font color=\"#000099\" size=\"2\"><center><b>Remetente</td>
				<td><font color=\"#000099\" size=\"2\"><center><b>Referente ao Projeto</td>
				<td><font color=\"#000099\" size=\"2\"><center><b>status</td></tr>";
	while ($sql=mysql_fetch_array($SQL)){
		if(($e%2)==0)$cor='#EBEBEB';
		else $cor='#CAC8C8';
		echo"<tr bgcolor=\"$cor\" onMouseOut=\"this.style.background=''\"  onmouseover=\"this.style.background='#9EDAB0';\">";
		echo "<td><center><b><a href=\"index.php?acao=$VC&&id=".$sql['id_msg']."\">
				<img width=\"15\" heigth=\"15\" src=\"imagens/b_edit.png\"></a>&nbsp;&nbsp;</td>
			<td><center><b><a href=\"index.php?acao=$VC&&id=".$sql['id_msg']."\">
				<img width=\"15\" heigth=\"15\" src=\"imagens/b_drop.png\"></a>&nbsp;&nbsp;</td>";
				echo"</td><td><font color=\"#000099\" size=\"2\"><b>".$sql['id_msg']."</td>";
				echo "<td><font color=\"#000099\" size=\"2\"><b>";
				for ($a=0;$a<$qt;$a++){
					if ($linha[$a][0]==$sql['remetente_msg']){
						echo $linha[$a][1];
					 }
				 }
				echo"</td><td><font color=\"#000099\" size=\"2\"><b>".$linha1[$a][1];
				echo "<td><font color=\"#000099\" size=\"2\"><b><center>";
				
				if($sql['status_prg']==1)echo "<img width=\"15\" heigth=\"15\" src=\"imagens/C.jpg\">";
				else echo "<img width=\"15\" heigth=\"15\" src=\"imagens/E.jpg\">";
				
				echo "</a>&nbsp;&nbsp;</td>";
			echo"</tr>";}
	}echo "</table>";
?>