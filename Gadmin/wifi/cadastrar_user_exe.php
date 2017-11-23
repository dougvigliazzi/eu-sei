<?php
$nomereal=$_POST['nomereal'];
$username=$_POST['username'];
$senha=$_POST['senha'];
$ip=$_SERVER['REMOTE_ADDR'];

$data=date("d/m/y  h:i");

//abre conexão com o banco
include "conexao.php";

$alterar = "INSERT INTO usr(user, chave, nome,sistema,nivel) VALUES('$username','$senha','$nomereal','intranet','9')";
$error=mysql_error();
$sql = mysql_query($alterar,$conexao) or die ("<h2>Houve erro na gravação dos dados, por favor, clique em voltar!</h2>");

echo "<h1>Cadastro incluido com sucesso!</h1>";


// fecha conexao com o mysql
mysql_close($conexao);

$md5f=md5('douglas');
echo "<a href=lista.php>Voltar</a>";
//echo $$md5f;
?>
