<html>
<head>
<title>Completo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body oncontextmenu="return false" ondragstart="return false" onselectstart="return false" onview="return false">
<?
$ip=$_SERVER['REMOTE_ADDR'];
$chave=$_POST["chave"];
$titulo=$_POST["titulo"];
$problema=$_POST["problema"];
$solucao=$_POST["solucao"];
$solucionado=$_POST['solucionado'];
$id_area=$_POST["area"];
$usuario=$_POST["usuario"];
$id_usuario=$_POST["id_usuario"];


//abre conexão com o banco
include "conexao.php";


$hoje = date("d/m/Y - h:i");

$erro = mysql_error();

echo "Ch $chave - Ti $titulo - Pr $problema - Sol $solucao  - SN $solucionado - Ar $id_area - IdU $id_usuario - U $usuario - Dt $hoje - 10 $ip";

$incluir="INSERT INTO caso(id_area,p_chaves,titulo,problema,solucao,solucionado,id_usuario) VALUES('$id_area',UCASE('$chave'),UCASE('$titulo'),'$problema','$solucao','$solucionado','$id_usuario')";
$sql = mysql_query($incluir) or die ("<h2>Problemas durante a inclusão 1. $erro</h2>");

$incluir_sub=addslashes($incluir);

$incluir_log="INSERT INTO logs(ip,data,acao,usuario) values('$ip','$hoje','$incluir_sub','$usuario')";
$sql_l = mysql_query($incluir_log,$conexao)  or die ($erro);

// fecha conexao com o mysql
//mysql_close($conexao);

echo "<h1>Inclusão efetuada com sucesso!</h1>";
echo "<a href='Javascript:history.go(-1)'><< Voltar</a>";

?>
</body>
</html>
