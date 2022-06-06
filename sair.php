<?php
	session_start();
	unset($_SESSION['nome'] );
	unset($_SESSION['setor']);
	header("Location: login.php");


?>
