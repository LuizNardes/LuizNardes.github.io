<?php
include("banco_configuracao/config.php");
$area = $_POST["area"];
$sql = "SELECT * FROM FORMULARIO_AREAS_COMUNS where area_comum='$area' ";
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