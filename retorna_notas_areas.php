<?php
include("banco_configuracao/config.php");
$sql = "SELECT  * FROM NOTAS_AREAS";
	$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
	while($row = sqlsrv_fetch_array($output)){
		$area = $row["area"];
		$setor = $row["setor"];
		if($setor == "INDUSTRIAL"){
			list($nota_1_tri) = notas_industrial_1_tri($area);
			list($nota_2_tri) = notas_industrial_2_tri($area);
			list($nota_3_tri) = notas_industrial_3_tri($area);
			list($nota_4_tri) = notas_industrial_4_tri($area);
			list($nota_anual) = notas_industrial($area);
		}
		if($setor == "ADMINISTRACAO"){
			list($nota_1_tri) = notas_adm_1_tri($area);
			list($nota_2_tri)= notas_adm_2_tri($area);
			list($nota_3_tri) = notas_adm_3_tri($area);
			list($nota_4_tri) = notas_adm_4_tri($area);
			list($nota_anual) = notas_adm($area);
		}
		if($setor == "ÁREA COMUM"){
			list($nota_1_tri) = notas_area_comum_1_tri($area);
			list($nota_2_tri) = notas_area_comum_2_tri($area);
			list($nota_3_tri) = notas_area_comum_3_tri($area);
			list($nota_4_tri) = notas_area_comum_4_tri($area);
			list($nota_anual) = notas_area_comum($area);
		}
		echo $nota_1_tri."<br>";

		$sql2 = "UPDATE NOTAS_AREAS SET nota_1_tri='$nota_1_tri', nota_2_tri = '$nota_2_tri', nota_3_tri = '$nota_3_tri', nota_4_tri = '$nota_4_tri', nota_anual = '$nota_anual' WHERE area='$area'";
		$output2 = sqlsrv_query($conn,$sql2) or die(print_r(sqlsrv_errors()));

	}

//INDUSTRIAL
function notas_industrial($area){
	include("banco_configuracao/config.php");
	$sql = "SELECT CONVERT(decimal(10,2), COALESCE(sum(convert(decimal, nota_formulario))/count(*),0))as NotaArea,convert (decimal(10,2),COALESCE(sum(convert(decimal, nota_mc))/count(*),0))
as NotaMc FROM FORMULARIO_INDUSTRIAL WHERE area_industrial='$area'";
	$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
	while($row = sqlsrv_fetch_array($output)){
		$notaArea = $row["NotaArea"];
		$notaMc = $row["NotaMc"];
	}
	return array ($notaArea);
}
function notas_industrial_1_tri($area){
	include("banco_configuracao/config.php");
	$sql = "SELECT CONVERT(decimal(10,2), COALESCE(sum(convert(decimal, nota_formulario))/count(*),0))as NotaArea,convert (decimal(10,2),COALESCE(sum(convert(decimal, nota_mc))/count(*),0))
as NotaMc FROM FORMULARIO_INDUSTRIAL WHERE area_industrial='$area'
and ((DATEPART(month, CONVERT(date, data, 103)) = '1') OR (DATEPART(month, CONVERT(date, data, 103)) = '2') OR (DATEPART(month, CONVERT(date, data, 103)) = '3'))";
	$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
	while($row = sqlsrv_fetch_array($output)){
		$notaArea_1_tri = $row["NotaArea"];
		$notaMc_1_tri = $row["NotaMc"];
	}
	return array ($notaArea_1_tri);
}
function notas_industrial_2_tri($area){
	include("banco_configuracao/config.php");
	$sql = "SELECT CONVERT(decimal(10,2), COALESCE(sum(convert(decimal, nota_formulario))/count(*),0))as NotaArea,convert (decimal(10,2),COALESCE(sum(convert(decimal, nota_mc))/count(*),0))
as NotaMc FROM FORMULARIO_INDUSTRIAL WHERE area_industrial='$area'
and ((DATEPART(month, CONVERT(date, data, 103)) = '4') OR (DATEPART(month, CONVERT(date, data, 103)) = '5') OR (DATEPART(month, CONVERT(date, data, 103)) = '6'))";
	$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
	while($row = sqlsrv_fetch_array($output)){
		$notaArea_2_tri = $row["NotaArea"];
		$notaMc_2_tri = $row["NotaMc"];
	}
	return array ($notaArea_2_tri);
}

function notas_industrial_3_tri($area){
	include("banco_configuracao/config.php");
	$sql = "SELECT CONVERT(decimal(10,2), COALESCE(sum(convert(decimal, nota_formulario))/count(*),0))as NotaArea,convert (decimal(10,2),COALESCE(sum(convert(decimal, nota_mc))/count(*),0))
as NotaMc FROM FORMULARIO_INDUSTRIAL WHERE area_industrial='$area'
and ((DATEPART(month, CONVERT(date, data, 103)) = '7') OR (DATEPART(month, CONVERT(date, data, 103)) = '8') OR (DATEPART(month, CONVERT(date, data, 103)) = '9')) ";
	$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
	while($row = sqlsrv_fetch_array($output)){
		$notaArea_3_tri = $row["NotaArea"];
		$notaMc_3_tri = $row["NotaMc"];
	}
	return array ($notaArea_3_tri);
}

function notas_industrial_4_tri($area){
	include("banco_configuracao/config.php");
	$sql = "SELECT CONVERT(decimal(10,2), COALESCE(sum(convert(decimal, nota_formulario))/count(*),0))as NotaArea, convert (decimal(10,2),COALESCE(sum(convert(decimal, nota_mc))/count(*),0))
as NotaMc FROM FORMULARIO_INDUSTRIAL WHERE area_industrial='$area'
and ((DATEPART(month, CONVERT(date, data, 103)) = '10') OR (DATEPART(month, CONVERT(date, data, 103)) = '11') OR  (DATEPART(month, CONVERT(date, data, 103)) = '12'))";
	$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
	while($row = sqlsrv_fetch_array($output)){
		$notaArea_4_tri = $row["NotaArea"];
		$notaMc_4_tri = $row["NotaMc"];
	}
	return array ($notaArea_4_tri);
}


// ADM
function notas_adm($area){
	include("banco_configuracao/config.php");
	$sql = "SELECT CONVERT(decimal(10,2) ,COALESCE(sum(convert(decimal, nota_formulario))/count(*),0))as NotaArea, CONVERT(decimal(10,2),COALESCE(sum(convert(decimal, nota_mc))/count(*),0))as NotaMc FROM FORMULARIO_ADMINISTRATIVO WHERE area_adm='$area'";
	$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
	while($row = sqlsrv_fetch_array($output)){
		$notaArea = $row["NotaArea"];
		$notaMc = $row["NotaMc"];
	}
	return array ($notaArea);
}

function notas_adm_1_tri($area){
	include("banco_configuracao/config.php");
	$sql = "SELECT CONVERT(decimal(10,2) ,COALESCE(sum(convert(decimal, nota_formulario))/count(*),0))as NotaArea, CONVERT(decimal(10,2),COALESCE(sum(convert(decimal, nota_mc))/count(*),0))as NotaMc FROM FORMULARIO_ADMINISTRATIVO WHERE area_adm='$area' and (DATEPART(month, CONVERT(date, data, 103)) = '1' OR DATEPART(month, CONVERT(date, data, 103)) = '2' OR DATEPART(month, CONVERT(date, data, 103)) = '3')";
	$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
	while($row = sqlsrv_fetch_array($output)){
		$notaArea_1_tri = $row["NotaArea"];
		$notaMc_1_tri = $row["NotaMc"];
	}
	return array ($notaArea_1_tri);
}

function notas_adm_2_tri($area){
	include("banco_configuracao/config.php");
	$sql = "SELECT CONVERT(decimal(10,2) ,COALESCE(sum(convert(decimal, nota_formulario))/count(*),0))as NotaArea, CONVERT(decimal(10,2),COALESCE(sum(convert(decimal, nota_mc))/count(*),0))as NotaMc FROM FORMULARIO_ADMINISTRATIVO WHERE area_adm='$area' and (DATEPART(month, CONVERT(date, data, 103)) = '4' OR DATEPART(month, CONVERT(date, data, 103)) = '5' OR DATEPART(month, CONVERT(date, data, 103)) = '6')";
	$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
	while($row = sqlsrv_fetch_array($output)){
		$notaArea_2_tri = $row["NotaArea"];
		$notaMc_2_tri = $row["NotaMc"];
	}
	return array ($notaArea_2_tri);
}

function notas_adm_3_tri($area){
	include("banco_configuracao/config.php");
	$sql = "SELECT CONVERT(decimal(10,2) ,COALESCE(sum(convert(decimal, nota_formulario))/count(*),0))as NotaArea, CONVERT(decimal(10,2),COALESCE(sum(convert(decimal, nota_mc))/count(*),0))as NotaMc FROM FORMULARIO_ADMINISTRATIVO WHERE area_adm='$area' and (DATEPART(month, CONVERT(date, data, 103)) = '7' OR DATEPART(month, CONVERT(date, data, 103)) = '8' OR DATEPART(month, CONVERT(date, data, 103)) = '9')";
	$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
	while($row = sqlsrv_fetch_array($output)){
		$notaArea_3_tri = $row["NotaArea"];
		$notaMc_3_tri = $row["NotaMc"];
	}
	return array ($notaArea_3_tri);
}

function notas_adm_4_tri($area){
	include("banco_configuracao/config.php");
	$sql = "SELECT CONVERT(decimal(10,2) ,COALESCE(sum(convert(decimal, nota_formulario))/count(*),0))as NotaArea, CONVERT(decimal(10,2),COALESCE(sum(convert(decimal, nota_mc))/count(*),0))as NotaMc FROM FORMULARIO_ADMINISTRATIVO WHERE area_adm='$area' and (DATEPART(month, CONVERT(date, data, 103)) = '10' OR DATEPART(month, CONVERT(date, data, 103)) = '11' OR DATEPART(month, CONVERT(date, data, 103)) = '12')";
	$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
	while($row = sqlsrv_fetch_array($output)){
		$notaArea_4_tri = $row["NotaArea"];
		$notaMc_4_tri = $row["NotaMc"];
	}
	return array ($notaArea_4_tri);
}

//AREA COMUM
function notas_area_comum($area){
	include("banco_configuracao/config.php");
	$sql = "SELECT CONVERT(decimal(10,2),COALESCE(sum(convert(decimal, nota_formulario))/count(*),0))as NotaArea,
CONVERT(decimal(10,2),COALESCE(sum(convert(decimal, nota_mc))/count(*),0))as NotaMc FROM FORMULARIO_AREAS_COMUNS WHERE area_comum='$area'";
	$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
	while($row = sqlsrv_fetch_array($output)){
		$notaArea = $row["NotaArea"];
		$notaMc = $row["NotaMc"];
	}
	return array ($notaArea);
}
function notas_area_comum_1_tri($area){
	include("banco_configuracao/config.php");
	$sql = "SELECT CONVERT(decimal(10,2),COALESCE(sum(convert(decimal, nota_formulario))/count(*),0))as NotaArea,
CONVERT(decimal(10,2),COALESCE(sum(convert(decimal, nota_mc))/count(*),0))as NotaMc FROM FORMULARIO_AREAS_COMUNS WHERE area_comum='$area'and ((DATEPART(month, CONVERT(date, data, 103)) = '1' OR DATEPART(month, CONVERT(date, data, 103)) = '2' OR DATEPART(month, CONVERT(date, data, 103)) = '3'))";
	$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
	while($row = sqlsrv_fetch_array($output)){
		$notaArea_1_tri = $row["NotaArea"];
		$notaMc_1_tri = $row["NotaMc"];
	}
	return array ($notaArea_1_tri);
}
function notas_area_comum_2_tri($area){
	include("banco_configuracao/config.php");
	$sql = "SELECT CONVERT(decimal(10,2),COALESCE(sum(convert(decimal, nota_formulario))/count(*),0))as NotaArea,
CONVERT(decimal(10,2),COALESCE(sum(convert(decimal, nota_mc))/count(*),0))as NotaMc FROM FORMULARIO_AREAS_COMUNS WHERE area_comum='$area'and ((DATEPART(month, CONVERT(date, data, 103)) = '4' OR DATEPART(month, CONVERT(date, data, 103)) = '5' OR DATEPART(month, CONVERT(date, data, 103)) = '6'))";
	$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
	while($row = sqlsrv_fetch_array($output)){
		$notaArea_1_tri = $row["NotaArea"];
		$notaMc_1_tri = $row["NotaMc"];
	}
	return array ($notaArea_1_tri);
}
function notas_area_comum_3_tri($area){
	include("banco_configuracao/config.php");
	$sql = "SELECT CONVERT(decimal(10,2),COALESCE(sum(convert(decimal, nota_formulario))/count(*),0))as NotaArea,
CONVERT(decimal(10,2),COALESCE(sum(convert(decimal, nota_mc))/count(*),0))as NotaMc FROM FORMULARIO_AREAS_COMUNS WHERE area_comum='$area'and ((DATEPART(month, CONVERT(date, data, 103)) = '7' OR DATEPART(month, CONVERT(date, data, 103)) = '8' OR DATEPART(month, CONVERT(date, data, 103)) = '9'))";
	$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
	while($row = sqlsrv_fetch_array($output)){
		$notaArea_1_tri = $row["NotaArea"];
		$notaMc_1_tri = $row["NotaMc"];
	}
	return array ($notaArea_1_tri);
}
function notas_area_comum_4_tri($area){
	include("banco_configuracao/config.php");
	$sql = "SELECT CONVERT(decimal(10,2),COALESCE(sum(convert(decimal, nota_formulario))/count(*),0))as NotaArea,
CONVERT(decimal(10,2),COALESCE(sum(convert(decimal, nota_mc))/count(*),0))as NotaMc FROM FORMULARIO_AREAS_COMUNS WHERE area_comum='$area'and ((DATEPART(month, CONVERT(date, data, 103)) = '10' OR DATEPART(month, CONVERT(date, data, 103)) = '11' OR DATEPART(month, CONVERT(date, data, 103)) = '12'))";
	$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
	while($row = sqlsrv_fetch_array($output)){
		$notaArea_1_tri = $row["NotaArea"];
		$notaMc_1_tri = $row["NotaMc"];
	}
	return array ($notaArea_1_tri);
}