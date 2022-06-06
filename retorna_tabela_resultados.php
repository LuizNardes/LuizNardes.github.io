<?php
session_start();
$user = $_SESSION["nome"];
include("banco_configuracao/config.php");
$colaborador = $_POST["colaborador"];
$area_referencia = $_SESSION["area_referencia"];
$lider = $_POST["lider"];
$area_referencia = $_POST["area_referencia"];
$ano = $_POST["ano"];

if($user == "Robertson Domingos Luiz Buse" || $user == "Matheus Antonio da Silva" || $user=="Rondinelia Soares de Souza"){
	include("banco_configuracao/config.php");
	//$sql = "SELECT * FROM VIEW_RESULTADOS WHERE colaborador like '%$colaborador%' and lider like '%$lider%' and area_referencia like '%$area_referencia%' and ano = '$ano'";
	$sql = "SELECT 
	matricula,
	nome,
	lider,
	area_referencia,
	CASE WHEN nota_1_tri IS NULL THEN '-' else convert(varchar,cast(nota_1_tri as numeric(36,2)) ) END AS nota_1_tri,
	CASE WHEN nota_2_tri IS NULL THEN '-' else convert(varchar,cast(nota_2_tri as numeric(36,2)) ) END AS nota_2_tri,
	CASE WHEN nota_3_tri IS NULL THEN '-' else convert(varchar,cast(nota_3_tri as numeric(36,2)) ) END AS nota_3_tri,
	CASE WHEN nota_4_tri IS NULL THEN '-' else convert(varchar,cast(nota_4_tri as numeric(36,2)) ) END AS nota_4_tri,
	CASE WHEN nota_anual IS NULL THEN '-' else convert(varchar,cast(nota_anual as numeric(36,2)) ) END AS nota_anual
	FROM VIEW_RELATORIO_GERAL WHERE nome like '%$colaborador%' and lider like '%$lider%' and area_referencia like '%$area_referencia%' and ano = '$ano' 
	ORDER BY nome";
	$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
	while($row = sqlsrv_fetch_array($output)){

	    $vetor[] = array_map('myfunction', $row); 
	}
	
}else{
	include("banco_configuracao/config.php");
	//$sql = "SELECT * FROM [dev_osm].[dbo].VIEW_RESULTADOS WHERE colaborador like '%$colaborador%' and area_referencia like '%$area_referencia%' and ano = '$ano' and lider like '%$user%' or(colaborador like '%$user%')";
	$sql = "SELECT 
	matricula,
	nome,
	lider,
	area_referencia,
	CASE WHEN nota_1_tri IS NULL THEN '-' else convert(varchar,cast(nota_1_tri as numeric(36,2)) ) END AS nota_1_tri,
	CASE WHEN nota_2_tri IS NULL THEN '-' else convert(varchar,cast(nota_2_tri as numeric(36,2)) ) END AS nota_2_tri,
	CASE WHEN nota_3_tri IS NULL THEN '-' else convert(varchar,cast(nota_3_tri as numeric(36,2)) ) END AS nota_3_tri,
	CASE WHEN nota_4_tri IS NULL THEN '-' else convert(varchar,cast(nota_4_tri as numeric(36,2)) ) END AS nota_4_tri,
	CASE WHEN nota_anual IS NULL THEN '-' else convert(varchar,cast(nota_anual as numeric(36,2)) ) END AS nota_anual
	FROM VIEW_RELATORIO_GERAL WHERE nome like '%$colaborador%' and lider like '%$lider%' and area_referencia like '%$area_referencia%' and ano = '$ano' and lider like '%$user%' or(colaborador like '%$user%')
	ORDER BY nome";
	$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
		while($row = sqlsrv_fetch_array($output)){
		    $vetor[] = array_map('myfunction', $row); 
		}
		
}
//Passando vetor em forma de json
	function myfunction($v)
	{
		return($v);
	}
	if(!isset($vetor)){
		$vetor="nao";
	}
	$myJSON = json_encode($vetor);
	echo $myJSON;

