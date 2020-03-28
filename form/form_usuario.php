<table width="582" border="0">
<tr>
	<td width="580" colspan="4"><center>Cadastro Usuários</td></tr>
<form action="<?php include("constantes.php"); echo $CAD_U;?>" method="post">
	<tr>
	<td>Nome Completo:</td>
	<td colspan="3"><input type="text" size="66" maxlength="45" name="nome_usua"/></td></tr>
	<tr>
	<td>RG:</td>
	<td><input type="text" size="24" maxlength="8" name="rg_usua"/></td>
	<td>CPF:</td>
	<td><input type="text" size="25" maxlength="15" name="cpf_usua"/></td></tr>
	<tr>
	<td>fone</td>
	<td><input type="text" size="24" maxlength="8" name="fone_usua"/></td>
	<td>Email:</td>
	<td><input type="text" size="25" maxlength="25" name="email_usua"/></td></tr>
	<tr>
	<td>Senha</td>
	<td><input type="password" size="24" maxlength="8" name="senha_usua"/></td>
	<td>Tipo</td>
	<td><select name="id_permissao"><?php
		include("include/connection.php");
		$query = "SELECT * FROM permissoes;";
		$resultado = mysql_query($query)or die("Erro No Comando SQL:".mysql_error());
		while ($SQL=mysql_fetch_array($resultado)){
				echo "<option value=\"".$SQL['id_permissao']."\">".$SQL['desc_permissao']."</option>";
		}
		?>
	</select></td></tr>
	<tr>
	<td colspan="2"><input type="submit" value="Enviar"/></td>
	<td colspan="2"><input type="reset" value="Cancelar"/></td></tr>

</table>
		<?php
			if(isset($_GET["cad"])){
				if($_GET["cad"] == 1)echo "Cadastro Realiza com Sucesso.";
			}?>