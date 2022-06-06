<?php
include ('mpdf/mpdf/mpdf.php');
include("banco_configuracao/config.php");
$Trimestre = $_GET["tri"];
$nome = $_GET["nome"];

if($Trimestre =="1"){
	$data1 = "01/01/2020";
	$data2 = "31/03/2020";
}else if($Trimestre == "2"){
	$data1 = "01/04/2020";
	$data2 = "30/06/2020";
}else if($Trimestre == "3"){
	$data1 = "01/07/2020";
	$data2 = "30/09/2020";
}else if($Trimestre == "4"){
	$data1 = "01/10/2020";
	$data2 = "31/12/2020";
}
$sql = "SELECT * FROM ADM_USO_PESSOAL WHERE LIDER like '%$nome%'";
$query = sqlsrv_query($conn, $sql, array(), array( "Scrollable" => 'static' ));
$row_count = sqlsrv_num_rows($query);
if($row_count == 0){
 	$sql2 = "select a.data,a.lider, a.colaborador,  a.nome_senso, b.observacao, c.upload,a.nota_final from 
(select  colaborador, lider, nome_senso, valor,data, nota_final from
(select   nota_final,lider,colaborador,area_referencia,data, senso1_utilizacao, senso1_organizacao,senso1_limpeza,senso1_conservacao,senso1_disciplina
from INDUSTRIAL_USO_PESSOAL where convert(date, data,103) >= convert(date,'$data1',103) and convert(date,data,103) <= convert(date,'$data2',103) )as p

UNPIVOT
   (valor FOR nome_senso IN
      (senso1_utilizacao, senso1_organizacao,senso1_limpeza,senso1_conservacao,senso1_disciplina)
)AS UNPIVOT_tb_empresas2 where valor <> 'checked')as a 
left join
(select colaborador,  LEFT(nome_senso, LEN(nome_senso) - 4)as nome_senso, observacao from
(select colaborador,area_referencia,data, senso1_utilizacao_obs, senso1_organizacao_obs,senso1_limpeza_obs,senso1_conservacao_obs,senso1_disciplina_obs
from INDUSTRIAL_USO_PESSOAL)as p

UNPIVOT
   (observacao FOR nome_senso IN
      (senso1_utilizacao_obs, senso1_organizacao_obs,senso1_limpeza_obs,senso1_conservacao_obs,senso1_disciplina_obs)
)AS UNPIVOT_tb_empresas2 where observacao <> '') as b
on a.colaborador=b.colaborador and a.nome_senso=b.nome_senso

left join
(select colaborador,  LEFT(nome_senso, LEN(nome_senso) - 7)as nome_senso, upload from
(select colaborador,area_referencia,data, upload1 as senso1_utilizacao_upload, upload2 as senso1_organizacao_upload, upload3 as senso1_limpeza_upload ,upload4 as senso1_conservacao_upload,upload5 as senso1_disciplina_upload
from INDUSTRIAL_USO_PESSOAL)as p

UNPIVOT
   (upload FOR nome_senso IN
      (senso1_utilizacao_upload, senso1_organizacao_upload,senso1_limpeza_upload,senso1_conservacao_upload,senso1_disciplina_upload)
)AS UNPIVOT_tb_empresas2  where upload <> '') as c
on a.nome_senso=c.nome_senso and a.colaborador=c.colaborador where a.lider='$nome'";
}else{
	$sql2 = "
select a.data,a.lider, a.colaborador,  a.nome_senso, b.observacao, c.upload,a.nota_final from 
(select  colaborador, lider, nome_senso, valor,data, nota_final from
(select   nota_final,lider,colaborador,area_referencia,data, senso1_utilizacao, senso1_organizacao,senso1_limpeza,senso1_conservacao,senso1_disciplina
from ADM_USO_PESSOAL where convert(date, data,103) >= convert(date,'$data1',103) and convert(date,data,103) <= convert(date,'$data2',103))as p

UNPIVOT
   (valor FOR nome_senso IN
      (senso1_utilizacao, senso1_organizacao,senso1_limpeza,senso1_conservacao,senso1_disciplina)
)AS UNPIVOT_tb_empresas2 where valor <> 'checked')as a 
left join
(select colaborador,  LEFT(nome_senso, LEN(nome_senso) - 4)as nome_senso, observacao from
(select colaborador,area_referencia,data, senso1_utilizacao_obs, senso1_organizacao_obs,senso1_limpeza_obs,senso1_conservacao_obs,senso1_disciplina_obs
from ADM_USO_PESSOAL)as p

UNPIVOT
   (observacao FOR nome_senso IN
      (senso1_utilizacao_obs, senso1_organizacao_obs,senso1_limpeza_obs,senso1_conservacao_obs,senso1_disciplina_obs)
)AS UNPIVOT_tb_empresas2 where observacao <> '') as b
on a.colaborador=b.colaborador and a.nome_senso=b.nome_senso

left join
(select colaborador,  LEFT(nome_senso, LEN(nome_senso) - 7)as nome_senso, upload from
(select colaborador,area_referencia,data, upload1 as senso1_utilizacao_upload, upload2 as senso1_organizacao_upload, upload3 as senso1_limpeza_upload ,upload4 as senso1_conservacao_upload,upload5 as senso1_disciplina_upload
from ADM_USO_PESSOAL)as p

UNPIVOT
   (upload FOR nome_senso IN
      (senso1_utilizacao_upload, senso1_organizacao_upload,senso1_limpeza_upload,senso1_conservacao_upload,senso1_disciplina_upload)
)AS UNPIVOT_tb_empresas2  where upload <> '') as c
on a.nome_senso=c.nome_senso and a.colaborador=c.colaborador where a.lider='$nome'";
}


$nota_final = 0;
$j = 0;
$output2=sqlsrv_query($conn,$sql2) or die(print_r(sqlsrv_errors()));

$output3=sqlsrv_query($conn,$sql2) or die(print_r(sqlsrv_errors()));
while($row3 = sqlsrv_fetch_array($output3)){
	$nota_final = $nota_final + $row3["nota_final"];
	$j++;
}
if($nota_final != 0){
	$nota_final = round(($nota_final/$j),2);
}


$retorno .= "<div style='border:1px solid black;width:100%;margin-left:18px;background-color:rgb(0,96,255);'>
				<div style='width:10%;float:left;margin-top:10px;margin-bottom:10px'>
					<img src='imagens/logokoerberbranco.png' style='width:60%;margin-left:15px;margin-top:4px'>
				</div>
				<div style='width:90%;float:left;text-align:center;color:white; font-weight:bold;'>
					<div style='background-color:rgb(0,96,255);width:100%;float:left;height:10px'></div>
					<label>RELATÓRIO 8S DE NÃO CONFORMIDADES REGISTRADAS</label>
				</div>
			</div>";
$retorno .= "<div style='border:1px solid black;width:100%;margin-left:18px;'>
				<div style='width:50%;float:left;padding-left:5px;margin-top:5px;margin-bottom:5px'>
					<label style='font-weight:bold'>Líder:</label><label>".$nome."</label>
				</div>
				<div style='float:left'>
					<label>Total de NCs encontradas: ".$row_count."<label>
				</div>
			</div>";
$retorno .= "<div style='border-left:1px solid black;border-right:1px solid black;border-bottom:1px solid black;width:100%;margin-left:18px;'>
				<div style='width:50%;float:left;padding-left:5px;;margin-top:5px;margin-bottom:5px'>
					<label style='font-weight:bold'>Trimestre: ".$Trimestre."<label>
				</div>
				<div style='float:left'>
					<label>Nota do Trimestre ".$Trimestre.": ".$nota_final."<label>
				</div>
			</div>";
$retorno .= "<div style='border-left:1px solid black;border-right:1px solid black;border-bottom:1px solid black;width:100%;margin-left:18px;'>
				<table style=' border: 1px solid black;border-collapse: collapse;'>
					<thead>
						<tr style='background-color:rgb(0,96,255);color:white;width:100%'>
							<th style='color:white;border: 1px solid black;width:5% ;float:left'>Id</th>
							<th style='color:white;border: 1px solid black;width:4% ;float:left'>Data</th>
							<th style='color:white;border: 1px solid black;width:15% ;float:left'>Colaborador</th>
							<th style='color:white;border: 1px solid black;width: 15%;float:left'>Senso da NC</th>
							<th style='color:white;border: 1px solid black;width:25% ;float:left'>Foto</th>
							<th style='color:white;border: 1px solid black;width:35% ;float:left'>Comentário NC</th>
						</tr>
					</thead>
					<tbody>";
$i = 1;
while($row2 = sqlsrv_fetch_array($output2)){
	if($row2["upload"] != ""){
		$upload = "<img src='".$row2["upload"]."' style='width:20%'>";
		
	}else{
		$upload = "";
	}
    $retorno .= "<tr><td style='font-size:11px;border: 1px solid black;'>".$i."</td><td style='font-size:11px;border: 1px solid black;'>".$row2["data"]."</td><td style='font-size:9px;border: 1px solid black;'>".$row2["colaborador"]."</td><td style='font-size:11px;border: 1px solid black;'>".$row2["nome_senso"]."</td><td style='font-size:11px;border: 1px solid black;text-align:center'>".$upload."</td><td style='font-size:11px;border: 1px solid black;'>".$row2["observacao"]."</td></tr>";

    $i++;
}
$retorno .= "</tbody></table>
			</div>";


$arquivo = 'pdf.pdf';

$mpdf = new mPDF('','','','','',5,5,10,30,5,5);
$mpdf->WriteHTML($retorno);
$mpdf->SetDisplayMode('fullpage');
$mpdf->Output($arquivo, 'I');