<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<?
$sistema = $_POST["sistema"];
$user = $_POST["nome"];

$nome = $_POST["busca"];

include "menuU.php";

//abre conexão com o banco
include "conexao.php";
?>
<center>
<form method=post>
	Filtrar: <input name="busca" type="text" size=25 />
	<input type="hidden" value="<? echo $user;?>" name="nome" />
	<input type="hidden" value="<? echo $sistema;?>" name="sistema" />
	<input type="submit" value="Procurar" />
</form>
</center><hr>
<?
$consulta="SELECT * FROM radcheck WHERE Apelido LIKE '$sistema' AND (NomeReal LIKE '%$nome%' OR UserName LIKE '%$nome%') ORDER BY UserName";
$resultado=mysql_query($consulta, $conexao);
$totallinhas=mysql_num_rows($resultado);
$cont=1;

echo "<FONT FACE=ARIAL><center>$user - $sistema - Total de registros: <b>$totallinhas</b>.</center></font><p>\n";
$ii=0;
echo "<hr><table>\n";
while ($reg = mysql_fetch_array($resultado)) {
	echo "<tr  id=linha$ii onMouseOver=\"linha$ii.bgColor='#FFCC66'\" onMouseOut=\"linha$ii.bgColor='#FFFFFF'\" onClick=\"linha$ii.bgColor='#FFCC66'\"><td><a href=excluir_user_univesp_exe.php?hash=", session_id() ,"&data=", $data , "&md5=" ,md5('$username'), "&idx=", $reg["id"] ,"&nome=",$user,"&sistema=",$sistema,"></i><img src=../imagens/icones/excluir.svg border=0 Title=Excluir></a> </td><td> Nome: <i>",$reg["NomeReal"],"</i></td><td> Usu&aacute;rio: <i>",$reg["UserName"],"</i></td><td> Senha: <i>",$reg["Value"],"</i></td><td> PC Nome: <i>",$reg["PCNome"],"</i></td><td> <i>",$reg["Apelido"],"</i></td></tr>\n";
	$cont = ++$cont;
	$ii++;
};
// fecha conexao com o mysql
mysql_close($conexao);
?>
</table>
</html>
