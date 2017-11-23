<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html>
<head>
<?
$id_area=$_POST["id_area"];
$usuario=$_POST["usuario"];
$id_usuario=$_POST["id_usuario"];
?>
<title>Gerenciador de Conhecimento Baseado em Casos - Area: <? echo $id_area;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<frameset rows="34,*" cols="*" framespacing="1" frameborder="NO" border="0">
  <frame src="menu_geral.php?area=<? echo $id_area;?>&usuario=<? echo $usuario;?>" name="topFrame" scrolling="NO" noresize>
  <frame src="principal.php?area=<? echo $id_area;?>&usuario=<? echo $usuario;?>&id_usuario=<? echo $id_usuario;?>" name="mainFrame">
</frameset>
<noframes><body>

</body></noframes>
</html>
