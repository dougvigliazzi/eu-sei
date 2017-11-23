<html>
<head>
<title> </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<?
//abre conexão com o banco
include "conexao.php";

$id_area=$HTTP_GET_VARS["id_area"];
$usuario=$HTTP_GET_VARS["usuario"];
$id_usuario=$HTTP_GET_VARS["id_usuario"];
?>
<body>
<form method="post" action="inclui_casos_exe.php">
  <table width="770" border="0">
    <tr> 
      <td colspan="4"><div align="center"><font size="4" face="Verdana, Arial, Helvetica, sans-serif"><strong>Incluir Casos</strong></font></div></td>
    </tr>
    <tr> 
      <td colspan=4><font size="3" face="Verdana, Arial, Helvetica, sans-serif">Usu&aacute;rio:<strong> <? echo ucfirst($usuario);?></font></strong></td>
    </tr>
    <tr> 
      <td><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Assunto</font></strong></td>
      <td colspan="3"><input type="text" name="titulo" id="titulo" size=30></td>
    </tr>
    <tr> 
      <td><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Palavras-chave</font></strong></td>
      <td colspan="3"><textarea name="chave" id="chaves" cols=100 rows=2></textarea></td>
    </tr>
    <tr> 
      <td><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Descri&ccedil;&atilde;o </font></strong></td>
      <td colspan="3"><textarea name="problema" id="problema" cols=100 rows=5></textarea></td>
    </tr>
    <tr> 
      <td><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Solu&ccedil;&atilde;o </font></strong></td>
      <td colspan="3"><textarea name="solucao" id="solucao" cols=100 rows=5></textarea></td>
    </tr>
      <td colspan="3><div align="right"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Solucionado</strong></font></div></td>
      <td><select name="solucionado" id="solucionado">
          <option value="s">s</option>
          <option value="n">n</option>
        </select>
	<input type="hidden" name="area" value="<? echo $id_area?>" id="area">
	<input type="hidden" name="id_usuario" value="<? echo $id_usuario?>" id="area">
	<input type="hidden" name="usuario" value="<? echo $usuario?>" id="area">
      </td>
    </tr>
    <tr> 
      <td colspan="4"><input type="submit" value="Incluir"></td>
    </tr>
    <tr bgcolor="#AA043"> 
      <td><Font color="white"><b>Ajuda</b></font></td>      <td colspan="3"><li><Font color="white"><b>Final de Par&aacute;grafo: <b>~</b> ao final da linha;</b></font></li>
	<li><Font color="white"><b>Quebra de linha: <b>+</b> ao final da linha;</b></font></li>
	<li><Font color="white"><b>Negrito: <b> ** </b> e <b> *** </b> Ex.: **teste***;</b></font></li>
      </td>
    </tr>
  </table>
</form>
<? 
// fecha conexao com o mysql
mysql_close($conexao);

?>
</body>
</html>
