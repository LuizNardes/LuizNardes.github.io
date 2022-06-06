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
$colaborador = $_POST["colaborador_form2"];
$area_referencia = $_POST["area_referencia_form2"];
$nota_formulario = $_POST["nota_form2"];
$nota_mc = $_POST["nota_mc_form2"];

// ITEM 1
	// checkbox
	if($_POST["form2_0"] == "on"){
		$utilizacao_1 = "checked";
	}else{
		$utilizacao_1 = "";
	}
	$utilizacao_obs_1 = $_POST["form2_0_obs"];
	// anexo
	if(isset($_FILES['form2_0_file'])){
	    $extensao = strtolower(substr($_FILES['form2_0_file']['name'], -4)); //pega a extensao do arquivo
	    $novo_nome = $colaborador."_".date('d_m_Y')."form2_0".$extensao; //define o nome do arquivo
	   
	    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
	    move_uploaded_file($_FILES['form2_0_file']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
	    if($extensao !== ""){
	    		$localizacao_form2_0 =  $diretorio.$novo_nome;
	    }else{
	    	$localizacao_form2_0 = '';
	    }
	 
	}else{
	  	$localizacao_form2_0 = '';
	}

// ITEM 2
	if($_POST["form2_1"] == "on"){
		$organizacao_1 = "checked";
	}else{
		$organizacao_1 = "";
	}
	$organizacao_obs_1 = $_POST["form2_1_obs"];
	// anexo
	if(isset($_FILES['form2_1_file'])){
	    $extensao = strtolower(substr($_FILES['form2_1_file']['name'], -4)); //pega a extensao do arquivo
	    $novo_nome = $colaborador."_".date('d_m_Y')."form2_1".$extensao; //define o nome do arquivo
	   
	    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
	    move_uploaded_file($_FILES['form2_1_file']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
	    if($extensao !== ""){
	    		$localizacao_form2_1 =  $diretorio.$novo_nome;
	    }else{
	    	$localizacao_form2_1 = '';
	    }
	 
	  }else{
	  	$localizacao_form2_1 = '';
	}

// ITEM 3
	if($_POST["form2_2"] == "on"){
		$limpeza_1 = "checked";
	}else{
		$limpeza_1 = "";
	}
	$limpeza_obs_1 = $_POST["form2_2_obs"];
	// anexo
	if(isset($_FILES['form2_2_file'])){
	    $extensao = strtolower(substr($_FILES['form2_2_file']['name'], -4)); //pega a extensao do arquivo
	    $novo_nome = $colaborador."_".date('d_m_Y')."form2_2".$extensao; //define o nome do arquivo
	   
	    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
	    move_uploaded_file($_FILES['form2_2_file']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
	    if($extensao !== ""){
	    		$localizacao_form2_2 =  $diretorio.$novo_nome;
	    }else{
	    	$localizacao_form2_2 = '';
	    }
	 
	  }else{
	  	$localizacao_form2_2 = '';
	}

// ITEM 4
	if($_POST["form2_3"] == "on"){
		$conservacao_1 = "checked";
	}else{
		$conservacao_1 = "";
	}
	$conservacao_obs_1 = $_POST["form2_3_obs"];
	// anexo
	if(isset($_FILES['form2_3_file'])){
	    $extensao = strtolower(substr($_FILES['form2_3_file']['name'], -4)); //pega a extensao do arquivo
	    $novo_nome = $colaborador."_".date('d_m_Y')."form2_3".$extensao; //define o nome do arquivo
	   
	    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
	    move_uploaded_file($_FILES['form2_3_file']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
	    if($extensao !== ""){
	    		$localizacao_form2_3 =  $diretorio.$novo_nome;
	    }else{
	    	$localizacao_form2_3 = '';
	    }
	 
	  }else{
	  	$localizacao_form2_3 = '';
	}

// ITEM 5
	if($utilizacao_1 == "checked" && $organizacao_1 == "checked" && $limpeza_1 == "checked" && $conservacao_1 == "checked"){
		$disciplina_1 = "checked";
	}else{
		$disciplina_1 = "";
	}
	
	$disciplina_obs_1 = $_POST["form2_4_obs"];
	// anexo
	if(isset($_FILES['form2_4_file'])){
	    $extensao = strtolower(substr($_FILES['form2_4_file']['name'], -4)); //pega a extensao do arquivo
	    $novo_nome = $colaborador."_".date('d_m_Y')."form2_4".$extensao; //define o nome do arquivo
	   
	    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
	    move_uploaded_file($_FILES['form2_4_file']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
	    if($extensao !== ""){
	    		$localizacao_form2_4 =  $diretorio.$novo_nome;
	    }else{
	    	$localizacao_form2_4 = '';
	    }
	 
	  }else{
	  	$localizacao_form2_4 = '';
	}

// ITEM 6
	if($_POST["form2_5"] == "on"){
		$melhoria_2 = "checked";
	}else{
		$melhoria_2 = "";
	}
	$melhoria_obs_2 = $_POST["form2_5_obs"];

$ano = date("Y");

$sql = "INSERT INTO FORMULARIO_INDUSTRIAL_USO_PESSOAL(colaborador,auditor,area_referencia,data,[senso1_utilizacao],[senso1_organizacao],[senso1_limpeza],[senso1_conservacao],[senso1_disciplina],[senso1_utilizacao_obs],[senso1_organizacao_obs],[senso1_limpeza_obs],[senso1_conservacao_obs],[senso1_disciplina_obs],[senso2_melhoria],[senso2_melhoria_obs],[upload1],[upload2],[upload3],[upload4],[upload5], nota_formulario, nota_mc,ano)VALUES ('$colaborador', '$auditor','$area_referencia','$data','$utilizacao_1','$organizacao_1','$limpeza_1','$conservacao_1','$disciplina_1','$utilizacao_obs_1','$organizacao_obs_1','$limpeza_obs_1','$conservacao_obs_1','$disciplina_obs_1', '$melhoria_2', '$melhoria_obs_2','$localizacao_form2_0','$localizacao_form2_1','$localizacao_form2_2','$localizacao_form2_3','$localizacao_form2_4','$nota_formulario','$nota_mc','$ano')";

$output = sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));

echo "<script>concluido();</script>";
?>
</body>
</html>
