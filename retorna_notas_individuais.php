<?php
include("banco_configuracao/config.php");
$sql = "SELECT  * FROM NOTAS_INDIVIDUAIS";
	$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
	while($row = sqlsrv_fetch_array($output)){
		$colaborador = $row["colaborador"];
		$setor = $row["setor"];
		echo $colaborador."<br>";
		if($setor == "INDUSTRIAL"){
			list($nota_1_tri) = notas_industrial_individual_1_tri($colaborador);
			list($nota_2_tri) = notas_industrial_individual_2_tri($colaborador);
			list($nota_3_tri) = notas_industrial_individual_3_tri($colaborador);
			list($nota_4_tri) = notas_industrial_individual_4_tri($colaborador);
			list($nota_anual) = notas_industrial_individual($colaborador);
		}
		if($setor == "ADM"){
			list($nota_1_tri) = notas_adm_individual_1_tri($colaborador);
			list($nota_2_tri)= notas_adm_individual_2_tri($colaborador);
			list($nota_3_tri) = notas_adm_individual_3_tri($colaborador);
			list($nota_4_tri) = notas_adm_individual_4_tri($colaborador);
			list($nota_anual) = notas_adm_individual($colaborador);
		}
		

		$sql2 = "UPDATE NOTAS_INDIVIDUAIS SET nota_1_tri='$nota_1_tri', nota_2_tri = '$nota_2_tri', nota_3_tri = '$nota_3_tri', nota_4_tri = '$nota_4_tri', nota_anual = '$nota_anual' WHERE colaborador='$colaborador'";
		$output2 = sqlsrv_query($conn,$sql2) or die(print_r(sqlsrv_errors()));

	}

//ADM
function notas_adm_individual($nome){
	include("banco_configuracao/config.php");
	$sql = "SELECT convert(decimal(10,2),COALESCE(sum(convert(decimal, nota_formulario))/count(*),0))as NotaIndividual ,convert(decimal(10,2),COALESCE(sum(convert(decimal, nota_mc))/count(*),0)) as NotaMc FROM FORMULARIO_ADM_USO_PESSOAL WHERE colaborador='$nome'";
	$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
	while($row = sqlsrv_fetch_array($output)){
		$NotaIndividual = $row["NotaIndividual"];
		$notaMc = $row["NotaMc"];
	}
	return array ($NotaIndividual);
}

function notas_adm_individual_1_tri($nome){
	include("banco_configuracao/config.php");
	$sql = "SELECT convert(decimal(10,2),COALESCE(sum(convert(decimal, nota_formulario))/count(*),0))as NotaIndividual, convert(decimal(10,2),COALESCE(sum(convert(decimal, nota_mc))/count(*),0)) as NotaMc FROM FORMULARIO_ADM_USO_PESSOAL WHERE colaborador='$nome' and ((DATEPART(month, CONVERT(date, data, 103)) = '1') OR (DATEPART(month, CONVERT(date, data, 103)) = '2') OR (DATEPART(month, CONVERT(date, data, 103)) = '3')) ";
	$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
	while($row = sqlsrv_fetch_array($output)){
		$NotaIndividual_1_tri = $row["NotaIndividual"];
		$notaMc_1_tri = $row["NotaMc"];
	}
	return array ($NotaIndividual_1_tri);
}

function notas_adm_individual_2_tri($nome){
	include("banco_configuracao/config.php");
	$sql = "SELECT convert(decimal(10,2),COALESCE(sum(convert(decimal, nota_formulario))/count(*),0))as NotaIndividual, convert(decimal(10,2),COALESCE(sum(convert(decimal, nota_mc))/count(*),0)) as NotaMc FROM FORMULARIO_ADM_USO_PESSOAL WHERE colaborador='$nome' and ((DATEPART(month, CONVERT(date, data, 103)) = '4') OR (DATEPART(month, CONVERT(date, data, 103)) = '5') OR (DATEPART(month, CONVERT(date, data, 103)) = '6'))";
	$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
	while($row = sqlsrv_fetch_array($output)){
		$NotaIndividual_2_tri = $row["NotaIndividual"];
		$notaMc_2_tri = $row["NotaMc"];
	}
	return array ($NotaIndividual_2_tri);
}

function notas_adm_individual_3_tri($nome){
	include("banco_configuracao/config.php");
	$sql = "SELECT convert(decimal(10,2),COALESCE(sum(convert(decimal, nota_formulario))/count(*),0))as NotaIndividual, convert(decimal(10,2),COALESCE(sum(convert(decimal, nota_mc))/count(*),0)) as NotaMc FROM FORMULARIO_ADM_USO_PESSOAL WHERE colaborador='$nome' and ((DATEPART(month, CONVERT(date, data, 103)) = '7') OR (DATEPART(month, CONVERT(date, data, 103)) = '8') OR (DATEPART(month, CONVERT(date, data, 103)) = '9'))";
	$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
	while($row = sqlsrv_fetch_array($output)){
		$NotaIndividual_3_tri = $row["NotaIndividual"];
		$notaMc_3_tri = $row["NotaMc"];
	}
	return array ($NotaIndividual_3_tri);
}

function notas_adm_individual_4_tri($nome){
	include("banco_configuracao/config.php");
	$sql = "SELECT convert(decimal(10,2),COALESCE(sum(convert(decimal, nota_formulario))/count(*),0))as NotaIndividual, convert(decimal(10,2),COALESCE(sum(convert(decimal, nota_mc))/count(*),0)) as NotaMc FROM FORMULARIO_ADM_USO_PESSOAL WHERE colaborador='$nome' and ((DATEPART(month, CONVERT(date, data, 103)) = '10') OR (DATEPART(month, CONVERT(date, data, 103)) = '11') OR (DATEPART(month, CONVERT(date, data, 103)) = '12'))";
	$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
	while($row = sqlsrv_fetch_array($output)){
		$NotaIndividual_4_tri = $row["NotaIndividual"];
		$notaMc_4_tri = $row["NotaMc"];
	}
	return array ($NotaIndividual_4_tri);
}

//INDUSTRIAL

function notas_industrial_individual($nome){
	include("banco_configuracao/config.php");
	$sql = "SELECT CONVERT(decimal(10,2),coalesce(sum(convert(decimal, nota_formulario))/count(*),0))as NotaIndividual,convert(decimal(10,2),coalesce(sum(convert(decimal, nota_mc))/count(*),0))as NotaMc FROM FORMULARIO_INDUSTRIAL_USO_PESSOAL WHERE colaborador='$nome'";
	$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
	while($row = sqlsrv_fetch_array($output)){
		$NotaIndividual = $row["NotaIndividual"];
		$notaMcIndividual = $row["NotaMc"];
	}
	return array ($NotaIndividual);
}

function notas_industrial_individual_1_tri($nome){
	include("banco_configuracao/config.php");
	$sql = "SELECT CONVERT(decimal(10,2),coalesce(sum(convert(decimal, nota_formulario))/count(*),0))as NotaIndividual, convert(decimal(10,2),coalesce(sum(convert(decimal, nota_mc))/count(*),0))as NotaMc FROM FORMULARIO_INDUSTRIAL_USO_PESSOAL WHERE colaborador='$nome' and ((DATEPART(month, CONVERT(date, data, 103)) = '1') OR (DATEPART(month, CONVERT(date, data, 103)) = '2') OR (DATEPART(month, CONVERT(date, data, 103)) = '3'))";
	$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
	while($row = sqlsrv_fetch_array($output)){
		$NotaIndividual_1_tri = $row["NotaIndividual"];
		$notaMcIndividual_1_tri = $row["NotaMc"];
	}
	return array ($NotaIndividual_1_tri);
}
function notas_industrial_individual_2_tri($nome){
	include("banco_configuracao/config.php");
	$sql = "SELECT CONVERT(decimal(10,2),coalesce(sum(convert(decimal, nota_formulario))/count(*),0))as NotaIndividual, convert(decimal(10,2),coalesce(sum(convert(decimal, nota_mc))/count(*),0))as NotaMc FROM FORMULARIO_INDUSTRIAL_USO_PESSOAL WHERE colaborador='$nome' and ((DATEPART(month, CONVERT(date, data, 103)) = '4') OR (DATEPART(month, CONVERT(date, data, 103)) = '5') OR (DATEPART(month, CONVERT(date, data, 103)) = '6'))";
	$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
	while($row = sqlsrv_fetch_array($output)){
		$NotaIndividual_2_tri = $row["NotaIndividual"];
		$notaMcIndividual_2_tri = $row["NotaMc"];
	}
	return array ($NotaIndividual_2_tri);
}

function notas_industrial_individual_3_tri($nome){
	include("banco_configuracao/config.php");
	$sql = "SELECT CONVERT(decimal(10,2),coalesce(sum(convert(decimal, nota_formulario))/count(*),0))as NotaIndividual, convert(decimal(10,2),coalesce(sum(convert(decimal, nota_mc))/count(*),0))as NotaMc FROM FORMULARIO_INDUSTRIAL_USO_PESSOAL WHERE colaborador='$nome' and ((DATEPART(month, CONVERT(date, data, 103)) = '7') OR (DATEPART(month, CONVERT(date, data, 103)) = '8') OR (DATEPART(month, CONVERT(date, data, 103)) = '9'))";
	$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
	while($row = sqlsrv_fetch_array($output)){
		$NotaIndividual_3_tri = $row["NotaIndividual"];
		$notaMcIndividual_3_tri = $row["NotaMc"];
	}
	return array ($NotaIndividual_3_tri);
}

function notas_industrial_individual_4_tri($nome){
	include("banco_configuracao/config.php");
	$sql = "SELECT CONVERT(decimal(10,2),coalesce(sum(convert(decimal, nota_formulario))/count(*),0))as NotaIndividual, convert(decimal(10,2),coalesce(sum(convert(decimal, nota_mc))/count(*),0))as NotaMc FROM FORMULARIO_INDUSTRIAL_USO_PESSOAL WHERE colaborador='$nome' and ((DATEPART(month, CONVERT(date, data, 103)) = '10') OR (DATEPART(month, CONVERT(date, data, 103)) = '11') OR (DATEPART(month, CONVERT(date, data, 103)) = '12'))";
	$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
	while($row = sqlsrv_fetch_array($output)){
		$NotaIndividual_1_tri = $row["NotaIndividual"];
		$notaMcIndividual_1_tri = $row["NotaMc"];
	}
	return array ($NotaIndividual_1_tri);
}


$serverName2 = "fpbr41.perini.net"; 
$connectioninfo2 = array( "Database"=>"dev_testes", "UID"=>"developer", "PWD"=>"fpbr.dev");
$conn2 = sqlsrv_connect($serverName2, $connectioninfo2);
date_default_timezone_set('America/Maceio');
$datahora = date("d/m/Y H:i");
$sistema = "8S Notas Individuais";

$sql3 = "INSERT INTO LOG(sistema, datahora) VALUES('$sistema','$datahora')";
$output3 = sqlsrv_query($conn2,$sql3) or die(print_r(sqlsrv_errors()));
