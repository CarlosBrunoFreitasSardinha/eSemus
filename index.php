<html>
<head>
<title>.:E-SEMUS:.</title>

</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<center>
<form method="post" action="include/verifica.php">
			<table background="images/fundo.gif" width="284" height="426">
				<tr><td colspan="2">&nbsp;</td>
				</tr>
				<tr><td colspan="2">&nbsp;<center>Dados Usuário</td>
				</tr>
				<tr height="25">
					<td> Login: </td>
					<td><input type="text" name="login"></td>
				</tr>
				<tr height="25">
					<td> Senha: </td>
					<td><input type="password" name="senha"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="enviar"></td>
				</tr>
			</table>
</form>
		<?php
			if(isset($_GET["erro"])){
				if($_GET["erro"] == 1){
					echo "Login ou Senha inválidos.";
				}
				if($_GET["erro"] == 2){
					echo "Erro na execução da consulta, verifique o BD.";
				}
				unset($_GET["erro"]);
			}
		?>	

</body>
</html>