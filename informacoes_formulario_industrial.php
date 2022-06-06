<?php
include("banco_configuracao/config.php");
$id = $_POST["id"];
$sql = "SELECT * FROM [dbo].[FORMULARIO_INDUSTRIAL] WHERE id='$id'";
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