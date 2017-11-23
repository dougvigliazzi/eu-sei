<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script>
function fecha(){
window.close(self);
}
setTimeout("fecha()",1000);
</script>
</head>

<?php
$ip=$HTTP_SERVER_VARS['REMOTE_ADDR'];
$senha=$HTTP_POST_VARS['senha'];
$nome=$HTTP_POST_VARS['nome'];
$username=$HTTP_POST_VARS['user'];
$id_casos=$HTTP_POST_VARS['id_casos'];

$data=date("d/m/y  h:i");

//abre conexão com o banco
include "conexao.php";

echo $nome."-".$senha;

$alterar = "UPDATE usr SET nome='$nome', user='$username', chave='$senha' WHERE id='$id_casos'";
$error=mysql_error();
$sql = mysql_query($alterar,$conexao) or die ("<h2>Houve erro na gravação dos dados, por favor, clique em voltar!</h2>");

echo "<h1>Altera&ccedil;&atilde;o efetuada com sucesso!</h1>";


// fecha conexao com o mysql
mysql_close($conexao);

$md5f=md5('douglas');
echo "<a href=lista.php>Voltar</a>";
//echo $$md5f;
?>
