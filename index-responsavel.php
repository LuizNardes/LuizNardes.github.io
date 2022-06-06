<?php 
  session_start();
  include "verificasession.php";
  session_checker();
  $usuario = $_SESSION["nome"];
?>
<!DOCTYPE html>
<html>
<head>
	<link rel = "shortcut icon" type = "imagem/x-icon" href = "imagens/8s.ico"/>
	<title>Ginástica Laboral - AVALIADOR GL</title>
	<script src="JS/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">
	<script src="JS/sweetalert.min.js"></script>
    <style type="text/css">
        .menu-top{
            background-color: rgb(0,97,254);
            height: 50px;
            width: 100%;
            display: flex;
            flex-direction: row;
        }
        .row{
            width: 100%;
            float: left;
        }
        .col1{
          width: 8.33333%;
          float: left;
        }
        .col2{
          width: 16.666667%;
          float: left;
        }
        .col3{
          width: 24.9999%;
          float: left;      
        }
        .col4{
          width: 33.332%;
          float: left;
        }
        .col5{
          width: 41.665%;
          float: left;
        }
        .col6{
          width: 49.998%;
          float: left;
        }
        .col7{
          width: 58.331%;
          float: left;
        }
        .col8{
          width:66.664%;
          float: left;
        }
        .col9{
          width: 74.997%;
          float: left;
        }
        .col10{
          width: 83.33%;
          float: left;
        }
        .col11{
          width: 91.663%;
          float: left;
        }
        .col12{
          width: 100%;
          float: left;
        }
         .aligned{
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;

          }
         .aligned-right{
            display: flex;
            flex-direction: row;
            align-items: flex-end;
            justify-content: flex-end;
          }
          .btn{
            margin-top: 15px;
            margin-bottom: 15px
          }
          .btn-primary{
            background-color: rgb(0,97,254)!important;
          }
    </style>
</head>
<body>
<div class="menu-top">
	<div class="row">
		<div class="col10">
			<a href="sair.php"><img src="imagens/logokoerberbranco.png"  style="width: 7%;margin-left: 15px"></a>
		</div>
		<div class="col1 aligned">
			<img src="imagens/logoLean.png"  style="width: 85%">
		</div>
		<div class="col1 aligned">	
			<img src="imagens/logo8s.png"  style="width: 50%">
		</div>
	</div>
</div>
<div class="row aligned">
    <div class="col3 aligned">
        <input type="text" class="form-control" placeholder="Pesquise o colaborador..." id="txt_colaborador" name="" style="width: 90%;margin-left: 5%;height: 30px" onkeyup="carregar_tabela()">
    </div>
    <div class="col9 aligned-right">
        <button class="btn btn-primary" onclick="download()">Extrair Excel</button>
    </div>
</div>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Colaborador</th>
                <th>1º Tri</th>
                <th>2º Tri</th>
                <th>3º Tri</th>
                <th>4º Tri</th>
                <th>Ano</th>
            </tr>
        </thead>
        <tbody id="table">
                   
        </tbody>
        
    </table>
<script>
	window.onload =  function () {
        var txt_colaborador = $("#txt_colaborador").val();
         $.ajax({
            url: 'retorna_tabela_resultados.php',
            dataType: 'json',
            type: 'post',
            data:{colaborador:txt_colaborador},
            success: function(dados){
               
                for(var i = 0;dados.length > i;i++){
                    $("#table").append("<tr><td>"+dados[i].colaborador+"</td><td>0</td><td>0</td><td>0</td><td>0</td>0<td>0</td></tr>");
                }     
            }
        }); 
    }
    function carregar_tabela(){
        $.ajax({
            url: 'retorna_tabela_resultados.php',
            dataType: 'json',
            type: 'post',
            data:{colaborador:txt_colaborador},
            success: function(dados){
               
                for(var i = 0;dados.length > i;i++){
                    $("#table").append("<tr><td>"+dados[i].colaborador+"</td><td>"+dados[i].nota_1_tri+"</td><td>"+dados[i].nota_2_tri+"</td><td>"+dados[i].nota_2_tri+"</td><td>"+dados[i].nota_3_tri+"</td>"+dados[i].nota_4_tri+"<td>"+dados[i].nota_anual+"</td></tr>");
                }     
            }
        }); 
    }
    function download(){  
         window.open('download_excel.php','_blank');
    }


</script>

</body>
</html>