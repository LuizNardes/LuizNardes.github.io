<?php
include("banco_configuracao/config.php");
$matricula = $_POST["matricula"];
$ano = $_POST["ano"];
//$sql = "SELECT * FROM RELATORIO WHERE id = '$id'";
$sql = "SELECT nome,
	CASE WHEN nota_area_1_tri IS NULL THEN '-' else convert(varchar,cast(nota_area_1_tri as numeric(36,2)) ) END AS nota_area_1_tri,
	CASE WHEN nota_area_2_tri IS NULL THEN '-' else convert(varchar,cast(nota_area_2_tri as numeric(36,2)) ) END AS nota_area_2_tri,
	CASE WHEN nota_area_3_tri IS NULL THEN '-' else convert(varchar,cast(nota_area_3_tri as numeric(36,2)) ) END AS nota_area_3_tri,
	CASE WHEN nota_area_4_tri IS NULL THEN '-' else convert(varchar,cast(nota_area_4_tri as numeric(36,2)) ) END AS nota_area_4_tri,
	CASE WHEN nota_area_total IS NULL THEN '-' else convert(varchar,cast(nota_area_total as numeric(36,2)) ) END AS nota_area_total,

	CASE WHEN nota_MC_area_1_tri IS NULL THEN '-' else convert(varchar,cast(nota_MC_area_1_tri as numeric(36,2)) ) END AS nota_MC_area_1_tri,
	CASE WHEN nota_MC_area_2_tri IS NULL THEN '-' else convert(varchar,cast(nota_MC_area_2_tri as numeric(36,2)) ) END AS nota_MC_area_2_tri,
	CASE WHEN nota_MC_area_3_tri IS NULL THEN '-' else convert(varchar,cast(nota_MC_area_3_tri as numeric(36,2)) ) END AS nota_MC_area_3_tri,
	CASE WHEN nota_MC_area_4_tri IS NULL THEN '-' else convert(varchar,cast(nota_MC_area_4_tri as numeric(36,2)) ) END AS nota_MC_area_4_tri,
	CASE WHEN nota_MC_area_total IS NULL THEN '-' else convert(varchar,cast(nota_MC_area_total as numeric(36,2)) ) END AS nota_MC_area_total,

	CASE WHEN nota_individual_1_tri IS NULL THEN '-' else convert(varchar,cast(nota_individual_1_tri as numeric(36,2)) ) END AS nota_individual_1_tri,
	CASE WHEN nota_individual_2_tri IS NULL THEN '-' else convert(varchar,cast(nota_individual_2_tri as numeric(36,2)) ) END AS nota_individual_2_tri,
	CASE WHEN nota_individual_3_tri IS NULL THEN '-' else convert(varchar,cast(nota_individual_3_tri as numeric(36,2)) ) END AS nota_individual_3_tri,
	CASE WHEN nota_individual_4_tri IS NULL THEN '-' else convert(varchar,cast(nota_individual_4_tri as numeric(36,2)) ) END AS nota_individual_4_tri,
	CASE WHEN nota_individual_total IS NULL THEN '-' else convert(varchar,cast(nota_individual_total as numeric(36,2)) ) END AS nota_individual_total,

	CASE WHEN nota_MC_individual_1_tri IS NULL THEN '-' else convert(varchar,cast(nota_MC_individual_1_tri as numeric(36,2)) ) END AS nota_MC_individual_1_tri,
	CASE WHEN nota_MC_individual_2_tri IS NULL THEN '-' else convert(varchar,cast(nota_MC_individual_2_tri as numeric(36,2)) ) END AS nota_MC_individual_2_tri,
	CASE WHEN nota_MC_individual_3_tri IS NULL THEN '-' else convert(varchar,cast(nota_MC_individual_3_tri as numeric(36,2)) ) END AS nota_MC_individual_3_tri,
	CASE WHEN nota_MC_individual_4_tri IS NULL THEN '-' else convert(varchar,cast(nota_MC_individual_4_tri as numeric(36,2)) ) END AS nota_MC_individual_4_tri,
	CASE WHEN nota_MC_individual_total IS NULL THEN '-' else convert(varchar,cast(nota_MC_individual_total as numeric(36,2)) ) END AS nota_MC_individual_total,

	CASE WHEN nota_comum_1_tri IS NULL THEN '-' else convert(varchar,cast(nota_comum_1_tri as numeric(36,2)) ) END AS nota_comum_1_tri,
	CASE WHEN nota_comum_2_tri IS NULL THEN '-' else convert(varchar,cast(nota_comum_2_tri as numeric(36,2)) ) END AS nota_comum_2_tri,
	CASE WHEN nota_comum_3_tri IS NULL THEN '-' else convert(varchar,cast(nota_comum_3_tri as numeric(36,2)) ) END AS nota_comum_3_tri,
	CASE WHEN nota_comum_4_tri IS NULL THEN '-' else convert(varchar,cast(nota_comum_4_tri as numeric(36,2)) ) END AS nota_comum_4_tri,
	CASE WHEN nota_comum_total IS NULL THEN '-' else convert(varchar,cast(nota_comum_total as numeric(36,2)) ) END AS nota_comum_total,

	CASE WHEN nota_MC_comum_1_tri IS NULL THEN '-' else convert(varchar,cast(nota_MC_comum_1_tri as numeric(36,2)) ) END AS nota_MC_comum_1_tri,
	CASE WHEN nota_MC_comum_2_tri IS NULL THEN '-' else convert(varchar,cast(nota_MC_comum_2_tri as numeric(36,2)) ) END AS nota_MC_comum_2_tri,
	CASE WHEN nota_MC_comum_3_tri IS NULL THEN '-' else convert(varchar,cast(nota_MC_comum_3_tri as numeric(36,2)) ) END AS nota_MC_comum_3_tri,
	CASE WHEN nota_MC_comum_4_tri IS NULL THEN '-' else convert(varchar,cast(nota_MC_comum_4_tri as numeric(36,2)) ) END AS nota_MC_comum_4_tri,
	CASE WHEN nota_MC_comum_total IS NULL THEN '-' else convert(varchar,cast(nota_MC_comum_total as numeric(36,2)) ) END AS nota_MC_comum_total,

	CASE WHEN nota_grupo_1_tri IS NULL THEN '-' else convert(varchar,cast(nota_grupo_1_tri as numeric(36,2)) ) END AS nota_grupo_1_tri,
	CASE WHEN nota_grupo_2_tri IS NULL THEN '-' else convert(varchar,cast(nota_grupo_2_tri as numeric(36,2)) ) END AS nota_grupo_2_tri,
	CASE WHEN nota_grupo_3_tri IS NULL THEN '-' else convert(varchar,cast(nota_grupo_3_tri as numeric(36,2)) ) END AS nota_grupo_3_tri,
	CASE WHEN nota_grupo_4_tri IS NULL THEN '-' else convert(varchar,cast(nota_grupo_4_tri as numeric(36,2)) ) END AS nota_grupo_4_tri,
	CASE WHEN nota_grupo_total IS NULL THEN '-' else convert(varchar,cast(nota_grupo_total as numeric(36,2)) ) END AS nota_grupo_total,

	CASE WHEN nota_MC_grupo_1_tri IS NULL THEN '-' else convert(varchar,cast(nota_MC_grupo_1_tri as numeric(36,2)) ) END AS nota_MC_grupo_1_tri,
	CASE WHEN nota_MC_grupo_2_tri IS NULL THEN '-' else convert(varchar,cast(nota_MC_grupo_2_tri as numeric(36,2)) ) END AS nota_MC_grupo_2_tri,
	CASE WHEN nota_MC_grupo_3_tri IS NULL THEN '-' else convert(varchar,cast(nota_MC_grupo_3_tri as numeric(36,2)) ) END AS nota_MC_grupo_3_tri,
	CASE WHEN nota_MC_grupo_4_tri IS NULL THEN '-' else convert(varchar,cast(nota_MC_grupo_4_tri as numeric(36,2)) ) END AS nota_MC_grupo_4_tri,
	CASE WHEN nota_MC_grupo_total IS NULL THEN '-' else convert(varchar,cast(nota_MC_grupo_total as numeric(36,2)) ) END AS nota_MC_grupo_total,

	CASE WHEN nota_1_tri IS NULL THEN '-' else convert(varchar,cast(nota_1_tri as numeric(36,2)) ) END AS nota_1_tri,
	CASE WHEN nota_2_tri IS NULL THEN '-' else convert(varchar,cast(nota_2_tri as numeric(36,2)) ) END AS nota_2_tri,
	CASE WHEN nota_3_tri IS NULL THEN '-' else convert(varchar,cast(nota_3_tri as numeric(36,2)) ) END AS nota_3_tri,
	CASE WHEN nota_4_tri IS NULL THEN '-' else convert(varchar,cast(nota_4_tri as numeric(36,2)) ) END AS nota_4_tri,
	CASE WHEN nota_anual IS NULL THEN '-' else convert(varchar,cast(nota_anual as numeric(36,2)) ) END AS nota_anual


 FROM VIEW_RELATORIO_GERAL_COMPLETO WHERE matricula = '$matricula' AND ano = '$ano'";
$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
while($row = sqlsrv_fetch_array($output)){
    $vetor[] = array_map('myfunction', $row); 
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