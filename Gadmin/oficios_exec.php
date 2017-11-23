<html>
<head>
<script type="text/javascript">
function fecha(){
	window.close(self);
}
setTimeout("fecha()",1000);
</script>
</head>

<?php
$qtde=$_POST['qtde'];
$setor=$_POST['setor'];
$codigo=$_POST['codigo'];
$user=$_POST['user'];
$assunto=$_POST['assunto'];
$ip=$_SERVER['REMOTE_ADDR'];

$ano=date("y");

//abre conexão com o banco
include "conexao.php";

for($i=1;$i<=$qtde;$i++){
	$inserir = "INSERT INTO oficios2(codigo,anodig, setor, nome, assunto, data, hora, ip) VALUES('$codigo','$ano','$setor','$user','$assunto',CURDATE(), CURTIME(),'$ip')";
	$sql = mysql_query($inserir,$conexao) or die (mysql_error());//("<h2>Houve erro na gravação dos dados, por favor, clique em voltar!</h2>");
	$codigo++;
}

echo "<h1>Incluido com sucesso!</h1>";
$codigoN = $codigo - 1;
//ATUALIZA NUMERACAO
$sql = "UPDATE numeros2 SET numofic = '$codigoN'";
$executa = mysql_query($sql) or die ("Não foi possível realizar a operação");

// fecha conexao com o mysql
mysql_close($conexao);
?>
