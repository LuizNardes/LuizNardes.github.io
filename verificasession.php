<?php  
	function session_checker(){
		if(!isset($_SESSION['nome'])){
			//header("Location: login.php");
			header("location:http://fpbr12.perini.net/portal_koerber_tissue/");
			exit();
		}
		
	}
//Esse codigo verifica se o usuario foi logado em toda pagina iniciada!
?>