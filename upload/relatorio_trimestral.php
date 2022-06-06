<?php
include ('mpdf/mpdf/mpdf.php');
include("banco_configuracao/config.php");
$Trimestre = $_GET["tri"];
$Lider = $_GET["nome"];
$sql= "select a.auditor, a.data, a.responsavel_8s, a.nome_senso, a.area_industrial, a.valor, b.observacao, c.upload  from (
select responsavel_8s, area_industrial, nome_senso, valor,data,auditor
from 
(SELECT auditor,data, responsavel_8s, area_industrial,senso1_utilizacao, senso1_organizacao, senso1_limpeza, senso1_disciplina, senso1_conservacao,
senso2_utilizacao, senso2_organizacao, senso2_limpeza, senso2_disciplina, senso2_conservacao,
senso3_utilizacao, senso3_organizacao, senso3_limpeza, senso3_disciplina, senso3_conservacao,
senso4_utilizacao, senso4_organizacao, senso4_limpeza, senso4_disciplina, senso4_conservacao,
senso5_utilizacao, senso5_organizacao, senso5_limpeza, senso5_disciplina, senso5_conservacao,
senso6_utilizacao, senso6_organizacao, senso6_limpeza, senso6_disciplina, senso6_conservacao,
senso7_utilizacao, senso7_organizacao, senso7_limpeza, senso7_disciplina, senso7_conservacao,
senso8_utilizacao, senso8_organizacao, senso8_limpeza, senso8_disciplina, senso8_conservacao,
senso9_utilizacao, senso9_organizacao, senso9_limpeza, senso9_disciplina, senso9_conservacao
   FROM teste)as p
UNPIVOT
   (valor FOR nome_senso IN
      (senso1_utilizacao, senso1_organizacao, senso1_limpeza, senso1_disciplina, senso1_conservacao,
	  senso2_utilizacao, senso2_organizacao, senso2_limpeza, senso2_disciplina, senso2_conservacao,
	  senso3_utilizacao, senso3_organizacao, senso3_limpeza, senso3_disciplina, senso3_conservacao,
senso4_utilizacao, senso4_organizacao, senso4_limpeza, senso4_disciplina, senso4_conservacao,
senso5_utilizacao, senso5_organizacao, senso5_limpeza, senso5_disciplina, senso5_conservacao,
senso6_utilizacao, senso6_organizacao, senso6_limpeza, senso6_disciplina, senso6_conservacao,
senso7_utilizacao, senso7_organizacao, senso7_limpeza, senso7_disciplina, senso7_conservacao,
senso8_utilizacao, senso8_organizacao, senso8_limpeza, senso8_disciplina, senso8_conservacao,
senso9_utilizacao, senso9_organizacao, senso9_limpeza, senso9_disciplina, senso9_conservacao)
)AS UNPIVOT_tb_empresas2 where valor <> 'checked') as a


left join

(
select responsavel_8s, area_industrial, LEFT(nome_senso, LEN(nome_senso) - 7)as nome_senso, upload
from 
(SELECT responsavel_8s, area_industrial,senso1_utilizacao_upload, senso1_organizacao_upload, senso1_limpeza_upload, senso1_disciplina_upload, senso1_conservacao_upload,
senso2_utilizacao_upload, senso2_organizacao_upload, senso2_limpeza_upload, senso2_disciplina_upload, senso2_conservacao_upload,
senso3_utilizacao_upload, senso3_organizacao_upload, senso3_limpeza_upload, senso3_disciplina_upload, senso3_conservacao_upload,
senso4_utilizacao_upload, senso4_organizacao_upload, senso4_limpeza_upload, senso4_disciplina_upload, senso4_conservacao_upload,
senso5_utilizacao_upload, senso5_organizacao_upload, senso5_limpeza_upload, senso5_disciplina_upload, senso5_conservacao_upload,
senso6_utilizacao_upload, senso6_organizacao_upload, senso6_limpeza_upload, senso6_disciplina_upload, senso6_conservacao_upload,
senso7_utilizacao_upload, senso7_organizacao_upload, senso7_limpeza_upload, senso7_disciplina_upload, senso7_conservacao_upload,
senso8_utilizacao_upload, senso8_organizacao_upload, senso8_limpeza_upload, senso8_disciplina_upload, senso8_conservacao_upload,
senso9_utilizacao_upload, senso9_organizacao_upload, senso9_limpeza_upload, senso9_disciplina_upload, senso9_conservacao_upload
   FROM teste)as a
UNPIVOT
   (upload FOR nome_senso IN
      (senso1_utilizacao_upload, senso1_organizacao_upload, senso1_limpeza_upload, senso1_disciplina_upload, senso1_conservacao_upload,
senso2_utilizacao_upload, senso2_organizacao_upload, senso2_limpeza_upload, senso2_disciplina_upload, senso2_conservacao_upload,
senso3_utilizacao_upload, senso3_organizacao_upload, senso3_limpeza_upload, senso3_disciplina_upload, senso3_conservacao_upload,
senso4_utilizacao_upload, senso4_organizacao_upload, senso4_limpeza_upload, senso4_disciplina_upload, senso4_conservacao_upload,
senso5_utilizacao_upload, senso5_organizacao_upload, senso5_limpeza_upload, senso5_disciplina_upload, senso5_conservacao_upload,
senso6_utilizacao_upload, senso6_organizacao_upload, senso6_limpeza_upload, senso6_disciplina_upload, senso6_conservacao_upload,
senso7_utilizacao_upload, senso7_organizacao_upload, senso7_limpeza_upload, senso7_disciplina_upload, senso7_conservacao_upload,
senso8_utilizacao_upload, senso8_organizacao_upload, senso8_limpeza_upload, senso8_disciplina_upload, senso8_conservacao_upload,
senso9_utilizacao_upload, senso9_organizacao_upload, senso9_limpeza_upload, senso9_disciplina_upload, senso9_conservacao_upload)
)AS UNPIVOT_tb_empresas1 
)as c


on a.nome_senso = c.nome_senso and a.area_industrial=c.area_industrial 
left join
(
select responsavel_8s, area_industrial, LEFT(nome_senso, LEN(nome_senso) - 4)as nome_senso, observacao
from 
(SELECT responsavel_8s, area_industrial,senso1_utilizacao_obs, senso1_organizacao_obs, senso1_limpeza_obs, senso1_disciplina_obs, senso1_conservacao_obs,
senso2_utilizacao_obs, senso2_organizacao_obs, senso2_limpeza_obs, senso2_disciplina_obs, senso2_conservacao_obs,
senso3_utilizacao_obs, senso3_organizacao_obs, senso3_limpeza_obs, senso3_disciplina_obs, senso3_conservacao_obs,
senso4_utilizacao_obs, senso4_organizacao_obs, senso4_limpeza_obs, senso4_disciplina_obs, senso4_conservacao_obs,
senso5_utilizacao_obs, senso5_organizacao_obs, senso5_limpeza_obs, senso5_disciplina_obs, senso5_conservacao_obs,
senso6_utilizacao_obs, senso6_organizacao_obs, senso6_limpeza_obs, senso6_disciplina_obs, senso6_conservacao_obs,
senso7_utilizacao_obs, senso7_organizacao_obs, senso7_limpeza_obs, senso7_disciplina_obs, senso7_conservacao_obs,
senso8_utilizacao_obs, senso8_organizacao_obs, senso8_limpeza_obs, senso8_disciplina_obs, senso8_conservacao_obs,
senso9_utilizacao_obs, senso9_organizacao_obs, senso9_limpeza_obs, senso9_disciplina_obs, senso9_conservacao_obs
   FROM teste)as a
UNPIVOT
   (observacao FOR nome_senso IN
      (senso1_utilizacao_obs, senso1_organizacao_obs, senso1_limpeza_obs, senso1_disciplina_obs, senso1_conservacao_obs,
senso2_utilizacao_obs , senso2_organizacao_obs, senso2_limpeza_obs, senso2_disciplina_obs, senso2_conservacao_obs,
senso3_utilizacao_obs, senso3_organizacao_obs, senso3_limpeza_obs, senso3_disciplina_obs, senso3_conservacao_obs,
senso4_utilizacao_obs, senso4_organizacao_obs, senso4_limpeza_obs, senso4_disciplina_obs, senso4_conservacao_obs,
senso5_utilizacao_obs, senso5_organizacao_obs, senso5_limpeza_obs, senso5_disciplina_obs, senso5_conservacao_obs,
senso6_utilizacao_obs, senso6_organizacao_obs, senso6_limpeza_obs, senso6_disciplina_obs, senso6_conservacao_obs,
senso7_utilizacao_obs, senso7_organizacao_obs, senso7_limpeza_obs, senso7_disciplina_obs, senso7_conservacao_obs,
senso8_utilizacao_obs, senso8_organizacao_obs, senso8_limpeza_obs, senso8_disciplina_obs, senso8_conservacao_obs,
senso9_utilizacao_obs, senso9_organizacao_obs, senso9_limpeza_obs, senso9_disciplina_obs, senso9_conservacao_obs)
)AS UNPIVOT_tb_empresas1 ) as b on b.nome_senso=c.nome_senso where a.responsavel_8s='ALISSON TIAGO DA SILVEIRA'

";
$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));

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
					<label style='font-weight:bold'>Líder:</label><label>".$Lider."</label>
				</div>
				<div style='float:left'>
					<label>Total de NCs encontradas:<label>
				</div>
			</div>";
$retorno .= "<div style='border-left:1px solid black;border-right:1px solid black;border-bottom:1px solid black;width:100%;margin-left:18px;'>
				<div style='width:50%;float:left;padding-left:5px;;margin-top:5px;margin-bottom:5px'>
					<label style='font-weight:bold'>Trimestre: ".$Trimestre."<label>
				</div>
				<div style='float:left'>
					<label>Nota do Trimestre ".$Trimestre.":<label>
				</div>
			</div>";
$retorno .= "<div style='border-left:1px solid black;border-right:1px solid black;border-bottom:1px solid black;width:100%;margin-left:18px;'>
				<table style=' border: 1px solid black;border-collapse: collapse;'>
					<thead>
						<tr style='background-color:rgb(0,96,255);color:white;width:100%'>
							<th style='color:white;border: 1px solid black;width:5% ;float:left'>Id</th>
							<th style='color:white;border: 1px solid black;width:10% ;float:left'>Data</th>
							<th style='color:white;border: 1px solid black;width:20% ;float:left'>Área da NC</th>
							<th style='color:white;border: 1px solid black;width: 15%;float:left'>Senso da NC</th>
							<th style='color:white;border: 1px solid black;width:30% ;float:left'>Foto</th>
							<th style='color:white;border: 1px solid black;width:20% ;float:left'>Comentário NC</th>
						</tr>
					</thead>
					<tbody>";
$i = 0;
while($row = sqlsrv_fetch_array($output)){
	if($row["upload"] != ""){
		$upload = "<img src='".$row["upload"]."' style='width:25%'>";
		
	}else{
		$upload = "";
	}
    $retorno .= "<tr><td style='font-size:11px;border: 1px solid black;'>".$i."</td><td style='font-size:11px;border: 1px solid black;'>".$row["data"]."</td><td style='font-size:11px;border: 1px solid black;'>".$row["area_industrial"]."</td><td style='font-size:11px;border: 1px solid black;'>".$row["nome_senso"]."</td><td style='font-size:11px;border: 1px solid black;'>".$upload."</td><td style='font-size:11px;border: 1px solid black;'>".$row["observacao"]."</td></tr>";

    $i++;
}
$retorno .= "</tbody></table>
			</div>";


$arquivo = 'pdf.pdf';

$mpdf = new mPDF('','','','','',5,5,10,30,5,5);
$mpdf->WriteHTML($retorno);
$mpdf->SetDisplayMode('fullpage');
$mpdf->Output($arquivo, 'I');