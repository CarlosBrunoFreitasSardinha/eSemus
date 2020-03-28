<?php

$tabela="usuario";
include("include/connection.php");

$query="SELECT * FROM $tabela;";
$SQL=mysql_query($query) or die("Erro no comando SQL: ".mysql_error());
$k=mysql_num_rows($SQL);
if($k>0){
		echo "<table width=\"585\"border=\"0\">
				<tr><td colspan=\"8\" bgcolor=\"#000000\" align=\"center\"><font color=\"#FFFFFF\"><b>$tabela</td></tr><br>
				<tr><td>&nbsp;</td>
					<td>&nbsp;</td>
				<td><font color=\"#000099\" size=\"2\"><b>RG</td>
				<td><font color=\"#000099\" size=\"2\"><b>CPF</td>
				<td><font color=\"#000099\" size=\"2\"><b>Nome</td>
				<td><font color=\"#000099\" size=\"2\"><b>email</td>
				<td><font color=\"#000099\" size=\"2\"><b>Telefone</td>
				<td><font color=\"#000099\" size=\"2\"><b>Tipo Usuário</td></tr>";
	while ($sql=mysql_fetch_array($SQL)){
				
		if(($e%2)==0)$cor='#EBEBEB';
		else $cor='#CAC8C8';
		echo"<tr bgcolor=\"$cor\" onMouseOut=\"this.style.background=''\"  onmouseover=\"this.style.background='#AEDDCE';\">";
				echo "<td><center><font size=\"2\"><b><a href=\"index.php?acao=$VC&&id=".$sql['rg_usua']."\">
				<img width=\"15\" heigth=\"15\" src=\"imagens/b_edit.png\"></a>&nbsp;&nbsp;</td>
			<td><center><font size=\"2\"><b><a href=\"index.php?acao=$VC&&id=".$sql['rg_usua']."\">
				<img width=\"15\" heigth=\"15\" src=\"imagens/b_drop.png\"></a>&nbsp;&nbsp;</td>
				<td><font color=\"#000099\" size=\"2\"><b>".$sql['rg_usua']."</td>
				<td><font color=\"#000099\" size=\"2\"><b>".$sql['cpf_usua']."</td>
				<td><font color=\"#000099\" size=\"2\"><b>".$sql['nome_usua']."</td>
				<td><font color=\"#000099\" size=\"2\"><b>".$sql['email_usua']."</td>
				<td><font color=\"#000099\" size=\"2\"><b>".$sql['fone_usua']."</td>
				<td><font color=\"#000099\" size=\"2\"><b>".$sql['id_permissao']."</td>";
			echo"</tr>";
		}
	}echo "</table>";

?>