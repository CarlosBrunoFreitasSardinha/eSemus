<?php

$tabela="programa";
include("include/connection.php");

$query="SELECT * FROM $tabela;";
$SQL=mysql_query($query) or die("Erro no comando SQL: ".mysql_error());
$k=mysql_num_rows($SQL);
if($k>0){
		echo "<table width=\"585\"border=\"0\">
				<tr><td colspan=\"7\" bgcolor=\"#000000\" align=\"center\"><font color=\"#FFFFFF\"><b>$tabela</td></tr><br>
				<tr><td>&nbsp;</td>
					<td>&nbsp;</td>
				<td><font color=\"#000099\" size=\"2\"><b>C�digo</td>
				<td><font color=\"#000099\" size=\"2\"><b>RG</td>
				<td><font color=\"#000099\" size=\"2\"><b>Titlulo</td>
				<td><font color=\"#000099\" size=\"2\"><b>Data Entrega</td>
				<td><font color=\"#000099\" size=\"2\"><b>status</td></tr>";
	while ($sql=mysql_fetch_array($SQL)){
		if(($e%2)==0)$cor='#EBEBEB';
		else $cor='#CAC8C8';
		echo"<tr bgcolor=\"$cor\" onMouseOut=\"this.style.background=''\"  onmouseover=\"this.style.background='#AEDDCE';\">";
		echo "<td><center><b><a href=\"index.php?acao=$VC&&id=".$sql['codigo_prg']."\">
				<img width=\"15\" heigth=\"15\" src=\"imagens/b_edit.png\"></a>&nbsp;&nbsp;</td>
			<td><center><b><a href=\"index.php?acao=$VC&&id=".$sql['codigo_prg']."\">
				<img width=\"15\" heigth=\"15\" src=\"imagens/b_drop.png\"></a>&nbsp;&nbsp;</td>
				<td><font color=\"#000099\" size=\"2\"><b>".$sql['codigo_prg']."</td>
				<td><font color=\"#000099\" size=\"2\"><b>".$sql['rg_usua']."</td>
				<td><font color=\"#000099\" size=\"2\"><b>".$sql['titulo_prg']."</td>
				<td><font color=\"#000099\" size=\"2\"><b>".$sql['data_entrega_prg']."</td>
				<td><font color=\"#000099\" size=\"2\"><b><center><a href=\"index.php?acao=$VC&&id=".$sql['codigo_prg']."\">";
				if($sql['status_prg']==1)echo "<img width=\"15\" heigth=\"15\" src=\"imagens/C.jpg\">";
				else echo "<img width=\"15\" heigth=\"15\" src=\"imagens/E.jpg\">";
				echo "</a>&nbsp;&nbsp;</td>";
			echo"</tr>";}
	}echo "</table>";
?>