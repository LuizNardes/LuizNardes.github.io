<?php
include("banco_configuracao/config.php");
$opcao_table_auditoria = $_POST["opcao_table_auditoria"];

$visualizacao = $_POST["visualizacao"];

$data_de = $_POST["data_de"];
if($data_de != ""){
	$data_de = str_replace("-", "/", $data_de);
	$data_de = date('d/m/Y', strtotime($data_de));
}
$data_ate = $_POST["data_ate"];
if($data_ate != ""){
	$data_ate = str_replace("-", "/", $data_ate);
	$data_ate = date('d/m/Y', strtotime($data_ate));
}



if($opcao_table_auditoria =="AreaComum"){
	if($data_de == "" || $data_ate == ""){
		$sql = "SELECT dbo.AREAS.local_micro, dbo.FORMULARIO_AREAS_COMUNS.area_comum, dbo.FORMULARIO_AREAS_COMUNS.data, case when dbo.FORMULARIO_AREAS_COMUNS.data is null then '' else 'checked' end as status FROM     dbo.AREAS LEFT OUTER JOIN
                  dbo.FORMULARIO_AREAS_COMUNS ON dbo.AREAS.local_micro = dbo.FORMULARIO_AREAS_COMUNS.area_comum WHERE  (dbo.AREAS.local_macro = 'ÁREA COMUM')";
	}else{
		if($visualizacao == "" || $visualizacao == "Todos"){
			$sql = "SELECT dbo.AREAS.local_micro, b.area_comum, b.data, case when b.data is null then '' else 'checked' end as status FROM dbo.AREAS LEFT OUTER JOIN
                  (select area_comum, data,count(*)as expr1 from FORMULARIO_AREAS_COMUNS where convert(date, data, 103) >= convert(date, '$data_de',103) and convert(date, data, 103) <= convert(date, '$data_ate',103)GROUP BY area_comum, data)as b ON dbo.AREAS.local_micro = b.area_comum WHERE  (dbo.AREAS.local_macro = 'ÁREA COMUM')";
        }else if($visualizacao == "Pendentes"){
        	$sql = "SELECT dbo.AREAS.local_micro, b.area_comum, b.data, case when b.data is null then '' else 'checked' end as status FROM dbo.AREAS LEFT OUTER JOIN
                  (select area_comum, data,count(*)as expr1 from FORMULARIO_AREAS_COMUNS where convert(date, data, 103) >= convert(date, '$data_de',103) and convert(date, data, 103) <= convert(date, '$data_ate',103)GROUP BY area_comum, data)as b ON dbo.AREAS.local_micro = b.area_comum WHERE  (dbo.AREAS.local_macro = 'ÁREA COMUM') and B.data is  null ";
        }else if($visualizacao == "Avaliados"){
        	$sql = "SELECT dbo.AREAS.local_micro, b.area_comum, b.data, case when b.data is null then '' else 'checked' end as status FROM dbo.AREAS LEFT OUTER JOIN
                  (select area_comum, data,count(*)as expr1 from FORMULARIO_AREAS_COMUNS where convert(date, data, 103) >= convert(date, '$data_de',103) and convert(date, data, 103) <= convert(date, '$data_ate',103)GROUP BY area_comum, data)as b ON dbo.AREAS.local_micro = b.area_comum WHERE  (dbo.AREAS.local_macro = 'ÁREA COMUM') and B.data is not null ";
        }
		
	}
	

}else if($opcao_table_auditoria == "AreaIndustrial"){
	if($data_de == "" || $data_ate == ""){
		$sql = "SELECT dbo.AREAS.local_micro, dbo.FORMULARIO_INDUSTRIAL.area_industrial, dbo.FORMULARIO_INDUSTRIAL.data,CASE WHEN dbo.FORMULARIO_INDUSTRIAL.data IS NULL THEN '' ELSE 'checked' END AS status FROM     dbo.AREAS LEFT OUTER JOIN dbo.FORMULARIO_INDUSTRIAL ON dbo.AREAS.local_micro = dbo.FORMULARIO_INDUSTRIAL.area_industrial WHERE  (dbo.AREAS.local_macro = 'INDUSTRIAL')";
	}else{
		if($visualizacao == "" || $visualizacao == "Todos"){
			$sql = "SELECT dbo.AREAS.local_micro, B.area_industrial,B.data,CASE WHEN B.data IS NULL THEN '' ELSE 'checked' END AS status FROM dbo.AREAS LEFT OUTER JOIN (select  area_industrial, data, count(*) as expr1 from FORMULARIO_INDUSTRIAL where  convert(date, data, 103) >= convert(date, '$data_de',103)and convert(date, data, 103) <= convert(date, '$data_ate',103) GROUP BY area_industrial, data) as B ON dbo.AREAS.local_micro = B.area_industrial WHERE  (dbo.AREAS.local_macro = 'INDUSTRIAL')";
		}else if($visualizacao == "Pendentes"){
				$sql = "SELECT dbo.AREAS.local_micro, B.area_industrial,B.data,CASE WHEN B.data IS NULL THEN '' ELSE 'checked' END AS status FROM dbo.AREAS LEFT OUTER JOIN (select  area_industrial, data, count(*) as expr1 from FORMULARIO_INDUSTRIAL where  convert(date, data, 103) >= convert(date, '$data_de',103)and convert(date, data, 103) <= convert(date, '$data_ate',103) GROUP BY area_industrial, data) as B ON dbo.AREAS.local_micro = B.area_industrial WHERE  (dbo.AREAS.local_macro = 'INDUSTRIAL')and B.data is null";
		}else if($visualizacao == "Avaliados"){
				$sql = "SELECT dbo.AREAS.local_micro, B.area_industrial,B.data,CASE WHEN B.data IS NULL THEN '' ELSE 'checked' END AS status FROM dbo.AREAS LEFT OUTER JOIN (select  area_industrial, data, count(*) as expr1 from FORMULARIO_INDUSTRIAL where  convert(date, data, 103) >= convert(date, '$data_de',103)and convert(date, data, 103) <= convert(date, '$data_ate',103) GROUP BY area_industrial, data) as B ON dbo.AREAS.local_micro = B.area_industrial WHERE  (dbo.AREAS.local_macro = 'INDUSTRIAL') and B.data is not null";
		}

		
	}
	

}else if($opcao_table_auditoria == "AreaADM"){
	if($data_de == "" || $data_ate == ""){
		$sql = "SELECT dbo.AREAS.local_macro, dbo.AREAS.local_micro, B.area_adm, B.data,case when B.data is null then '' else 'checked' end as status FROM (SELECT area_adm, data, COUNT(*) AS Expr1 FROM     dbo.FORMULARIO_ADMINISTRATIVO GROUP BY area_adm, data)AS B RIGHT OUTER JOIN dbo.AREAS ON B.area_adm = dbo.AREAS.local_micro WHERE  (dbo.AREAS.local_macro = 'ADMINISTRACAO')";
	}else{
		if($visualizacao == "" || $visualizacao == "Todos"){
			$sql = "SELECT dbo.AREAS.local_macro, dbo.AREAS.local_micro, B.area_adm, B.data,case when B.data is null then '' else 'checked' end as status FROM (SELECT area_adm, data, COUNT(*) AS Expr1 FROM dbo.FORMULARIO_ADMINISTRATIVO where convert(date, data, 103) >= convert(date, '$data_de',103)and convert(date, data, 103) <= convert(date, '$data_ate',103)GROUP BY area_adm, data)AS B RIGHT OUTER JOIN dbo.AREAS ON B.area_adm = dbo.AREAS.local_micro WHERE  (dbo.AREAS.local_macro = 'ADMINISTRACAO')";

		}else if($visualizacao == "Pendentes"){
			$sql = "SELECT dbo.AREAS.local_macro, dbo.AREAS.local_micro, B.area_adm, B.data,case when B.data is null then '' else 'checked' end as status FROM (SELECT area_adm, data, COUNT(*) AS Expr1 FROM dbo.FORMULARIO_ADMINISTRATIVO where convert(date, data, 103) >= convert(date, '$data_de',103)and convert(date, data, 103) <= convert(date, '$data_ate',103)GROUP BY area_adm, data)AS B RIGHT OUTER JOIN dbo.AREAS ON B.area_adm = dbo.AREAS.local_micro WHERE  (dbo.AREAS.local_macro = 'ADMINISTRACAO')and B.data is null";
		}else if($visualizacao == "Avaliados"){
			$sql = "SELECT dbo.AREAS.local_macro, dbo.AREAS.local_micro, B.area_adm, B.data,case when B.data is null then '' else 'checked' end as status FROM (SELECT area_adm, data, COUNT(*) AS Expr1 FROM dbo.FORMULARIO_ADMINISTRATIVO where convert(date, data, 103) >= convert(date, '$data_de',103)and convert(date, data, 103) <= convert(date, '$data_ate',103)GROUP BY area_adm, data)AS B RIGHT OUTER JOIN dbo.AREAS ON B.area_adm = dbo.AREAS.local_micro WHERE  (dbo.AREAS.local_macro = 'ADMINISTRACAO') and B.data is not null";
		}
		
	}
	


}else if($opcao_table_auditoria == "IndividualAdm"){
	if($data_de == "" || $data_ate == ""){
		$sql = "SELECT dbo.COLABORADORES.nome_completo as local_micro, dbo.FORMULARIO_ADM_USO_PESSOAL.data,case when dbo.FORMULARIO_ADM_USO_PESSOAL.data is null then '' else 'checked' end as status FROM     dbo.COLABORADORES LEFT OUTER JOIN
                  dbo.FORMULARIO_ADM_USO_PESSOAL ON dbo.COLABORADORES.nome_completo = dbo.FORMULARIO_ADM_USO_PESSOAL.colaborador WHERE  (dbo.COLABORADORES.setor = 'ADM')";
	}else{
		if($visualizacao == "" || $visualizacao == "Todos"){
			$sql = "SELECT dbo.COLABORADORES.nome_completo as local_micro, B.data, case when B.data is null then '' else 'checked' end as status FROM dbo.COLABORADORES LEFT OUTER JOIN (select colaborador, data,count(*)as expr1  from FORMULARIO_ADM_USO_PESSOAL where convert(date, data, 103) >= convert(date, '$data_de',103)and convert(date, data, 103) <= convert(date, '$data_ate',103)GROUP BY colaborador, data) as B ON dbo.COLABORADORES.nome_completo = B.colaborador WHERE (dbo.COLABORADORES.setor = 'ADM')";
		}else if($visualizacao == "Pendentes"){
			$sql = "SELECT dbo.COLABORADORES.nome_completo as local_micro, B.data, case when B.data is null then '' else 'checked' end as status FROM dbo.COLABORADORES LEFT OUTER JOIN (select colaborador, data,count(*)as expr1  from FORMULARIO_ADM_USO_PESSOAL where convert(date, data, 103) >= convert(date, '$data_de',103)and convert(date, data, 103) <= convert(date, '$data_ate',103)GROUP BY colaborador, data) as B ON dbo.COLABORADORES.nome_completo = B.colaborador WHERE (dbo.COLABORADORES.setor = 'ADM')AND B.data is null";
		}else if($visualizacao == "Avaliados"){
			$sql = "SELECT dbo.COLABORADORES.nome_completo as local_micro, B.data, case when B.data is null then '' else 'checked' end as status FROM dbo.COLABORADORES LEFT OUTER JOIN (select colaborador, data,count(*)as expr1  from FORMULARIO_ADM_USO_PESSOAL where convert(date, data, 103) >= convert(date, '$data_de',103)and convert(date, data, 103) <= convert(date, '$data_ate',103)GROUP BY colaborador, data) as B ON dbo.COLABORADORES.nome_completo = B.colaborador WHERE (dbo.COLABORADORES.setor = 'ADM')AND B.data IS NOT NULL";
		}
		
	}
	

}else if($opcao_table_auditoria == "IndividualIndustrial"){
	if($data_de == "" || $data_ate == ""){
		$sql = "SELECT dbo.COLABORADORES.setor, dbo.COLABORADORES.nome_completo as local_micro, dbo.FORMULARIO_INDUSTRIAL_USO_PESSOAL.data,case when dbo.FORMULARIO_INDUSTRIAL_USO_PESSOAL.data is null then '' else 'checked' end as status FROM     dbo.COLABORADORES LEFT OUTER JOIN
                  dbo.FORMULARIO_INDUSTRIAL_USO_PESSOAL ON dbo.COLABORADORES.nome_completo = dbo.FORMULARIO_INDUSTRIAL_USO_PESSOAL.colaborador WHERE  (dbo.COLABORADORES.setor = 'INDUSTRIAL')";
	}else{
		if($visualizacao == "" || $visualizacao == "Todos"){
			$sql = "SELECT dbo.COLABORADORES.setor, dbo.COLABORADORES.nome_completo as local_micro, B.data,case when B.data is null then '' else 'checked' end as status FROM dbo.COLABORADORES LEFT OUTER JOIN (select colaborador, data, count(*) as expr1 from FORMULARIO_INDUSTRIAL_USO_PESSOAL where  convert(date, data, 103) >= convert(date, '$data_de',103) and convert(date, data, 103) <= convert(date, '$data_ate',103) GROUP BY colaborador, data)as B  ON dbo.COLABORADORES.nome_completo = B.colaborador WHERE  (dbo.COLABORADORES.setor = 'INDUSTRIAL')";
		}else if($visualizacao == "Pendentes"){
			$sql = "SELECT dbo.COLABORADORES.setor, dbo.COLABORADORES.nome_completo as local_micro, B.data,case when B.data is null then '' else 'checked' end as status FROM dbo.COLABORADORES LEFT OUTER JOIN (select colaborador, data, count(*) as expr1 from FORMULARIO_INDUSTRIAL_USO_PESSOAL where  convert(date, data, 103) >= convert(date, '$data_de',103) and convert(date, data, 103) <= convert(date, '$data_ate',103) GROUP BY colaborador, data)as B  ON dbo.COLABORADORES.nome_completo = B.colaborador WHERE  (dbo.COLABORADORES.setor = 'INDUSTRIAL') and B.data is null";
		}else if($visualizacao == "Avaliados"){
			$sql = "SELECT dbo.COLABORADORES.setor, dbo.COLABORADORES.nome_completo as local_micro, B.data,case when B.data is null then '' else 'checked' end as status FROM dbo.COLABORADORES LEFT OUTER JOIN (select colaborador, data, count(*) as expr1 from FORMULARIO_INDUSTRIAL_USO_PESSOAL where  convert(date, data, 103) >= convert(date, '$data_de',103) and convert(date, data, 103) <= convert(date, '$data_ate',103) GROUP BY colaborador, data)as B  ON dbo.COLABORADORES.nome_completo = B.colaborador WHERE  (dbo.COLABORADORES.setor = 'INDUSTRIAL')and B.data is not null";
		}	
		
	}
	
}

$output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
while($row = sqlsrv_fetch_array($output)){
	$vetor[] = array_map('myfunction', $row); 
}

function myfunction($v)
	{
		return($v);
	}
	if(!isset($vetor)){
		$vetor="nao";
	}
	$myJSON = json_encode($vetor);
	echo $myJSON;

