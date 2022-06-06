<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="JS/sweetalert.min.js"></script>
	<script type="text/javascript">
	function concluido(){
		swal("Pronto!","Formulário submetido com sucesso!","success")
		.then((value) => {
		  window.location='index.php';
		});			
	}
	</script>
</head>
<body>
<?php
include("banco_configuracao/config.php");
session_start();
$data = date('d/m/Y');
$auditor = $_SESSION["nome"];
$area_industrial = $_POST["area_comum"];
$nota_mc = $_POST["nota_mc_form5"];
$nota_formulario = $_POST["nota_form5"];

// 1.1 UTILIZAÇÃO - FOMR5
	// checkbox
 	if($_POST["form5_1_1"] == "on"){
 		$utilizacao_1 = "checked";
 	}else{
 		$utilizacao_1 = "";
 	}
 	$utilizacao_obs_1 = $_POST["form5_1_1_obs"];
 	// anexo
	if(isset($_FILES['form5_1_1_file'])){
	    $extensao = strtolower(substr($_FILES['form5_1_1_file']['name'], -4)); //pega a extensao do arquivo
	    $novo_nome = str_replace('/', '-', $area_industrial)."_".date('d_m_Y')."1_form5".$extensao; //define o nome do arquivo
	   
	    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
	    move_uploaded_file($_FILES['form5_1_1_file']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
	    if($extensao !== ""){
	    		$localizacao_form5_1_1 =  $diretorio.$novo_nome;
	    }else{
	    	$localizacao_form5_1_1 = '';
	    }
	}else{
	  	$localizacao_form5_1_1 = '';
	}

// 1.2 ORGANIZAÇÃO - FORM5
	// checkbox
 	if($_POST["form5_1_2"] == "on"){
 		$organizacao_1 = "checked";
 	}else{
 		$organizacao_1 = "";
 	}
 	$organizacao_obs_1 = $_POST["form5_1_2_obs"];
 	// anexo
	if(isset($_FILES['form5_1_2_file'])){
	    $extensao = strtolower(substr($_FILES['form5_1_2_file']['name'], -4)); //pega a extensao do arquivo
	    $novo_nome = str_replace('/', '-', $area_industrial)."_".date('d_m_Y')."2_form5".$extensao; //define o nome do arquivo
	   
	    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
	    move_uploaded_file($_FILES['form5_1_2_file']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
	    if($extensao !== ""){
	    		$localizacao_form5_1_2 =  $diretorio.$novo_nome;
	    }else{
	    	$localizacao_form5_1_2 = '';
	    }
	}else{
	  	$localizacao_form5_1_2 = '';
	}

// 1.3 LIMPEZA - FORM5
	// checkbox
 	if($_POST["form5_1_3"] == "on"){
 		$limpeza_1 = "checked";
 	}else{
 		$limpeza_1 = "";
 	}
 	$limpeza_obs_1 = $_POST["form5_1_3_obs"];
 	// anexo
	if(isset($_FILES['form5_1_3_file'])){
	    $extensao = strtolower(substr($_FILES['form5_1_3_file']['name'], -4)); //pega a extensao do arquivo
	    $novo_nome = str_replace('/', '-', $area_industrial)."_".date('d_m_Y')."3_form5".$extensao; //define o nome do arquivo
	   
	    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
	    move_uploaded_file($_FILES['form5_1_3_file']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
	    if($extensao !== ""){
	    		$localizacao_form5_1_3 =  $diretorio.$novo_nome;
	    }else{
	    	$localizacao_form5_1_3 = '';
	    }
	}else{
	  	$localizacao_form5_1_3 = '';
	}

// 1.4 CONSERVAÇÃO - FORM5
	// checkbox
 	if($_POST["form5_1_4"] == "on"){
 		$conservacao_1 = "checked";
 	}else{
 		$conservacao_1 = "";
 	}
 	$conservacao_obs_1 = $_POST["form5_1_4_obs"];
 	// anexo
	if(isset($_FILES['form5_1_4_file'])){
	    $extensao = strtolower(substr($_FILES['form5_1_4_file']['name'], -4)); //pega a extensao do arquivo
	    $novo_nome = str_replace('/', '-', $area_industrial)."_".date('d_m_Y')."4_form5".$extensao; //define o nome do arquivo
	   
	    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
	    move_uploaded_file($_FILES['form5_1_4_file']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
	    if($extensao !== ""){
	    		$localizacao_form5_1_4 =  $diretorio.$novo_nome;
	    }else{
	    	$localizacao_form5_1_4 = '';
	    }
	}else{
	  	$localizacao_form5_1_4 = '';
	}

// 1.5 DISCIPLINA FORM5
	// checkbox
 	if($utilizacao_1 == "checked" && $organizacao_1 == "checked" && $limpeza_1 == "checked" && $conservacao_1 == "checked"){
		$disciplina_1 = "checked";
	}else{
		$disciplina_1 = "";
	}
 	$disciplina_obs_1 = $_POST["form5_1_5_obs"];
 	// anexo
	if(isset($_FILES['form5_1_5_file'])){
	    $extensao = strtolower(substr($_FILES['form5_1_5_file']['name'], -4)); //pega a extensao do arquivo
	    $novo_nome = str_replace('/', '-', $area_industrial)."_".date('d_m_Y')."5_form5".$extensao; //define o nome do arquivo
	   
	    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
	    move_uploaded_file($_FILES['form5_1_5_file']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
	    if($extensao !== ""){
	    		$localizacao_form5_1_5 =  $diretorio.$novo_nome;
	    }else{
	    	$localizacao_form5_1_5 = '';
	    }
	}else{
	  	$localizacao_form5_1_5 = '';
	}

// 2.1 UTILIZAÇÃO - FORM5
	// checkbox
 	if($_POST["form5_2_1"] == "on"){
 		$utilizacao_2 = "checked";
 	}else{
 		$utilizacao_2 = "";
 	}
 	$utilizacao_obs_2 = $_POST["form5_2_1_obs"];
 	// anexo
	if(isset($_FILES['form5_2_1_file'])){
	    $extensao = strtolower(substr($_FILES['form5_2_1_file']['name'], -4)); //pega a extensao do arquivo
	    $novo_nome = str_replace('/', '-', $area_industrial)."_".date('d_m_Y')."6_form5".$extensao; //define o nome do arquivo
	   
	    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
	    move_uploaded_file($_FILES['form5_2_1_file']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
	    if($extensao !== ""){
	    		$localizacao_form5_2_1 =  $diretorio.$novo_nome;
	    }else{
	    	$localizacao_form5_2_1 = '';
	    }
	}else{
	  	$localizacao_form5_2_1 = '';
	}

// 2.2 ORGANIZAÇÃO - FORM5
	// checkbox
 	if($_POST["form5_2_2"] == "on"){
 		$organizacao_2 = "checked";
 	}else{
 		$organizacao_2 = "";
 	}
 	$organizacao_obs_2 = $_POST["form5_2_2_obs"];
 	// anexo
	if(isset($_FILES['form5_2_2_file'])){
	    $extensao = strtolower(substr($_FILES['form5_2_2_file']['name'], -4)); //pega a extensao do arquivo
	    $novo_nome = str_replace('/', '-', $area_industrial)."_".date('d_m_Y')."7_form5".$extensao; //define o nome do arquivo
	   
	    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
	    move_uploaded_file($_FILES['form5_2_2_file']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
	    if($extensao !== ""){
	    		$localizacao_form5_2_2 =  $diretorio.$novo_nome;
	    }else{
	    	$localizacao_form5_2_2 = '';
	    }
	}else{
	  	$localizacao_form5_2_2 = '';
	}

// 2.3 LIMPEZA - FORM5
	// checkbox
 	if($_POST["form5_2_3"] == "on"){
 		$limpeza_2 = "checked";
 	}else{
 		$limpeza_2 = "";
 	}
 	$limpeza_obs_2 = $_POST["form5_2_3_obs"];
 	// anexo
	if(isset($_FILES['form5_2_3_file'])){
	    $extensao = strtolower(substr($_FILES['form5_2_3_file']['name'], -4)); //pega a extensao do arquivo
	    $novo_nome = str_replace('/', '-', $area_industrial)."_".date('d_m_Y')."8_form5".$extensao; //define o nome do arquivo
	   
	    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
	    move_uploaded_file($_FILES['form5_2_3_file']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
	    if($extensao !== ""){
	    		$localizacao_form5_2_3 =  $diretorio.$novo_nome;
	    }else{
	    	$localizacao_form5_2_3 = '';
	    }
	}else{
	  	$localizacao_form5_2_3 = '';
	}

// 2.4 CONSERVAÇÃO - FORM5
	// checkbox
 	if($_POST["form5_2_4"] == "on"){
 		$conservacao_2 = "checked";
 	}else{
 		$conservacao_2 = "";
 	}
 	$conservacao_obs_2 = $_POST["form5_2_4_obs"];
 	// anexo
	if(isset($_FILES['form5_2_4_file'])){
	    $extensao = strtolower(substr($_FILES['form5_2_4_file']['name'], -4)); //pega a extensao do arquivo
	    $novo_nome = str_replace('/', '-', $area_industrial)."_".date('d_m_Y')."9_form5".$extensao; //define o nome do arquivo
	   
	    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
	    move_uploaded_file($_FILES['form5_2_4_file']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
	    if($extensao !== ""){
	    		$localizacao_form5_2_4 =  $diretorio.$novo_nome;
	    }else{
	    	$localizacao_form5_2_4 = '';
	    }
	}else{
	  	$localizacao_form5_2_4 = '';
	}

// 2.5 DISCIPLINA - FORM5
	// checkbox
 	if($utilizacao_2 == "checked" && $organizacao_2 == "checked" && $limpeza_2 == "checked" && $conservacao_2 == "checked"){
		$disciplina_2 = "checked";
	}else{
		$disciplina_2 = "";
	}
 	$disciplina_obs_2 = $_POST["form5_2_5_obs"];
 	// anexo
	if(isset($_FILES['form5_2_5_file'])){
	    $extensao = strtolower(substr($_FILES['form5_2_5_file']['name'], -4)); //pega a extensao do arquivo
	    $novo_nome = str_replace('/', '-', $area_industrial)."_".date('d_m_Y')."10_form5".$extensao; //define o nome do arquivo
	   
	    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
	    move_uploaded_file($_FILES['form5_2_5_file']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
	    if($extensao !== ""){
	    		$localizacao_form5_2_5 =  $diretorio.$novo_nome;
	    }else{
	    	$localizacao_form5_2_5 = '';
	    }
	}else{
	  	$localizacao_form5_2_5 = '';
	}

// 3.1 UTILIZAÇÃO - FORM5
	// checkbox
 	if($_POST["form5_3_1"] == "on"){
 		$utilizacao_3 = "checked";
 	}else{
 		$utilizacao_3 = "";
 	}
 	$utilizacao_obs_3 = $_POST["form5_3_1_obs"];
 	// anexo
	if(isset($_FILES['form5_3_1_file'])){
	    $extensao = strtolower(substr($_FILES['form5_3_1_file']['name'], -4)); //pega a extensao do arquivo
	    $novo_nome = str_replace('/', '-', $area_industrial)."_".date('d_m_Y')."11_form5".$extensao; //define o nome do arquivo
	   
	    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
	    move_uploaded_file($_FILES['form5_3_1_file']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
	    if($extensao !== ""){
	    		$localizacao_form5_3_1 =  $diretorio.$novo_nome;
	    }else{
	    	$localizacao_form5_3_1 = '';
	    }
	}else{
	  	$localizacao_form5_3_1 = '';
	}

// 3.2 ORGANIZAÇÃO - FORM5
	// checkbox
 	if($_POST["form5_3_2"] == "on"){
 		$organizacao_3 = "checked";
 	}else{
 		$organizacao_3 = "";
 	}
 	$organizacao_obs_3 = $_POST["form5_3_2_obs"];
 	// anexo
	if(isset($_FILES['form5_3_2_file'])){
	    $extensao = strtolower(substr($_FILES['form5_3_2_file']['name'], -4)); //pega a extensao do arquivo
	    $novo_nome = str_replace('/', '-', $area_industrial)."_".date('d_m_Y')."12_form5".$extensao; //define o nome do arquivo
	   
	    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
	    move_uploaded_file($_FILES['form5_3_2_file']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
	    if($extensao !== ""){
	    		$localizacao_form5_3_2 =  $diretorio.$novo_nome;
	    }else{
	    	$localizacao_form5_3_2 = '';
	    }
	}else{
	  	$localizacao_form5_3_2 = '';
	}

// 3.3 LIMPEZA - FORM5
	// checkbox
 	if($_POST["form5_3_3"] == "on"){
 		$limpeza_3 = "checked";
 	}else{
 		$limpeza_3 = "";
 	}
 	$limpeza_obs_3 = $_POST["form5_3_3_obs"];
 	// anexo
	if(isset($_FILES['form5_3_3_file'])){
	    $extensao = strtolower(substr($_FILES['form5_3_3_file']['name'], -4)); //pega a extensao do arquivo
	    $novo_nome = str_replace('/', '-', $area_industrial)."_".date('d_m_Y')."13_form5".$extensao; //define o nome do arquivo
	   
	    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
	    move_uploaded_file($_FILES['form5_3_3_file']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
	    if($extensao !== ""){
	    		$localizacao_form5_3_3 =  $diretorio.$novo_nome;
	    }else{
	    	$localizacao_form5_3_3 = '';
	    }
	}else{
	  	$localizacao_form5_3_3 = '';
	}

// 3.4 CONSERVAÇÃO - FORM5
	// checkbox
 	if($_POST["form5_3_4"] == "on"){
 		$conservacao_3 = "checked";
 	}else{
 		$conservacao_3 = "";
 	}
 	$conservacao_obs_3 = $_POST["form5_3_4_obs"];
 	// anexo
	if(isset($_FILES['form5_3_4_file'])){
	    $extensao = strtolower(substr($_FILES['form5_3_4_file']['name'], -4)); //pega a extensao do arquivo
	    $novo_nome = str_replace('/', '-', $area_industrial)."_".date('d_m_Y')."14_form5".$extensao; //define o nome do arquivo
	   
	    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
	    move_uploaded_file($_FILES['form5_3_4_file']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
	    if($extensao !== ""){
	    		$localizacao_form5_3_4 =  $diretorio.$novo_nome;
	    }else{
	    	$localizacao_form5_3_4 = '';
	    }
	}else{
	  	$localizacao_form5_3_4 = '';
	}

// 3.5 DISCIPLINA - FORM5
	// checkbox
 	if($utilizacao_3 == "checked" && $organizacao_3 == "checked" && $limpeza_3 == "checked" && $conservacao_3 == "checked"){
		$disciplina_3 = "checked";
	}else{
		$disciplina_3 = "";
	}
 	$disciplina_obs_3 = $_POST["form5_3_5_obs"];
 	// anexo
	if(isset($_FILES['form5_3_5_file'])){
	    $extensao = strtolower(substr($_FILES['form5_3_5_file']['name'], -4)); //pega a extensao do arquivo
	    $novo_nome = str_replace('/', '-', $area_industrial)."_".date('d_m_Y')."15_form5".$extensao; //define o nome do arquivo
	    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
	    move_uploaded_file($_FILES['form5_3_5_file']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
	    if($extensao !== ""){
	    		$localizacao_form5_3_5 =  $diretorio.$novo_nome;
	    }else{
	    	$localizacao_form5_3_5 = '';
	    }
	}else{
	  	$localizacao_form5_3_5 = '';
	}

// 4.1 UTILIZAÇÃO - FORM5
	// checkbox
 	if($_POST["form5_4_1"] == "on"){
 		$utilizacao_4 = "checked";
 	}else{
 		$utilizacao_4 = "";
 	}
 	$utilizacao_obs_4 = $_POST["form5_4_1_obs"];
 	// anexo
	if(isset($_FILES['form5_4_1_file'])){
	    $extensao = strtolower(substr($_FILES['form5_4_1_file']['name'], -4)); //pega a extensao do arquivo
	    $novo_nome = str_replace('/', '-', $area_industrial)."_".date('d_m_Y')."16_form5".$extensao; //define o nome do arquivo
	   
	    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
	    move_uploaded_file($_FILES['form5_4_1_file']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
	    if($extensao !== ""){
	    		$localizacao_form5_4_1 =  $diretorio.$novo_nome;
	    }else{
	    	$localizacao_form5_4_1 = '';
	    }
	}else{
	  	$localizacao_form5_4_1 = '';
	}

// 4.2 ORGANIZAÇÃO - FORM5
	// checkbox
 	if($_POST["form5_4_2"] == "on"){
 		$organizacao_4 = "checked";
 	}else{
 		$organizacao_4 = "";
 	}
 	$organizacao_obs_4 = $_POST["form5_4_2_obs"];
 	// anexo
	if(isset($_FILES['form5_4_2_file'])){
	    $extensao = strtolower(substr($_FILES['form5_4_2_file']['name'], -4)); //pega a extensao do arquivo
	    $novo_nome = str_replace('/', '-', $area_industrial)."_".date('d_m_Y')."17_form5".$extensao; //define o nome do arquivo
	   
	    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
	    move_uploaded_file($_FILES['form5_4_2_file']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
	    if($extensao !== ""){
	    	$localizacao_form5_4_2 =  $diretorio.$novo_nome;
	    }else{
	    	$localizacao_form5_4_2 = '';
	    }
	}else{
	  	$localizacao_form5_4_2 = '';
	}

// 4.3 LIMPEZA - FORM5
	// checkbox
 	if($_POST["form5_4_3"] == "on"){
 		$limpeza_4 = "checked";
 	}else{
 		$limpeza_4 = "";
 	}
 	$limpeza_obs_4 = $_POST["form5_4_3_obs"];
 	// anexo
	if(isset($_FILES['form5_4_3_file'])){
	    $extensao = strtolower(substr($_FILES['form5_4_3_file']['name'], -4)); //pega a extensao do arquivo
	    $novo_nome = str_replace('/', '-', $area_industrial)."_".date('d_m_Y')."18_form5".$extensao; //define o nome do arquivo
	   
	    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
	    move_uploaded_file($_FILES['form5_4_3_file']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
	    if($extensao !== ""){
	    		$localizacao_form5_4_3 =  $diretorio.$novo_nome;
	    }else{
	    	$localizacao_form5_4_3 = '';
	    }
	}else{
	  	$localizacao_form5_4_3 = '';
	}

// 4.4 CONSERVAÇÃO - FORM5
	// checkbox
 	if($_POST["form5_4_4"] == "on"){
 		$conservacao_4 = "checked";
 	}else{
 		$conservacao_4 = "";
 	}
 	$conservacao_obs_4 = $_POST["form5_4_4_obs"];
 	// anexo
	if(isset($_FILES['form5_4_4_file'])){
	    $extensao = strtolower(substr($_FILES['form5_4_4_file']['name'], -4)); //pega a extensao do arquivo
	    $novo_nome = str_replace('/', '-', $area_industrial)."_".date('d_m_Y')."19_form5".$extensao; //define o nome do arquivo
	   
	    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
	    move_uploaded_file($_FILES['form5_4_4_file']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
	    if($extensao !== ""){
	    		$localizacao_form5_4_4 =  $diretorio.$novo_nome;
	    }else{
	    	$localizacao_form5_4_4 = '';
	    }
	}else{
	  	$localizacao_form5_4_4 = '';
	}

// 4.5 DISCIPLINA - FORM5
	// checkbox
 	if($utilizacao_4 == "checked" && $organizacao_4 == "checked" && $limpeza_4 == "checked" && $conservacao_4 == "checked"){
		$disciplina_4 = "checked";
	}else{
		$disciplina_4 = "";
	}
 	$disciplina_obs_4 = $_POST["form5_4_5_obs"];
 	// anexo
	if(isset($_FILES['form5_4_5_file'])){
	    $extensao = strtolower(substr($_FILES['form5_4_5_file']['name'], -4)); //pega a extensao do arquivo
	    $novo_nome = str_replace('/', '-', $area_industrial)."_".date('d_m_Y')."20_form5".$extensao; //define o nome do arquivo
	   
	    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
	    move_uploaded_file($_FILES['form5_4_5_file']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
	    if($extensao !== ""){
	    		$localizacao_form5_4_5 =  $diretorio.$novo_nome;
	    }else{
	    	$localizacao_form5_4_5 = '';
	    }
	}else{
	  	$localizacao_form5_4_5 = '';
	}

// 5.1 UTILIZAÇÃO - FORM5
	// checkbox
 	if($_POST["form5_5_1"] == "on"){
 		$utilizacao_5 = "checked";
 	}else{
 		$utilizacao_5 = "";
 	}
 	$utilizacao_obs_5 = $_POST["form5_5_1_obs"];
 	// anexo
	if(isset($_FILES['form5_5_1_file'])){
	    $extensao = strtolower(substr($_FILES['form5_5_1_file']['name'], -4)); //pega a extensao do arquivo
	    $novo_nome = str_replace('/', '-', $area_industrial)."_".date('d_m_Y')."21_form5".$extensao; //define o nome do arquivo
	   
	    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
	    move_uploaded_file($_FILES['form5_5_1_file']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
	    if($extensao !== ""){
	    		$localizacao_form5_5_1 =  $diretorio.$novo_nome;
	    }else{
	    	$localizacao_form5_5_1 = '';
	    }
	}else{
	  	$localizacao_form5_5_1 = '';
	}

// 5.2 ORGANIZAÇÃO - FORM5
	// checkbox
 	if($_POST["form5_5_2"] == "on"){
 		$organizacao_5 = "checked";
 	}else{
 		$organizacao_5 = "";
 	}
 	$organizacao_obs_5 = $_POST["form5_5_2_obs"];
 	// anexo
	if(isset($_FILES['form5_5_2_file'])){
	    $extensao = strtolower(substr($_FILES['form5_5_2_file']['name'], -4)); //pega a extensao do arquivo
	    $novo_nome = str_replace('/', '-', $area_industrial)."_".date('d_m_Y')."22_form5".$extensao; //define o nome do arquivo
	   
	    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
	    move_uploaded_file($_FILES['form5_5_2_file']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
	    if($extensao !== ""){
	    		$localizacao_form5_5_2 =  $diretorio.$novo_nome;
	    }else{
	    	$localizacao_form5_5_2 = '';
	    }
	}else{
	  	$localizacao_form5_5_2 = '';
	}

// 5.3 LIMPEZA - FORM5
	// checkbox
 	if($_POST["form5_5_3"] == "on"){
 		$limpeza_5 = "checked";
 	}else{
 		$limpeza_5 = "";
 	}
 	$limpeza_obs_5 = $_POST["form5_5_3_obs"];
 	// anexo
	if(isset($_FILES['form5_5_3_file'])){
	    $extensao = strtolower(substr($_FILES['form5_5_3_file']['name'], -4)); //pega a extensao do arquivo
	    $novo_nome = str_replace('/', '-', $area_industrial)."_".date('d_m_Y')."23_form5".$extensao; //define o nome do arquivo
	   
	    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
	    move_uploaded_file($_FILES['form5_5_3_file']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
	    if($extensao !== ""){
	    		$localizacao_form5_5_3 =  $diretorio.$novo_nome;
	    }else{
	    	$localizacao_form5_5_3 = '';
	    }
	}else{
	  	$localizacao_form5_5_3 = '';
	}

// 5.4 CONSERVAÇÃO - FORM5
	// checkbox
 	if($_POST["form5_5_4"] == "on"){
 		$conservacao_5 = "checked";
 	}else{
 		$conservacao_5 = "";
 	}
 	$conservacao_obs_5 = $_POST["form5_5_4_obs"];
 	// anexo
	if(isset($_FILES['form5_5_4_file'])){
	    $extensao = strtolower(substr($_FILES['form5_5_4_file']['name'], -4)); //pega a extensao do arquivo
	    $novo_nome = str_replace('/', '-', $area_industrial)."_".date('d_m_Y')."24_form5".$extensao; //define o nome do arquivo
	   
	    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
	    move_uploaded_file($_FILES['form5_5_4_file']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
	    if($extensao !== ""){
	    		$localizacao_form5_5_4 =  $diretorio.$novo_nome;
	    }else{
	    	$localizacao_form5_5_4 = '';
	    }
	}else{
	  	$localizacao_form5_5_4 = '';
	}

// 5.5 DISCIPLINA - FORM5
	// checkbox
 	if($utilizacao_5 == "checked" && $organizacao_5 == "checked" && $limpeza_5 == "checked" && $conservacao_5 == "checked"){
		$disciplina_5 = "checked";
	}else{
		$disciplina_5 = "";
	}
 	$disciplina_obs_5 = $_POST["form5_5_5_obs"];
 	// anexo
	if(isset($_FILES['form5_5_5_file'])){
	    $extensao = strtolower(substr($_FILES['form5_5_5_file']['name'], -4)); //pega a extensao do arquivo
	    $novo_nome = str_replace('/', '-', $area_industrial)."_".date('d_m_Y')."25_form5".$extensao; //define o nome do arquivo
	   
	    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
	    move_uploaded_file($_FILES['form5_5_5_file']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
	    if($extensao !== ""){
	    		$localizacao_form5_5_5 =  $diretorio.$novo_nome;
	    }else{
	    	$localizacao_form5_5_5 = '';
	    }
	}else{
	  	$localizacao_form5_5_5 = '';
	}

// 6.1 UTILIZAÇÃO - FORM5
	// checkbox
 	if($_POST["form5_6_1"] == "on"){
 		$utilizacao_6 = "checked";
 	}else{
 		$utilizacao_6 = "";
 	}
 	$utilizacao_obs_6 = $_POST["form5_6_1_obs"];
 	// anexo
	if(isset($_FILES['form5_6_1_file'])){
	    $extensao = strtolower(substr($_FILES['form5_6_1_file']['name'], -4)); //pega a extensao do arquivo
	    $novo_nome = str_replace('/', '-', $area_industrial)."_".date('d_m_Y')."26_form5".$extensao; //define o nome do arquivo
	   
	    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
	    move_uploaded_file($_FILES['form5_6_1_file']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
	    if($extensao !== ""){
	    		$localizacao_form5_6_1 =  $diretorio.$novo_nome;
	    }else{
	    	$localizacao_form5_6_1 = '';
	    }
	}else{
	  	$localizacao_form5_6_1 = '';
	}

// 6.2 ORGANIZAÇÃO - FORM5
	// checkbox
 	if($_POST["form5_6_2"] == "on"){
 		$organizacao_6 = "checked";
 	}else{
 		$organizacao_6 = "";
 	}
 	$organizacao_obs_6 = $_POST["form5_6_2_obs"];
 	// anexo
	if(isset($_FILES['form5_6_2_file'])){
	    $extensao = strtolower(substr($_FILES['form5_6_2_file']['name'], -4)); //pega a extensao do arquivo
	    $novo_nome = str_replace('/', '-', $area_industrial)."_".date('d_m_Y')."27_form5".$extensao; //define o nome do arquivo
	   
	    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
	    move_uploaded_file($_FILES['form5_6_2_file']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
	    if($extensao !== ""){
	    		$localizacao_form5_6_2 =  $diretorio.$novo_nome;
	    }else{
	    	$localizacao_form5_6_2 = '';
	    }
	}else{
	  	$localizacao_form5_6_2 = '';
	}// 1.ORGANIZAÇÃO
	// checkbox
 	if($_POST["form5_1_2"] == "on"){
 		$organizacao_1 = "checked";
 	}else{
 		$organizacao_1 = "";
 	}
 	$organizacao_obs_1 = $_POST["form5_1_2_obs"];
 	// anexo
	if(isset($_FILES['form5_1_2_file'])){
	    $extensao = strtolower(substr($_FILES['form5_1_2_file']['name'], -4)); //pega a extensao do arquivo
	    $novo_nome = str_replace('/', '-', $area_industrial)."_".date('d_m_Y')."28_form5".$extensao; //define o nome do arquivo
	   
	    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
	    move_uploaded_file($_FILES['form5_1_2_file']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
	    if($extensao !== ""){
	    		$localizacao_form5_1_2 =  $diretorio.$novo_nome;
	    }else{
	    	$localizacao_form5_1_2 = '';
	    }
	}else{
	  	$localizacao_form5_1_2 = '';
	}

// 6.3 LIMPEZA - FORM5
	// checkbox
 	if($_POST["form5_6_3"] == "on"){
 		$limpeza_6 = "checked";
 	}else{
 		$limpeza_6 = "";
 	}
 	$limpeza_obs_6 = $_POST["form5_6_3_obs"];
 	// anexo
	if(isset($_FILES['form5_6_3_file'])){
	    $extensao = strtolower(substr($_FILES['form5_6_3_file']['name'], -4)); //pega a extensao do arquivo
	    $novo_nome = str_replace('/', '-', $area_industrial)."_".date('d_m_Y')."29_form5".$extensao; //define o nome do arquivo
	   
	    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
	    move_uploaded_file($_FILES['form5_6_3_file']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
	    if($extensao !== ""){
	    		$localizacao_form5_6_3 =  $diretorio.$novo_nome;
	    }else{
	    	$localizacao_form5_6_3 = '';
	    }
	}else{
	  	$localizacao_form5_6_3 = '';
	}

// 6.4 CONSERVAÇÃO - FORM5
	// checkbox
 	if($_POST["form5_6_4"] == "on"){
 		$conservacao_6 = "checked";
 	}else{
 		$conservacao_6 = "";
 	}
 	$conservacao_obs_6 = $_POST["form5_6_4_obs"];
 	// anexo
	if(isset($_FILES['form5_6_4_file'])){
	    $extensao = strtolower(substr($_FILES['form5_6_4_file']['name'], -4)); //pega a extensao do arquivo
	    $novo_nome = str_replace('/', '-', $area_industrial)."_".date('d_m_Y')."30_form5".$extensao; //define o nome do arquivo
	   
	    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
	    move_uploaded_file($_FILES['form5_6_4_file']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
	    if($extensao !== ""){
	    		$localizacao_form5_6_4 =  $diretorio.$novo_nome;
	    }else{
	    	$localizacao_form5_6_4 = '';
	    }
	}else{
	  	$localizacao_form5_6_4 = '';
	}

// 6.5 DISCIPLINA - FORM5
	// checkbox
 	if($utilizacao_6 == "checked" && $organizacao_6 == "checked" && $limpeza_6 == "checked" && $conservacao_6 == "checked"){
		$disciplina_6 = "checked";
	}else{
		$disciplina_6 = "";
	}
 	$disciplina_obs_6 = $_POST["form5_6_5_obs"];
 	// anexo
	if(isset($_FILES['form5_6_5_file'])){
	    $extensao = strtolower(substr($_FILES['form5_6_5_file']['name'], -4)); //pega a extensao do arquivo
	    $novo_nome = str_replace('/', '-', $area_industrial)."_".date('d_m_Y')."31_form5".$extensao; //define o nome do arquivo
	   
	    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
	    move_uploaded_file($_FILES['form5_6_5_file']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
	    if($extensao !== ""){
	    		$localizacao_form5_6_5 =  $diretorio.$novo_nome;
	    }else{
	    	$localizacao_form5_6_5 = '';
	    }
	}else{
	  	$localizacao_form5_6_5 = '';
	}

// 7.1 UTILIZAÇÃO - FORM5
	// checkbox
 	if($_POST["form5_7_1"] == "on"){
 		$utilizacao_7 = "checked";
 	}else{
 		$utilizacao_7 = "";
 	}
 	$utilizacao_obs_7 = $_POST["form5_7_1_obs"];
 	// anexo
	if(isset($_FILES['form5_7_1_file'])){
	    $extensao = strtolower(substr($_FILES['form5_7_1_file']['name'], -4)); //pega a extensao do arquivo
	    $novo_nome = str_replace('/', '-', $area_industrial)."_".date('d_m_Y')."32_form5".$extensao; //define o nome do arquivo
	   
	    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
	    move_uploaded_file($_FILES['form5_7_1_file']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
	    if($extensao !== ""){
	    		$localizacao_form5_7_1 =  $diretorio.$novo_nome;
	    }else{
	    	$localizacao_form5_7_1 = '';
	    }
	}else{
	  	$localizacao_form5_7_1 = '';
	}

// 7.2 ORGANIZAÇÃO - FORM5
	// checkbox
 	if($_POST["form5_7_2"] == "on"){
 		$organizacao_7 = "checked";
 	}else{
 		$organizacao_7 = "";
 	}
 	$organizacao_obs_7 = $_POST["form5_7_2_obs"];
 	// anexo
	if(isset($_FILES['form5_7_2_file'])){
	    $extensao = strtolower(substr($_FILES['form5_7_2_file']['name'], -4)); //pega a extensao do arquivo
	    $novo_nome = str_replace('/', '-', $area_industrial)."_".date('d_m_Y')."33_form5".$extensao; //define o nome do arquivo
	   
	    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
	    move_uploaded_file($_FILES['form5_7_2_file']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
	    if($extensao !== ""){
	    		$localizacao_form5_7_2 =  $diretorio.$novo_nome;
	    }else{
	    	$localizacao_form5_7_2 = '';
	    }
	}else{
	  	$localizacao_form5_7_2 = '';
	}

// 7.3 LIMPEZA - FORM5
	// checkbox
 	if($_POST["form5_7_3"] == "on"){
 		$limpeza_7 = "checked";
 	}else{
 		$limpeza_7 = "";
 	}
 	$limpeza_obs_7 = $_POST["form5_7_3_obs"];
 	// anexo
	if(isset($_FILES['form5_7_3_file'])){
	    $extensao = strtolower(substr($_FILES['form5_7_3_file']['name'], -4)); //pega a extensao do arquivo
	    $novo_nome = str_replace('/', '-', $area_industrial)."_".date('d_m_Y')."34_form5".$extensao; //define o nome do arquivo
	   
	    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
	    move_uploaded_file($_FILES['form5_7_3_file']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
	    if($extensao !== ""){
	    		$localizacao_form5_7_3 =  $diretorio.$novo_nome;
	    }else{
	    	$localizacao_form5_7_3 = '';
	    }
	}else{
	  	$localizacao_form5_7_3 = '';
	}

// 7.4 CONSERVAÇÃO - FORM5
	// checkbox
 	if($_POST["form5_7_4"] == "on"){
 		$conservacao_7 = "checked";
 	}else{
 		$conservacao_7 = "";
 	}
 	$conservacao_obs_7 = $_POST["form5_7_4_obs"];
 	// anexo
	if(isset($_FILES['form5_7_4_file'])){
	    $extensao = strtolower(substr($_FILES['form5_7_4_file']['name'], -4)); //pega a extensao do arquivo
	    $novo_nome = str_replace('/', '-', $area_industrial)."_".date('d_m_Y')."35_form5".$extensao; //define o nome do arquivo
	   
	    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
	    move_uploaded_file($_FILES['form5_7_4_file']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
	    if($extensao !== ""){
	    		$localizacao_form5_7_4 =  $diretorio.$novo_nome;
	    }else{
	    	$localizacao_form5_7_4 = '';
	    }
	}else{
	  	$localizacao_form5_7_4 = '';
	}

// 7.5 DISCIPLINA - FORM5
	// checkbox
 	if($utilizacao_7 == "checked" && $organizacao_7 == "checked" && $limpeza_7 == "checked" && $conservacao_7 == "checked"){
		$disciplina_7 = "checked";
	}else{
		$disciplina_7 = "";
	}
 	$disciplina_obs_7 = $_POST["form5_7_5_obs"];
 	// anexo
	if(isset($_FILES['form5_7_5_file'])){
	    $extensao = strtolower(substr($_FILES['form5_7_5_file']['name'], -4)); //pega a extensao do arquivo
	    $novo_nome = str_replace('/', '-', $area_industrial)."_".date('d_m_Y')."36_form5".$extensao; //define o nome do arquivo
	   
	    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
	    move_uploaded_file($_FILES['form5_7_5_file']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
	    if($extensao !== ""){
	    		$localizacao_form5_7_5 =  $diretorio.$novo_nome;
	    }else{
	    	$localizacao_form5_7_5 = '';
	    }
	}else{
	  	$localizacao_form5_7_5 = '';
	}

// 8.1 UTILIZAÇÃO - FORM5
	// checkbox
 	if($_POST["form5_8_1"] == "on"){
 		$utilizacao_8 = "checked";
 	}else{
 		$utilizacao_8 = "";
 	}
 	$utilizacao_obs_8 = $_POST["form5_8_1_obs"];
 	// anexo
	if(isset($_FILES['form5_8_1_file'])){
	    $extensao = strtolower(substr($_FILES['form5_8_1_file']['name'], -4)); //pega a extensao do arquivo
	    $novo_nome = str_replace('/', '-', $area_industrial)."_".date('d_m_Y')."37_form5".$extensao; //define o nome do arquivo
	   
	    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
	    move_uploaded_file($_FILES['form5_8_1_file']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
	    if($extensao !== ""){
	    		$localizacao_form5_8_1 =  $diretorio.$novo_nome;
	    }else{
	    	$localizacao_form5_8_1 = '';
	    }
	}else{
	  	$localizacao_form5_8_1 = '';
	}

// 8.2 ORGANIZAÇÃO - FORM5
	// checkbox
 	if($_POST["form5_8_2"] == "on"){
 		$organizacao_8 = "checked";
 	}else{
 		$organizacao_8 = "";
 	}
 	$organizacao_obs_8 = $_POST["form5_8_2_obs"];
 	// anexo
	if(isset($_FILES['form5_8_2_file'])){
	    $extensao = strtolower(substr($_FILES['form5_8_2_file']['name'], -4)); //pega a extensao do arquivo
	    $novo_nome = str_replace('/', '-', $area_industrial)."_".date('d_m_Y')."38_form5".$extensao; //define o nome do arquivo
	   
	    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
	    move_uploaded_file($_FILES['form5_8_2_file']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
	    if($extensao !== ""){
	    		$localizacao_form5_8_2 =  $diretorio.$novo_nome;
	    }else{
	    	$localizacao_form5_8_2 = '';
	    }
	}else{
	  	$localizacao_form5_8_2 = '';
	}

// 8.3 LIMPEZA - FORM5
	// checkbox
 	if($_POST["form5_8_3"] == "on"){
 		$limpeza_8 = "checked";
 	}else{
 		$limpeza_8 = "";
 	}
 	$limpeza_obs_8 = $_POST["form5_8_3_obs"];
 	// anexo
	if(isset($_FILES['form5_8_3_file'])){
	    $extensao = strtolower(substr($_FILES['form5_8_3_file']['name'], -4)); //pega a extensao do arquivo
	    $novo_nome = str_replace('/', '-', $area_industrial)."_".date('d_m_Y')."39_form5".$extensao; //define o nome do arquivo
	   
	    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
	    move_uploaded_file($_FILES['form5_8_3_file']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
	    if($extensao !== ""){
	    		$localizacao_form5_8_3 =  $diretorio.$novo_nome;
	    }else{
	    	$localizacao_form5_8_3 = '';
	    }
	}else{
	  	$localizacao_form5_8_3 = '';
	}

// 8.4 CONSERVAÇÃO - FORM5
	// checkbox
 	if($_POST["form5_8_4"] == "on"){
 		$conservacao_8 = "checked";
 	}else{
 		$conservacao_8 = "";
 	}
 	$conservacao_obs_8 = $_POST["form5_8_4_obs"];
 	// anexo
	if(isset($_FILES['form5_8_4_file'])){
	    $extensao = strtolower(substr($_FILES['form5_8_4_file']['name'], -4)); //pega a extensao do arquivo
	    $novo_nome = str_replace('/', '-', $area_industrial)."_".date('d_m_Y')."40_form5".$extensao; //define o nome do arquivo
	   
	    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
	    move_uploaded_file($_FILES['form5_8_4_file']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
	    if($extensao !== ""){
	    		$localizacao_form5_8_4 =  $diretorio.$novo_nome;
	    }else{
	    	$localizacao_form5_8_4 = '';
	    }
	}else{
	  	$localizacao_form5_8_4 = '';
	}

// 8.5 DISCIPLINA - FORM5
	// checkbox
 	if($utilizacao_8 == "checked" && $organizacao_8 == "checked" && $limpeza_8 == "checked" && $conservacao_8 == "checked"){
		$disciplina_8 = "checked";
	}else{
		$disciplina_8 = "";
	}
 	$disciplina_obs_8 = $_POST["form5_8_5_obs"];
 	// anexo
	if(isset($_FILES['form5_8_5_file'])){
	    $extensao = strtolower(substr($_FILES['form5_8_5_file']['name'], -4)); //pega a extensao do arquivo
	    $novo_nome = str_replace('/', '-', $area_industrial)."_".date('d_m_Y')."41_form5".$extensao; //define o nome do arquivo
	   
	    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
	    move_uploaded_file($_FILES['form5_8_5_file']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
	    if($extensao !== ""){
	    		$localizacao_form5_8_5 =  $diretorio.$novo_nome;
	    }else{
	    	$localizacao_form5_8_5 = '';
	    }
	}else{
	  	$localizacao_form5_8_5 = '';
	}

// 9.1 UTILIZAÇÃO - FORM5
	// checkbox
 	if($_POST["form5_9_1"] == "on"){
 		$utilizacao_9 = "checked";
 	}else{
 		$utilizacao_9 = "";
 	}
 	$utilizacao_obs_9 = $_POST["form5_9_1_obs"];
 	// anexo
	if(isset($_FILES['form5_9_1_file'])){
	    $extensao = strtolower(substr($_FILES['form5_9_1_file']['name'], -4)); //pega a extensao do arquivo
	    $novo_nome = str_replace('/', '-', $area_industrial)."_".date('d_m_Y')."42_form5".$extensao; //define o nome do arquivo
	   
	    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
	    move_uploaded_file($_FILES['form5_9_1_file']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
	    if($extensao !== ""){
	    		$localizacao_form5_9_1 =  $diretorio.$novo_nome;
	    }else{
	    	$localizacao_form5_9_1 = '';
	    }
	}else{
	  	$localizacao_form5_9_1 = '';
	}

// 9.2 ORGANIZAÇÃO - FORM5
	// checkbox
 	if($_POST["form5_9_2"] == "on"){
 		$organizacao_9 = "checked";
 	}else{
 		$organizacao_9 = "";
 	}
 	$organizacao_obs_9 = $_POST["form5_9_2_obs"];
 	// anexo
	if(isset($_FILES['form5_9_2_file'])){
	    $extensao = strtolower(substr($_FILES['form5_9_2_file']['name'], -4)); //pega a extensao do arquivo
	    $novo_nome = str_replace('/', '-', $area_industrial)."_".date('d_m_Y')."43_form5".$extensao; //define o nome do arquivo
	   
	    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
	    move_uploaded_file($_FILES['form5_9_2_file']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
	    if($extensao !== ""){
	    		$localizacao_form5_9_2 =  $diretorio.$novo_nome;
	    }else{
	    	$localizacao_form5_9_2 = '';
	    }
	}else{
	  	$localizacao_form5_9_2 = '';
	}

// 9.3 LIMPEZA - FORM5
	// checkbox
 	if($_POST["form5_9_3"] == "on"){
 		$limpeza_9 = "checked";
 	}else{
 		$limpeza_9 = "";
 	}
 	$limpeza_obs_9 = $_POST["form5_9_3_obs"];
 	// anexo
	if(isset($_FILES['form5_9_3_file'])){
	    $extensao = strtolower(substr($_FILES['form5_9_3_file']['name'], -4)); //pega a extensao do arquivo
	    $novo_nome = str_replace('/', '-', $area_industrial)."_".date('d_m_Y')."44_form5".$extensao; //define o nome do arquivo
	   
	    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
	    move_uploaded_file($_FILES['form5_9_3_file']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
	    if($extensao !== ""){
	    		$localizacao_form5_9_3 =  $diretorio.$novo_nome;
	    }else{
	    	$localizacao_form5_9_3 = '';
	    }
	}else{
	  	$localizacao_form5_9_3 = '';
	}

// 9.4 CONSERVAÇÃO - FORM5
	// checkbox
 	if($_POST["form5_9_4"] == "on"){
 		$conservacao_9 = "checked";
 	}else{
 		$conservacao_9 = "";
 	}
 	$conservacao_obs_9 = $_POST["form5_9_4_obs"];
 	// anexo
	if(isset($_FILES['form5_9_4_file'])){
	    $extensao = strtolower(substr($_FILES['form5_9_4_file']['name'], -4)); //pega a extensao do arquivo
	    $novo_nome = str_replace('/', '-', $area_industrial)."_".date('d_m_Y')."45_form5".$extensao; //define o nome do arquivo
	   
	    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
	    move_uploaded_file($_FILES['form5_9_4_file']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
	    if($extensao !== ""){
	    		$localizacao_form5_9_4 =  $diretorio.$novo_nome;
	    }else{
	    	$localizacao_form5_9_4 = '';
	    }
	}else{
	  	$localizacao_form5_9_4 = '';
	}

// 9.5 DISCIPLINA - FORM5
	// checkbox
 	if($utilizacao_9 == "checked" && $organizacao_9 == "checked" && $limpeza_9 == "checked" && $conservacao_9 == "checked"){
		$disciplina_9 = "checked";
	}else{
		$disciplina_9 = "";
	}
 	$disciplina_obs_9 = $_POST["form5_9_5_obs"];
 	// anexo
	if(isset($_FILES['form5_9_5_file'])){
	    $extensao = strtolower(substr($_FILES['form5_9_5_file']['name'], -4)); //pega a extensao do arquivo
	    $novo_nome = str_replace('/', '-', $area_industrial)."_".date('d_m_Y')."46_form5".$extensao; //define o nome do arquivo
	   
	    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
	    move_uploaded_file($_FILES['form5_9_5_file']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
	    if($extensao !== ""){
	    		$localizacao_form5_9_5 =  $diretorio.$novo_nome;
	    }else{
	    	$localizacao_form5_9_5 = '';
	    }
	}else{
	  	$localizacao_form5_9_5 = '';
	}

// 10.MELHORIA
	if($_POST["form5_10_1"] == "on"){
		$melhoria_10 = "checked";
	}else{
		$melhoria_10 = "";
	}
	$melhoria_obs_10 = $_POST["form5_10_1_obs"];
$ano = date("Y");
$sql = "INSERT INTO FORMULARIO_AREAS_COMUNS([area_comum],[auditor],[data],[senso1_utilizacao],[senso1_organizacao],[senso1_limpeza],[senso1_conservacao],[senso1_disciplina],[senso2_utilizacao],[senso2_organizacao],[senso2_limpeza],[senso2_conservacao],[senso2_disciplina],[senso3_utilizacao],[senso3_organizacao],[senso3_limpeza],[senso3_conservacao],[senso3_disciplina],[senso4_utilizacao],[senso4_organizacao],[senso4_limpeza],[senso4_conservacao],[senso4_disciplina],[senso5_utilizacao],[senso5_organizacao],[senso5_limpeza],[senso5_conservacao],[senso5_disciplina],[senso6_utilizacao],[senso6_organizacao],[senso6_limpeza],[senso6_conservacao],[senso6_disciplina],[senso7_utilizacao],[senso7_organizacao],[senso7_limpeza],[senso7_conservacao],[senso7_disciplina],[senso8_utilizacao],[senso8_organizacao],[senso8_limpeza],[senso8_conservacao],[senso8_disciplina],[senso9_utilizacao],[senso9_organizacao],[senso9_limpeza],[senso9_conservacao],[senso9_disciplina],[senso10_melhoria],[senso10_obs],[nota_formulario],[nota_mc],[senso1_utilizacao_upload],[senso1_organizacao_upload],[senso1_limpeza_upload],[senso1_conservacao_upload],[senso1_disciplina_upload],[senso2_utilizacao_upload],[senso2_organizacao_upload],[senso2_limpeza_upload],[senso2_conservacao_upload],[senso2_disciplina_upload],[senso3_utilizacao_upload],[senso3_organizacao_upload],[senso3_limpeza_upload],[senso3_conservacao_upload],[senso3_disciplina_upload],[senso4_utilizacao_upload],[senso4_organizacao_upload],[senso4_limpeza_upload],[senso4_conservacao_upload],[senso4_disciplina_upload],[senso5_utilizacao_upload],[senso5_organizacao_upload],[senso5_limpeza_upload],[senso5_conservacao_upload],[senso5_disciplina_upload],[senso6_utilizacao_upload],[senso6_organizacao_upload],[senso6_limpeza_upload],[senso6_conservacao_upload],[senso6_disciplina_upload],[senso7_utilizacao_upload],[senso7_organizacao_upload],[senso7_limpeza_upload],[senso7_conservacao_upload],[senso7_disciplina_upload],[senso8_utilizacao_upload],[senso8_organizacao_upload],[senso8_limpeza_upload],[senso8_conservacao_upload],[senso8_disciplina_upload],[senso9_utilizacao_upload],[senso9_organizacao_upload],[senso9_limpeza_upload],[senso9_conservacao_upload],[senso9_disciplina_upload],[senso1_utilizacao_obs],[senso1_organizacao_obs],[senso1_limpeza_obs],[senso1_conservacao_obs],[senso1_disciplina_obs],[senso2_utilizacao_obs],[senso2_organizacao_obs],[senso2_limpeza_obs],[senso2_conservacao_obs],[senso2_disciplina_obs],[senso3_utilizacao_obs],[senso3_organizacao_obs],[senso3_limpeza_obs],[senso3_conservacao_obs],[senso3_disciplina_obs],[senso4_utilizacao_obs],[senso4_organizacao_obs],[senso4_limpeza_obs],[senso4_conservacao_obs],[senso4_disciplina_obs],[senso5_utilizacao_obs],[senso5_organizacao_obs],[senso5_limpeza_obs],[senso5_conservacao_obs],[senso5_disciplina_obs],[senso6_utilizacao_obs],[senso6_organizacao_obs],[senso6_limpeza_obs],[senso6_conservacao_obs],[senso6_disciplina_obs],[senso7_utilizacao_obs],[senso7_organizacao_obs],[senso7_limpeza_obs],[senso7_conservacao_obs],[senso7_disciplina_obs],[senso8_utilizacao_obs],[senso8_organizacao_obs],[senso8_limpeza_obs],[senso8_conservacao_obs],[senso8_disciplina_obs],[senso9_utilizacao_obs],[senso9_organizacao_obs],[senso9_limpeza_obs],[senso9_conservacao_obs],[senso9_disciplina_obs],[ano]) VALUES('$area_industrial','$auditor','$data','$utilizacao_1','$organizacao_1', '$limpeza_1','$conservacao_1','$disciplina_1','$utilizacao_2','$organizacao_2', '$limpeza_2','$conservacao_2','$disciplina_2','$utilizacao_3','$organizacao_3', '$limpeza_3','$conservacao_3','$disciplina_3','$utilizacao_4','$organizacao_4', '$limpeza_4','$conservacao_4','$disciplina_4','$utilizacao_5','$organizacao_5', '$limpeza_5','$conservacao_5','$disciplina_5','$utilizacao_6','$organizacao_6', '$limpeza_6','$conservacao_6','$disciplina_6','$utilizacao_7','$organizacao_7', '$limpeza_7','$conservacao_7','$disciplina_7','$utilizacao_8','$organizacao_8', '$limpeza_8','$conservacao_8','$disciplina_8','$utilizacao_9','$organizacao_9', '$limpeza_9','$conservacao_9','$disciplina_9','$melhoria_10','$melhoria_obs_10','$nota_formulario','$nota_mc','$localizacao_form5_1_1', '$localizacao_form5_1_2', '$localizacao_form5_1_3','$localizacao_form5_1_4','$localizacao_form5_1_5','$localizacao_form5_2_1','$localizacao_form5_2_2','$localizacao_form5_2_3','$localizacao_form5_2_4','$localizacao_form5_2_5','$localizacao_form5_3_1','$localizacao_form5_3_2', '$localizacao_form5_3_3','$localizacao_form5_3_4','$localizacao_form5_3_5','$localizacao_form5_4_1','$localizacao_form5_4_2','$localizacao_form5_4_3','$localizacao_form5_4_4','$localizacao_form5_4_5','$localizacao_form5_5_1','$localizacao_form5_5_2','$localizacao_form5_5_3','$localizacao_form5_5_4','$localizacao_form5_5_5','$localizacao_form5_6_1','$localizacao_form5_6_2','$localizacao_form5_6_3','$localizacao_form5_6_4','$localizacao_form5_6_5','$localizacao_form5_7_1','$localizacao_form5_7_2','$localizacao_form5_7_3','$localizacao_form5_7_4','$localizacao_form5_7_5','$localizacao_form5_8_1','$localizacao_form5_8_2','$localizacao_form5_8_3','$localizacao_form5_8_4','$localizacao_form5_8_5','$localizacao_form5_9_1','$localizacao_form5_9_2','$localizacao_form5_9_3','$localizacao_form5_9_4','$localizacao_form5_9_5','$utilizacao_obs_1','$organizacao_obs_1','$limpeza_obs_1','$conservacao_obs_1','$disciplina_obs_1','$utilizacao_obs_2','$organizacao_obs_2','$limpeza_obs_2','$conservacao_obs_2','$disciplina_obs_2','$utilizacao_obs_3','$organizacao_obs_3','$limpeza_obs_3','$conservacao_obs_3','$disciplina_obs_3','$utilizacao_obs_4','$organizacao_obs_4','$limpeza_obs_4','$conservacao_obs_4','$disciplina_obs_4','$utilizacao_obs_5','$organizacao_obs_5','$limpeza_obs_5','$conservacao_obs_5','$disciplina_obs_5','$utilizacao_obs_6','$organizacao_obs_6','$limpeza_obs_6','$conservacao_obs_6','$disciplina_obs_6','$utilizacao_obs_7','$organizacao_obs_7','$limpeza_obs_7','$conservacao_obs_7','$disciplina_obs_7','$utilizacao_obs_8','$organizacao_obs_8','$limpeza_obs_8','$conservacao_obs_8','$disciplina_obs_8','$utilizacao_obs_9','$organizacao_obs_9','$limpeza_obs_9','$conservacao_obs_9','$disciplina_obs_9','$ano')";

$output = sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));

echo "<script>concluido();</script>";


?>
</body>
</html>
