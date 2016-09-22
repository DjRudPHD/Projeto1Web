<html>
<head>
<meta charset="utf-8">

<script language="JavaScript" >
function enviardados(){
 
if(document.dados.nome.value=="" || document.dados.nome.value.length < 8)
{
alert( "Preencha campo NOME corretamente!" );
document.dados.nome.focus();
return false;
}
 
 
if( document.dados.email.value=="" || document.dados.email.value.indexOf('@')==-1 || document.dados.email.value.indexOf('.')==-1 )
{
alert( "Preencha campo E-MAIL corretamente!" );
document.dados.email.focus();
return false;
}
 
if (document.dados.mensagem.value=="")
{
alert( "Preencha o campo MENSAGEM!" );
document.dados.mensagem.focus();
return false;
}
 
if (document.dados.mensagem.value.length < 50 )
{
alert( "É necessario preencher o campo MENSAGEM com mais de 50 caracteres!" );
document.dados.mensagem.focus();
return false;
}
 
return true;
}
 
</script>

</head>
<body>
<div align='left'><h2>Formulario de Contatos</h2></div>
<form action="emailenviado.php" method="post" name="dados" onSubmit="return enviardados();" >
	<div class="row">
		<label for="name">Seu Nome:</label><br />
		<input id="nome" class="input" name="nome" type="text" value="" size="30" /><br />
	</div>
	<div class="row">
		<label for="email">Seu Email:</label><br />
		<input id="email" class="input" name="email" type="text" value="" size="30" /><br />
	</div>
	<div class="row">
		<label for="message">Sua Message:</label><br />
		<textarea id="mensagem" class="input" name="mensagem" rows="7" cols="30"></textarea><br />
	</div><br>
	<input name="Submit" type="submit"  class="formobjects" value="Enviar dados">
    <input name="Reset" type="reset" class="formobjects" value="Redefinir">
</form>
</body>
</html>
	