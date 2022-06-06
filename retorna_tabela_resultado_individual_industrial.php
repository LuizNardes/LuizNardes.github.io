<?php
include("banco_configuracao/config.php");
session_start();
$user = $_SESSION["nome"];
$setor = $_POST["setor"];
$colaborador = $_POST["colaborador"];
$ano = $_POST["ano"];

// if($user == "Robertson Domingos Luiz Buse" || $user == "Sarah Tavares"|| $user=="Rondinelia Soares de Souza"){
// 	include("banco_configuracao/config.php");
// 	$sql = "SELECT * FROM VIEW_RESULTADOS_INDIVIDUAIS WHERE setor='$setor' and colaborador like '%$colaborador%'";
// 	$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
// 	while($row = sqlsrv_fetch_array($output)){
// 	    $vetor[] = array_map('myfunction', $row); 
// 	}
// }else{
// 	include("banco_configuracao/config.php");
// 	$sql = "SELECT * FROM VIEW_RESULTADOS_INDIVIDUAIS WHERE colaborador like '%$colaborador%' and lider like '%$user%' or(colaborador like '%$user%')";
// 		$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
// 		while($row = sqlsrv_fetch_array($output)){
// 		    $vetor[] = array_map('myfunction', $row); 
// 		}
// }
include("banco_configuracao/config.php");
	$sql = "SELECT * from (SELECT e.auditor, case when a.colaborador is not null then a.colaborador when b.colaborador is not null then b.colaborador 
when c.colaborador is not null then c.colaborador when d.colaborador is not null then d.colaborador end as colaborador,
coalesce(a.nota ,0) as nota_4_tri, coalesce(b.nota,0) as nota_3_tri, 
coalesce(c.nota,0) as nota_2_tri, coalesce(d.nota,0) as nota_1_tri,
coalesce(e.nota,0) as nota_anual
from (SELECT colaborador,auditor, convert(decimal(18,2),avg(convert(decimal(18,2),nota_formulario)))AS nota from FORMULARIO_INDUSTRIAL_USO_PESSOAL
WHERE  (DATEPART(month, convert(date, data,103))='10'or DATEPART(month, convert(date, data,103))='11' or DATEPART(month, convert(date, data,103))='12')
and datepart(year, convert(date,data,103))='$ano'
GROUP BY colaborador,auditor)as a
full outer join (SELECT colaborador,auditor, convert(decimal(18,2),avg(convert(decimal(18,2),nota_formulario)))AS nota from FORMULARIO_INDUSTRIAL_USO_PESSOAL
WHERE  (DATEPART(month, convert(date, data,103))='7'or DATEPART(month, convert(date, data,103))='8' or DATEPART(month, convert(date, data,103))='9')
and datepart(year, convert(date,data,103))='$ano'
GROUP BY colaborador,auditor)as b on a.colaborador = b.colaborador
full outer join (SELECT colaborador,auditor, convert(decimal(18,2),avg(convert(decimal(18,2),nota_formulario)))AS nota from FORMULARIO_INDUSTRIAL_USO_PESSOAL
WHERE  (DATEPART(month, convert(date, data,103))='4'or DATEPART(month, convert(date, data,103))='5' or DATEPART(month, convert(date, data,103))='6')
and datepart(year, convert(date,data,103))='$ano'
GROUP BY colaborador,auditor)as c on a.colaborador = c.colaborador
full outer join (SELECT colaborador,auditor, convert(decimal(18,2),avg(convert(decimal(18,2),nota_formulario)))AS nota from FORMULARIO_INDUSTRIAL_USO_PESSOAL
WHERE  (DATEPART(month, convert(date, data,103))='1'or DATEPART(month, convert(date, data,103))='2' or DATEPART(month, convert(date, data,103))='3')
and datepart(year, convert(date,data,103))='$ano'
GROUP BY colaborador,auditor)as d on a.colaborador = c.colaborador
full outer join (SELECT colaborador,auditor, convert(decimal(18,2),avg(convert(decimal(18,2),nota_formulario)))AS nota from FORMULARIO_INDUSTRIAL_USO_PESSOAL
WHERE  datepart(year, convert(date,data,103))='$ano'
GROUP BY colaborador,auditor)as e on e.colaborador = c.colaborador)as tudo where colaborador like '%$colaborador%'";
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