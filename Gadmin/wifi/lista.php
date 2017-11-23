<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<?
include "menu.php";


$sistema = $_POST["sistema"];
$user = $_POST["nome"];
$nome = $_POST["busca"];

//abre conexão com o banco
include "conexao.php";

$consulta="SELECT * FROM usr ORDER BY nome";
$resultado=mysql_query($consulta, $conexao);
$totallinhas=mysql_num_rows($resultado);
$cont=1;

echo "<FONT FACE=ARIAL><center>Total de registros: <b>$totallinhas</b>.</center></font><p>\n";
$ii=0;
echo "<hr><table>\n";
while ($reg = mysql_fetch_array($resultado)) {
	echo "<tr  id=linha$ii onMouseOver=\"linha$ii.bgColor='#FFCC66'\" onMouseOut=\"linha$ii.bgColor='#FFFFFF'\" onClick=\"linha$ii.bgColor='#FFCC66'\"><td><a href=alterar_user.php?hash=", session_id() ,"&data=", $data , "&md5=" ,md5('$username'), "&idx=", $reg["id"] ,"><img src=../imagens/icones/editar.svg border=0 Title=Alterar></a> </td><td><a href=excluir_user_exe.php?hash=", session_id() ,"&data=", $data , "&md5=" ,md5('$username'), "&idx=", $reg["id"] ,"></i><img src=../imagens/icones/excluir.svg border=0 Title=Excluir></a> </td><td> Nome: <i>",$reg["nome"],"</i></td><td> Usu&aacute;rio: <i>",$reg["user"],"</i></td><td> Senha: <i>",$reg["chave"],"</i></td></tr>\n";
	$cont = ++$cont;
	$ii++;
};
// fecha conexao com o mysql
mysql_close($conexao);
?>
</table>
</html>
