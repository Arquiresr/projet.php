<?php
header('Content-type: text/html; charset=UTF-8');
$item=$_POST["item"];
switch($item){
	case "1":
		echo "
<h1>Item 1</h1>
			<p>Texto de conteúdo da primeira página</p>
";
	break;
	case "2":
		echo "
<h1>Item 2</h1>
			<p>Texto de conteúdo da segunda página</p>
";
	break;
	default:
	break;
}

extract($_POST,EXTR_OVERWRITE);
if(!isset($item)){$item='';}
switch($item){
	case 'Sobre':
		include "sobre.php";
	break;
	case 'Produtos':
		include "produtos.php";
	break;
	case 'Contato':
		include "contato.php";
	break;
	case 'divSubMenuProdutos':
		include "subProdutos.php";
	break;
	case 'divSubMenuPedidos':
		include "frmPedido.php";
	break;
	default:
		include "sobre.php";
	break;
}
?>
