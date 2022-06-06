<?php
include("banco_configuracao/config.php");
$colaborador =  $_POST["colaborador"];
 $sql = "SELECT area_referencia FROM VIEW_COLABORADORES WHERE nome='$colaborador' AND periodo = (select year(getdate()))";
 $output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
 while($row = sqlsrv_fetch_array($output)){

 	 if($row[0] == "MONTAGEM"){
 	 	
 	 }else{
 	 	$vetor[] = array_map('myfunction', $row);
 	 }
}

//Passando vetor em forma de json
function myfunction($v)
{
	return($v);
}
if(!isset($vetor)){
	$sql2 = "SELECT area as area_referencia  FROM AREAS_REFERENCIA WHERE indicacao_montagem='MONTAGEM'";
	$output2 =sqlsrv_query($conn,$sql2) or die(print_r(sqlsrv_errors()));
	while($row2 = sqlsrv_fetch_array($output2)){
		$vetor[] = array_map('myfunction', $row2); 
	}
}
$myJSON = json_encode($vetor);
echo $myJSON;