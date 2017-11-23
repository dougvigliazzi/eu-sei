<html>
<title>Validar Login <?php echo $id_area;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<?php

$usuario=$_POST["usuario"];
$senha=$_POST["senha"];

//abre conexão com o banco
include "conexao.php";

$sqltemp="select * from usuario where usuario = '$usuario'";

$rstemp=$rstemp_query=mysql_query($sqltemp,$conexao);
echo mysql_error();

$rstemp=mysql_fetch_array($rstemp_query);
if ($rstemp==0)
{
?><body>
<div align="center"><b><font size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
  <?   echo $usuario; ?>
  </font></b><font size="2" face="Verdana, Arial, Helvetica, sans-serif">, você 
  não é um usuário cadastrado em nosso SISTEMA!<br>
  Tente <A href='index.php'>Conectar-se</a> novamente como um usuário válido 
  <?php
exit();
} 

if ($rstemp["senha"]==$senha){
$id_usuario=$rstemp["id_usuario"];
$id_area=$rstemp["id_area"]; 

$ip_session=$_SERVER['REMOTE_ADDR'];
$SID=session_id();
echo "<center> <font size=2 face='Verdana, Arial, Helvetica, sans-serif'><b> Você é: ";
echo $rstemp["nome"];

echo " - Seu IP está sendo registrado como: ";
echo $ip_session;
echo ": Área: $id_area";
echo " id $id_usuario";
?></b>
  </font> </div>
<form action="admin.php" method="post" name="login">
  <div align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
    <input name="sessao" value="<?php echo $ip_session; ?>" type="hidden">
    <input name="usuario" value="<?php echo $rstemp["nome"]; ?>" type="hidden">
    <input name="id_usuario" value="<?php echo $rstemp["id_usuario"]; ?>" type="hidden">
    <input name="id_area" value="<?php echo $id_area; ?>" type="hidden">
    <input type="submit" value="Acessar">
    </font> </div>
</form>
<div align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
  <?php	
}
  else
{
?>
  <B>SENHA INVÁLIDA!</B><br>
  Tente <A href='index.php'>Conectar-se</a> novamente. </font> </div>
<p align="center"> <font size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
  <?php }
mysql_close($conexao);

session_register("id_area");
?>
  </font> 
</body>
</html>
