<table width="582" border="0">
<form action="<?php include("constantes.php"); echo $CAD_P;?>" method="post">
<tr>
	<td width="580" colspan="4"><center>Cadastro Programas</td></tr>

	<tr>
	<td>Titulo Projeto:</td>
	<td colspan="3"><input type="text" size="66" maxlength="45" name="titulo_prg"/></td></tr>
	<tr>
	<td>Data Entrega </td>
	<td><input type="text" size="24" maxlength="8" name="data_entrega_prg"/></td>
	<td>Status:</td>
	<td><input type="radio" name="status_prg" value="1"/>Sim
		<input type="radio" name="status_prg" value="2"/>Não</td></tr>
	<tr>
	<td>Responsavel:</td>
	<td><select name="rg_usua"><?php
		include("include/connection.php");
		$query = "SELECT * FROM usuario;";
		$resultado = mysql_query($query)or die("Erro No Comando SQL:".mysql_error());
		while ($SQL=mysql_fetch_array($resultado)){
				echo "<option value=\"".$SQL['rg_usua']."\">".$SQL['nome_usua']."</option>";
		}?>
	</select></td>
	<td>C&oacute;digo:</td>
	<td><input type="text" size="15" maxlength="15" name="codigo_prg"/></td></tr>
	<tr>
	<td colspan="2"><input type="submit" value="Cadastrar"/></td>
	<td colspan="2"><input type="reset" value="Cancelar"/></td></tr>
</table>
		<?php
			if(isset($_GET["cad"])){
				if($_GET["cad"] == 1)echo "Cadastro Realiza com Sucesso.";
			}?>