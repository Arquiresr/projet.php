<!DOCTYPE html>
<html dir="ltr" lang="pt">
	<head>
        <title>Geek shop</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="Css/adm.css">
        
<link rel="icon" href="Imagem/Bleach.png" type="image/x-icon">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<script language="javascript" src="p.js"></script>
</head>
<body>

        <div id="divTitulo" > Geek Shop &times;&ensp;&ensp;&ensp;&ensp;&ensp;</div>
		<div id = "Tabela">
		<fieldset><legend>Login</legend>
		 <form name ="form_login" method ="post" action="s.php">
					Login					
                      <input type = "text"name ="txtlogin" maxlength = "20">
					    <br>
						<p>
						
					      Senha
					         <input type = "password" name ="txtsenha" maxlength = "15">
							  <p>
							 
							   <input type = "submit" class = "enviar" style = "cursor:pointer">
							   <input type= "reset"  class="limpar" value = "" onclick="document.form_login.txtlogin.focus()" style = "cursor:pointer">
				              
					
							  
							  </form>
							  		  
							<a href ="Cad.php">  <button>Cadastra</button></a>
</fieldset>
		</div>
		</body>
		</html>
