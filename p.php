<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bd = "ca";



$conexao = mysqli_connect($servidor,$usuario,$senha,$bd);

if($conexao == false){
	
	echo "Conexão mal-sucedida";
	exit;
}



    $nome = $_POST["obj"];
$excluindo = "delete from noticia where ID = '$nome'";
$resultado = mysqli_query($conexao,$excluindo);

if($resultado ==false){
	
	echo "Erro na exclusÃ£o do registro! </br>";
	
	
}

else{
	
	echo"<script> alert('registro excluido')
	</script>";
	
	
}


?>