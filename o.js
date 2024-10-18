 function abreMenu(item){

	 switch(item){
		 case 'Sobre':
    document.getElementById("in").src = "sobre.php";
document.getElementById("spanTitulo").innerHTML = "Sobre";
closeNav();
break;
case 'Produtos':
document.getElementById("in").src = "produtos.php";
document.getElementById("spanTitulo").innerHTML = "Produto";
closeNav();
break;
case 'Contato':
         document.getElementById("in").src = "contato.php";
document.getElementById("spanTitulo").innerHTML = "Contato";
closeNav();
break;
case 'pr':
         document.getElementById("in").src = "produtos.php";
document.getElementById("spanTitulo").innerHTML = "Produto";
closeNav();
break;
case 'a':
         document.getElementById("in").src = "produtos.php";
document.getElementById("spanTitulo").innerHTML = "Produto";
closeNav();
break;

default:
      document.getElementById("in").src = "Imagem/ichigo.webp";
	 }
 }
 function cao(){
    var email=document.getElementById('txtEmail');

    if(email.value.length==0 || email.value.search("@")==-1){
        alert("E-mail inválido");
        email.focus();
    return false;
    }
    
    return true;   
 }
 function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }
 
 
  window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }//
}
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}