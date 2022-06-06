<?php
$serverName = "fpbr41.perini.net"; 
$connectioninfo = array( "Database"=>"dev_config", "UID"=>"developer", "PWD"=>"fpbr.dev");
$conn = sqlsrv_connect($serverName, $connectioninfo);
$nome = $_POST["nome"];
// if($nome == "Sarah Tavares"){
// 	$nome = "Daniely Vatras";
// }
$sistema = "SISTEMA 8S";

$sql = "SELECT * FROM view_de_Acessos where nome like '%$nome%' and projeto='$sistema'";
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