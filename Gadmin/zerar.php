<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script>
function fecha(){
window.close(self);
}
setTimeout("fecha()",1000);
</script>
</head>
<?
include "conexao.php";

$sql = "UPDATE numeros2 SET numrde = '0', numrms = '0', numrma = '0', numofic = '0', numveic = '0', numport = '0', numafasta = '0', nummemo = '0', numrdr = '0', numdiaria = '0', nummanut = '0', id_num = '0'";

$executa = mysql_query($sql) or die ("Não foi possível realizar a operação");
?>
<CENTER><H1>ZERADO</H1></CENTER>

