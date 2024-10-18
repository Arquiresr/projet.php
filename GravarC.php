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

	$Nome = $_POST['txtEmail'];
	$cpf = $_POST['txtPedido'];
 
    

	
	// if($Senha == $ConfirmaSenha){
	
	$gravando = "INSERT INTO noticia(titu,email) VALUES( '$Nome', '$cpf')";
	
	$resultado = mysqli_query($conexao,$gravando) || die("Erro: ". mysqli_error());
		
		if($resultado == false)
	{
		echo"Erro no Cadastro </br>";
		echo"<a href = 'telaCadastro.php'>Voltar</a>";
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
	
	
	
