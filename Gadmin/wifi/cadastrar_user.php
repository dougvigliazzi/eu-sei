<html>
<head>
<title> </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<script>
function checaSenha(form) {
	pw1 = form.senha.value;
	pw2 = form.Csenha.value;

	if (pw1 != pw2) {
		alert ("\nAs duas senhas devem ser identicas.")
	return false;
	}else return true;
}
</script>

<body>
<form method="post" onSubmit="return checaSenha(this)" action="cadastrar_user_exe.php">
  <table width="770" border="0">
    <tr> 
      <td colspan="2"><div align="center"><font size="4" face="Verdana, Arial, Helvetica, sans-serif"><strong>Cadastro - Novo Usu&aacute;rio</strong></font></div></td>
    </tr>
    <tr> 
      <td align="right"> <font size="3" face="Verdana, Arial, Helvetica, sans-serif">
	Nome:</td><td> <input type="text" size=30 name="nomereal" />
      </td>
    </tr>
    <tr> 
      <td align="right"><font size="3" face="Verdana, Arial, Helvetica, sans-serif">
	Login:</td><td> <input type="text" size=17 maxsize=15 name="username" />
      </td>
    </tr>
    <tr> 
      <td align="right"><strong><font size="3" face="Verdana, Arial, Helvetica, sans-serif">Senha:</font></strong></td>
      <td><input type="password" size=15 maxsize=12 name="senha" id="senha"><strong><font size="3" face="Verdana, Arial, Helvetica, sans-serif"> Confirme:<input type="password" size=15 maxsize=12 name="Csenha" id="Csenha"> </font></b>
<input type="hidden" name="id_user" value="<? echo $reg["id"]; ?>"></td>
    </tr>
    <tr> 
      <td align="right"><font size="3" face="Verdana, Arial, Helvetica, sans-serif">
	Nome PC:</td><td> <input type="text" size=17 maxsize=15 name="pcnome" />
      </td>
    </tr>
    <tr> 
      <td align="right"><font size="3" face="Verdana, Arial, Helvetica, sans-serif">
	Apelido:</td><td> <input type="text" size=17 maxsize=15 name="apelido" />
      </td>
    </tr>
    <tr> 
      <td colspan="4" align="center"><input type="submit" value="Cadastrar Agora?" name="sub"></td>
    </tr>
  </table>
</form>

</body>
</html>
