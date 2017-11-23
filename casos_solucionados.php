<html>
<head>
<title> </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<?
$id_casos=$_GET['idx'];

//abre conexão com o banco
include "conexao.php";

$sql="select problema, solucao from caso where id_casos = '$id_casos'";
$reg_query=mysql_query($sql,$conexao);
?>
<body>
<form method="post" action="alterar_casos_exe.php">
  <table width="100%" border="1">
    <tr> 
      <td colspan=2><div align="center"><font size="4" face="Verdana, Arial, Helvetica, sans-serif"><strong> Casos Solucionados</strong></font></div></td>
    </tr>
    <tr> 
      <td width="20%" ><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Assunto</font></strong></td>
      <td> 
        <? while($reg=mysql_fetch_array($reg_query)){; 
		$problema = $reg["problema"];
		echo $problema; ?>
      </td>
    </tr>
    <tr> 
      <td><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Solu&ccedil;&atilde;o do Problema</font></strong></td>
      <td><? 
		$solucao = $reg["solucao"];
		echo str_replace('**','<b>',str_replace('***','</b>',str_replace('+','<br>',str_replace('~','<p>',$solucao)))); ?> </td>
    </tr>
          <? }; 
	   $reg_query=null;
	   $reg=null;
	   // fecha conexao com o mysql
	   mysql_close($conexao);
	   ?>
  </table>
</form>

</body>
</html>
