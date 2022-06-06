<?php  
	function session_checker2(){
		if($_SESSION['nome'] != "Robertson Domingos Luiz Buse"){
			header("Location: index-responsavel.php");
			exit();
		}
		
	}
//Esse codigo verifica se o usuario foi logado em toda pagina iniciada!
?>