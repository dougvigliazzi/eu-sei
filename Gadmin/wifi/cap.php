	<br /><font face="verdana,arial" size=2 /><b>Digite os caracteres conforme aparecem ou resolva a express&atilde;o abaixo.<br />Se n&atilde;o conseguir ler, clique em atualizar.</b></font><p/>
	<img id="captcha_img" src="./captcha/cf.captcha.php?img=<?=time();?>" />
	<a href="#" onclick="document.getElementById('captcha_img').src = './captcha/cf.captcha.php?img=' + Math.random(); return false"><img src="../imagens/atualizar.png" width="30" Title="Atualizar"></a><br/>
	<label for="setCaptcha"><font face="verdana,arial">C&oacute;digo de Autentica&ccedil;&atilde;o: </font></label><br/>
	<input name="setCaptcha" onClick="this.value=''" type="text" id="setCaptcha" size="12" class="textbox" /><br/><br/>

