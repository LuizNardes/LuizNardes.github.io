<?php
include("banco_configuracao/config.php");
session_start();
$user = $_SESSION["nome"];
$setor = $_POST["setor"];
$filtro_area = $_SESSION["area_referencia"];
$grupo = $_SESSION["grupo"];
$filtro_area = $_POST["filtro_area"];
$ano = $_POST["ano"];

include("banco_configuracao/config.php");
	// $sql = "SELECT * FROM NOTAS_AREAS WHERE setor like '%$setor%' and area like '%$filtro_area%'";
	$sql = "SELECT * from (SELECT a.auditor, case when a.area_comum is not null then a.area_comum when b.area_comum is not null then b.area_comum 
when c.area_comum is not null then c.area_comum when d.area_comum is not null then d.area_comum end as area_comum,
coalesce(a.nota ,0) as nota_4_tri, coalesce(b.nota,0) as nota_3_tri, 
coalesce(c.nota,0) as nota_2_tri, coalesce(d.nota,0) as nota_1_tri,
coalesce(e.nota,0) as nota_anual
from (SELECT area_comum,auditor, convert(decimal(18,2),avg(convert(decimal(18,2),nota_formulario)))AS nota from FORMULARIO_AREAS_COMUNS
WHERE  (DATEPART(month, convert(date, data,103))='10'or DATEPART(month, convert(date, data,103))='11' or DATEPART(month, convert(date, data,103))='12')
and datepart(year, convert(date,data,103))='$ano'
GROUP BY area_comum,auditor)as a
full outer join (SELECT area_comum,auditor, convert(decimal(18,2),avg(convert(decimal(18,2),nota_formulario)))AS nota from FORMULARIO_AREAS_COMUNS
WHERE  (DATEPART(month, convert(date, data,103))='7'or DATEPART(month, convert(date, data,103))='8' or DATEPART(month, convert(date, data,103))='9')
and datepart(year, convert(date,data,103))='$ano'
GROUP BY area_comum,auditor)as b on a.area_comum = b.area_comum
full outer join (SELECT area_comum,auditor, convert(decimal(18,2),avg(convert(decimal(18,2),nota_formulario)))AS nota from FORMULARIO_AREAS_COMUNS
WHERE  (DATEPART(month, convert(date, data,103))='4'or DATEPART(month, convert(date, data,103))='5' or DATEPART(month, convert(date, data,103))='6')
and datepart(year, convert(date,data,103))='$ano'
GROUP BY area_comum,auditor)as c on a.area_comum = c.area_comum
full outer join (SELECT area_comum,auditor, convert(decimal(18,2),avg(convert(decimal(18,2),nota_formulario)))AS nota from FORMULARIO_AREAS_COMUNS
WHERE  (DATEPART(month, convert(date, data,103))='1'or DATEPART(month, convert(date, data,103))='2' or DATEPART(month, convert(date, data,103))='3')
and datepart(year, convert(date,data,103))='$ano'
GROUP BY area_comum,auditor)as d on a.area_comum = c.area_comum
full outer join (SELECT area_comum,auditor, convert(decimal(18,2),avg(convert(decimal(18,2),nota_formulario)))AS nota from FORMULARIO_AREAS_COMUNS
WHERE  datepart(year, convert(date,data,103))='$ano'
GROUP BY area_comum,auditor)as e on e.area_comum = c.area_comum)as tudo where area_comum  like  '%$filtro_area%'";

	$output = sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
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