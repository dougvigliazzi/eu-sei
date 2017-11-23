<html>
<head>
<script type="text/javascript">
var confirmar = confirm("Confirma a Exclusão?")
if(!confirmar)
   window.location="http://intranet.clp.unesp.br/wifi/lista.php"

function fecha(){
window.close(self);
}
setTimeout("fecha()",1000);
</script>
</head>
<body>

<?php

//abre conexão com o banco
include "conexao.php";

$excluir = "DELETE FROM usr WHERE id='$_GET[idx]'";
$error=mysql_error;
$sql = mysql_query($excluir) or die ("<h2>Houve erro na gravação dos dados, por favor, clique em voltar e verifique os campos obrigatórios!</h2>");

echo "<h1>Exclusão efetuada com sucesso!</h1>";


// fecha conexao com o mysql
mysql_close($conexao);

?>

</body>
</html>
