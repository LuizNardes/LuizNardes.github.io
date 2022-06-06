<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    .footer {
 width:  100%;
 position: fixed;
 bottom: 0px;
 z-index:3;
 clear:both;
 
 height:80px; 
 background-color:white

}
.footer-content {
 width: 100%;
 z-index:4;
 height:5px;
 margin:  0 auto;
 background: rgba(151,215,0);
 padding: 1;

}
  </style>
   <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
   <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script type="text/javascript">
  



     window.onload = function(){ 



      var cells = document.getElementsByClassName("quantidade"); 
      for (var i = 0; i < cells.length; i++) { 
          cells[i].disabled = true;
      }
       var cells2 = document.getElementsByClassName("observacao"); 
      for (var i = 0; i < cells2.length; i++) { 
          cells2[i].disabled = true;
      }
    
}
var habilita= function(valor)
  {
    var cells = document.getElementsByClassName("quantidade"); 
    valor = valor -1;
    cells[valor].disabled = false;
    var cells2 = document.getElementsByClassName("observacao");               
    cells2[valor].disabled = false;                      
}

 function desabilita(){
      var cells = document.getElementsByClassName("quantidade"); 
      for (var i = 0; i < cells.length; i++) { 
          cells[i].disabled = true;
      }
       var cells2 = document.getElementsByClassName("observacao"); 
      for (var i = 0; i < cells2.length; i++) { 
          cells2[i].disabled = true;
      }
 
                      



}

   </script>
  <title></title>
</head>
<body>

<?php
  if(isset($_GET["dev"])){
    $localizador = $_GET["dev"];
    $_SESSION["localizador"] = $localizador;
 
  }
  ?> 
   
<input type="text" value="<?php echo $localizador?>" id="localizador" style="visibility: hidden;" name="">

     <?php
    include("config.php");

    $sql="SELECT PROJETO, MAQUINA,GRUPO from LISTA2 where LOCALIZADOR_2_V5 LIKE '%$localizador%'";

    $output=sqlsrv_query($conn,$sql) or die(print_r(sqlsrv_errors()));
    while($row = sqlsrv_fetch_array($output)){

      $projeto = $row["PROJETO"];
      $maquina = $row["MAQUINA"];
      $grupo = $row["GRUPO"];
    }
 

      include ('mpdf/mpdf/mpdf.php');

      $valor =  date('d/m/Y');
     ?>
          <div style='width: 100%;background-color: white;height: 80px;text-align: center;'>
          <img src='imagens/logo.png' width='150' style='float: left;'>
          <img src='imagens/Skynet.png' width='40' style='float: right;'>
          <br><br><br>
          <div style='background-color: rgb(151,215,0); width:100%; height:25px'>
          
          </div>
        </div>
      <div style='float: middle'>
      <table id='tabela' BORDER RULES=all BORDER ='1' width='100%' style='position: center;'>
      <caption style='color: rgb(151,215,0);font-size: 20px'><b><h2> Relatório de Devolução </h2></b></caption>
      <tr>
      <td colspan='5'>DATA: <?php echo $valor?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; DEVOLVIDO POR: <?php echo $_SESSION["usuario"]?></td>
      <td colspan='2' style='text-align: center;'>JOB</td>
      <td colspan='2'><?php echo $projeto ?></td>
      </tr>
      <tr>
      <td rowspan='2' colspan='5' style='text-align: center;'>Seu auxílio na identificação imediata do problema pode nos ajudar a resolvê-lo no início do processo.</td>
      <td colspan='2' rowspan='2'  style='text-align: center;'>MAQUINA</td>
      <td colspan='2' rowspan='2'><?php echo $maquina ?></td>
      </tr>
      <tr>
      
    
      <tr>
      <td colspan='9' style='text-align: center;background-color: rgb(151,215,0);color: white'><b>DEVOLUÇÃO DE MATERIAIS</b></td>
      </tr>
      </tr>
      <tr>
      <td style='text-align: center;'>Nº</td>
      <td colspan='1' style='text-align: center;'>CODIGO</td>
      <td colspan='2' style='text-align: center;'>DESCRICAO</td>
      <td colspan='1' style='text-align: center;'>QTD</td>
      <td colspan='1' style='text-align: center;'>GRUPO</td>
      <td colspan='2' style='text-align: center;'>OBSERVACOES MONTADOR</td>
      <td colspan='1' style='text-align: center;'>Editar</td>
      </tr>
     <!-- consulta no banco de relatorio para buscar quantidade-->
     <?php include 'config.php';
      $query3 = "SELECT * from formulario where departamento like '%devolucao%' order by id";
      $output3=sqlsrv_query($conn,$query3) or die(print_r(sqlsrv_errors()));
      $i = 0;
      while($row = sqlsrv_fetch_array($output3)){
      $i = $i +1;
      $codigo = $row["material"];
      $descricaomaterial = $row["descricao"];
      $quantidade = $row["quantidade_falt"];
      $grupomaterial = $row["grupo"];
      $observacao = $row["observacao"];
      $localizador = $row["localizador"];?>

      <tr >
        <form id="formulario" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <td style='text-align: center;'><?php echo $i ?></td>
      <td colspan='1' style='text-align: center;'><?php echo $codigo ?></td>
      <td colspan='2' style='text-align: center;'><?php echo $descricaomaterial?></td>
      <td colspan='1' style="width: 20px;"><input id="quantidade<?php echo $i?>" type="text" class="quantidade" name="" style="width:90%;text-align: center;" value="<?php echo $quantidade ?>"></td>
      <td colspan='1' style='text-align: center;'><?php echo $grupo ?></td>
      <td colspan='2' style='text-align: center;width: 50px'><input type="text" class="observacao" id="observacao<?php echo $i?>" name="" style="width:99%;text-align: center;" value="<?php echo $observacao ?>"> </td>
      <td colspan='1' style='text-align: center;'>
        <!-- botao salvar -->
        <img  onclick="desabilita()" class="envio" id="<?php echo $i?>" src='imagens/disk.png'>&nbsp;
        <!-- botao editar -->
        <img onclick="habilita(this.id)"  id="<?php echo $i?>" src='imagens/pencil.png'>&nbsp;
        <!-- botao -->
        <img src='imagens/delete.png'id="<?php echo $i?>" class="delete" onclick="confirmacao()">
        </td>
        </form>
      </tr>
      
     <?php  }
?>




           
            
    </table>
            
     
<script>
$(".envio").click(function() {
  

                     var row = this.id;
                   
                     var quantidade = $('#quantidade'+row).val();
                  
                     var observacao = $('#observacao'+row).val();
                   

                    
                           $.ajax({
                             //envia dados para o fetch_data.php

                            url: 'usandoajax2.php',
                             type: 'post',
                             data: {row:row, quantidade:quantidade, observacao:observacao},
                             success: function(response){
                                 $(".post:last").after(response).show().fadeIn("slow");
                             }
                         });
});


$(".delete").click(function() {
  

                     var row = this.id;
         
                     var quantidade = $('#quantidade'+row).val();
                  
                     var observacao = $('#observacao'+row).val();
                   
swal({
  title: "Tem certeza que quer excluir?",
  text: "Após excluído não tem como voltar atrás!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
                       $.ajax({
                             //envia dados para o fetch_data.php

                            url: 'usandoajax3.php',
                             type: 'post',
                             data: {row:row, quantidade:quantidade, observacao:observacao},
                             success: function(response){
                                 $(".post:last").after(response).show().fadeIn("slow");
                             }
                         });
 
    swal("Poof! Item excluido com sucesso!", {
      icon: "success",
    });
window.location.reload();

  } else {
    swal("OK, a alteração não foi feita!");
  }
});
                    
                          


});








  

</script>
<footer class="footer">
            <div class="footer-content"></div>
            <div style="width: 100%;background: white; height:10px;"></div>
            <div id="id01" class="modal">
            <button type="button" style="float: right;margin-right: 100px" onclick="document.getElementById('id01').style.display='none'">Cancelar</button> 
            </div>
            <style>
                          .hey {
                              width: 80%;
                              padding: 25px 25px;
                              background-color: #A1CF68;
                              text-align:center;
                          }

                          .container_ {
                              padding: 16px;
                          }

                          span.psw {
                              float: right;
                              padding-top: 16px;
                          }

                          /* The Modal (background) */
                          .modal {
                           border-width: medium;
                            border-style: solid;
                            border-color: rgb(151,215,0);
                              display: none; /* Hidden by default */
                              position: fixed; /* Stay in place */
                              z-index: 1; /* Sit on top */
                              left: 15%;
                              top: 5%;
                              width: 70%; /* Full width */
                              height: 70%; /* Full height */
                              overflow: auto; /* Enable scroll if needed */
                              background-color: rgb(0,0,0); /* Fallback color */
                              background-color: white; /* Black w/ opacity */
                              padding-top: 60px;

                          /* Modal Content/Box */
                          .modal-content {
                              background-color: #fefefe;
                              margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
                              border: 1px solid #888;
                              width: 100%; /* Could be more or less, depending on screen size */
                          }
                          .modal2 {
                           border-width: medium;
                            border-style: solid;
                            border-color: rgb(151,215,0);
                              display: none; /* Hidden by default */
                              position: fixed; /* Stay in place */
                              z-index: 1; /* Sit on top */
                              left: 15%;
                              top: 5%;
                              width: 50%; /* Full width */
                              height: 50%; /* Full height */
                              overflow: auto; /* Enable scroll if needed */
                              background-color: rgb(0,0,0); /* Fallback color */
                              background-color: white; /* Black w/ opacity */
                              padding-top: 60px;

                          /* Modal Content/Box */
                          .modal2-content {
                              background-color: #fefefe;
                              margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
                              border: 1px solid #888;
                              width: 100%; /* Could be more or less, depending on screen size */
                          }

                          /* The Close Button (x) */
                          .close {
                              position: absolute;
                              right: 25px;
                              top: 0;
                              color: #000;
                              font-size: 35px;
                              font-weight: bold;
                          }

                          .close:hover,
                          .close:focus {
                              color: red;
                              cursor: pointer;
                          }

                          /* Add Zoom Animation */
                          .animate {
                              -webkit-animation: animatezoom 0.6s;
                              animation: animatezoom 0.6s
                          }

                          @-webkit-keyframes animatezoom {
                              from {-webkit-transform: scale(0)} 
                              to {-webkit-transform: scale(1)}
                          }
                              
                          @keyframes animatezoom {
                              from {transform: scale(0)} 
                              to {transform: scale(1)}
                          }

                          /* Change styles for span and cancel button on extra small screens */
                          @media screen and (max-width: 300px) {
                              span.psw {
                                 display: block;
                                 float: none;
                              }
                              .hey {
                                 width: 100%;
                              }
                          }
                      </style>
                    <script>

                       function chamar() {
                        // body...
                       var valor=$('div').scrollTop();
                            alert(valor);
                      
                    // Get the modal
                    var modal = document.getElementById('id01');

                    var modal2 = document.getElementById('id03');

                    var modal = document.getElementById('id02');

                    // When the user clicks anywhere outside of the modal, close it
                    window.onclick = function(event) {
                        if (event.target == modal) {
                            modal.style.display = "none";
                        }
                      }
                    }
                    </script>



          <!---------------------FOOTER ----------------------------------------------------------------->
          <!---------------------------BARRA INFERIOR COM BOTOES PARA DIRECIONAMENTO A OUTRAS PAGINAS--->
          <div style="">

          <div style="float:left; text-align:center"><a href="tela_inicial.php">
          <img src="imagens/Skynet.png" width="100.6" height="67" title="Inicio"></a>
          </div>
          <div style="float:left; text-align:center; visibility:hidden;"><a href="desenhos.php">
          <img src="imagens/horaspadrao.png" width="40"></a> 
          </div>
          <div style="float:left; text-align:center"><a href="">
          <img src="imagens/horaspadrao.png" title="Horas Padrão" width="64"></a>
          </div>
          <div style="float:left; text-align:center; visibility:hidden;"><a href="desenhos.php">
          <img src="imagens/horaspadrao.png" width="40"></a> 
          </div>
          <div style="float:left; text-align:center"><a href="">
          <img src="imagens/COM_qualidade.png" width="64" height="64" title="Conserto"></a>
          </div>
          <div style="float:left; text-align:center;visibility:hidden;"><a href="desenhos.php">
          <img src="imagens/COM_qualidade.png" width="40"></a> 
          </div>
          <div style="float:left; text-align:center"><a href="">
          <img src="imagens/COM_OBRAS.png" width="64" height="64" title="Suporte Engenharia"></a> 
          </div>
          <div style="float:left; text-align:center;visibility:hidden"><a href="desenhos.php">
          <img src="imagens/COM_FALTANTES.png" width="40"></a> 
          </div>
          <div style="float:left; text-align:center"><a href="">
          <img src="imagens/COM_compras.png" width="64" height="64" title="Análise de Estoque"></a> 
          </div>
          <div style="float:left; text-align:center;visibility:hidden"><a href="">
          <img src="imagens/COM_FALTANTES.png" width="40"></a> 
          </div>
          <div style="float:left; text-align:center"><a href="">
          <img src="imagens/COM_HORAS_COLABORADOR.png" width="64" height="64" title="Quem Já Montou"></a>
          </div>
          <div style="float:left; text-align:center;visibility:hidden"><a href="">
          <img src="imagens/COM_FALTANTES.png" width="40"></a> 
          </div>
          <div style="float:left; text-align:center">
          <input title="Gráficos" type="image" src="imagens/COM_PARETO.png" style="width:64px; height:64px" onclick="abrir()">
         </div>
          <div style="float:left; text-align:center;visibility:hidden" onclick="excel()">
          <img src="imagens/COM_FALTANTES.png" width="40" > 
          </div>
          <div style="float:left; text-align:center">
          <input title="Indicadores" type="image" src="imagens/COM_JORNAL.png" style="width:64px; height:64px" onclick="">
          </div>
          <div style="float:left; text-align:center;visibility:hidden"><a href="desenhos.php">
          <img src="imagens/COM_FALTANTES.png" width="40" ></a> </div>
          <div style="float:left; text-align:center;visibility:visible;" onclick="email()">
          <img src="imagens/email.png" width="64" > </div>
          <script type="text/javascript">
            function email(){

              localizador = document.getElementById("localizador").value;
      
              window.open('emailcomdevolucao.php?dev='+localizador+'','_blank');
            }
            function abrir(){
       
                  filtrosetor = document.getElementById("setoor").value;
                  descricao = document.getElementById("descricao").value;
                  job=document.getElementById("job").value;
                  pep=document.getElementById("filtropep").value;
                  grupo=document.getElementById("grupoo").value;
                  maquina=document.getElementById("maquina").value;
                  window.open('grafico_situacao_faltantes.php?filtrosetor='+filtrosetor+'&filtrojob='+job+'&filtropep='+pep+'&filtrogrupo='+grupo+'&filtromaquina='+maquina+'&filtrogrupodescricao='+descricao+'','_blank');
            }
            </script>

            </footer>
          </footer>

</body>
</html>