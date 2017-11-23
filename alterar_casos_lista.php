<html>

<? 
//abre conexão com o banco
include "conexao.php";
$id_area=$_GET["id_area"];

$consulta="SELECT * FROM caso WHERE solucionado='n' AND id_area = '$id_area' order by titulo";
$resultado=mysql_query($consulta,$conexao);
$totallinhas=mysql_num_rows($resultado);
$cont=1;


echo "<FONT FACE=ARIAL><center>Total de Casos para sua &Aacute;rea: <b>$totallinhas</b>.</center></font><p>\n";
$ii=0;
echo "<hr><table>\n";
while ($reg = mysql_fetch_array($resultado)) {
	echo "<tr  id=linha$ii onMouseOver=\"linha$ii.bgColor='#FFCC66'\" onMouseOut=\"linha$ii.bgColor='#FFFFFF'\" onClick=\"linha$ii.bgColor='#FFCC66'\"><td><a href=alterar_casos.php?hash=", session_id() ,"&data=", $data , "&md5=" ,md5('$usuario'), "&idx=", $reg["id_casos"] ,"></i><img src=imagens/button_edit.png width=20 border=0 alt=\"Solucionar\" title=\"Solucionar\"></a> </td><td> Titulo: <i>",$reg["titulo"],"</i></td><td> Usuario: <i>",$reg["id_usuario"],"</i></td></tr>\n";
	$cont = ++$cont;
	$ii++;
};

// fecha conexao com o mysql
mysql_close($conexao);

?>
</table>
</html>
