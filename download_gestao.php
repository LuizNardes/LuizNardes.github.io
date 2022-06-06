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
$myArr = array('Job','Modelo', 'Maquina','Grupo','Codigo','Alteracao', 'Responsavel','Identificacao','Situacao','Data Solicitacao','status','Data Conclusao');
 
$excel->writeLine($myArr,'black');
include 'banco_configuracao/config_skynet.php';
$query = "SELECT * FROM View_Relatorio_Tempo_Resposta_Solutions ";
$result = sqlsrv_query($conn,$query);
while($linha = sqlsrv_fetch_array($result)){
    $myArr=array(utf8_decode($linha['job']),$linha['modelo'],$linha['maquina'],$linha['grupo'], $linha['codigo'],$linha['alteracao'],$linha['responsavel'],utf8_decode($linha['identificacao']),$linha['situacao'],$linha['data'],$linha['status'],$linha['DataConclusao']);
         $excel->writeLine($myArr,'black');
     }
 echo "<a id='AutoLink' href=\"download.xls\"style='color:blue'></a>";

?>
</body>
</html>
