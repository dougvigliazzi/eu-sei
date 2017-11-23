<html>
<head>
<title> </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<?
$id_casos=$HTTP_GET_VARS['idx'];

//abre conexão com o banco
include "conexao.php";


$sql="select * from usr where id = '$id_casos'";
$reg_query=mysql_query($sql,$conexao);
?>
<body>
<form method="post" action="alterar_user_exe.php" target="_NEW">
  <table width="770" border="0">
    <tr> 
      <td colspan="2"><div align="center"><font size="4" face="Verdana, Arial, Helvetica, sans-serif"><strong>Alterando Registro</strong></font></div></td>
    </tr>
    <tr> 
      <td colspan=2 align="center"> <font size="3" face="Verdana, Arial, Helvetica, sans-serif" color="blue">
        <? while($reg=mysql_fetch_array($reg_query)){; 
		echo "<b>".$reg["nome"]."</b>"; 
	?>
      </td>
    </tr>
    <tr> 
      <td colspan=2 align="center"> <font size="3" face="Verdana, Arial, Helvetica, sans-serif" color="blue">
        Nome: <input type="text" name="nome" size=50 value="<? echo $reg["nome"];?>">
      </td>
    </tr>
    <tr> 
      <td colspan=2 align="center"> <font size="3" face="Verdana, Arial, Helvetica, sans-serif" color="blue">
        Usu&aacute;rio: <input type="text" name="user" size=15 value="<? echo $reg["user"];?>">
      </td>
    </tr>
    <tr> 
      <td align="right"><strong><font size="3" face="Verdana, Arial, Helvetica, sans-serif">Nova Senha:</font></strong></td>
      <td><input type="password" size=15 maxsize=12 name="senha" id="senha" value="<? echo $reg["senha"]; ?>"><strong><font size="3" face="Verdana, Arial, Helvetica, sans-serif"> Confirme:<input type="password" size=15 maxsize=12 name="Csenha" id="senha" value="<? echo $reg["senha"]; ?>"> </font></b>
<input type="hidden" name="id_casos" value="<? echo $reg["id"]; ?>"></td>
    </tr>
          <? }; 
	   $reg_query=null;
	   $reg=null;
	   // fecha conexao com o mysql
	   mysql_close($conexao);
	   ?>
    <tr> 
      <td colspan="4" align="center"><input type="submit" value="Alterar Agora?"></td>
    </tr>
  </table>
</form>

</body>
</html>
