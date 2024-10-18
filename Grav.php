<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bd = "ca";

$conexao = mysqli_connect($servidor,$usuario,$senha,$bd);

if($conexao == false){
    
    echo "<h2><font color = 'red'><center>Não foi possível conectar-se ao MySql</font>";
    
    exit;
    
}

	$Login = $_POST['txtlogin'];
	$Pedeido = $_POST['txtsenha'];

	
	// if($Senha == $ConfirmaSenha){
	
	$gravando = "INSERT INTO cliente(Nome,emali) VALUES( '$Login', '$Pedeido')";
	
	$resultado = mysqli_query($conexao,$gravando) || die("Erro: ". mysqli_error());
		
		if($resultado == false)
	{
		echo"Erro no Cadastro </br>";
		echo"<a href = 'Login.php'>Voltar</a>";
		return;
	
	}
	
		else
		{
			
			mysqli_close($conexao);
			
		}
		
		
	
	
?> 	

	<script>
			alert('Registro Gravado');
	</script>
	
	<p>
	<a href = "consulta_codigo.php">Voltar</a>
	</body>
	</html>
