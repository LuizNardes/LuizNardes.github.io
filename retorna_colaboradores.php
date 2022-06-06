<?php
include("banco_configuracao/config.php");
$area =  $_POST["area"];
//$sql = "SELECT nome_completo FROM COLABORADORES WHERE SETOR='$area' order by nome_completo";
$sql = "SELECT nome AS nome_completo FROM VIEW_COLABORADORES WHERE setor_referencia='$area' AND periodo = (select year(getdate())) order by nome";
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