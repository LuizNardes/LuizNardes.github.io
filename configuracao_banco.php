<?php 
	$serverName = "fpbr41.perini.net"; 
	$connectioninfo_Khronos = array( "Database"=>"dev_khronos", "UID"=>"developer", "PWD"=>"fpbr.dev");
	$conn_Khronos = sqlsrv_connect($serverName, $connectioninfo_Khronos);

	$connectioninfo_RH = array( "Database"=>"dev_rh", "UID"=>"developer", "PWD"=>"fpbr.dev");
	$conn_RH = sqlsrv_connect($serverName, $connectioninfo_RH);

	$connectioninfo_SAP = array( "Database"=>"SAP", "UID"=>"developer", "PWD"=>"fpbr.dev");
	$conn_SAP = sqlsrv_connect($serverName, $connectioninfo_SAP);

	$connectioninfo_Skynet = array( "Database"=>"Skynet", "UID"=>"developer", "PWD"=>"fpbr.dev");
	$conn_Skynet = sqlsrv_connect($serverName, $connectioninfo_Skynet);

	$connectioninfo_DevConfig = array( "Database"=>"dev_config", "UID"=>"developer", "PWD"=>"fpbr.dev");
	$conn_DevConfig = sqlsrv_connect($serverName, $connectioninfo_DevConfig);

	date_default_timezone_set('America/Sao_Paulo'); 

?>