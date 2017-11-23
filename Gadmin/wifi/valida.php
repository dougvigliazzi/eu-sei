<html>
<head>

<title>Validar Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<? 
//registro de session
  session_start();
  session_register("nome");
  session_register("nivel");
  
  
$usuario=$HTTP_POST_VARS["usuario"];
$senha=$HTTP_POST_VARS["senha"];

//abre conexão com o banco
include "conexao0.php";


//$cnpath;
$sqltemp="select * from usr where user = '$usuario'";

$rstemp=$rstemp_query=mysql_query(($sqltemp),$conexao);
$rstemp=mysql_fetch_array($rstemp_query);
if (($rstemp==0))
{
?><body>
<div align="center"><b><font size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
  <?   echo $usuario; ?> <b>, você não é um usuário cadastrado em nosso SISTEMA!<br>
  Tente <A href='index.php'>Conectar-se</a> novamente como um usuário válido!
  <?   exit();
} 

//VALIDACAO CAPTCHA

if(isset($_POST['setCaptcha'])){
	include_once('./captcha/cf.captcha.php');
	if(!check_captcha($_POST['setCaptcha'])){
		echo '<p align="center"><font size="4" face="Verdana, Arial, Helvetica, sans-serif">';
		echo 'CHECAGEM: <span style="color:red">'.$error_captcha.'</span>';
		echo '<p align="center"><A href="index.php">Voltar</a></font> ';
		//exit();
	}else{
		//echo 'CAPTCHA CHECK: <span style="color:green">Correct</span>';
		//proceed
	

if ($rstemp["chave"]==$senha){
$nome=$rstemp["user"];
$ip_session=$HTTP_SERVER_VARS['REMOTE_ADDR'];
$SID=session_id();


echo "<center> <font size=2 face='Verdana, Arial, Helvetica, sans-serif'><b> Você é: ";
echo $rstemp["nome"];
echo " - Seu IP está sendo registrado como: ";
echo $ip_session;
$usuario=$rstemp["user"]; 
$nivel=$rstemp["nivel"];
echo " - Nivel de acesso: $nivel";
$sistema=$rstemp["sistema"];
echo " - Sistema: $sistema";

if($sistema=="UNIVESP"){
?></b>

</font> </div>
<form action="univespLista.php" method="post" name="login">
  <div align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
    <input name="sessao" value="<? echo $SID; ?>" type="hidden">
    <input name="nome" value="<? echo $usuario; ?>" type="hidden">
    <input name="sistema" value="<? echo $sistema; ?>" type="hidden">
    <input name="nivel" value="<? echo $rstemp["nivel"]; ?>" type="hidden">
    <input type="submit" value="Acessar">
    </font> </div>
</form>
<div align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
<?
}else{
?>
</b>

</font> </div>
<form action="lista.php" method="post" name="login">
  <div align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
    <input name="sessao" value="<? echo $SID; ?>" type="hidden">
    <input name="nome" value="<? echo $usuario; ?>" type="hidden">
    <input name="sistema" value="<? echo $sistema; ?>" type="hidden">
    <input name="nivel" value="<? echo $rstemp["nivel"]; ?>" type="hidden">
    <input type="submit" value="Acessar">
    </font> </div>
</form>
<div align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">
<?
}
	}
}

} else {
?>
  <B>SENHA INVÁLIDA!</B>
  Tente novamente! </font> <br><form action=if.php method=post><input type=submit value=Voltar></form></div>
<p align="center"> <font size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
  <? }
mysql_close($conexao);
?>
  </font> 
</body>
</html>
