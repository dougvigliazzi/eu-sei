<html>
<head>
<title> </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<?
$id_casos=$_GET['idx'];

//abre conexão com o banco
include "conexao.php";


$sql="select * from caso where id_casos = '$id_casos'";
$reg_query=mysql_query($sql,$conexao);
?>
<body>
<form method="post" action="alterar_casos_exe.php">
  <table width="770" border="0">
    <tr> 
      <td colspan="4"><div align="center"><font size="4" face="Verdana, Arial, Helvetica, sans-serif"><strong>Solucionando Casos</strong></font></div></td>
    </tr>
    <tr> 
      <td><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Assunto</font></strong></td>
      <td colspan="3"> 
        <? while($reg=mysql_fetch_array($reg_query)){; 
		echo "Problema: <b>".$reg["titulo"]; 
		echo "</b> - "; 
		echo " Descri&ccedil;&atilde;o: <b>". $reg["problema"]."</b>"; 
?>
      </td>
    </tr>
    <tr> 
      <td><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Solu&ccedil;&atilde;o <br>do Problema</font></strong></td>
      <td colspan="3"><textarea name="solucao" id="solucao" cols=100 rows=10><? echo $reg["solucao"]; ?></textarea> 
<input type="hidden" name="id_casos" value="<? echo $reg["id_casos"]; ?>">
      </td>
    </tr>
    <tr> 
      <td colspan=3><div align="right"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Solucionado</strong></font></div></td>
      <td><select name="solucionado" id="solucionado">
          <option value="<?php echo $reg["solucionado"];?>"><?php echo $reg["solucionado"];?></option>
          <option value="s">s</option>
          <option value="n">n</option>
        </select></td>
      <? }; 
	   $reg_query=null;
	   $reg=null;
	   // fecha conexao com o mysql
	   mysql_close($conexao);
	   ?>
    </tr>
    <tr> 
      <td colspan="4"><input type="submit" value="Solucionar Agora?"></td>
    </tr>
  </table>
</form>

</body>
</html>
