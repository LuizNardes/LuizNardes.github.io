<?php
include("banco_configuracao/config.php");
$ano = '2020';
$sql10 = "DELETE FROM RELATORIO WHERE ano = '$ano'";
$output1O = sqlsrv_query($conn,$sql10) or die(print_r(sqlsrv_errors()));
 
list($grupo01_anual,$grupo02_anual,$grupo03_anual,$grupo04_anual,$grupo05_anual,$grupo06_anual,$grupo07_anual,$grupo08_anual,$grupo09_anual,$grupo10_anual,$grupo11_anual,$grupo12_anual,$media_comuns_anual, $media_mc_anual,$grupo01_1_tri,$grupo02_1_tri,$grupo03_1_tri,$grupo04_1_tri,$grupo05_1_tri,$grupo06_1_tri,$grupo07_1_tri,$grupo08_1_tri,$grupo09_1_tri,$grupo10_1_tri,$grupo11_1_tri,$grupo12_1_tri,$media_comuns_1_tri, $media_mc_1_tri,$grupo01_2_tri,$grupo02_2_tri,$grupo03_2_tri,$grupo04_2_tri,$grupo05_2_tri,$grupo06_2_tri,$grupo07_2_tri,$grupo08_2_tri,$grupo09_2_tri,$grupo10_2_tri,$grupo11_2_tri,$grupo12_2_tri,$media_comuns_2_tri, $media_mc_2_tri, $grupo01_3_tri,$grupo02_3_tri,$grupo03_3_tri,$grupo04_3_tri,$grupo05_3_tri,$grupo06_3_tri,$grupo07_3_tri,$grupo08_3_tri,$grupo09_3_tri,$grupo10_3_tri,$grupo11_3_tri,$grupo12_3_tri,$media_comuns_3_tri, $media_mc_3_tri,$grupo01_4_tri,$grupo02_4_tri,$grupo03_4_tri,$grupo04_4_tri,$grupo05_4_tri,$grupo06_4_tri,$grupo07_4_tri,$grupo08_4_tri,$grupo09_4_tri,$grupo10_4_tri,$grupo11_4_tri,$grupo12_4_tri,$media_comuns_4_tri, $media_mc_4_tri) =  grupos();


function grupos(){
	// $grupo01_anual = 0;
	// $grupo02_anual = 0;
	// $grupo03_anual = 0;
	// $grupo04_anual = 0;
	// $grupo05_anual = 0;
	// $grupo06_anual = 0;
	// $grupo07_anual = 0;
	// $grupo08_anual = 0;
	// $grupo09_anual = 0;
	// $grupo10_anual = 0;
	// $grupo11_anual = 0;
	// $grupo12_anual = 0;
	// $media_comuns_anual = 0;
	// $media_mc_anual= 0;

	// $grupo01_1_tri = 0;
	// $grupo02_1_tri = 0;
	// $grupo03_1_tri = 0;
	// $grupo04_1_tri = 0;
	// $grupo05_1_tri = 0;
	// $grupo06_1_tri = 0;
	// $grupo07_1_tri = 0;
	// $grupo08_1_tri = 0;
	// $grupo09_1_tri = 0;
	// $grupo10_1_tri = 0;
	// $grupo11_1_tri = 0;
	// $grupo12_1_tri = 0;
	// $media_comuns_1_tri = 0;
	// $media_mc_1_tri= 0;

	// $grupo01_2_tri = 0;
	// $grupo02_2_tri = 0;
	// $grupo03_2_tri = 0;
	// $grupo04_2_tri = 0;
	// $grupo05_2_tri = 0;
	// $grupo06_2_tri = 0;
	// $grupo07_2_tri = 0;
	// $grupo08_2_tri = 0;
	// $grupo09_2_tri = 0;
	// $grupo10_2_tri = 0;
	// $grupo11_2_tri = 0;
	// $grupo12_2_tri = 0;
	// $media_comuns_2_tri = 0;
	// $media_mc_2_tri= 0;

	// $grupo01_3_tri = 0;
	// $grupo02_3_tri = 0;
	// $grupo03_3_tri = 0;
	// $grupo04_3_tri = 0;
	// $grupo05_3_tri = 0;
	// $grupo06_3_tri = 0;
	// $grupo07_3_tri = 0;
	// $grupo08_3_tri = 0;
	// $grupo09_3_tri = 0;
	// $grupo10_3_tri = 0;
	// $grupo11_3_tri = 0;
	// $grupo12_3_tri = 0;
	// $media_comuns_3_tri = 0;
	// $media_mc_3_tri= 0;

	// $grupo01_4_tri = 0;
	// $grupo02_4_tri = 0;
	// $grupo03_4_tri = 0;
	// $grupo04_4_tri = 0;
	// $grupo05_4_tri = 0;
	// $grupo06_4_tri = 0;
	// $grupo07_4_tri = 0;
	// $grupo08_4_tri = 0;
	// $grupo09_4_tri = 0;
	// $grupo10_4_tri = 0;
	// $grupo11_4_tri = 0;
	// $grupo12_4_tri = 0;
	// $media_comuns_4_tri = 0;
	// $media_mc_4_tri= 0;

	include("banco_configuracao/config.php");
	$sql = "SELECT * FROM RETORNA_RELATORIO where ano = '$ano'";
	$output = sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
	while($row = sqlsrv_fetch_array($output)){
	     $grupo01_anual = $row["grupo1_anual"];
	     $grupo02_anual = $row["grupo2_anual"];
	     $grupo03_anual = $row["grupo3_anual"];
	     $grupo04_anual = $row["grupo4_anual"];
	     $grupo05_anual = $row["grupo5_anual"];
	     $grupo06_anual = $row["grupo6_anual"];
	     $grupo07_anual = $row["grupo7_anual"];
	     $grupo08_anual = $row["grupo8_anual"];
	     $grupo09_anual = $row["grupo9_anual"];
	     $grupo10_anual = $row["grupo10_anual"];
	     $grupo11_anual = $row["grupo11_anual"];
	     $grupo12_anual = $row["grupo12_anual"];
	     $media_comuns_anual = $row["media_comuns_anual"];
	     $media_mc_anual= $row["media_mc_anual"];

	     // 1 trimestre
	     $grupo01_1_tri = $row["grupo1_1_tri"];
	     $grupo02_1_tri = $row["grupo2_1_tri"];
	     $grupo03_1_tri = $row["grupo3_1_tri"];
	     $grupo04_1_tri = $row["grupo4_1_tri"];
	     $grupo05_1_tri = $row["grupo5_1_tri"];
	     $grupo06_1_tri = $row["grupo6_1_tri"];
	     $grupo07_1_tri = $row["grupo7_1_tri"];
	     $grupo08_1_tri = $row["grupo8_1_tri"];
	     $grupo09_1_tri = $row["grupo9_1_tri"];
	     $grupo10_1_tri = $row["grupo10_1_tri"];
	     $grupo11_1_tri = $row["grupo11_1_tri"];
	     $grupo12_1_tri = $row["grupo12_1_tri"];
	     $media_comuns_1_tri = $row["comuns_1_tri"];
	     $media_mc_1_tri= $row["mc_1_tri"];

	     // 2 trimestre
	     $grupo01_2_tri = $row["grupo1_2_tri"];
	     $grupo02_2_tri = $row["grupo2_2_tri"];
	     $grupo03_2_tri = $row["grupo3_2_tri"];
	     $grupo04_2_tri = $row["grupo4_2_tri"];
	     $grupo05_2_tri = $row["grupo5_2_tri"];
	     $grupo06_2_tri = $row["grupo6_2_tri"];
	     $grupo07_2_tri = $row["grupo7_2_tri"];
	     $grupo08_2_tri = $row["grupo8_2_tri"];
	     $grupo09_2_tri = $row["grupo9_2_tri"];
	     $grupo10_2_tri = $row["grupo10_2_tri"];
	     $grupo11_2_tri = $row["grupo11_2_tri"];
	     $grupo12_2_tri = $row["grupo12_2_tri"];
	     $media_comuns_2_tri = $row["comuns_2_tri"];
	     $media_mc_2_tri= $row["mc_2_tri"];

	     // 3 trimestre
	     $grupo01_3_tri = $row["grupo1_3_tri"];
	     $grupo02_3_tri = $row["grupo2_3_tri"];
	     $grupo03_3_tri = $row["grupo3_3_tri"];
	     $grupo04_3_tri = $row["grupo4_3_tri"];
	     $grupo05_3_tri = $row["grupo5_3_tri"];
	     $grupo06_3_tri = $row["grupo6_3_tri"];
	     $grupo07_3_tri = $row["grupo7_3_tri"];
	     $grupo08_3_tri = $row["grupo8_3_tri"];
	     $grupo09_3_tri = $row["grupo9_3_tri"];
	     $grupo10_3_tri = $row["grupo10_3_tri"];
	     $grupo11_3_tri = $row["grupo11_3_tri"];
	     $grupo12_3_tri = $row["grupo12_3_tri"];
	     $media_comuns_3_tri = $row["comuns_3_tri"];
	     $media_mc_3_tri= $row["mc_3_tri"];
	     
	      // 4 trimestre
	     $grupo01_4_tri = $row["grupo1_4_tri"];
	     $grupo02_4_tri = $row["grupo2_4_tri"];
	     $grupo03_4_tri = $row["grupo3_4_tri"];
	     $grupo04_4_tri = $row["grupo4_4_tri"];
	     $grupo05_4_tri = $row["grupo5_4_tri"];
	     $grupo06_4_tri = $row["grupo6_4_tri"];
	     $grupo07_4_tri = $row["grupo7_4_tri"];
	     $grupo08_4_tri = $row["grupo8_4_tri"];
	     $grupo09_4_tri = $row["grupo9_4_tri"];
	     $grupo10_4_tri = $row["grupo10_4_tri"];
	     $grupo11_4_tri = $row["grupo11_4_tri"];
	     $grupo12_4_tri = $row["grupo12_4_tri"];
	     $media_comuns_4_tri = $row["comuns_4_tri"];
	     $media_mc_4_tri= $row["mc_4_tri"];
	     
	     return array ($grupo01_anual,$grupo02_anual,$grupo03_anual,$grupo04_anual,$grupo05_anual,$grupo06_anual,$grupo07_anual,$grupo08_anual,$grupo09_anual,$grupo10_anual,$grupo11_anual,$grupo12_anual,$media_comuns_anual, $media_mc_anual,$grupo01_1_tri,$grupo02_1_tri,$grupo03_1_tri,$grupo04_1_tri,$grupo05_1_tri,$grupo06_1_tri,$grupo07_1_tri,$grupo08_1_tri,$grupo09_1_tri,$grupo10_1_tri,$grupo11_1_tri,$grupo12_1_tri,$media_comuns_1_tri, $media_mc_1_tri,$grupo01_2_tri,$grupo02_2_tri,$grupo03_2_tri,$grupo04_2_tri,$grupo05_2_tri,$grupo06_2_tri,$grupo07_2_tri,$grupo08_2_tri,$grupo09_2_tri,$grupo10_2_tri,$grupo11_2_tri,$grupo12_2_tri,$media_comuns_2_tri, $media_mc_2_tri, $grupo01_3_tri,$grupo02_3_tri,$grupo03_3_tri,$grupo04_3_tri,$grupo05_3_tri,$grupo06_3_tri,$grupo07_3_tri,$grupo08_3_tri,$grupo09_3_tri,$grupo10_3_tri,$grupo11_3_tri,$grupo12_3_tri,$media_comuns_3_tri, $media_mc_3_tri,$grupo01_4_tri,$grupo02_4_tri,$grupo03_4_tri,$grupo04_4_tri,$grupo05_4_tri,$grupo06_4_tri,$grupo07_4_tri,$grupo08_4_tri,$grupo09_4_tri,$grupo10_4_tri,$grupo11_4_tri,$grupo12_4_tri,$media_comuns_4_tri, $media_mc_4_tri);

	}
}
// retorna ANUAL
function notas_adm($area,$ano){
	include("banco_configuracao/config.php");
	$sql = "SELECT CONVERT(decimal(10,2) ,COALESCE(sum(convert(decimal, nota_formulario))/count(*),0))as NotaArea, CONVERT(decimal(10,2),COALESCE(sum(convert(decimal, nota_mc))/count(*),0))as NotaMc 
	FROM FORMULARIO_ADMINISTRATIVO WHERE area_adm='$area' AND ano = '$ano'";
	$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
	while($row = sqlsrv_fetch_array($output)){
		$notaArea = $row["NotaArea"];
		$notaMc = $row["NotaMc"];
	}
	return array ($notaArea,$notaMc);
}

function notas_industrial($area,$ano){
	include("banco_configuracao/config.php");
	$sql = "SELECT CONVERT(decimal(10,2), COALESCE(sum(convert(decimal, nota_formulario))/count(*),0))as NotaArea,convert (decimal(10,2),COALESCE(sum(convert(decimal, nota_mc))/count(*),0))
as NotaMc FROM FORMULARIO_INDUSTRIAL WHERE area_industrial='$area' AND ano = '$ano'";
	$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
	while($row = sqlsrv_fetch_array($output)){
		$notaArea = $row["NotaArea"];
		$notaMc = $row["NotaMc"];
	}
	return array ($notaArea,$notaMc);
}

function notas_adm_individual($nome,$ano){
	include("banco_configuracao/config.php");
	$sql = "SELECT convert(decimal(10,2),COALESCE(sum(convert(decimal, nota_formulario))/count(*),0))as NotaIndividual ,convert(decimal(10,2),COALESCE(sum(convert(decimal, nota_mc))/count(*),0)) as NotaMc 
	FROM FORMULARIO_ADM_USO_PESSOAL WHERE colaborador='$nome' AND ano = '$ano'";
	$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
	while($row = sqlsrv_fetch_array($output)){
		$NotaIndividual = $row["NotaIndividual"];
		$notaMc = $row["NotaMc"];
	}
	return array ($NotaIndividual,$notaMc);
}

function notas_industrial_individual($nome,$ano){
	include("banco_configuracao/config.php");
	$sql = "SELECT CONVERT(decimal(10,2),coalesce(sum(convert(decimal, nota_formulario))/count(*),0))as NotaIndividual,convert(decimal(10,2),coalesce(sum(convert(decimal, nota_mc))/count(*),0))as NotaMc 
	FROM FORMULARIO_INDUSTRIAL_USO_PESSOAL WHERE colaborador='$nome' AND ano = '$ano'";
	$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
	while($row = sqlsrv_fetch_array($output)){
		$NotaIndividual = $row["NotaIndividual"];
		$notaMcIndividual = $row["NotaMc"];

	}
	return array ($NotaIndividual,$notaMcIndividual);;
}

//RETORNA TRIMESTRE 1
function notas_adm_1_tri($area,$ano){
	include("banco_configuracao/config.php");
	$sql = "SELECT CONVERT(decimal(10,2) ,COALESCE(sum(convert(decimal, nota_formulario))/count(*),0))as NotaArea, CONVERT(decimal(10,2),COALESCE(sum(convert(decimal, nota_mc))/count(*),0))as NotaMc 
	FROM FORMULARIO_ADMINISTRATIVO WHERE area_adm='$area' AND ano = '$ano' and (DATEPART(month, CONVERT(date, data, 103)) = '1' OR DATEPART(month, CONVERT(date, data, 103)) = '2' OR DATEPART(month, CONVERT(date, data, 103)) = '3')";
	$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
	while($row = sqlsrv_fetch_array($output)){
		$notaArea_1_tri = $row["NotaArea"];
		$notaMc_1_tri = $row["NotaMc"];
	}
	return array ($notaArea_1_tri,$notaMc_1_tri);
}
function notas_industrial_1_tri($area,$ano){
	include("banco_configuracao/config.php");
	$sql = "SELECT CONVERT(decimal(10,2), COALESCE(sum(convert(decimal, nota_formulario))/count(*),0))as NotaArea,convert (decimal(10,2),COALESCE(sum(convert(decimal, nota_mc))/count(*),0))
as NotaMc FROM FORMULARIO_INDUSTRIAL WHERE area_industrial='$area' AND ano = '$ano'
and ((DATEPART(month, CONVERT(date, data, 103)) = '1') OR (DATEPART(month, CONVERT(date, data, 103)) = '2') OR (DATEPART(month, CONVERT(date, data, 103)) = '3'))";
	$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
	while($row = sqlsrv_fetch_array($output)){
		$notaArea_1_tri = $row["NotaArea"];
		$notaMc_1_tri = $row["NotaMc"];
	}
	return array ($notaArea_1_tri,$notaMc_1_tri);
}
function notas_adm_individual_1_tri($nome,$ano){
	include("banco_configuracao/config.php");
	$sql = "SELECT convert(decimal(10,2),COALESCE(sum(convert(decimal, nota_formulario))/count(*),0))as NotaIndividual, convert(decimal(10,2),COALESCE(sum(convert(decimal, nota_mc))/count(*),0)) as NotaMc 
	FROM FORMULARIO_ADM_USO_PESSOAL WHERE colaborador='$nome' AND ano = '$ano' and ((DATEPART(month, CONVERT(date, data, 103)) = '1') OR (DATEPART(month, CONVERT(date, data, 103)) = '2') OR (DATEPART(month, CONVERT(date, data, 103)) = '3')) ";
	$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
	while($row = sqlsrv_fetch_array($output)){
		$NotaIndividual_1_tri = $row["NotaIndividual"];
		$notaMc_1_tri = $row["NotaMc"];
	}
	return array ($NotaIndividual_1_tri,$notaMc_1_tri);;
}
function notas_industrial_individual_1_tri($nome,$ano){
	include("banco_configuracao/config.php");
	$sql = "SELECT CONVERT(decimal(10,2),coalesce(sum(convert(decimal, nota_formulario))/count(*),0))as NotaIndividual, convert(decimal(10,2),coalesce(sum(convert(decimal, nota_mc))/count(*),0))as NotaMc 
	FROM FORMULARIO_INDUSTRIAL_USO_PESSOAL WHERE colaborador='$nome' AND ano = '$ano' and ((DATEPART(month, CONVERT(date, data, 103)) = '1') OR (DATEPART(month, CONVERT(date, data, 103)) = '2') OR (DATEPART(month, CONVERT(date, data, 103)) = '3'))";
	$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
	while($row = sqlsrv_fetch_array($output)){
		$NotaIndividual_1_tri = $row["NotaIndividual"];
		$notaMcIndividual_1_tri = $row["NotaMc"];
	}
	return array ($NotaIndividual_1_tri,$notaMcIndividual_1_tri);
}

//RETORNA SEGUNDO TRIMESTRE 
function notas_adm_2_tri($area,$ano){
	include("banco_configuracao/config.php");
	$sql = "SELECT CONVERT(decimal(10,2) ,COALESCE(sum(convert(decimal, nota_formulario))/count(*),0))as NotaArea, CONVERT(decimal(10,2),COALESCE(sum(convert(decimal, nota_mc))/count(*),0))as NotaMc 
	FROM FORMULARIO_ADMINISTRATIVO WHERE area_adm='$area' AND ano = '$ano' and (DATEPART(month, CONVERT(date, data, 103)) = '4' OR DATEPART(month, CONVERT(date, data, 103)) = '5' OR DATEPART(month, CONVERT(date, data, 103)) = '6')";
	$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
	while($row = sqlsrv_fetch_array($output)){
		$notaArea_2_tri = $row["NotaArea"];
		$notaMc_2_tri = $row["NotaMc"];
	}
	return array ($notaArea_2_tri,$notaMc_2_tri);
}
function notas_industrial_2_tri($area,$ano){
	include("banco_configuracao/config.php");
	$sql = "SELECT CONVERT(decimal(10,2), COALESCE(sum(convert(decimal, nota_formulario))/count(*),0))as NotaArea,convert (decimal(10,2),COALESCE(sum(convert(decimal, nota_mc))/count(*),0))
as NotaMc FROM FORMULARIO_INDUSTRIAL WHERE area_industrial='A003 - FÁBRICA LAMINAS PÓS VENDAS' AND ano = '$ano'
and ((DATEPART(month, CONVERT(date, data, 103)) = '4') OR (DATEPART(month, CONVERT(date, data, 103)) = '5') OR (DATEPART(month, CONVERT(date, data, 103)) = '6'))";
	$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
	while($row = sqlsrv_fetch_array($output)){
		$notaArea_2_tri = $row["NotaArea"];
		$notaMc_2_tri = $row["NotaMc"];
	}
	return array ($notaArea_2_tri,$notaMc_2_tri);
}
function notas_adm_individual_2_tri($nome,$ano){
	include("banco_configuracao/config.php");
	$sql = "SELECT convert(decimal(10,2),COALESCE(sum(convert(decimal, nota_formulario))/count(*),0))as NotaIndividual, convert(decimal(10,2),COALESCE(sum(convert(decimal, nota_mc))/count(*),0)) as NotaMc 
	FROM FORMULARIO_ADM_USO_PESSOAL WHERE colaborador='$nome' AND ano = '$ano' and ((DATEPART(month, CONVERT(date, data, 103)) = '4') OR (DATEPART(month, CONVERT(date, data, 103)) = '5') OR (DATEPART(month, CONVERT(date, data, 103)) = '6'))";
	$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
	while($row = sqlsrv_fetch_array($output)){
		$NotaIndividual_2_tri = $row["NotaIndividual"];
		$notaMc_2_tri = $row["NotaMc"];
	}
	return array ($NotaIndividual_2_tri,$notaMc_2_tri);;
}
function notas_industrial_individual_2_tri($nome,$ano){
	include("banco_configuracao/config.php");
	$sql = "SELECT CONVERT(decimal(10,2),coalesce(sum(convert(decimal, nota_formulario))/count(*),0))as NotaIndividual, convert(decimal(10,2),coalesce(sum(convert(decimal, nota_mc))/count(*),0))as NotaMc 
	FROM FORMULARIO_INDUSTRIAL_USO_PESSOAL WHERE colaborador='$nome' AND ano = '$ano' and ((DATEPART(month, CONVERT(date, data, 103)) = '4') OR (DATEPART(month, CONVERT(date, data, 103)) = '5') OR (DATEPART(month, CONVERT(date, data, 103)) = '6'))";
	$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
	while($row = sqlsrv_fetch_array($output)){
		$NotaIndividual_2_tri = $row["NotaIndividual"];
		$notaMcIndividual_2_tri = $row["NotaMc"];
	}
	return array ($NotaIndividual_2_tri,$notaMcIndividual_2_tri);;
}

// RETORNA TERCEIRO TRIMESTRE
function notas_adm_3_tri($area,$ano){
	include("banco_configuracao/config.php");
	$sql = "SELECT CONVERT(decimal(10,2) ,COALESCE(sum(convert(decimal, nota_formulario))/count(*),0))as NotaArea, CONVERT(decimal(10,2),COALESCE(sum(convert(decimal, nota_mc))/count(*),0))as NotaMc 
	FROM FORMULARIO_ADMINISTRATIVO WHERE area_adm='$area' AND ano = '$ano' and (DATEPART(month, CONVERT(date, data, 103)) = '7' OR DATEPART(month, CONVERT(date, data, 103)) = '8' OR DATEPART(month, CONVERT(date, data, 103)) = '9')";
	$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
	while($row = sqlsrv_fetch_array($output)){
		$notaArea_3_tri = $row["NotaArea"];
		$notaMc_3_tri = $row["NotaMc"];
	}
	return array ($notaArea_3_tri,$notaMc_3_tri);
}
function notas_industrial_3_tri($area,$ano){
	include("banco_configuracao/config.php");
	$sql = "SELECT CONVERT(decimal(10,2), COALESCE(sum(convert(decimal, nota_formulario))/count(*),0))as NotaArea,convert (decimal(10,2),COALESCE(sum(convert(decimal, nota_mc))/count(*),0))
as NotaMc FROM FORMULARIO_INDUSTRIAL WHERE area_industrial='A003 - FÁBRICA LAMINAS PÓS VENDAS' AND ano = '$ano'
and ((DATEPART(month, CONVERT(date, data, 103)) = '7') OR (DATEPART(month, CONVERT(date, data, 103)) = '8') OR (DATEPART(month, CONVERT(date, data, 103)) = '9')) ";
	$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
	while($row = sqlsrv_fetch_array($output)){
		$notaArea_3_tri = $row["NotaArea"];
		$notaMc_3_tri = $row["NotaMc"];
	}
	return array ($notaArea_3_tri,$notaMc_3_tri);
}
function notas_adm_individual_3_tri($nome,$ano){
	include("banco_configuracao/config.php");
	$sql = "SELECT convert(decimal(10,2),COALESCE(sum(convert(decimal, nota_formulario))/count(*),0))as NotaIndividual, convert(decimal(10,2),COALESCE(sum(convert(decimal, nota_mc))/count(*),0)) as NotaMc 
	FROM FORMULARIO_ADM_USO_PESSOAL WHERE colaborador='$nome' AND ano = '$ano' and ((DATEPART(month, CONVERT(date, data, 103)) = '7') OR (DATEPART(month, CONVERT(date, data, 103)) = '8') OR (DATEPART(month, CONVERT(date, data, 103)) = '9'))";
	$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
	while($row = sqlsrv_fetch_array($output)){
		$NotaIndividual_3_tri = $row["NotaIndividual"];
		$notaMc_3_tri = $row["NotaMc"];
	}
	return array ($NotaIndividual_3_tri,$notaMc_3_tri);
}
function notas_industrial_individual_3_tri($nome,$ano){
	include("banco_configuracao/config.php");
	$sql = "SELECT CONVERT(decimal(10,2),coalesce(sum(convert(decimal, nota_formulario))/count(*),0))as NotaIndividual, convert(decimal(10,2),coalesce(sum(convert(decimal, nota_mc))/count(*),0))as NotaMc 
	FROM FORMULARIO_INDUSTRIAL_USO_PESSOAL WHERE colaborador='$nome' AND ano = '$ano' and ((DATEPART(month, CONVERT(date, data, 103)) = '7') OR (DATEPART(month, CONVERT(date, data, 103)) = '8') OR (DATEPART(month, CONVERT(date, data, 103)) = '9'))";
	$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
	while($row = sqlsrv_fetch_array($output)){
		$NotaIndividual_3_tri = $row["NotaIndividual"];
		$notaMcIndividual_3_tri = $row["NotaMc"];
	}
	return array ($NotaIndividual_3_tri,$notaMcIndividual_3_tri);;
}

// RETORNA QUARTO TRIMESTRE
function notas_adm_4_tri($area,$ano){
	include("banco_configuracao/config.php");
	$sql = "SELECT CONVERT(decimal(10,2) ,COALESCE(sum(convert(decimal, nota_formulario))/count(*),0))as NotaArea, CONVERT(decimal(10,2),COALESCE(sum(convert(decimal, nota_mc))/count(*),0))as NotaMc 
	FROM FORMULARIO_ADMINISTRATIVO WHERE area_adm='$area' AND ano = '$ano' and (DATEPART(month, CONVERT(date, data, 103)) = '10' OR DATEPART(month, CONVERT(date, data, 103)) = '11' OR DATEPART(month, CONVERT(date, data, 103)) = '12')";
	$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
	while($row = sqlsrv_fetch_array($output)){
		$notaArea_4_tri = $row["NotaArea"];
		$notaMc_4_tri = $row["NotaMc"];
	}
	return array ($notaArea_4_tri,$notaMc_4_tri);
}
function notas_industrial_4_tri($area,$ano){
	include("banco_configuracao/config.php");
	$sql = "SELECT CONVERT(decimal(10,2), COALESCE(sum(convert(decimal, nota_formulario))/count(*),0))as NotaArea, convert (decimal(10,2),COALESCE(sum(convert(decimal, nota_mc))/count(*),0))
as NotaMc FROM FORMULARIO_INDUSTRIAL WHERE area_industrial='A003 - FÁBRICA LAMINAS PÓS VENDAS' AND ano = '$ano'
and ((DATEPART(month, CONVERT(date, data, 103)) = '10') OR (DATEPART(month, CONVERT(date, data, 103)) = '11') OR  (DATEPART(month, CONVERT(date, data, 103)) = '12'))";
	$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
	while($row = sqlsrv_fetch_array($output)){
		$notaArea_4_tri = $row["NotaArea"];
		$notaMc_4_tri = $row["NotaMc"];
	}
	return array ($notaArea_4_tri,$notaMc_4_tri);
}
function notas_adm_individual_4_tri($nome,$ano){
	include("banco_configuracao/config.php");
	$sql = "SELECT convert(decimal(10,2),COALESCE(sum(convert(decimal, nota_formulario))/count(*),0))as NotaIndividual, convert(decimal(10,2),COALESCE(sum(convert(decimal, nota_mc))/count(*),0)) as NotaMc 
	FROM FORMULARIO_ADM_USO_PESSOAL WHERE colaborador='$nome' AND ano = '$ano' and ((DATEPART(month, CONVERT(date, data, 103)) = '10') OR (DATEPART(month, CONVERT(date, data, 103)) = '11') OR (DATEPART(month, CONVERT(date, data, 103)) = '12'))";
	$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
	while($row = sqlsrv_fetch_array($output)){
		$NotaIndividual_4_tri = $row["NotaIndividual"];
		$notaMc_4_tri = $row["NotaMc"];
	}
	return array ($NotaIndividual_4_tri,$notaMc_4_tri);
}
function notas_industrial_individual_4_tri($nome,$ano){
	include("banco_configuracao/config.php");
	$sql = "SELECT CONVERT(decimal(10,2),coalesce(sum(convert(decimal, nota_formulario))/count(*),0))as NotaIndividual, convert(decimal(10,2),coalesce(sum(convert(decimal, nota_mc))/count(*),0))as NotaMc 
	FROM FORMULARIO_INDUSTRIAL_USO_PESSOAL WHERE colaborador='$nome' AND ano = '$ano' and ((DATEPART(month, CONVERT(date, data, 103)) = '10') OR (DATEPART(month, CONVERT(date, data, 103)) = '11') OR (DATEPART(month, CONVERT(date, data, 103)) = '12'))";
	$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
	while($row = sqlsrv_fetch_array($output)){
		$NotaIndividual_1_tri = $row["NotaIndividual"];
		$notaMcIndividual_1_tri = $row["NotaMc"];
	}
	return array ($NotaIndividual_1_tri,$notaMcIndividual_1_tri);
}


$sql = "SELECT  * FROM COLABORADORES  order by nome_completo";
$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
while($row = sqlsrv_fetch_array($output)){
   $associacao_areas = $row["associacao_com_areas"];
   $area_referencia = $row["area_referencia"];
   $nome_completo = $row["nome_completo"];
   $setor = $row["setor"];

   if($setor == "INDUSTRIAL"){
   		list($notaArea, $notaMc) = notas_industrial($area_referencia,$ano);
   		list($NotaIndividual, $notaMcIndividual) = notas_industrial_individual($nome_completo,$ano);

   		list($notaArea_1_tri, $notaMc_1_tri) = notas_industrial_1_tri($area_referencia,$ano);
   		list($NotaIndividual_1_tri, $notaMcIndividual_1_tri) = notas_industrial_individual_1_tri($nome_completo,$ano);

   		list($notaArea_2_tri, $notaMc_2_tri) = notas_industrial_2_tri($area_referencia,$ano);
   		list($NotaIndividual_2_tri, $notaMcIndividual_2_tri) = notas_industrial_individual_2_tri($nome_completo,$ano);

   		list($notaArea_3_tri, $notaMc_3_tri) = notas_industrial_3_tri($area_referencia,$ano);
   		list($NotaIndividual_3_tri, $notaMcIndividual_3_tri) = notas_industrial_individual_3_tri($nome_completo,$ano);

   		list($notaArea_4_tri, $notaMc_4_tri) = notas_industrial_4_tri($area_referencia,$ano);
   		list($NotaIndividual_4_tri, $notaMcIndividual_4_tri) = notas_industrial_individual_4_tri($nome_completo,$ano);
   		
   }else{
		list($notaArea, $notaMc) = notas_adm($area_referencia,$ano);
   		list($NotaIndividual, $notaMcIndividual) = notas_adm_individual($nome_completo,$ano);

   		list($notaArea_1_tri, $notaMc_1_tri) = notas_adm_1_tri($area_referencia,$ano);
   		list($NotaIndividual_1_tri, $notaMcIndividual_1_tri) = notas_adm_individual_1_tri($nome_completo,$ano);

   		list($notaArea_2_tri, $notaMc_2_tri) = notas_adm_2_tri($area_referencia,$ano);
   		list($NotaIndividual_2_tri, $notaMcIndividual_2_tri) = notas_adm_individual_2_tri($nome_completo,$ano);

   		list($notaArea_3_tri, $notaMc_3_tri) = notas_adm_3_tri($area_referencia,$ano);
   		list($NotaIndividual_3_tri, $notaMcIndividual_3_tri) = notas_adm_individual_3_tri($nome_completo,$ano);

   		list($notaArea_4_tri, $notaMc_4_tri) = notas_adm_4_tri($area_referencia,$ano);
   		list($NotaIndividual_4_tri, $notaMcIndividual_4_tri) = notas_adm_individual_4_tri($nome_completo,$ano);
   }


   // echo "Setor: ".$setor."<br>";
   // echo "Area referencia: ".$area_referencia."<br>";
   if($associacao_areas != ""){

		$notaArea = $notaArea_2_tri;


	   if($associacao_areas == "GRUPO 01"){
	   		//$notaArea = ($notaArea+$grupo01_anual)/2;
	   		$notaArea_1_tri = ($notaArea_1_tri+$grupo01_1_tri)/2;
	   		$notaArea_2_tri = ($notaArea_2_tri+$grupo01_2_tri)/2;
	   		$notaArea_3_tri = ($notaArea_3_tri+$grupo01_3_tri)/2;
	   		$notaArea_4_tri = ($notaArea_4_tri+$grupo01_4_tri)/2;
	   }
	   if($associacao_areas == "GRUPO 02"){
	   		//$notaArea = ($notaArea+$grupo02_anual)/2;
	   		$notaArea_1_tri = ($notaArea_1_tri+$grupo02_1_tri)/2;
	   		$notaArea_2_tri = ($notaArea_2_tri+$grupo02_2_tri)/2;
	   		$notaArea_3_tri = ($notaArea_3_tri+$grupo02_3_tri)/2;
	   		$notaArea_4_tri = ($notaArea_4_tri+$grupo02_4_tri)/2;
	   }
	   if($associacao_areas == "GRUPO 03"){
	   		//$notaArea = ($notaArea+$grupo03_anual)/2;
	   		$notaArea_1_tri = ($notaArea_1_tri+$grupo03_1_tri)/2;
	   		$notaArea_2_tri = ($notaArea_2_tri+$grupo03_2_tri)/2;
	   		$notaArea_3_tri = ($notaArea_3_tri+$grupo03_3_tri)/2;
	   		$notaArea_4_tri = ($notaArea_4_tri+$grupo03_4_tri)/2;
	   }
	   if($associacao_areas == "GRUPO 04"){
	   		//$notaArea = ($notaArea+$grupo04_anual)/2;
	   		$notaArea_1_tri = ($notaArea_1_tri+$grupo04_1_tri)/2;
	   		$notaArea_2_tri = ($notaArea_2_tri+$grupo04_2_tri)/2;
	   		$notaArea_3_tri = ($notaArea_3_tri+$grupo04_3_tri)/2;
	   		$notaArea_4_tri = ($notaArea_4_tri+$grupo04_4_tri)/2;
	   }
	   if($associacao_areas == "GRUPO 05"){
	   		//$notaArea = ($notaArea+$grupo05_anual)/2;
	   		$notaArea_1_tri = ($notaArea_1_tri+$grupo05_1_tri)/2;
	   		$notaArea_2_tri = ($notaArea_2_tri+$grupo05_2_tri)/2;
	   		$notaArea_3_tri = ($notaArea_3_tri+$grupo05_3_tri)/2;
	   		$notaArea_4_tri = ($notaArea_4_tri+$grupo05_4_tri)/2;
	   }
	   if($associacao_areas == "GRUPO 06"){
	   		//$notaArea = ($notaArea+$grupo06_anual)/2;
	   		$notaArea_1_tri = ($notaArea_1_tri+$grupo06_1_tri)/2;
	   		$notaArea_2_tri = ($notaArea_2_tri+$grupo06_2_tri)/2;
	   		$notaArea_3_tri = ($notaArea_3_tri+$grupo06_3_tri)/2;
	   		$notaArea_4_tri = ($notaArea_4_tri+$grupo06_4_tri)/2;
	   }
	   if($associacao_areas == "GRUPO 07"){
	   		//$notaArea = ($notaArea+$grupo07_anual)/2;
	   		$notaArea_1_tri = ($notaArea_1_tri+$grupo07_1_tri)/2;
	   		$notaArea_2_tri = ($notaArea_2_tri+$grupo07_2_tri)/2;
	   		$notaArea_3_tri = ($notaArea_3_tri+$grupo07_3_tri)/2;
	   		$notaArea_4_tri = ($notaArea_4_tri+$grupo07_4_tri)/2;
	   }
	   if($associacao_areas == "GRUPO 08"){
	   		//$notaArea = ($notaArea+$grupo08_anual)/2;
	   		$notaArea_1_tri = ($notaArea_1_tri+$grupo08_1_tri)/2;
	   		$notaArea_2_tri = ($notaArea_2_tri+$grupo08_2_tri)/2;
	   		$notaArea_3_tri = ($notaArea_3_tri+$grupo08_3_tri)/2;
	   		$notaArea_4_tri = ($notaArea_4_tri+$grupo08_4_tri)/2;
	   }
	   if($associacao_areas == "GRUPO 09"){
	   		//$notaArea = ($notaArea+$grupo09_anual)/2;
	   		$notaArea_1_tri = ($notaArea_1_tri+$grupo09_1_tri)/2;
	   		$notaArea_2_tri = ($notaArea_2_tri+$grupo09_2_tri)/2;
	   		$notaArea_3_tri = ($notaArea_3_tri+$grupo09_3_tri)/2;
	   		$notaArea_4_tri = ($notaArea_4_tri+$grupo09_4_tri)/2;
	   }
	   if($associacao_areas == "GRUPO 10"){
	   		//$notaArea = ($notaArea+$grupo10_anual)/2;
	   		$notaArea_1_tri = ($notaArea_1_tri+$grupo10_1_tri)/2;
	   		$notaArea_2_tri = ($notaArea_2_tri+$grupo10_2_tri)/2;
	   		$notaArea_3_tri = ($notaArea_3_tri+$grupo10_3_tri)/2;
	   		$notaArea_4_tri = ($notaArea_4_tri+$grupo10_4_tri)/2;
	   }
	   if($associacao_areas == "GRUPO 11"){
	   		//$notaArea = ($notaArea+$grupo11_anual)/2;
	   		$notaArea_1_tri = ($notaArea_1_tri+$grupo11_1_tri)/2;
	   		$notaArea_2_tri = ($notaArea_2_tri+$grupo11_2_tri)/2;
	   		$notaArea_3_tri = ($notaArea_3_tri+$grupo11_3_tri)/2;
	   		$notaArea_4_tri = ($notaArea_4_tri+$grupo11_4_tri)/2;
	   }
	   if($associacao_areas == "GRUPO 12"){
	   		//$notaArea = ($notaArea+$grupo12_anual)/2;
	   		$notaArea_1_tri = ($notaArea_1_tri+$grupo12_1_tri)/2;
	   		$notaArea_2_tri = ($notaArea_2_tri+$grupo12_2_tri)/2;
	   		$notaArea_3_tri = ($notaArea_3_tri+$grupo12_3_tri)/2;
	   		$notaArea_4_tri = ($notaArea_4_tri+$grupo12_4_tri)/2;
	   }
	   
   }
   
   
   // echo "Nota Área: ".$notaArea."<br>";
   // echo "Nota MC: ".$notaMc."<br>";
   // echo "Nota Individual: ".$NotaIndividual."<br>";
   // echo "Nota MC: ".$notaMcIndividual."<br>";
   // echo "Nota COMUNS: ".$media_comuns_anual."<br>";
   // echo "Nota MC COMUM: ".$media_mc_anual."<br>";

   $nota_anual = round((($notaArea+$notaMc)*0.8+($NotaIndividual+$notaMcIndividual))*0.8 +(($media_comuns_anual+$media_mc_anual) * 0.2),2);

   $nota_1_tri = round((($notaArea_1_tri+$notaMc_1_tri)*0.8+($NotaIndividual_1_tri+$notaMcIndividual_1_tri))*0.8 +(($media_comuns_1_tri+$media_mc_1_tri) * 0.2),2);
   $nota_2_tri = round((($notaArea_2_tri+$notaMc_2_tri)*0.8+($NotaIndividual_2_tri+$notaMcIndividual_2_tri))*0.8 +(($media_comuns_2_tri+$media_mc_2_tri) * 0.2),2);
   $nota_3_tri = round((($notaArea_3_tri+$notaMc_3_tri)*0.8+($NotaIndividual_3_tri+$notaMcIndividual_3_tri))*0.8 +(($media_comuns_3_tri+$media_mc_3_tri) * 0.2),2);
   $nota_4_tri = round((($notaArea_4_tri+$notaMc_4_tri)*0.8+($NotaIndividual_4_tri+$notaMcIndividual_4_tri))*0.8 +(($media_comuns_4_tri+$media_mc_4_tri) * 0.2),2);
  //echo "Nota FINAL: ".$nota_anual."<br>";
   //$sql10 = "DELETE FROM RELATORIO";
  // $output10 = sqlsrv_query($conn,$sql10) or die(print_r(sqlsrv_errors()));

   $sql2 = "INSERT INTO RELATORIO([colaborador],[nota_area],[nota_area_1_tri],[nota_area_2_tri],[nota_area_3_tri],[nota_area_4_tri],[nota_area_mc],[nota_area_mc_1_tri],[nota_area_mc_2_tri],[nota_area_mc_3_tri],[nota_area_mc_4_tri],[nota_individual],[nota_individual_1_tri],[nota_individual_2_tri],[nota_individual_3_tri],[nota_individual_4_tri],[nota_mc_individual],[nota_mc_individual_1_tri],[nota_mc_individual_2_tri],[nota_mc_individual_3_tri],[nota_mc_individual_4_tri],[nota_area_comum],[nota_area_comum_1_tri],[nota_area_comum_2_tri],[nota_area_comum_3_tri],[nota_area_comum_4_tri],[nota_area_comum_mc],[nota_area_comum_mc_1_tri],[nota_area_comum_mc_2_tri],[nota_area_comum_mc_3_tri],[nota_area_comum_mc_4_tri],[nota_1_tri],[nota_2_tri],[nota_3_tri],[nota_4_tri],[nota_anual],[setor],[area_referencia],[ano]) VALUES('$nome_completo','$notaArea','$notaArea_1_tri','$notaArea_2_tri','$notaArea_3_tri','$notaArea_4_tri','$notaMc','$notaMc_1_tri','$notaMc_2_tri','$notaMc_3_tri','$notaMc_4_tri','$NotaIndividual','$NotaIndividual_1_tri','$NotaIndividual_2_tri','$NotaIndividual_3_tri','$NotaIndividual_4_tri','$notaMcIndividual','$notaMcIndividual_1_tri','$notaMcIndividual_2_tri','$notaMcIndividual_3_tri','$notaMcIndividual_4_tri','$media_comuns_anual','$media_comuns_1_tri','$media_comuns_2_tri','$media_comuns_3_tri','$media_comuns_4_tri','$media_mc_anual','$media_mc_1_tri','$media_mc_2_tri','$media_mc_3_tri','$media_mc_4_tri','$nota_1_tri','$nota_2_tri','$nota_3_tri','$nota_4_tri','$nota_anual','$setor','$area_referencia','$ano')";
 
   //$sql2 = "UPDATE RELATORIO SET nota_area='$notaArea', nota_area_1_tri='$notaArea_1_tri', nota_area_2_tri='$notaArea_2_tri', nota_area_3_tri='$notaArea_3_tri',nota_area_4_tri='$notaArea_4_tri',nota_area_mc='$notaMc',nota_area_mc_1_tri='$notaMc_1_tri',nota_area_mc_2_tri='$notaMc_2_tri',nota_area_mc_3_tri='$notaMc_3_tri',nota_area_mc_4_tri='$notaMc_4_tri',nota_individual='$NotaIndividual', nota_individual_1_tri ='$NotaIndividual_1_tri',nota_individual_2_tri ='$NotaIndividual_2_tri',nota_individual_3_tri ='$NotaIndividual_3_tri',nota_individual_4_tri ='$NotaIndividual_4_tri',nota_mc_individual='$notaMcIndividual', nota_mc_individual_1_tri='$notaMcIndividual_1_tri',nota_mc_individual_2_tri='$notaMcIndividual_2_tri',nota_mc_individual_3_tri='$notaMcIndividual_3_tri',nota_mc_individual_4_tri='$notaMcIndividual_4_tri', nota_area_comum='$media_comuns_anual', nota_area_comum_1_tri='$media_comuns_1_tri',nota_area_comum_2_tri='$media_comuns_2_tri',nota_area_comum_3_tri='$media_comuns_3_tri',nota_area_comum_4_tri='$media_comuns_4_tri',nota_area_comum_mc='$media_mc_anual',nota_area_comum_mc_1_tri='$media_mc_1_tri',nota_area_comum_mc_2_tri='$media_mc_2_tri',nota_area_comum_mc_3_tri='$media_mc_3_tri',nota_area_comum_mc_4_tri='$media_mc_4_tri',nota_1_tri='$nota_1_tri',nota_2_tri='$nota_2_tri',nota_3_tri='$nota_3_tri',nota_4_tri='$nota_4_tri',nota_anual='$nota_anual',setor='$setor',area_referencia='$area_referencia' WHERE colaborador='$nome_completo'";
   
   $output2 = sqlsrv_query($conn,$sql2) or die(print_r(sqlsrv_errors()));
 
  
}
//include('retorna_notas_individuais.php');
//include('retorna_notas_areas.php');

$serverName2 = "fpbr41.perini.net"; 
$connectioninfo2 = array( "Database"=>"dev_testes", "UID"=>"developer", "PWD"=>"fpbr.dev");
$conn2 = sqlsrv_connect($serverName2, $connectioninfo2);
date_default_timezone_set('America/Maceio');
$datahora = date("d/m/Y H:i");
$sistema = "8S";

$sql3 = "INSERT INTO LOG(sistema, datahora) VALUES('$sistema','$datahora')";
$output3 = sqlsrv_query($conn2,$sql3) or die(print_r(sqlsrv_errors()));

echo "Concluído com sucesso!";
