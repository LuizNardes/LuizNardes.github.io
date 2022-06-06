<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="JS/sweetalert.min.js"></script>
	<script type="text/javascript">
	function loginfailed(){
		swal("Este usuário não tem permissão","","warning")
		.then((value) => {
		  window.location='login.php';
		});			
	}
	</script>
</head>
<body>
<?php
	include("banco_configuracao/config.php");
	session_start();
	$username = $_POST["fieldUser"];
	$password = $_POST["fieldPassword"];
	//$server = 'fpbr33.perini.net';
	$server = 'fpbr07.perini.net';
	$domain = '@perini.net';
	$port = 389;

	$connection = ldap_connect($server, $port);

	if (!$connection) {
	    exit('Connection failed');
	}

	// Help talking to AD
	ldap_set_option($connection, LDAP_OPT_PROTOCOL_VERSION, 3);
	ldap_set_option($connection, LDAP_OPT_REFERRALS, 0);

	$bind = @ldap_bind($connection, $username.$domain, $password);

	if (!$bind) {
	    //exit('Binding failed');
	    echo "<script>loginfailed();</script>";
	}else{
		echo "feito";
		
		$filter =  'sAMAccountName='.$_POST["fieldUser"];
		$result = ldap_search($connection, "DC=perini,DC=net", $filter, array("displayName","department","mail","manager")) or exit("Unable to search LDAP server");
		$entries = ldap_get_entries($connection, $result);

		$_SESSION["nome"] = $entries[0]['displayname'][0];
		$_SESSION["setor"] = $entries[0]['department'][0];
		$_SESSION["email"] = $entries[0]['mail'][0];
		$sql = "SELECT * FROM VIEW_RESULTADOS WHERE  lider like '%".$_SESSION["nome"]."%'";
		$query = sqlsrv_query($conn, $sql, array(), array( "Scrollable" => 'static' ));
		$row_count = sqlsrv_num_rows($query);
		if($row_count == 0){
			$_SESSION["lider"] = "nao";
		}else{
			$_SESSION["lider"] = "sim";
		}
		$sql2 = "SELECT * FROM COLABORADORES WHERE  nome_completo like '%".$_SESSION["nome"]."%'";
		$output2=sqlsrv_query($conn,$sql2) or die(print_r(sqlsrv_errors()));
		while($row2 = sqlsrv_fetch_array($output2)){
		    $_SESSION["area_referencia"] = $row2["area_referencia"];
		    $_SESSION["grupo"] = $row2["associacao_com_areas"];
		}
		header('Location: index.php');
		
		
	}

	// This is where you can do your work

	ldap_close($connection);

?>

</body>
</html>
