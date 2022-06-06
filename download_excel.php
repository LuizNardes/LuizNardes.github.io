<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<script type="text/javascript">
 
   window.onload = function()
{
    document.getElementById("AutoLink").click();
    var variavel = setInterval(function() {
     window.close();

}, 2000);
}

</script>

  <title></title>
</head>
<body>
 <?php

include("excel.writer.inc.php");
//Você pode colocar aqui o nome do arquivo que você deseja salvar.
$excel=new ExcelWriter("download.xls");
if($excel == false){
  echo $excel->error;
}
$myArr = array('Colaborador','1 Trimestre','2 Trimestre','3 Trimestre','4 Trimestre','Anual');
 
$excel->writeLine($myArr,'black');
include 'banco_configuracao/config.php';
$query = "SELECT * FROM RELATORIO";
$result = sqlsrv_query($conn,$query);
while($linha = sqlsrv_fetch_array($result)){
    $myArr=array($linha['colaborador'],$linha['nota_1_tri'],$linha['nota_2_tri'], $linha['nota_3_tri'],$linha["nota_4_tri"],$linha['nota_anual']);
         $excel->writeLine($myArr,'black');
     }
 echo "<a id='AutoLink' href=\"download.xls\"style='color:blue'></a>";

?>
</body>
</html>
