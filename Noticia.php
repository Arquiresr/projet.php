<head>

<script language="javascript" src="p.js"></script>
</head>
<style>
table {
  border-collapse: collapse;
}
    </style>
<form style = "color: #fff;" name='frmIncPedido' id='frmIncPedido' action = "Noticia.php"  method='POST' >
	<fieldset style = "background:#000;"><legend>consulta</legend>
	O ID do produto<input type='number' name='obj' id='obj' size='10' ><br>
	
	</fieldset>
	<fieldset>
		<input type='submit' name='grv' id='grv' value='enviar'><input type='reset' name='lmp' id='lmp' value='limpar'>
	</fieldset>
</form>
</fieldset>
<?php


$servidor = "localhost";
$usuario = "root";
$senha = "";
$bd = "ca";
// area de coneçao
$conexao = mysqli_connect($servidor,$usuario,$senha,$bd);

if($conexao == false){
    
    echo "<h2><font color = 'red'><center>Não foi possível conectar-se ao MySql</font>";
    
    exit;
    
}
// aqui esta o codigo para consulta banco 
if(isset($_POST['obj'])){
echo "<table border=1>";
 echo "<tr>";
 echo "<th>ID</th>";
 echo "<th>Produto</th>";
 echo "<th>Descrição</th>";
 echo "</tr>";
  
 $sql = "SELECT * FROM noticia";
 $resultado = mysqli_query($conexao,$sql) or die("Erro ao retornar dados");
 // Obtendo os dados por meio de um loop while 
 while ($registro = mysqli_fetch_array($resultado))
 {
	
    $nome = $registro['ID'];
    $sobrenome = $registro['titu'];
    $sexo = $registro['email'];
	if($_POST['obj'] == $nome){
    echo "<tr>";
    echo "<td>".$nome."</td>";
    echo "<td>".$sobrenome."</td>";
    echo "<td>".$sexo."</td>";
    echo "</tr>";
	}
 }
 mysqli_close($conexao);
 echo "</table>";
}
 ?>


