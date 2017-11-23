<link href="../folha.css" rel="stylesheet" type="text/css"> 
<? 
$id_area=$_GET["area"];
$usuario=$_GET["usuario"];
$id_usuario=$_GET["id_usuario"];

?>
<!-- PARTE 1 PHP: CRIAR FORMATO DE APRESENTAÇÃO DO SUBMENU - NÃO MEXER NESSE CÓDIGO -->
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form action="<? echo $PATH_INFO; ?>"  name="formmenu_esq" method="post">
<input name="menu_esq1" type="text" style="display:none" value="<?php if($_REQUEST['menu_esq1'] != null){ ?>
<?php echo $_REQUEST['menu_esq1'];?>
<?php }else{?>
<?php }?>">
<input name="menu_esq2" type="text" style="display:none" value="<?php if($_REQUEST['menu_esq2'] != null){ ?>
<?php echo $_REQUEST['menu_esq2'];?>
<?php }else{?>
<?php }?>">
<!-- FIM PARTE 1 -->


  <table width="150"  border="0" cellpadding="0" cellspacing="0" id="menu_esquerdo">

    <tr> 
      <td class="MenuEsqDivisor">&nbsp;</td>
    </tr>
    <tr> 
      <td class="MenuEsqFundo_subitem"><a href="#" class="MenuEsqEfeito_subitem" onClick="casos();"> 
        Casos </a></td>
      <?php if($_REQUEST['menu_esq1'] == 1 ){?>
    </tr>
    <tr> 
      <td height="15" class="MenuEsqFundo"><a href="cad_casos.php?id_area=<? echo $id_area;?>&usuario=<? echo $usuario;?>&id_usuario=<? echo $id_usuario;?>" target="rightFrame" class="MenuEsqEfeitoSubItem">Cadastrar Casos</a></td>
    </tr>
    <tr> 
      <td height="15" class="MenuEsqFundo"><a href="alterar_casos_lista.php?id_area=<? echo $id_area;?>&usuario=<? echo $usuario;?>&id_usuario=<? echo $id_usuario;?>" target="rightFrame" class="MenuEsqEfeitoSubItem">Solucionar Casos </a></td>
    </tr>
    <tr> 
      <td height="15" class="MenuEsqFundo"><a href="casos_solucionados_lista.php?id_area=<? echo $id_area;?>&usuario=<? echo $usuario;?>&id_usuario=<? echo $id_usuario;?>" target="rightFrame" class="MenuEsqEfeitoSubItem">Casos Solucionados</a></td>
    </tr>

    <?php }?>

    <tr> 
      <td class="MenuEsqDivisor">&nbsp;</td>
    </tr>
    <tr> 
      <td class="MenuEsqFundo_subitem"><a href="#" class="MenuEsqEfeito_subitem" onClick="admin();"> 
        Gerenciar </a></td>
      <?php if($_REQUEST['menu_esq1'] == 2 ){?>
    </tr>
    <tr> 
      <td height="15" class="MenuEsqFundo"><a href="Gadmin/zerar.php" target="rightFrame" class="MenuEsqEfeitoSubItem">Zerar Numera&ccedil;&atilde;o</a></td>
    </tr>
    <tr> 
      <td height="15" class="MenuEsqFundo"><a href="Gadmin/wifi/lista.php" target="rightFrame" class="MenuEsqEfeitoSubItem">Usu&aacute;rios Wifi Intranet</a></td>
    </tr>
    <tr> 
      <td height="15" class="MenuEsqFundo"><a href="Gadmin/oficios.php" target="rightFrame" class="MenuEsqEfeitoSubItem">Sequ&ecirc;ncia de Of&iacute;cios</a></td>
    </tr>

    <?php }?>
    <tr> 
      <td class="MenuEsqDivisor">&nbsp;</td>
    </tr>

    <tr> 
      <td class="MenuEsqFundo_subitem"><a href="#" onClick="extra();" class="MenuEsqEfeito_subitem">Extra</a></td>
      <?php if($_REQUEST['menu_esq1'] == 3 ){?>
    <tr> 
      <td height="15" class="MenuEsqFundo"><a href="lista_campos.php" target="rightFrame" class="MenuEsqEfeitoSubItem">Criar Consulta Casos</a></td>
    </tr>

    <?php }?>
    <tr> 
      <td class="MenuEsqDivisor">&nbsp;</td>
    </tr>
    <tr> 
      <td class="MenuEsqFundo"><a href="index.php" target="_top" class="MenuEsqEfeito">Sair 
        Intranet</a></td>
    </tr>

  </table>


<!-- PARTE 2 PHP: DEFININDO OS ITENS PRINCIPAIS COM SUBITENS - UTILIZAR CUIDADOSAMENTE, UTILIZE O MANUAL -->

<script language="JavaScript" type="text/JavaScript">
function casos(){
    if(document.formmenu_esq.menu_esq1.value != 1 ){
	 	document.formmenu_esq.menu_esq1.value = 1;
     	document.formmenu_esq.submit();
	}else{
		document.formmenu_esq.menu_esq1.value = "";
     	document.formmenu_esq.submit();
	}
}
function admin(){
    if(document.formmenu_esq.menu_esq1.value != 2 ){
	 	document.formmenu_esq.menu_esq1.value = 2;
     	document.formmenu_esq.submit();
	}else{
		document.formmenu_esq.menu_esq1.value = "";
     	document.formmenu_esq.submit();
	}
}
function extra(){
    if(document.formmenu_esq.menu_esq1.value != 3 ){
	 	document.formmenu_esq.menu_esq1.value = 3;
     	document.formmenu_esq.submit();
	}else{
		document.formmenu_esq.menu_esq1.value = "";
     	document.formmenu_esq.submit();
	}
}

</script>
</form>
