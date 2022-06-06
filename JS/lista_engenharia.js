//INFORMAÇÕES DE FILTRO SAO PASSADAS PARA A PAGINA FETCH DATA
        //FETCH DATA É A PAGINA QUE CONJUNTAMENTE COM O INDEX.PHP É RESPONSÁVEL 
        //POR GARANTIR O SCROLL INFINITO DA PAGINA

          $(document).ready(function(){
          $(window).scroll(function(){
              

                var position = $(window).scrollTop();

                var bottom = $(document).height() - $(window).height();

                if( position+10 >= bottom ){

                    var row = Number($('#row').val());
                    var allcount = Number($('#all').val());
                    var rowperpage = 100;
                    row = row + rowperpage;

                    setor = document.getElementById("setoor").value;
                    job=document.getElementById("job").value;
                    pep=document.getElementById("filtropep").value;
                    grupo=document.getElementById("grupoo").value;
                    maquina=document.getElementById("maquina").value;
                    descricao = document.getElementById("descricao").value;
                    nivel = document.getElementById("nivel").value;
                    faltante=document.getElementById("faltante").value;
                
                    if(row <= allcount){

                        $('#row').val(row);

                        $.ajax({

                            //envia dados para o fetch_data.php
                            url: 'fetch_data.php?setor=' +setor+ '&job='+job+ '&pep='+pep+'&grupo='+grupo+'&maquina='+maquina+'&faltante='+faltante+'&grupodescricao='+descricao+'&nivel='+nivel+'',
                            type: 'post',
                            data: {row:row},
                            success: function(response){
                                $(".post:last").after(response).show().fadeIn("slow");
                            }
                        });
                    }
                }

            });
        
        });
             function FALTANTE(){
       if(document.getElementById('faltante').value == ""){
         
              document.getElementById('faltante').value = "Faltante";
              document.getElementById('faltante').focus();

        }else{
              document.getElementById('faltante').value = "";
              document.getElementById('faltante').focus();
             
          }
              document.getElementById('formulario').submit();
      } 
      function novosubmit(){

          document.getElementById('grupoo').value = "";
          document.getElementById('formulario').submit();
      }
      function novosubmitgrupo(){

          document.getElementById('descricao').value="";
        
          document.getElementById('formulario').submit();
      }
      function novosubmitpep(){

          document.getElementById('maquina').value = "";
          document.getElementById('grupoo').value = "";
          document.getElementById('formulario').submit();
      }
      function novosubmitjob(){
          document.getElementById('filtropep').value = "";
          document.getElementById('maquina').value = "";
          document.getElementById('grupoo').value = "";
          document.getElementById('formulario').submit();
      }
      function novosubmitsetor(){
        document.getElementById('job').value="";
          document.getElementById('filtropep').value = "";
          document.getElementById('maquina').value = "";
          document.getElementById('grupoo').value = "";
          document.getElementById('formulario').submit();
      }
      //---------------------------DEFINE VARIAVEIS -------------------------------//       
         var setor;
         var job;
         var pep;
         var grupo;
         var maquina;
         var descricao;
         var faltante;
         //--------------------------------LIMPA ELEMENTOS HTML APÓS APERTAR O BOTAO LIMAR-----------//
          jQuery("#setoor").change(function(){
             setor = jQuery(this).val();// pega o valor escolhido no select 
           

          })

          jQuery("#job").change(function(){
            job = jQuery(this).val();

          })

          jQuery("#faltante").change(function(){
            faltante = jQuery(this).val();

          })
          jQuery("#filtropep").change(function(){
            pep = jQuery(this).val();
          }) 

          jQuery("#maquina").change(function(){
            maquina = jQuery(this).val();
           
          })
          jQuery("#grupoo").change(function(){
            grupo = jQuery(this).val();
           
          })
          jQuery("#descricao").change(function(){
            descricao = jQuery(this).val();
           
          })
          function filtrar_nivel(){
            var nivel;
            nivel = document.getElementById('nivel').value;
           
        document.getElementById('formulario').submit();

            
          }
          function Limpar_nivel(){
            document.getElementById('nivel').value="";
            document.getElementById('formulario').submit();
          }
          function limpe(){

  
                    document.getElementById('grupoo').value = "";
                    document.getElementById('setoor').value = "";
                    document.getElementById('job').value = "";
                    document.getElementById('faltante').value = "";
                    document.getElementById('filtropep').value = "";
                    document.getElementById('maquina').value = "";                  
                    document.getElementById('descricao').value= "";
                  //  document.getElementById('nivel').value="";
                    document.getElementById('formulario').submit();

          }
                     var passaValor= function(valor)
                      {
                          window.open('salvar_status.php?id='+valor, '_blank');
                          
                      }
                      var formulario = function(valor){

                         window.open('formulario.php?id='+valor,"janela1","width=2050, height=1000");
                      }
                      var comentario = function(valor){

                         window.open('comentarios.php?id='+valor,'_blank');
                      }

            function excel(){
                  setor = document.getElementById("setoor").value;
                  job=document.getElementById("job").value;
                  pep=document.getElementById("filtropep").value;
                  grupo=document.getElementById("grupoo").value;
                  maquina=document.getElementById("maquina").value;
                  window.open('salvarexcel.php?setor='+setor+'&job='+job+'&pep='+pep+'&grupo='+grupo+'&maquina='+maquina+'','_blank');
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