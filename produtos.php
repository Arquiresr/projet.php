<head>
<link rel="stylesheet" type="text/css" href="Css/Main.css">
<script language="javascript" src="o.js"></script>
</head>
<style>
      tab{
        width:45%;
      height:45px;
      border:1px solide #000;
      background-color: #000;
      color:rgb(255, 255, 255);
	  
      }
    </style>
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


  
 $sql = "SELECT * FROM noticia";
 $resultado = mysqli_query($conexao,$sql) or die("Erro ao retornar dados");
 // Obtendo os dados por meio de um loop while 
 while ($registro = mysqli_fetch_array($resultado))
 {
	
    $nome = $registro['ID'];
    $sobrenome = $registro['titu'];
    $sexo = $registro['email'];
	
    echo "<fieldset>";
    echo "<h1>".$nome."</h1>";
    echo "<h1>_________________________________________________________</h1>";
    echo $sobrenome."<br>";
    echo "<h1>_________________________________________________________</h1>";
    echo $sexo;
    echo "</fieldset>";
	}
 
 mysqli_close($conexao);
 echo "</table>";
 echo "<br>";

 ?>





<form name='frmIncPedido' id='frmIncPedido'  method='POST' action = "Gravar.php" >
	<fieldset><legend>Pedido</legend>
	E-mail para Retorno:<input type='text' name='txtEmail' id='txtEmail' size='10' ><br>
	Pedido<br>
	<textarea name='txtPedido' id='txtPedido' cols='90' rows='15'></textarea>
	</fieldset>
	<fieldset>
		<input type='submit' name='grv' id='grv' value='enviar'><input type='reset' name='lmp' id='lmp' value='limpar'>
	</fieldset>
</form>
</fieldset>


</div>

