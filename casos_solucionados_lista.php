<html>

<? 
//abre conexão com o banco
include "conexao.php";
$id_area=$_GET["id_area"];

$consulta="SELECT * FROM caso WHERE id_area='$id_area' AND solucionado='s' order by titulo ASC";
$resultado=mysql_query($consulta,$conexao);
$totallinhas=mysql_num_rows($resultado);
$cont=1;


echo "<FONT FACE=ARIAL><center>Total de Casos Solucionados para sua &Aacute;rea: <b>$totallinhas</b>.</center></font><p>\n";
$ii=0;
echo "<hr><table>\n";
while ($reg = mysql_fetch_array($resultado)) {
	echo "<tr  id=linha$ii onMouseOver=\"linha$ii.bgColor='#FFCC66'\" onMouseOut=\"linha$ii.bgColor='#FFFFFF'\" onClick=\"linha$ii.bgColor='#FFCC66'\"><td><a href=alterar_casos.php?&idx=", $reg["id_casos"] ,"><img src=../imagens/icones/editar.svg border=0 width=20 Title=Alterar></a> </td><td><font face='verdana, arial, helvetica' size=2><a href=casos_solucionados.php?hash=", session_id() ,"&data=", $data , "&md5=" ,md5('$usuario'), "&idx=", $reg["id_casos"] ,">",$reg["titulo"],"</a></td><td> Usuario: <i>",$reg["id_usuario"],"</i></td></tr>\n";
	$cont = ++$cont;
	$ii++;
};

// fecha conexao com o mysql
mysql_close($conexao);

?>
</table>
</html>
