<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script>
//function fecha(){
//window.close(self);
//}
//setTimeout("fecha()",10000);
</script>
</head>
<?
include "conexao.php";
//VERIFICA NÚMERO DE OFICIO DISPONIVEL
$selecionaN = "SELECT numofic FROM numeros2";
$executaQ = mysql_query($selecionaN) or die ("Não foi possível checar numeros disponivel");

while ($registro = mysql_fetch_array($executaQ)){
	$reg = $registro["numofic"];
}

$selecionaU = "SELECT * FROM funcionarios";
$executaU = mysql_query($selecionaU) or die ("Não foi possível selecionar funcionarios");

$selecionaSetor = "SELECT * FROM setores";
$executaS = mysql_query($selecionaSetor) or die ("Não foi selecionar setor");

?>
<form method="POST" action="oficios_exec.php" target="_NEW">
<font face="verdana,arial">
<h1> Inserir Oficios em Lotes</h1>
Quantidade de Oficios: <input type="text" name="qtde"><br>
Setor: <select name="setor">
<?
while ($registroS = mysql_fetch_array($executaS)){
	$regS = $registroS["setor"];
	echo "<option value=$regS>$regS</option>";
}
?>
</select><br>
Usuario: <select name="user">
<?
while ($registroU = mysql_fetch_array($executaU)){
	$regU = $registroU["nome"];
	echo "<option value=$regU>$regU</option>";
}
?>
</select><br>
Assunto: <textarea name="assunto" cols="50" rows="5"></textarea>
<br>
<input type="hidden" name="codigo" value="<? echo $reg+1;?>">
<input type="submit" value="Incluir">
</form>
</font>



