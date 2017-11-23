<?php
$ip=$_SERVER['REMOTE_ADDR'];
$solucao=$_POST['solucao'];
$id_casos=$_POST['id_casos'];
$solucionado=$_POST["solucionado"];

$data=date("d/m/y  h:i");

//abre conexão com o banco
include "conexao.php";

$alterar = "UPDATE caso SET solucao='$solucao',solucionado='$solucionado' WHERE id_casos='$id_casos'";
$error=mysql_error();
$sql = mysql_query($alterar,$conexao) or die ("<h2>Houve erro na gravação dos dados, por favor, clique em voltar!</h2>");

echo "<h1>Altera&ccedil;&atilde;o efetuada com sucesso!</h1>";
echo "$data -- Ação:<b> $alterar </b> || IP: <b>$ip </b><p>";

$incluir_sub=addslashes($alterar);

$incluir="INSERT INTO logs(ip,data,acao,usuario) values('$ip','$hoje','$incluir_sub','$usuario')";
$sql2 = mysql_query($incluir,$conexao); // or die ($error);

// fecha conexao com o mysql
mysql_close($conexao);

$md5f=md5('douglas');
echo "<a href=javascript:history(-1)>Voltar</a>";
//echo $$md5f;
?>
