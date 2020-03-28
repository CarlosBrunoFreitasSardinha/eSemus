<html>
<head >
<title>menu</title>
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<?php include("constantes.php");?>
<table width="178" height="302" border="0" cellpadding="0" cellspacing="0">
	<tr valign="top">
		<td width="178">
			<ul>
				<?php
					$nome=$_REQUEST['nome'];
					$nivel=$_REQUEST['nivel'];
					$rg_usua=$_REQUEST['rg_usua'];?>
				<li>
				<?php
					echo "<a href=\"index2.php?nome=".$nome."&&nivel=".$nivel."&&rg_usua=$rg_usua&&acao=$CM\">"; ?>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Criar Mensagens</a></li>
				<li>
				<?php
					echo "<a href=\"index2.php?nome=".$nome."&&nivel=".$nivel."&&rg_usua=$rg_usua\">"; ?>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Relatórios</a><ul id="sub">
					<li>
							<?php
								echo "<a href=\"index2.php?nome=".$nome."&&nivel=".$nivel."&&rg_usua=$rg_usua&&acao=$SP\">"; ?>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Programa Cadastrados</a></li>
							<?php
								echo "<a href=\"index2.php?nome=".$nome."&&nivel=".$nivel."&&rg_usua=$rg_usua&&acao=$\">"; ?>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Programa Entreges</a></li><li>
							<?php
								echo "<a href=\"index2.php?nome=".$nome."&&nivel=".$nivel."&&rg_usua=$rg_usua&&acao=$\">"; ?>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Programa Atrazados</a></li>
								</ul></li><li>
				<?php
					echo "<a href=\"index2.php?nome=".$nome."&&nivel=".$nivel."&&rg_usua=$rg_usua\">"; ?>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cadastrar</a><ul id="sub"><li>
							<?php
								echo "<a href=\"index2.php?nome=".$nome."&&nivel=".$nivel."&&rg_usua=$rg_usua&&acao=$CU\">"; ?>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Usuário</a></li>
							<?php
								echo "<a href=\"index2.php?nome=".$nome."&&nivel=".$nivel."&&rg_usua=$rg_usua&&acao=$CP\">"; ?>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Programa</a></li>
								</ul></li>
				<li>
				<?php
					echo "<a href=\"index2.php?nome=".$nome."&&nivel=".$nivel."&&rg_usua=$rg_usua\">"; ?>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vizualizar</a><ul id="sub"><li>
							<?php
								echo "<a href=\"index2.php?nome=".$nome."&&nivel=".$nivel."&&rg_usua=$rg_usua&&acao=$SU\">"; ?>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Usuário</a></li>
							<?php
								echo "<a href=\"index2.php?nome=".$nome."&&nivel=".$nivel."&&rg_usua=$rg_usua&&acao=$SP\">"; ?>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Programa</a></li>
							<?php
								echo "<a href=\"index2.php?nome=".$nome."&&nivel=".$nivel."&&rg_usua=$rg_usua&&acao=$SM\">"; ?>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mensagens</a></li></ul></li>
			</ul>
			</td>
	</tr>
</table>
</body>
</html>