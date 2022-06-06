<?php
include("banco_configuracao/config.php");
session_start();
$user = $_SESSION["nome"];
$setor = $_POST["setor"];
$grupo = $_SESSION["grupo"];
$ano = $_POST["ano"];
$filtro_area = $_SESSION["area_referencia"];// $_POST["filtro_area"];
$i = 0;


if($user == "Robertson Domingos Luiz Buse" || $user == "Sarah Tavares" || $user=="Rondinelia Soares de Souza"){
	$filtro_area = $_POST["filtro_area"];
	include("banco_configuracao/config.php");
	// $sql = "SELECT * FROM NOTAS_AREAS WHERE setor like '%$setor%' and area like '%$filtro_area%'";
	$sql= "SELECT * from(SELECT a.responsavel_8s as responsavel8s, case when a.area_adm is not null then a.area_adm when b.area_adm is not null then b.area_adm when c.area_adm is not null then c.area_adm when d.area_adm is not null then d.area_adm end as area,
coalesce(a.nota ,0) as nota_4_tri, coalesce(b.nota,0) as nota_3_tri, coalesce(c.nota,0) as nota_2_tri, coalesce(d.nota,0) as nota_1_tri,
coalesce(e.nota,0) as nota_anual from (SELECT area_adm,responsavel_8s, convert(decimal(18,2),avg(convert(decimal(18,2),nota_formulario)))AS nota from FORMULARIO_ADMINISTRATIVO WHERE  (DATEPART(month, convert(date, data,103))='10'or DATEPART(month, convert(date, data,103))='11' or DATEPART(month, convert(date, data,103))='12') and datepart(year, convert(date,data,103))='$ano'
GROUP BY area_adm,responsavel_8s)as a full outer join (SELECT area_adm,responsavel_8s, convert(decimal(18,2),avg(convert(decimal(18,2),nota_formulario)))AS nota from FORMULARIO_ADMINISTRATIVO WHERE  (DATEPART(month, convert(date, data,103))='7'or DATEPART(month, convert(date, data,103))='8' or DATEPART(month, convert(date, data,103))='9') and datepart(year, convert(date,data,103))='$ano'
GROUP BY area_adm,responsavel_8s)as b on a.area_adm = b.area_adm full outer join (SELECT area_adm,responsavel_8s, convert(decimal(18,2),avg(convert(decimal(18,2),nota_formulario)))AS nota from FORMULARIO_ADMINISTRATIVO WHERE  (DATEPART(month, convert(date, data,103))='4'or DATEPART(month, convert(date, data,103))='5' or DATEPART(month, convert(date, data,103))='6') and datepart(year, convert(date,data,103))='$ano' GROUP BY area_adm,responsavel_8s)as c on a.area_adm = c.area_adm full outer join (SELECT area_adm,responsavel_8s, convert(decimal(18,2),avg(convert(decimal(18,2),nota_formulario)))AS nota from FORMULARIO_ADMINISTRATIVO WHERE  (DATEPART(month, convert(date, data,103))='1'or DATEPART(month, convert(date, data,103))='2' or DATEPART(month, convert(date, data,103))='3') and datepart(year, convert(date,data,103))='$ano' GROUP BY area_adm,responsavel_8s)as d on a.area_adm = c.area_adm full outer join (SELECT area_adm,responsavel_8s, convert(decimal(18,2),avg(convert(decimal(18,2),nota_formulario)))AS nota from FORMULARIO_ADMINISTRATIVO
WHERE  datepart(year, convert(date,data,103))='$ano' GROUP BY area_adm,responsavel_8s)as e on e.area_adm = c.area_adm)as tudo where area like '%$filtro_area%'";
	$output = sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
	while($row = sqlsrv_fetch_array($output)){
	    $vetor[] = array_map('myfunction', $row); 
	}
}else{
	// $sql6 = "SELECT * FROM [dev_osm].[dbo].NOTAS_AREAS WHERE setor like '%ADMINISTRACAO%' and  (area like '%".$filtro_area."%' )";
	$sql6= "SELECT * from(SELECT a.responsavel_8s as responsavel8s, case when a.area_adm is not null then a.area_adm when b.area_adm is not null then b.area_adm when c.area_adm is not null then c.area_adm when d.area_adm is not null then d.area_adm end as area,
coalesce(a.nota ,0) as nota_4_tri, coalesce(b.nota,0) as nota_3_tri, coalesce(c.nota,0) as nota_2_tri, coalesce(d.nota,0) as nota_1_tri,
coalesce(e.nota,0) as nota_anual from (SELECT area_adm,responsavel_8s, convert(decimal(18,2),avg(convert(decimal(18,2),nota_formulario)))AS nota from FORMULARIO_ADMINISTRATIVO WHERE  (DATEPART(month, convert(date, data,103))='10'or DATEPART(month, convert(date, data,103))='11' or DATEPART(month, convert(date, data,103))='12') and datepart(year, convert(date,data,103))='$ano'
GROUP BY area_adm,responsavel_8s)as a full outer join (SELECT area_adm,responsavel_8s, convert(decimal(18,2),avg(convert(decimal(18,2),nota_formulario)))AS nota from FORMULARIO_ADMINISTRATIVO WHERE  (DATEPART(month, convert(date, data,103))='7'or DATEPART(month, convert(date, data,103))='8' or DATEPART(month, convert(date, data,103))='9') and datepart(year, convert(date,data,103))='$ano'
GROUP BY area_adm,responsavel_8s)as b on a.area_adm = b.area_adm full outer join (SELECT area_adm,responsavel_8s, convert(decimal(18,2),avg(convert(decimal(18,2),nota_formulario)))AS nota from FORMULARIO_ADMINISTRATIVO WHERE  (DATEPART(month, convert(date, data,103))='4'or DATEPART(month, convert(date, data,103))='5' or DATEPART(month, convert(date, data,103))='6') and datepart(year, convert(date,data,103))='$ano' GROUP BY area_adm,responsavel_8s)as c on a.area_adm = c.area_adm full outer join (SELECT area_adm,responsavel_8s, convert(decimal(18,2),avg(convert(decimal(18,2),nota_formulario)))AS nota from FORMULARIO_ADMINISTRATIVO WHERE  (DATEPART(month, convert(date, data,103))='1'or DATEPART(month, convert(date, data,103))='2' or DATEPART(month, convert(date, data,103))='3') and datepart(year, convert(date,data,103))='$ano' GROUP BY area_adm,responsavel_8s)as d on a.area_adm = c.area_adm full outer join (SELECT area_adm,responsavel_8s, convert(decimal(18,2),avg(convert(decimal(18,2),nota_formulario)))AS nota from FORMULARIO_ADMINISTRATIVO
WHERE  datepart(year, convert(date,data,103))='$ano' GROUP BY area_adm,responsavel_8s)as e on e.area_adm = c.area_adm)as tudo where area like '%$filtro_area%'";
	$output6 = sqlsrv_query($conn,$sql6) or die(print_r(sqlsrv_errors()));
	while($row6 = sqlsrv_fetch_array($output6)){
		$vetor[] = array_map('myfunction', $row6); 
	}
	// if($grupo != "" || $grupo != ' '){
	// 	include("banco_configuracao/config.php");
	// 	$sql2 = "SELECT * FROM DETALHAMENTO_GRUPOS WHERE grupo like '%$grupo%'";
	// 	$output2 = sqlsrv_query($conn,$sql2) or die(print_r(sqlsrv_errors()));
	// 	while($row2 = sqlsrv_fetch_array($output2)){
	// 		$nome_area_grupo= $row2["area_associada"];
	// 		$nome_area_grupo = rtrim($nome_area_grupo);
	// 	    $sql6 = "SELECT * FROM [dev_osm].[dbo].NOTAS_AREAS WHERE setor like '%ADMINISTRACAO%' and (area like '%".$nome_area_grupo."%' )";
	// 		$output6 = sqlsrv_query($conn,$sql6) or die(print_r(sqlsrv_errors()));
	// 		while($row6 = sqlsrv_fetch_array($output6)){
	// 		     $vetor[] = array_map('myfunction', $row6); 
	// 		}
			
	// 	}
	// }
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