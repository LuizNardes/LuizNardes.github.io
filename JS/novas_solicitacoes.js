function acumulador(){
		
		document.getElementById('id01').style.display='block';
		// SELECT ACUMULADOR DE FORMA AUTOMATICA
		$('select[name=maquina]').html($('div.maquinas-f1' ).html());
		$('select[name=modelo]').html($('div.modelos-f1' ).html());
	}
	function alcadeira(){
		
		document.getElementById('id01').style.display='block';
		// SELECT ACUMULADOR DE FORMA AUTOMATICA
		$('select[name=maquina]').html($('div.maquinas-f2' ).html());
		$('select[name=modelo]').html($('div.modelos-f2' ).html());
	}
	function lx(){
		
		document.getElementById('id01').style.display='block';
		// SELECT ACUMULADOR DE FORMA AUTOMATICA
		$('select[name=maquina]').html($('div.maquinas-f3' ).html());
		$('select[name=modelo]').html($('div.modelos-f3' ).html());
	}
	function carregador(){
		
		document.getElementById('id01').style.display='block';
		// SELECT ACUMULADOR DE FORMA AUTOMATICA
		$('select[name=maquina]').html($('div.maquinas-f4' ).html());
		$('select[name=modelo]').html($('div.modelos-f4' ).html());
	}
	function colador(){
		
		document.getElementById('id01').style.display='block';
		// SELECT ACUMULADOR DE FORMA AUTOMATICA
		$('select[name=maquina]').html($('div.maquinas-f5' ).html());
		$('select[name=modelo]').html($('div.modelos-f5' ).html());
	}
	function cortadeira(){
		
		document.getElementById('id01').style.display='block';
		// SELECT ACUMULADOR DE FORMA AUTOMATICA
		$('select[name=maquina]').html($('div.maquinas-f6' ).html());
		$('select[name=modelo]').html($('div.modelos-f6' ).html());
	}
	function desenrolador(){
		
		document.getElementById('id01').style.display='block';
		// SELECT ACUMULADOR DE FORMA AUTOMATICA
		$('select[name=maquina]').html($('div.maquinas-f7' ).html());
		$('select[name=modelo]').html($('div.modelos-f7' ).html());
	}
	function distribuidor(){
		
		document.getElementById('id01').style.display='block';
		// SELECT ACUMULADOR DE FORMA AUTOMATICA
		$('select[name=maquina]').html($('div.maquinas-f8' ).html());
		$('select[name=modelo]').html($('div.modelos-f8' ).html());
	}
	function empacotadeira(){
		
		document.getElementById('id01').style.display='block';
		// SELECT ACUMULADOR DE FORMA AUTOMATICA
		$('select[name=maquina]').html($('div.maquinas-f9' ).html());
		$('select[name=modelo]').html($('div.modelos-f9' ).html());
	}
	function enfardadadeira(){
		
		document.getElementById('id01').style.display='block';
		// SELECT ACUMULADOR DE FORMA AUTOMATICA
		$('select[name=maquina]').html($('div.maquinas-f10' ).html());
		$('select[name=modelo]').html($('div.modelos-f10' ).html());
	}
		function gofrador(){
		
		document.getElementById('id01').style.display='block';
		// SELECT ACUMULADOR DE FORMA AUTOMATICA
		$('select[name=maquina]').html($('div.maquinas-f11' ).html());
		$('select[name=modelo]').html($('div.modelos-f11' ).html());
	}
	function rebobinadeira(){
		
		document.getElementById('id01').style.display='block';
		// SELECT ACUMULADOR DE FORMA AUTOMATICA
		$('select[name=maquina]').html($('div.maquinas-f12' ).html());
		$('select[name=modelo]').html($('div.modelos-f12' ).html());
	}
		function tubeteira(){
		
		document.getElementById('id01').style.display='block';
		// SELECT ACUMULADOR DE FORMA AUTOMATICA
		$('select[name=maquina]').html($('div.maquinas-f13' ).html());
		$('select[name=modelo]').html($('div.modelos-f13' ).html());
	}
	function loginfailed(){
		swal("Cadastrar","","success");
	}





				$(function(){
				$('.hidden').hide();
  
				  $('select[name=modelo]').html($('div.modelos-f1').html());
					

					$('select[name=maquina]').change(function(){ 
						var id = $('select[name=maquina]').val();

						$('select[name=modelo]').empty();
						
						$('select[name=modelo]').html($('div.modelos-f' + id).html());

					});
					
				});
				$(function(){
				$('.hidden2').hide();
  
				  $('select[name=responsavel]').html($('div.responsavel-f1').html());
					

					$('select[name=categoria]').change(function(){ 
						var id = $('select[name=categoria]').val();

						$('select[name=responsavel]').empty();
						
						$('select[name=responsavel]').html($('div.responsavel-f' + id).html());

					});
					
				});