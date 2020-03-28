<table width="582" border="0">
<form action="<?php include("constantes.php"); echo $CAD_M;?>" method="post">
<tr>
	<td colspan="4"><center>Envio de Mensagens</td>
</tr>
	<tr>
	<td>Programa:</td>
	<td colspan="3"><select name="codigo_prg"><?php
		include("include/connection.php");
		$query = "SELECT * FROM programa;";
		$resultado = mysql_query($query)or die("Erro No Comando SQL:".mysql_error());
		$d=0;
		while ($SQL=mysql_fetch_array($resultado)){
				echo "<option value=\"".$SQL['codigo_prg']."\">".$SQL['titulo_prg']."</option>";
		}
		?>
	</select></td>
	</tr>
	<tr>
	<td width="107">Remetente:</td>
	<td width="142" colspan="3">
	<?php
		$nome =$_REQUEST['nome'];
		$rg_u =$_REQUEST['rg_usua'];
		echo $nome;
		echo "<input type=\"hidden\" name=\"remetente_msg\" value=\"$rg_u\"/>";?>
	<?php  
	$ref=$_GET['usuario'];
	echo $ref;?></td>
	</tr>	<tr>
	<td>C&oacute;digo:</td>
	<td colspan="3"><textarea name="mensagem_msg" cols="40" rows="6"></textarea></td>
	</tr>
	<tr>
	<td colspan="2"><input type="submit" value="Enviar"/></td>
	<td colspan="2"><input type="reset" value="Cancelar"/></td></tr>

</table>
		<?php
			if(isset($_GET["cad"])){
				if($_GET["cad"] == 1)echo "Mensagem Enviada com Sucesso.";
				if($_GET["cad"] == 2)echo "Ocorreu algum erro... Tente novamente.";
			}?>