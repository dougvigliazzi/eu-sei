<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html>
<head>
<?
$id_area=$_GET["area"];
$usuario=$_GET["usuario"];
$id_usuario=$_GET["id_usuario"];
?>
<title>Gerenciador Acad&ecirc;mico</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<frameset cols="160,*" framespacing="1" frameborder="NO" border="0">
  <frame src="ssi_menu_esquerdo.php?area=<? echo $id_area;?>&usuario=<? echo $usuario;?>&id_usuario=<? echo $id_usuario;?>" name="leftFrame" scrolling="NO" noresize>
  <frame src="branco.htm" name="rightFrame">
</frameset>
<noframes><body>

</body></noframes>
</html>
