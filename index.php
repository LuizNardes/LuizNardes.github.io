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
	<title>Sistema 8S</title>
	<script src="JS/jquery.min.js"></script>
	<script src="JS/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">

    <link rel="shortcut icon" href="imagens/people.ico" type="image/x-icon" />
    <script src="JS/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<style type="text/css">
		*{
			padding:0;
			margin: 0;
			font-family: 'Arial';
		}
        .cabecalho{
            width: 16%;float: left;text-align: center;
        }
        tbody tr:hover{
            background-color: rgb(141, 184, 252)!important;
        }
        .tr-table{
            width: 100%;font-size: 16px
        }
        .cabecalho2{
            width: 20%;float: left;text-align: center;
        }
        .td1{
            width: 16%;float: left;text-align: center;
        }
        .td2{
            width: 20%;float: left;text-align: left;
        }
        .checkbox_{
            height: 20px;
            width: 20px;
        }
        tr:hover{
            cursor: pointer;
        }

		input[type="radio"]{
			margin-left: 15px;
		}
		.menu-top{
			background-color: rgb(0,97,254);
			height: 50px;
			width: 100%;
            display: flex;
            flex-direction: row;
		}
		.divisoria{
			margin-top: 30px;
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
		/* Style the tab */
		.tab {
		  overflow: hidden;
		  border: 1px solid #ccc;
		  background-color: #f1f1f1;
		}

		/* Style the buttons inside the tab */
		.tab button {
		  background-color: inherit;
		  float: left;
		  border: none;
		  outline: none;
		  cursor: pointer;
		  padding: 14px 16px;
		  transition: 0.3s;
		  font-size: 12px;

		}

		/* Change background color of buttons on hover */
		.tab button:hover {
		  background-color: #ddd;
		}

		/* Create an active/current tablink class */
		.tab button.active {
		  background-color: #ccc;
		}

		/* Style the tab content */
		.tabcontent {
		  display: none;
		  padding: 6px 12px;
		  border: 1px solid #ccc;
		  border-top: none;
          height: 90vh;
          overflow-y: scroll;
		}
        body{
            overflow: hidden!important;
        }
		 .check{
              width: 20px;
              height: 20px;
            }
            .check_{
              width: 20px;
              height: 20px;
            }
            .form-group {
                margin-bottom: 1rem;
                display: -ms-flexbox;
                display: flex;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                -ms-flex-flow: row wrap;
                flex-flow: row wrap;
                -ms-flex-align: center;
                align-items: center;
                margin-bottom: 0;
            }
           
            .form-control {
                display: block;
                width: 100%;
                height: calc(1.5em + 0.75rem + 2px);
                padding: 0.375rem 0.75rem;
                font-size: 1rem;
                font-weight: 400;
                line-height: 1.5;
                color: #495057;
                background-color: #fff;
                background-clip: padding-box;
                border: 1px solid #ced4da;
                border-radius: 0.25rem;
                transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            }
            @media (prefers-reduced-motion: reduce) {
                .form-control {
                    transition: none;
                }
            }

            .form-control::-ms-expand {
                background-color: transparent;
                border: 0;
            }

            .form-control:focus {
                color: #495057;
                background-color: #fff;
                border-color: #80bdff;
                outline: 0;
                box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
            }
            #edicao{
              display: none;
            }
            .form-control::-webkit-input-placeholder {
                color: #6c757d;
                opacity: 1;
            }

            .form-control::-moz-placeholder {
                color: #6c757d;
                opacity: 1;
            }

            .form-control:-ms-input-placeholder {
                color: #6c757d;
                opacity: 1;
            }

            .form-control::-ms-input-placeholder {
                color: #6c757d;
                opacity: 1;
            }

            .form-control::placeholder {
                color: #6c757d;
                opacity: 1;
            }

            .form-control:disabled, .form-control[readonly] {
                background-color: #e9ecef;
                opacity: 1;
            }

            select.form-control:focus::-ms-value {
                color: #495057;
                background-color: #fff;
            }

            .form-control-file,
            .form-control-range {
                display: block;
                width: 100%;
            }
  
            #qtd_linhas{
                color: red;
                font-weight: bold;
            }
            body{
                overflow-y: scroll;
            }
            .left-bar{
                width: 15%;
                float: left;
                background-color: rgb(46,55,64);
                height: 100%;
               
            }
            .estatisticas{
                width: 100%;
                height: 150px;
                background-color: rgb(166, 167, 171);
                color: black;
                font-size: 14px;
                text-align: center;
                font-weight: bold;
            }
            tr{
                width: 100%;
                float: left;
                border-bottom: 1px solid rgb(239,239,239);
                display: flex;
                flex-direction:row;
                align-items:center
            }
           
            .right-bar{
                width: 100%;
                float: left;
                background-color: rgb(238,238,238);
                height: 100%;
            }
            .left-bar:hover{
                cursor: pointer;
            }
            .bar-part1{
                width: 100%;
                height:5%;
                background-color:rgb(46,55,64);
                border-bottom: 0.5px solid rgb(86, 98, 110);
                display: flex;
                flex-direction: row;
                align-items: center;
                /*padding-left: 15px;*/
            }
            .bar-part2{
                width: 100%;
                height:10%;
                background-color: rgb(46,55,64);
                display: flex;
                flex-direction: row;
                align-items: center;
                justify-content: center;
                border-bottom: 0.5px solid rgb(100,101,103);
                border-right: 1px solid white;
            }
            td{
                text-align: center;
            }
            .selecionar{
              visibility: hidden;
            }
           
            .align-right{
                justify-content: flex-end;
            }
           
            label{
                font-weight: bold;
                font-size: 20px;
                /* padding-left: 15px; */
            }
            .fas, .far{
                font-size: 20px;
                color:rgb(98,107,116);
               
            }
            .left-bar .fas{
                padding-left: 15px;
            }

            .selected{
                background-color: white;
            }
           .top-menu{
                height: 5vh;
                background-color: rgb(0,97,254);
            }
            .top-content{
                width: 100%;
                height: 50px;
                background-color: white;
                display: flex;
                flex-direction: row;
                align-items: center;
            }
            .row{
                width: 100%;
                float: left;
            }

            .content{
                width: 100%;
                margin-top: 15px;
            }
            .btn-option{
                width: 250px;
                float:left;
                margin-left:15px;
                height: 90px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }
            .content, .content .fas {
                color:white;
            }
            
            label{
                font-family: Montserrat;
            }
            .supplier{
                background-color:rgb(39,169,231);
            }
            .stock{
                background-color:rgb(42, 182, 121);
            }
            .os{
                background-color:rgb(255,183,72);
            }
            .estatistic{
                background-color:rgb(218,84,46);
            }
            .clipboard{
                background-color:rgb(43,84,146);
            }
            .white{
                font-size: 25px;
                color: white;
            }
            .modal {
                display: none; /* Hidden by default */
                position: fixed; /* Stay in place */
                z-index: 1; /* Sit on top */
                padding-top: 50px; /* Location of the box */
                left: 0;
                top: 0;
                width: 100%; /* Full width */
                height: 100%; /* Full height */
                overflow: auto; /* Enable scroll if needed */
                background-color: rgb(0,0,0); /* Fallback color */
                background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            }
            .modal-texto {
                display: none; /* Hidden by default */
                position: fixed; /* Stay in place */
                z-index: 1; /* Sit on top */
                padding-top: 50px; /* Location of the box */
                left: 0;
                top: 0;
                width: 100%; /* Full width */
                height: 100%; /* Full height */
                overflow: auto; /* Enable scroll if needed */
                background-color: rgb(0,0,0); /* Fallback color */
                background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
            }
            .modal-content-texto {
                background-color: #fefefe;
                margin: auto;
                padding: 20px;
                border: 1px solid #888;
                width: 80%;
                margin-top: 5%;
                border-radius: 10px;
                z-index: 1;
                display: flow-root!important;
            }

            /* Modal Content */
            .modal-content {
                background-color: #fefefe;
                margin: auto;
                padding: 20px;
                border: 1px solid #888;
                width: 80%;
                border-radius: 10px;
                z-index: 1;
                display: flow-root!important;
            }
            .modal-content-edicao {
                background-color: #fefefe;
                margin: auto;
                padding: 20px;
                border: 1px solid #888;
                width: 40%;
                border-radius: 10px;
                margin-top: 5%;
                z-index: 1;
                display: flow-root!important;
            }
            .close {
                color: #aaaaaa;
                float: right!important;
                font-size: 28px;
                margin-right: 10px;
                font-weight: bold;
            }
            .close:hover,
            .close:focus {
                color: #000;
                text-decoration: none;
                cursor: pointer;
            }
            #appearance-select{
                -webkit-appearance: none;  /* Remove estilo padrão do Chrome */
                -moz-appearance: none; /* Remove estilo padrão do FireFox */
                appearance: none; /* Remove estilo padrão do FireFox*/
                background: url(imagens/ico-seta-appearance.gif) no-repeat white;  /* Imagem de fundo (Seta) */
                background-position: 218px center;  /*Posição da imagem do background*/
                width: 250px; /* Tamanho do select, maior que o tamanho da div "div-select" */
                height:30px; /* Altura do select, importante para que tenha a mesma altura em todo os navegadores */
                border:1px solid #ddd;
                /* text-align: center;
                text-align-last: center; */
                padding-left: 25%;
  
            }
            .appearance-select{
                -webkit-appearance: none;  /* Remove estilo padrão do Chrome */
                -moz-appearance: none; /* Remove estilo padrão do FireFox */
                appearance: none; /* Remove estilo padrão do FireFox*/
                background: url(imagens/search.png) no-repeat white;  /* Imagem de fundo (Seta) */
                background-position: 218px center;  /*Posição da imagem do background*/
                width: 250px; /* Tamanho do select, maior que o tamanho da div "div-select" */
                height:30px; /* Altura do select, importante para que tenha a mesma altura em todo os navegadores */
                border:1px solid #ddd;
            }
           
          
            #container {
                height: 400px;
                width: 100%;
            }
            #container2 {
                height: 400px;
                width: 50%;
                float: left;
            }
            #container3 {
                height: 400px;
                width: 50%;
                float: left;
            }
            .btn-option:hover{
                cursor: pointer;
                opacity: 0.7;
            }
            .btn {
                display: inline-block;
                font-weight: 400;
                color: #212529;
                text-align: center;
                vertical-align: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                background-color: transparent;
                border: 1px solid transparent;
                padding: 0.375rem 0.75rem;
                font-size: 1rem;
                line-height: 1.5;
                border-radius: 0.25rem;
                transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            }

            @media (prefers-reduced-motion: reduce) {
                .btn {
                    transition: none;
                }
            }

            .btn:hover {
                color: #212529;
                text-decoration: none;
            }

            .btn:focus, .btn.focus {
                outline: 0;
                box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
            }

            .btn.disabled, .btn:disabled {
                 opacity: 0.65;
            }

            a.btn.disabled,
            fieldset:disabled a.btn {
                pointer-events: none;
            }

            .btn-primary {
                color: #fff;
                background-color: #007bff;
                border-color: #007bff;
            }

            .btn-primary:hover {
                color: #fff;
                background-color: #0069d9;
                border-color: #0062cc;
            }

            .btn-primary:focus, .btn-primary.focus {
                 box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
            }

            .btn-primary.disabled, .btn-primary:disabled {
                color: #fff;
                background-color: #007bff;
                border-color: #007bff;
            }

            .btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active,
            .show > .btn-primary.dropdown-toggle {
                color: #fff;
                background-color: #0062cc;
                border-color: #005cbf;
            }

            .btn-primary:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus,
            .show > .btn-primary.dropdown-toggle:focus {
                box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
            }

            .btn-secondary {
                color: #fff;
                background-color: #6c757d;
                border-color: #6c757d;
            }

            .btn-secondary:hover {
                color: #fff;
                background-color: #5a6268;
                border-color: #545b62;
            }

            .btn-secondary:focus, .btn-secondary.focus {
                box-shadow: 0 0 0 0.2rem rgba(130, 138, 145, 0.5);
            }

            .btn-secondary.disabled, .btn-secondary:disabled {
                color: #fff;
                background-color: #6c757d;
                border-color: #6c757d;
            }

            .btn-secondary:not(:disabled):not(.disabled):active, .btn-secondary:not(:disabled):not(.disabled).active,
            .show > .btn-secondary.dropdown-toggle {
                color: #fff;
                background-color: #545b62;
                border-color: #4e555b;
            }

            .btn-secondary:not(:disabled):not(.disabled):active:focus, .btn-secondary:not(:disabled):not(.disabled).active:focus,
            .show > .btn-secondary.dropdown-toggle:focus {
                box-shadow: 0 0 0 0.2rem rgba(130, 138, 145, 0.5);
            }

            .btn-success {
                color: #fff;
                background-color: #28a745;
                border-color: #28a745;
            }

            .btn-success:hover {
                color: #fff;
                background-color: #218838;
                border-color: #1e7e34;
            }

            .btn-success:focus, .btn-success.focus {
                 box-shadow: 0 0 0 0.2rem rgba(72, 180, 97, 0.5);
            }

            .btn-success.disabled, .btn-success:disabled {
                color: #fff;
                background-color: #28a745;
                border-color: #28a745;
            }

            .btn-success:not(:disabled):not(.disabled):active, .btn-success:not(:disabled):not(.disabled).active,
            .show > .btn-success.dropdown-toggle {
                color: #fff;
                background-color: #1e7e34;
                border-color: #1c7430;
            }

            .btn-success:not(:disabled):not(.disabled):active:focus, .btn-success:not(:disabled):not(.disabled).active:focus,
            .show > .btn-success.dropdown-toggle:focus {
                box-shadow: 0 0 0 0.2rem rgba(72, 180, 97, 0.5);
            }

            .btn-info {
                color: #fff;
                background-color: #17a2b8;
                border-color: #17a2b8;
            }

            .btn-info:hover {
                color: #fff;
                background-color: #138496;
                border-color: #117a8b;
            }

            .btn-info:focus, .btn-info.focus {
                box-shadow: 0 0 0 0.2rem rgba(58, 176, 195, 0.5);
            }

            .btn-info.disabled, .btn-info:disabled {
                color: #fff;
                background-color: #17a2b8;
                border-color: #17a2b8;
            }

            .btn-info:not(:disabled):not(.disabled):active, .btn-info:not(:disabled):not(.disabled).active,
            .show > .btn-info.dropdown-toggle {
                color: #fff;
                background-color: #117a8b;
                border-color: #10707f;
            }

            .btn-info:not(:disabled):not(.disabled):active:focus, .btn-info:not(:disabled):not(.disabled).active:focus,
            .show > .btn-info.dropdown-toggle:focus {
                box-shadow: 0 0 0 0.2rem rgba(58, 176, 195, 0.5);
            }

            .btn-warning {
                color: #212529;
                background-color: #ffc107;
                border-color: #ffc107;
            }

            .btn-warning:hover {
                color: #212529;
                background-color: #e0a800;
                border-color: #d39e00;
            }

            .btn-warning:focus, .btn-warning.focus {
                box-shadow: 0 0 0 0.2rem rgba(222, 170, 12, 0.5);
            }

            .btn-warning.disabled, .btn-warning:disabled {
                color: #212529;
                background-color: #ffc107;
                border-color: #ffc107;
            }

            .btn-warning:not(:disabled):not(.disabled):active, .btn-warning:not(:disabled):not(.disabled).active,
            .show > .btn-warning.dropdown-toggle {
                color: #212529;
                background-color: #d39e00;
                border-color: #c69500;
            }

            .btn-warning:not(:disabled):not(.disabled):active:focus, .btn-warning:not(:disabled):not(.disabled).active:focus,
            .show > .btn-warning.dropdown-toggle:focus {
                box-shadow: 0 0 0 0.2rem rgba(222, 170, 12, 0.5);
            }

            .btn-danger {
                color: #fff;
                background-color: #dc3545;
                border-color: #dc3545;
            }

            .btn-danger:hover {
                color: #fff;
                background-color: #c82333;
                border-color: #bd2130;
            }

            .btn-danger:focus, .btn-danger.focus {
                box-shadow: 0 0 0 0.2rem rgba(225, 83, 97, 0.5);
            }

            .btn-danger.disabled, .btn-danger:disabled {
                color: #fff;
                background-color: #dc3545;
                border-color: #dc3545;
            }

            .btn-danger:not(:disabled):not(.disabled):active, .btn-danger:not(:disabled):not(.disabled).active,
            .show > .btn-danger.dropdown-toggle {
                color: #fff;
                background-color: #bd2130;
                border-color: #b21f2d;
            }

            .btn-danger:not(:disabled):not(.disabled):active:focus, .btn-danger:not(:disabled):not(.disabled).active:focus,
            .show > .btn-danger.dropdown-toggle:focus {
                 box-shadow: 0 0 0 0.2rem rgba(225, 83, 97, 0.5);
            }

            .btn-light {
                color: #212529;
                background-color: #f8f9fa;
                border-color: #f8f9fa;
            }

            .btn-light:hover {
                color: #212529;
                background-color: #e2e6ea;
                border-color: #dae0e5;
            }

            .btn-light:focus, .btn-light.focus {
                box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, 0.5);
            }

            .btn-light.disabled, .btn-light:disabled {
                color: #212529;
                background-color: #f8f9fa;
                border-color: #f8f9fa;
            }

            .btn-light:not(:disabled):not(.disabled):active, .btn-light:not(:disabled):not(.disabled).active,
            .show > .btn-light.dropdown-toggle {
                color: #212529;
                background-color: #dae0e5;
                border-color: #d3d9df;
            }

            .btn-light:not(:disabled):not(.disabled):active:focus, .btn-light:not(:disabled):not(.disabled).active:focus,
            .show > .btn-light.dropdown-toggle:focus {
                box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, 0.5);
            }

            .btn-dark {
                color: #fff;
                background-color: #343a40;
                border-color: #343a40;
            }

            .btn-dark:hover {
                color: #fff;
                background-color: #23272b;
                border-color: #1d2124;
            }

            .btn-dark:focus, .btn-dark.focus {
                box-shadow: 0 0 0 0.2rem rgba(82, 88, 93, 0.5);
            }

            .btn-dark.disabled, .btn-dark:disabled {
                color: #fff;
                background-color: #343a40;
                border-color: #343a40;
            }

            .btn-dark:not(:disabled):not(.disabled):active, .btn-dark:not(:disabled):not(.disabled).active,
            .show > .btn-dark.dropdown-toggle {
                color: #fff;
                background-color: #1d2124;
                border-color: #171a1d;
            }

            .btn-dark:not(:disabled):not(.disabled):active:focus, .btn-dark:not(:disabled):not(.disabled).active:focus,
            .show > .btn-dark.dropdown-toggle:focus {
                ox-shadow: 0 0 0 0.2rem rgba(82, 88, 93, 0.5);
            }

            .btn-outline-primary {
                color: #007bff;
                border-color: #007bff;
            }

            .btn-outline-primary:hover {
                color: #fff;
                background-color: #007bff;
                border-color: #007bff;
            }

            .btn-outline-primary:focus, .btn-outline-primary.focus {
                 box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
            }

            .btn-outline-primary.disabled, .btn-outline-primary:disabled {
                color: #007bff;
                background-color: transparent;
            }

            .btn-outline-primary:not(:disabled):not(.disabled):active, .btn-outline-primary:not(:disabled):not(.disabled).active,
            .show > .btn-outline-primary.dropdown-toggle {
                color: #fff;
                background-color: #007bff;
                border-color: #007bff;
            }

            .btn-outline-primary:not(:disabled):not(.disabled):active:focus, .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
            .show > .btn-outline-primary.dropdown-toggle:focus {
                box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
            }

            .btn-outline-secondary {
                color: #6c757d;
                border-color: #6c757d;
            }

            .btn-outline-secondary:hover {
                color: #fff;
                background-color: #6c757d;
                border-color: #6c757d;
            }

            .btn-outline-secondary:focus, .btn-outline-secondary.focus {
                box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
            }

            .btn-outline-secondary.disabled, .btn-outline-secondary:disabled {
                color: #6c757d;
                background-color: transparent;
            }

            .btn-outline-secondary:not(:disabled):not(.disabled):active, .btn-outline-secondary:not(:disabled):not(.disabled).active,
            .show > .btn-outline-secondary.dropdown-toggle {
                color: #fff;
                background-color: #6c757d;
                border-color: #6c757d;
            }

            .btn-outline-secondary:not(:disabled):not(.disabled):active:focus, .btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
            .show > .btn-outline-secondary.dropdown-toggle:focus {
                box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
            }

            .btn-outline-success {
                color: #28a745;
                border-color: #28a745;
            }

            .btn-outline-success:hover {
                color: #fff;
                background-color: #28a745;
                border-color: #28a745;
            }

            .btn-outline-success:focus, .btn-outline-success.focus {
                box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
            }

            .btn-outline-success.disabled, .btn-outline-success:disabled {
                color: #28a745;
                background-color: transparent;
            }

            .btn-outline-success:not(:disabled):not(.disabled):active, .btn-outline-success:not(:disabled):not(.disabled).active,
            .show > .btn-outline-success.dropdown-toggle {
                color: #fff;
                background-color: #28a745;
                border-color: #28a745;
            }

            .btn-outline-success:not(:disabled):not(.disabled):active:focus, .btn-outline-success:not(:disabled):not(.disabled).active:focus,
            .show > .btn-outline-success.dropdown-toggle:focus {
                box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
            }

            .btn-outline-info {
                color: #17a2b8;
                border-color: #17a2b8;
            }

            .btn-outline-info:hover {
                color: #fff;
                background-color: #17a2b8;
                border-color: #17a2b8;
            }

            .btn-outline-info:focus, .btn-outline-info.focus {
                 box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
            }

            .btn-outline-info.disabled, .btn-outline-info:disabled {
                color: #17a2b8;
                background-color: transparent;
            }

            .btn-outline-info:not(:disabled):not(.disabled):active, .btn-outline-info:not(:disabled):not(.disabled).active,
            .show > .btn-outline-info.dropdown-toggle {
                color: #fff;
                background-color: #17a2b8;
                border-color: #17a2b8;
            }

            .btn-outline-info:not(:disabled):not(.disabled):active:focus, .btn-outline-info:not(:disabled):not(.disabled).active:focus,
            .show > .btn-outline-info.dropdown-toggle:focus {
                box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
            }

            .btn-outline-warning {
                color: #ffc107;
                border-color: #ffc107;
            }

            .btn-outline-warning:hover {
                color: #212529;
                background-color: #ffc107;
                border-color: #ffc107;
            }

            .btn-outline-warning:focus, .btn-outline-warning.focus {
                box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
            }

            .btn-outline-warning.disabled, .btn-outline-warning:disabled {
                color: #ffc107;
                background-color: transparent;
            }

            .btn-outline-warning:not(:disabled):not(.disabled):active, .btn-outline-warning:not(:disabled):not(.disabled).active,
            .show > .btn-outline-warning.dropdown-toggle {
                color: #212529;
                background-color: #ffc107;
                border-color: #ffc107;
            }

            .btn-outline-warning:not(:disabled):not(.disabled):active:focus, .btn-outline-warning:not(:disabled):not(.disabled).active:focus,
            .show > .btn-outline-warning.dropdown-toggle:focus {
                box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
            }

            .btn-outline-danger {
                color: #dc3545;
                border-color: #dc3545;
            }

            .btn-outline-danger:hover {
                color: #fff;
                background-color: #dc3545;
                border-color: #dc3545;
            }

            .btn-outline-danger:focus, .btn-outline-danger.focus {
                box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
            }

            .btn-outline-danger.disabled, .btn-outline-danger:disabled {
                color: #dc3545;
                background-color: transparent;
            }

            .btn-outline-danger:not(:disabled):not(.disabled):active, .btn-outline-danger:not(:disabled):not(.disabled).active,
            .show > .btn-outline-danger.dropdown-toggle {
                color: #fff;
                background-color: #dc3545;
                border-color: #dc3545;
            }

            .btn-outline-danger:not(:disabled):not(.disabled):active:focus, .btn-outline-danger:not(:disabled):not(.disabled).active:focus,
            .show > .btn-outline-danger.dropdown-toggle:focus {
                box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
            }

            .btn-outline-light {
                color: #f8f9fa;
                border-color: #f8f9fa;
            }

            .btn-outline-light:hover {
                color: #212529;
                background-color: #f8f9fa;
                border-color: #f8f9fa;
            }

            .btn-outline-light:focus, .btn-outline-light.focus {
                box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
            }

            .btn-outline-light.disabled, .btn-outline-light:disabled {
                color: #f8f9fa;
                background-color: transparent;
            }

            .btn-outline-light:not(:disabled):not(.disabled):active, .btn-outline-light:not(:disabled):not(.disabled).active,
            .show > .btn-outline-light.dropdown-toggle {
                color: #212529;
                background-color: #f8f9fa;
                border-color: #f8f9fa;
            }

            .btn-outline-light:not(:disabled):not(.disabled):active:focus, .btn-outline-light:not(:disabled):not(.disabled).active:focus,
            .show > .btn-outline-light.dropdown-toggle:focus {
                box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
            }

            .btn-outline-dark {
                color: #343a40;
                border-color: #343a40;
            }

            .btn-outline-dark:hover {
                color: #fff;
                background-color: #343a40;
                border-color: #343a40;
            }

            .btn-outline-dark:focus, .btn-outline-dark.focus {
                box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
            }

            .btn-outline-dark.disabled, .btn-outline-dark:disabled {
                color: #343a40;
                background-color: transparent;
            }

            .btn-outline-dark:not(:disabled):not(.disabled):active, .btn-outline-dark:not(:disabled):not(.disabled).active,
            .show > .btn-outline-dark.dropdown-toggle {
                color: #fff;
                background-color: #343a40;
                border-color: #343a40;
            }

            .btn-outline-dark:not(:disabled):not(.disabled):active:focus, .btn-outline-dark:not(:disabled):not(.disabled).active:focus,
            .show > .btn-outline-dark.dropdown-toggle:focus {
                box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
            }

            .btn-link {
                font-weight: 400;
                color: #007bff;
                text-decoration: none;
            }

            .btn-link:hover {
                color: #0056b3;
                text-decoration: underline;
            }

            .btn-link:focus, .btn-link.focus {
                text-decoration: underline;
                box-shadow: none;
            }

            .btn-link:disabled, .btn-link.disabled {
                color: #6c757d;
                pointer-events: none;
            }

            .btn-lg, .btn-group-lg > .btn {
                padding: 0.5rem 1rem;
                font-size: 1.25rem;
                line-height: 1.5;
                border-radius: 0.3rem;
            }

            .btn-sm, .btn-group-sm > .btn {
                padding: 0.25rem 0.5rem;
                font-size: 0.875rem;
                line-height: 1.5;
                border-radius: 0.2rem;
            }

            .btn-block {
                display: block;
                width: 100%;
            }

            .btn-block + .btn-block {
                margin-top: 0.5rem;
            }
            .negrito{
            	font-weight: bold;
            }
            .espacamento{
            	margin-top: 15px;
            }
            .select{
            	width: 100%;
            	border-radius: 5px;
            	height: 30px;
            }
            .bordered{
            	border: 1px solid #e3e3e3;
            }
            .centralizado{
            	display: flex;
            	flex-direction: row;
            	align-items: center;
            	justify-content: center;
            }
             .centralizado-esquerda{
            	display: flex;
            	flex-direction: row;
            	align-items: center;
            	justify-content: flex-start;
            }
            .divisor1{
            	width: 20%; float: left;border: 1px solid #e3e3e3;height: 100%
            }
            .divisor2{
            	width: 40%; float: left;border: 1px solid #e3e3e3;height: 100%
            }
            .divisor3{
            	width: 8%; float: left;border: 1px solid #e3e3e3;height: 100%
            }
            .divisor4{
				width: 31%; float: left;border: 1px solid #e3e3e3;height: 100%
            }
            .divisor5{
            	width: 60.2%;float: left;border: 1px solid #e3e3e3;height: 100%
            }
          *{
          	margin:0;
          	padding:0;
          	font-family: 'Arial';
          	font-size: 95%;


          }
          .divisor-datas{
          	width: 5%;float: left;height:20vh;border:1px solid #e3e3e3;writing-mode:vertical-rl;text-orientation: use-glyph-orientation;text-align: center;display: flex;flex-direction: row;align-items: center;justify-content: center;
          }
          .divisor-datas-item{
          	width: 5%;float: left;border:1px solid #e3e3e3;text-align: center;display: flex;flex-direction: row;align-items: center;justify-content: center;
          }
          .botao-datas-item{
          	width: 15%;float: left;border:1px solid #e3e3e3;text-align: center;display: flex;flex-direction: row;align-items: center;justify-content: center;
          }
          .margin{
          	margin-left: 1%;
          }
          .senso{
          	margin-top: 4vh; border: 1px solid #e3e3e3; width: 9%;float: left;text-align: center;height: 4vh;display: flex;flex-direction: row;align-items: center;justify-content: center;font-weight: bold;
          }
          .item_avaliado{
          	margin-top: 4vh; border:1px solid #e3e3e3; width: 45%;float: left;text-align: center;height: 4vh;display: flex;flex-direction: row;align-items: center;justify-content: center;font-weight: bold;
          }
          .status{
          	margin-top: 4vh; border: 1px solid #e3e3e3; width: 4%;float: left;text-align: center;height: 4vh;display: flex;flex-direction: row;align-items: center;justify-content: center;font-weight: bold;
          }
          .observacoes{
          	margin-top: 4vh; border:1px solid #e3e3e3; width: 30%;float: left;text-align: center;height: 4vh;display: flex;flex-direction: row;align-items: center;justify-content: center;font-weight: bold;
          }
          .foto{
          	margin-top: 4vh; border: 1px solid #e3e3e3; width:10%;float: left;text-align: center;height: 4vh;display: flex;flex-direction: row;align-items: center;justify-content: center;font-weight: bold;
          }
          .senso-item{
          	border: 1px solid #e3e3e3; width: 9%;float: left;text-align: center;display: flex;flex-direction: row;align-items: center;justify-content: center;
          }
          .item_avaliado-item{
          	border:1px solid #e3e3e3; width: 45%;float: left;text-align: left;display: flex;flex-direction: row;align-items: center;justify-content: flex-start;
          }
          .status-item{
          	border: 1px solid #e3e3e3; width: 4%;float: left;text-align: center;display: flex;flex-direction: row;align-items: center;justify-content: center;
          }
          .observacoes-item{
          	border:1px solid #e3e3e3; width: 30%;float: left;text-align: center;display: flex;flex-direction: row;align-items: center;justify-content: center;
          }
          .foto-item{
          	border: 1px solid #e3e3e3; width:10%;float: left;text-align: center;display: flex;flex-direction: row;align-items: center;justify-content: center;
          }
          .linha1{
          	height: 4vh
          }
          .linha4{
          	height: 6vh
          }
          .linha2{
          	height: 10vh
          }
          .linha3{
          	height: 3vh
          }
          .conferencia{
          	width: 30%;
          }
          .checkbox{
          	height: 20px;
          	width: 20px;
          }
          .checkbox_form4{
            height: 20px;
            width: 20px;
          }
          .checkbox_form1{
            height: 20px;
            width: 20px;
          }
          .checkbox_form3{
            height: 20px;
            width: 20px;
          }
          .checkbox_form5{
            height: 20px;
            width: 20px;
          }
          .checkbox2{
            height: 20px;
            width: 20px;
          }
          .checkbox2_form4{
            height: 20px;
            width: 20px;
          }
          .checkbox2_form5{
            height: 20px;
            width: 20px;
          }
          .checkbox2_form1{
            height: 20px;
            width: 20px;
          }
          .checkbox2_form3{
            height: 20px;
            width: 20px;
          }
          .descricao_senso{
			width: 100%;float: left;background-color: rgb(0,97,254);color: white;font-weight: bold;font-size: 16px
          }
          .btn-confirmar{
          	width: 100%;height:100%;color: white;font-weight: bold;background-color: rgb(128,128,128);
          }
          button:hover{
          	cursor: pointer;
          }
          .azul{
          	color: rgb(0,97,254);
            font-weight: bold;
            text-align: center;
            border: none;
            width: 100%;
            font-size: 25px;
          }
          .aligned-right{
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: flex-end;
          }
          .btn{
            margin-top: 15px;
            margin-bottom: 15px
          }
          .btn-primary{
            background-color: rgb(0,97,254)!important;
          }
          .aligned{
          	display: flex;
          	flex-direction: row;
          	align-items: center;
          	justify-content: center;

          }
          input[type='file'] {
    		  display: none
    		}

		/* Aparência que terá o seletor de arquivo */
		label {
		  background-color: rgb(0,97,254);
		  border-radius: 5px;
		  font-family: 'Arial';
		  color: #fff;
		  cursor: pointer;
		  margin: 10px;
		  font-size: 10px;
		  padding: 6px 20px
		}
        #google_translate_element {
        display: none;
    }

    #google_translate_element {
        display: none;
    }
    .goog-te-banner-frame {
        display: none !important;
    }
    body {
        position: static !important;
        top: 0 !important;
    }
	</style>

</head>
<body>
<div class="top-menu" style="display: flex;flex-direction: row;align-items: center;">
        <div class="col9">
            <a href="sair.php"><img src="imagens/korber_branco.png" style="height: 4vh;float: left;"></a>
        </div>
        <div class="col2" style="display: flex;flex-direction: row;align-items: flex-end;text-align: right;color: white;justify-content: flex-end;">
           <img src="imagens/logo8s.png" style="height: 4vh;float: left;">
        </div>
        <div  class="col1" style="display: flex;flex-direction: row;align-items: center;justify-content: center;margin-right: 0;">
            <img src="imagens/logoLean.png" style="height: 4vh;float: left;">
        </div>  
    </div>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'campo1')" id="botao_industrial">Industrial</button>
  <button class="tablinks" onclick="openCity(event, 'campo2')" id="botao_industrial_pessoal">Industrial Uso Pessoal</button>
  <button class="tablinks" onclick="openCity(event, 'campo3')" id="botao_adm">ADM</button>
  <button class="tablinks" onclick="openCity(event, 'campo4')" id="botao_adm_pessoal">ADM Uso Pessoal</button>
  <button class="tablinks" onclick="openCity(event, 'campo5')" id="botao_area_comum">Áreas Comuns</button>
  <button class="tablinks" onclick="openCity(event, 'campo6')" id="botao_resultado_geral">Resultado Geral</button>
  <button class="tablinks" onclick="openCity(event, 'campo7')" id="botao_resultado_adm">Resultado ADM </button>
  <button class="tablinks" onclick="openCity(event, 'campo8')" id="botao_resultado_industrial">Resultado Industrial </button>
  <button class="tablinks" onclick="openCity(event, 'campo9')" id="botao_resultado_area_comum">Resultado Áreas Comuns </button>
  <button class="tablinks" onclick="openCity(event, 'campo10')" id="botao_resultado_individual_adm">Resultados Individuais ADM</button>
  <button class="tablinks" onclick="openCity(event, 'campo11')" id="botao_resultado_individual_industrial">Resultados Individuais Industrial </button>
  <button class="tablinks" onclick="openCity(event, 'campo12')" id="botao_controle_auditoriras">Controle de Auditorias </button>
 <button class="tablinks" onclick="openCity(event, 'campo13')" id="botao_controle_auditoriras">Relatórios Trimestrais</button>
 <button class="tablinks" onclick="openCity(event, 'campo20')"  id="acessos">Liberação de Acesso</button>
</div>

    <div id="campo20" class="tabcontent" style="text-align: center;">
        <br><br>
        <h4><b>Você não possui acesso à este sistema!</b><br><br>  </h4>
        <img src="imagens/Imagem1.png" style="width:15%">
        <br><br><br>
        <h4>Para maiores informações e/ou solicitação de acesso entre em contato com: <b>ROBERTSON BUSE </b></h4>
        <br><br>
        <h4 style="color: blue">E-mail: robertson.buse@koerber-tissue.com</h4>
    </div>



<div id="google_translate_element" class="boxTradutor"></div>
<!-- 
    <a href="javascript:trocarIdioma('es')">espanhol</a>
    <a href="javascript:trocarIdioma('en')">ingles</a>
    <a href="javascript:trocarIdioma('it')">italiano</a> -->
<!-- industrial-->
<div id="campo1" class="tabcontent">
    <form action="salvar_formulario1.php" method="post" enctype="multipart/form-data">
	<div style="width: 83%;float: left;height: 20vh;">
		<div style="width:100%;float: left;height: 6vh">
			<div  class="divisor1 negrito centralizado-esquerda">
			     Área Industrial
			</div>
			<div class="divisor2 centralizado">
				<select id="area" name="area" class="select"></select>
			</div>
			<div  class="negrito centralizado divisor3">
				Auditor
			</div>
			<div  id="nome_usuario" class="divisor4 centralizado">
				
			</div>
		</div>

		<div style="width: 100%;float: left;height: 6vh">
			<div  class="divisor1 centralizado-esquerda negrito">
			     Responsável 8S
			</div>
			<div  class="divisor2 centralizado">
				<select id="responsavel_form1" name="responsavel_form1" class="select"></select>
			</div>
			<div  class="divisor3 centralizado negrito">
				Data
			</div>
			<div class="centralizado divisor4" id="data_hoje">
			</div>
		</div>

		<div style="width: 100%;float: left;height: 8vh">
			<div class="senso linha1">
	 			Senso
	 		</div>
	 		<div class="item_avaliado">
	 			Item Avaliado
	 		</div>
	 		<div class="status">
	 			Status
	 		</div>
	 		<div class="observacoes">
	 			Observações
	 		</div>
	 		<div class="foto">
	 			Foto
	 		</div>
		</div>

	</div>

	<div class="divisor-datas margin">
	 	Data última &nbsp;&nbsp;auditoria
	</div>

	<div class="divisor-datas">
	 	Data penúltima auditoria
	</div>

	<div class="divisor-datas">
	 	Data antepenultima auditoria
	</div> 

	<div class="descricao_senso">
	 	1. Máquinas e Equipamentos: Ponte rolante/controles remotos/transpaleteiras/empilhadeiras/lixadeiras manuais/furadeiras manuais/rebitadeiras manuais/serra tico-tico e demais acessórios de uso coletivo ou individual do quadrante.
	</div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Utilização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Apenas equipamentos e/ou máquinas necessárias na área comum.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form1_1_1" id="form1_1_1" checked class="checkbox_form1">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" id="form1_1_1_obs" name="form1_1_1_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form1_1_1_file'>Anexo &#187;</label>
				<input id='form1_1_1_file' name="form1_1_1_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 

	<!-- Linha 2 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha2">
	 			Organização
	 		</div>
	 		<div class="item_avaliado-item linha2">
	 			Possuem local apropriado, desobstruído, sinalizado e identificado. Equipamentos, cabos e infra estrutura necessária estão agrupados e dispostos de modo a facilitar os trabalhos de rotina e a circulação de pessoas.
	 		</div>
	 		<div class="status-item linha2">
                <input type="checkbox" name="form1_1_2" id="form1_1_2" checked class="checkbox_form1">
	 		</div>
	 		<div class="observacoes-item linha2">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form1_1_2_obs" id="form1_1_2_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha2">
	 			<label for='form1_1_2_file'>Anexo &#187;</label>
                <input id='form1_1_2_file' name="form1_1_2_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha2">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha2">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha2">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 
	<!-- Linha 3 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha3">
	 			Limpeza
	 		</div>
	 		<div class="item_avaliado-item linha3">
	 			Estão livres de poeira e outras evidências de falta de limpeza regular.
	 		</div>
	 		<div class="status-item linha3">
	 			<input type="checkbox" name="form1_1_3" id="form1_1_3" checked class="checkbox_form1">
	 		</div>
	 		<div class="observacoes-item linha3">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form1_1_3_obs"id="form1_1_3_obs" ></textarea>
	 		</div>
	 		<div class="foto-item linha3">
	 			<label for='form1_1_3_file'>Anexo &#187;</label>
                <input id='form1_1_3_file' name="form1_1_3_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha3">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha3">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha3">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 
	<!-- Linha 2 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha2">
	 			Conservação
	 		</div>
	 		<div class="item_avaliado-item linha2">
	 			Pintura, botões, manoplas, proteções e/ou dispositivos de segurança luminosos e contra vazamentos de gás apropriados. Não possuem vazamentos de água, óleo, etc. 
	 		</div>
	 		<div class="status-item linha2">
	 			<input type="checkbox" name="form1_1_4" id="form1_1_4" checked class="checkbox_form1">
	 		</div>
	 		<div class="observacoes-item linha2">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form1_1_4_obs"id="form1_1_4_obs" ></textarea>
	 		</div>
	 		<div class="foto-item linha2">
	 			<label for='form1_1_4_file'>Anexo &#187;</label>
                <input id='form1_1_4_file' name="form1_1_4_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha2">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha2">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha2">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 
	<!-- Linha 2 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha2">
	 			Disciplina
	 		</div>
	 		<div class="item_avaliado-item linha2">
	 			Padrões de qualidade relativos a forma de utilização, acondicionamento, estocagem, movimentação, substituição e quantidades são adequados. Encontram-se no ambiente somente pessoas autorizadas e com uniforme recomendados.
	 		</div>
	 		<div class="status-item linha2">
	 			  <input type="checkbox" name="form1_1_5" id="form1_1_5" checked disabled class="checkbox_form1">
	 		</div>
	 		<div class="observacoes-item linha2">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form1_1_5_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha2">
	 			<label for='form1_1_5_file'>Anexo &#187;</label>
                <input id='form1_1_5_file' name="form1_1_5_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha2">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha2">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha2">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 
	<!-- Descrição Senso -->
	<div class="descricao_senso">
		 2. Bancadas, armários, acessórios e produtos diversos.		
	</div>
	<!-- Linha 4 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha4">
	 			Utilização
	 		</div>
	 		<div class="item_avaliado-item linha4">
	 			Os materiais armazenados atendem os critérios de utilização de acordo com a rotina de uso.
	 		</div>
	 		<div class="status-item linha4">
                <input type="checkbox" name="form1_2_1" id="form1_2_1" checked class="checkbox_form1">
	 		</div>
	 		<div class="observacoes-item linha4">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form1_2_1_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha4">
	 			<label for='form1_2_1_file'>Anexo &#187;</label>
                <input id='form1_2_1_file' name="form1_2_1_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha4">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha4">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha4">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 2 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha2">
	 			Organização
	 		</div>
	 		<div class="item_avaliado-item linha2">
	 			Os locais de armazenagem, os recipientes de armazenagem e os acessórios estão identificados, sinalizados e dispostos ordenadamente. Os alimentos estão guardados e dispostos ordenadamente no interior dos armários e/ou refrigeradores.
	 		</div>
	 		<div class="status-item linha2">
	 			<input type="checkbox" name="form1_2_2" id="form1_2_2" checked class="checkbox_form1">
	 		</div>
	 		<div class="observacoes-item linha2">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form1_2_2_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha2">
	 			<label for='form1_2_2_file'>Anexo &#187;</label>
                <input id='form1_2_2_file' name="form1_2_2_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha2">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha2">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha2">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Limpeza
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Os armários, prateleiras, organizadores, geladeiras e frigobares estão isentos de poeiras e apresentando limpeza adequada.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form1_2_3" id="form1_2_3" checked class="checkbox_form1">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form1_2_3_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form1_2_3_file'>Anexo &#187;</label>
                <input id='form1_2_3_file' name="form1_2_3_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 2 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha2">
	 			Conservação
	 		</div>
	 		<div class="item_avaliado-item linha2">
	 			Pintura preservada, claramente  identificada, em posição adequada, organizadas de forma a facilitar a visualização e a circulação no setor. Não há vazamento de produtos químicos.
	 		</div>
	 		<div class="status-item linha2">
	 			<input type="checkbox" name="form1_2_4" id="form1_2_4" checked class="checkbox_form1">
	 		</div>
	 		<div class="observacoes-item linha2">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form1_2_4_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha2">
	 			<label for='form1_2_4_file'>Anexo &#187;</label>
                <input id='form1_2_4_file' name="form1_2_4_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha2">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha2">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha2">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 2 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha2">
	 			Disciplina
	 		</div>
	 		<div class="item_avaliado-item linha2">
	 			Organização interna corresponde à identificação de sinalização encontrada. Estão disponíveis reservas de copos, pratos, guardanapos, etc. Caso no ambiente seja permitido consumir alimentos, os perecíveis estão armazenados adequadamente em local refrigerado.
	 		</div>
	 		<div class="status-item linha2">
	 			<input type="checkbox" name="form1_2_5" id="form1_2_5" checked disabled class="checkbox_form1">
	 		</div>
	 		<div class="observacoes-item linha2">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form1_2_5_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha2">
	 			<label for='form1_2_5_file'>Anexo &#187;</label>
                <input id='form1_2_5_file' name="form1_2_5_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha2">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha2">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha2">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Descrição Senso -->
	<div class="descricao_senso">
		3. Peças, estruturas, carrinhos de peças e palets em montagem de uso comum.
	</div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Utilização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Os materiais armazenados atendem os critérios de utilização de acordo com a rotina dos materiais em uso.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form1_3_1" id="form1_3_1" checked class="checkbox_form1">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form1_3_1_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form1_3_1_file'>Anexo &#187;</label>
                <input id='form1_3_1_file' name="form1_3_1_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 2 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha2">
	 			Organização
	 		</div>
	 		<div class="item_avaliado-item linha2">
	 			Os carrinhos e palets estão organizados em acordo com o layout do projeto em andamento, claramente separados de outras áreas de armazenamento. Os materiais estão devidamente empilhados e arrumados. Ao término da jornada de trabalho, ficam livres de embalagens e demais materiais desnecessários ou resíduos.
	 		</div>
	 		<div class="status-item linha2">
	 			<input type="checkbox" name="form1_3_2" id="form1_3_2" checked class="checkbox_form1">
	 		</div>
	 		<div class="observacoes-item linha2">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form1_3_2_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha2">
	 			<label for='form1_3_2_file'>Anexo &#187;</label>
                <input id='form1_3_2_file' name="form1_3_2_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha2">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha2">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha2">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
 	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Limpeza
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Os carrinhos e palets estão isentos de poeira e apresentando limpeza adequada.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form1_3_3" id="form1_3_3" checked class="checkbox_form1">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form1_3_3_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form1_3_3_file'>Anexo &#187;</label>
                <input id='form1_3_3_file' name="form1_3_3_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 4 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha4">
	 			Conservação
	 		</div>
	 		<div class="item_avaliado-item linha4">
	 			Pintura preservada, identificação e organização adequadas das de forma a facilitar a visualização.
	 		</div>
	 		<div class="status-item linha4">
	 			<input type="checkbox" name="form1_3_4" id="form1_3_4" checked class="checkbox_form1">
	 		</div>
	 		<div class="observacoes-item linha4">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form1_3_4_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha4">
	 			<label for='form1_3_4_file'>Anexo &#187;</label>
                <input id='form1_3_4_file' name="form1_3_4_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha4">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha4">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha4">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 4 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha2">
	 			Disciplina
	 		</div>
	 		<div class="item_avaliado-item linha2">
	 			O posicionamento mantém espaço adequado de circulação para acesso de forma segura, facilitando a movimentação de pessoas e de materiais. As peças disponíveis visivelmente atendem aos padrões de qualidade relativos à forma de movimentação, substituição, acondicionamento, quantidades, modelo, etc.
	 		</div>
	 		<div class="status-item linha2">
	 			<input type="checkbox" name="form1_3_5" id="form1_3_5" checked disabled class="checkbox_form1">
	 		</div>
	 		<div class="observacoes-item linha2">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form1_3_5_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha2">
	 			<label for='form1_3_5_file'>Anexo &#187;</label>
                <input id='form1_3_5_file' name="form1_3_5_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha2">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha2">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha2">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Descrição Senso -->
	<div class="descricao_senso">
		4. Pisos.		
	</div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Utilização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			A utilização do piso está adequada às necessidades da operação do ambiente.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form1_4_1" id="form1_4_1" checked class="checkbox_form1">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form1_4_1_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form1_4_1_file'>Anexo &#187;</label>
                <input id='form1_4_1_file' name="form1_4_1_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Organização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Todos os objetos e/ou outros elementos estão nos locais sinalizados conforme recomendação de padronização e segurança para o ambiente.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form1_4_2" id="form1_4_2" checked class="checkbox_form1">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form1_4_2_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form1_4_2_file'>Anexo &#187;</label>
                <input id='form1_4_2_file' name="form1_4_2_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Limpeza
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Estão livres de poeira e outras evidências de falta de limpeza regular.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form1_4_3" id="form1_4_3" checked class="checkbox_form1">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form1_4_3_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form1_4_3_file'>Anexo &#187;</label>
                <input id='form1_4_3_file' name="form1_4_3_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Conservação
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			O piso não possui imperfeições que possibilitam a ocorrência de acidentes. A sinalização está visível e legível.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form1_4_4" id="form1_4_4" checked class="checkbox_form1">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form1_4_4_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form1_4_4_file'>Anexo &#187;</label>
                <input id='form1_4_4_file' name="form1_4_4_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Disciplina
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			As características do piso atendem as necessidades do ambiente e todas as sinalizações são respeitadas.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form1_4_5" id="form1_4_5" disabled checked class="checkbox_form1">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%"  name="form1_4_5_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form1_4_5_file'>Anexo &#187;</label>
                <input id='form1_4_5_file' name="form1_4_5_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Descrição Senso -->
	<div class="descricao_senso">
		5. Instalações Elétricas.		
	</div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Utilização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Toda a fiação elétrica esta presa ou embutida conforme padrão das normas técnicas.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form1_5_1" id="form1_5_1" checked class="checkbox_form1">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form1_5_1_obs" ></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form1_5_1_file'>Anexo &#187;</label>
                <input id='form1_5_1_file' name="form1_5_1_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Organização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			As tomadas e demais itens elétricos possuem tensão identificada.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form1_5_2" id="form1_5_2" checked class="checkbox_form1">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form1_5_2_obs" ></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form1_5_2_file'>Anexo &#187;</label>
                <input id='form1_5_2_file' name="form1_5_2_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Limpeza
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			As instalações elétricas, lâmpadas e interruptores estão limpos.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form1_5_3" id="form1_5_3" checked class="checkbox_form1">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form1_5_3_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form1_5_3_file'>Anexo &#187;</label>
                <input id='form1_5_3_file' name="form1_5_3_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Conservação
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Todos os fios elétricos estão devidamente protegidos evitando a ocorrência de acidentes.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form1_5_4" id="form1_5_4" checked class="checkbox_form1">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form1_5_4_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form1_5_4_file'>Anexo &#187;</label>
                <input id='form1_5_4_file' name="form1_5_4_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Disciplina
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Apenas as lâmpadas e aparelhos necessários estão energizados no momento.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form1_5_5" id="form1_5_5"  disabled checked class="checkbox_form1">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form1_5_5_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form1_5_5_file'>Anexo &#187;</label>
                <input id='form1_5_5_file' name="form1_5_5_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Senso -->
	<div class="descricao_senso">
		6. Cestos de Lixo.	
	</div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Utilização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Todos os tipos de resíduos produzidos na área possuem local de descarte adequados.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form1_6_1" id="form1_6_1" checked class="checkbox_form1">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form1_6_1_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form1_6_1_file'>Anexo &#187;</label>
                <input id='form1_6_1_file' name="form1_6_1_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Organização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Os locais de coleta de resíduos estão sinalizados e posicionados de maneira ordenada. Todos os coletores estão identificados por tipos de resíduos.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form1_6_2" id="form1_6_2" checked class="checkbox_form1">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form1_6_2_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form1_6_2_file'>Anexo &#187;</label>
                <input id='form1_6_2_file' name="form1_6_2_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Limpeza
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Não há lixo depositado ao redor do coletor e estes apresentam limpeza adequada.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form1_6_3" id="form1_6_3" checked class="checkbox_form1">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form1_6_3_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form1_6_3_file'>Anexo &#187;</label>
                <input id='form1_6_3_file' name="form1_6_3_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Conservação
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Os coletores não apresentam danos internos e/ou externos. As tampas abrem de maneira adequada e a identificação está devidamente colada à superfície lateral.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form1_6_4" id="form1_6_4" checked class="checkbox_form1">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form1_6_4_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form1_6_4_file'>Anexo &#187;</label>
                <input id='form1_6_4_file' name="form1_6_4_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Disciplina
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			A separação dos resíduos segue a sinalização apresentada nos coletores.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form1_6_5" id="form1_6_5" disabled checked class="checkbox_form1">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form1_6_5_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form1_6_5_file'>Anexo &#187;</label>
                <input id='form1_6_5_file' name="form1_6_5_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Senso -->
	<div class="descricao_senso">
		7. Quadros de Aviso.	
	</div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Utilização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Atendem à necessidade do setor e estão em local de fácil acesso e visualização.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form1_7_1" id="form1_7_1" checked class="checkbox_form1">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form1_7_1_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form1_7_1_file'>Anexo &#187;</label>
                <input id='form1_7_1_file' name="form1_7_1_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Organização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Possuem comunicados ordenados e padronizados.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form1_7_2" id="form1_7_2" checked class="checkbox_form1">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%"  name="form1_7_2_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form1_7_2_file'>Anexo &#187;</label>
                <input id='form1_7_2_file' name="form1_7_2_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Limpeza
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Estão livres de poeira e outras evidências de falta de limpeza adequada.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form1_7_3" id="form1_7_3" checked class="checkbox_form1">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form1_7_3_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form1_7_3_file'>Anexo &#187;</label>
                <input id='form1_7_3_file' name="form1_7_3_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Conservação
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Estão identificados, com logos oficiais atualizadas e apresentam estrutura adequada.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form1_7_4" id="form1_7_4" checked class="checkbox_form1">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form1_7_4_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form1_7_4_file'>Anexo &#187;</label>
                <input id='form1_7_4_file' name="form1_7_4_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Disciplina
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Todos os comunicados apresentados são de poucos dias atrás.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form1_7_5" id="form1_7_5" disabled checked class="checkbox_form1">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form1_7_5_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form1_7_5_file'>Anexo &#187;</label>
                <input id='form1_7_5_file' name="form1_7_5_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Senso -->
	<div class="descricao_senso">
		8. Sinalização.
	</div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Utilização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			As placas de sinalização são legíveis e suprem todas as necessidades da área. As faixas de segurança e estacionamento são adequadas à necessidade do ambiente.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form1_8_1" id="form1_8_1" checked class="checkbox_form1">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form1_8_1_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form1_8_1_file'>Anexo &#187;</label>
                <input id='form1_8_1_file' name="form1_8_1_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 4 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha4">
	 			Organização
	 		</div>
	 		<div class="item_avaliado-item linha4">
	 			As sinalizações especificas de risco elétrico e/ou segurança estão visíveis e claras para todos. Ex.: Painéis elétricos, caixa de coluna, quadros de distribuição, acessos, salas de controle, equipamentos de combate a incêndio etc.
	 		</div>
	 		<div class="status-item linha4">
	 			<input type="checkbox" name="form1_8_2" id="form1_8_2" checked class="checkbox_form1">
	 		</div>
	 		<div class="observacoes-item linha4">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form1_8_2_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha4">
	 			<label for='form1_8_2_file'>Anexo &#187;</label>
                <input id='form1_8_2_file' name="form1_8_2_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha4">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha4">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha4">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Limpeza
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Estão livres de poeira e outras evidências de falta de limpeza adequada.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form1_8_3" id="form1_8_3" checked class="checkbox_form1">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%"  name="form1_8_3_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form1_8_3_file'>Anexo &#187;</label>
                <input id='form1_8_3_file' name="form1_8_3_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 2 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha2">
	 			Conservação
	 		</div>
	 		<div class="item_avaliado-item linha2">
	 			Possuem pintura adequada e informações atualizadas. As sinalizações temporárias de segurança estão instaladas em posição adequada e visível à todos. Ex.: Proteção de cabos energizados, painéis em manutenção, risco de quedas, desnível, placas e sinais luminosos.
	 		</div>
	 		<div class="status-item linha2">
	 			<input type="checkbox" name="form1_8_4" id="form1_8_4" checked class="checkbox_form1">
	 		</div>
	 		<div class="observacoes-item linha2">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form1_8_4_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha2">
	 			<label for='form1_8_4_file'>Anexo &#187;</label>
                <input id='form1_8_4_file' name="form1_8_4_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha2">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha2">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha2">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Disciplina
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			As recomendações e informações são praticadas e respeitadas por todos na área.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form1_8_5" id="form1_8_5" disabled checked class="checkbox_form1">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form1_8_5_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form1_8_5_file'>Anexo &#187;</label>
                <input id='form1_8_5_file' name="form1_8_5_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Senso -->
	<div class="descricao_senso">
		9. Extintores, caixas de hidrantes, mangueiras, macas e rota de fuga.
	</div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Utilização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Estão em posição de acesso adequado e em conformidade com o projeto preventivo de incêndio. Existe sinalização da rota de fuga.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form1_9_1" id="form1_9_1" checked class="checkbox_form1">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form1_9_1_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form1_9_1_file'>Anexo &#187;</label>
                <input id='form1_9_1_file' name="form1_9_1_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Organização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Estão em local adequado e indicado pelas sinalizações. Não obstruem a passagem de carga e pessoas.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form1_9_2" id="form1_9_2" checked class="checkbox_form1">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form1_9_2_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form1_9_2_file'>Anexo &#187;</label>
                <input id='form1_9_2_file' name="form1_9_2_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Limpeza
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Estão livres de poeira e outras evidências de falta de limpeza adequada.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form1_9_3" id="form1_9_3" checked class="checkbox_form1">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form1_9_3_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form1_9_3_file'>Anexo &#187;</label>
                <input id='form1_9_3_file' name="form1_9_3_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Conservação
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Estão identificados, com as revisões em dia e sem obstrução de acesso.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form1_9_4" id="form1_9_4" checked class="checkbox_form1">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form1_9_4_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form1_9_4_file'>Anexo &#187;</label>
                <input id='form1_9_4_file' name="form1_9_4_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Disciplina
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Possuem manutenção periódica realizada com lacres visíveis e estão com prazo de validade em vigor. Possuem o controle de inspeção visível.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form1_9_5" id="form1_9_5" disabled checked class="checkbox_form1">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form1_9_5_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form1_9_5_file'>Anexo &#187;</label>
                <input id='form1_9_5_file' name="form1_9_5_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Senso -->
	<div class="descricao_senso divisoria" >
		10. Melhoria Contínua.	
	</div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Todas as NCs registradas em auditorias anteriores foram resolvidas.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form1_10_1" id="form1_10_1" checked class="checkbox2_form1">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form1_10_1_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			Nota MC
	 		</div>
		</div>

	</div>
	<div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	</div>

	<div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	</div>

	<div class="divisor-datas-item linha1">
		<img src="imagens/fechar.png" class="conferencia">
	</div>
 	<!-- Linha 4 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha4">
	 		</div>
	 		<div class="item_avaliado-item linha4">

	 		</div>
	 		<div class="status-item linha4">
	 			Nota Geral
	 		</div>
	 		<div class="observacoes-item linha4" >
	 			<input type="text" class="azul"  name="nota_form1" readonly id="nota_form1">
	 		</div>
	 		<div class="foto-item linha4">
	 			<input type="text" class="azul"  name="nota_mc_form1" readonly id="nota_mc_form1">
	 		</div>
		</div>
	 </div>

	 <div class="botao-datas-item margin linha4">
	 	<button class="btn-confirmar" id="btn-confirmar-form1" >CONFIRMAR</button>
	 </div>
    </form>
  <label style="visibility: hidden;">oi</label>
  
</div>

<!-- industrial uso pessoal -->
<div id="campo2" class="tabcontent">
    <form action="salvar_formulario2.php" method="post" enctype="multipart/form-data">
       <div style="width: 83%;float: left;height: 20vh;">
            <div style="width:100%;float: left;height: 6vh">
                <div  class="divisor1 negrito centralizado-esquerda">
                    Colaborador
                </div>
                <div class="divisor2 centralizado">
                    <select id="colaborador_form2" name="colaborador_form2" class="select"></select>
                </div>
                <div  class="negrito centralizado divisor3">
                    Auditor
                </div>
                <div  id="nome_usuario_form2" class="divisor4 centralizado">
                    
                </div>
            </div>

            <div style="width: 100%;float: left;height: 6vh">
                <div  class="divisor1 centralizado-esquerda negrito">
                    Área de Referência
                </div>
                <div  class="divisor2 centralizado">
                    <select id="area_referencia_form2" name="area_referencia_form2" class="select"></select>
                </div>
                <div  class="divisor3 centralizado negrito">
                    Data
                </div>
                <div class="centralizado divisor4" id="data_hoje_form2">
                </div>
            </div>

            <div style="width: 100%;float: left;height: 8vh">
                <div class="senso linha1">
                    Senso
                </div>
                <div class="item_avaliado">
                    Item Avaliado
                </div>
                <div class="status">
                    Status
                </div>
                <div class="observacoes">
                    Observações
                </div>
                <div class="foto">
                    Foto
                </div>
            </div>
        </div>

        <div class="divisor-datas margin">
            Data última &nbsp;&nbsp;auditoria
        </div>

        <div class="divisor-datas">
            Data penúltima auditoria
        </div>

        <div class="divisor-datas">
            Data antepenultima auditoria
        </div> 

        <div class="descricao_senso">
            1. Bancadas/Carrinhos de ferramentas: Trabalho pessoal.         
        </div>
    
        <!-- Linha 4 -->
        <div style="width: 83%;float: left;margin-top: 0px ">
            <div style="width: 100%;float: left">
                <div class="senso-item linha4">
                    Utilização
                </div>
                <div class="item_avaliado-item linha4">
                    Todos os materiais, ferramentas e objetos sobre e/ou no interior das bancadas e carrinhos atendem aos critérios de utilização de acordo com a rotina de uso. Produtos químicos somente 01 unidade em uso de cada tipo.
                </div>
                <div class="status-item linha4">
                    <input type="checkbox"  id="form2_0" name="form2_0" checked class="checkbox">
                </div>
                <div class="observacoes-item linha4">
                    <textarea style="width: 100%;resize: none;height: 90%" id="form2_0_obs" name="form2_0_obs"></textarea>
                </div>
                <div class="foto-item linha4">
                    <label for='form2_0_file'>Anexo &#187;</label>
                    <input id='form2_0_file' name="form2_0_file" type='file'>
                </div>
            </div>
         </div>

     <div class="divisor-datas-item margin linha4">
        <img src="imagens/verifica.png" class="conferencia">
     </div>

     <div class="divisor-datas-item linha4">
        <img src="imagens/verifica.png" class="conferencia">
     </div>

     <div class="divisor-datas-item linha4">
        <img src="imagens/fechar.png" class="conferencia">
     </div> 
    <!-- Linha 2 -->
    <div style="width: 83%;float: left;margin-top: 0px ">
        <div style="width: 100%;float: left">
            <div class="senso-item linha2">
                Organização
            </div>
            <div class="item_avaliado-item linha2">
                As ferramentas e demais acessórios de trabalho estão dispostas organizadamente em locais identificados e  sinalizados. Os recursos de organização padronizados pelo Programa 8S (dispenser, kit, organizadores, manta de posição, suportes) estão em uso adequado. Objetos pessoais e EPI são armazenados de forma adequada nos locais sinalizados.
            </div>
            <div class="status-item linha2">
                <input type="checkbox" name="form2_1" id="form2_1" checked class="checkbox check-form2">
            </div>
            <div class="observacoes-item linha2">
                <textarea style="width: 100%;resize: none;height: 90%"id="form2_1_obs" name="form2_1_obs"></textarea>
            </div>
            <div class="foto-item linha2">
                <label for='form2_1_file'>Anexo &#187;</label>
                <input id='form2_1_file' name="form2_1_file" type='file'>
            </div>
        </div>
     </div>
     <div class="divisor-datas-item margin linha2">
        <img src="imagens/verifica.png" class="conferencia">
     </div>

     <div class="divisor-datas-item linha2">
        <img src="imagens/verifica.png" class="conferencia">
     </div>

     <div class="divisor-datas-item linha2">
        <img src="imagens/fechar.png" class="conferencia">
     </div> 
    <!-- Linha 4 -->
    <div style="width: 83%;float: left;margin-top: 0px ">
        <div style="width: 100%;float: left">
            <div class="senso-item linha4">
                Limpeza
            </div>
            <div class="item_avaliado-item linha4">
                Estão livres de poeira e outras evidências de falta de limpeza regular. A cada término de atividade a bancada é limpa e deixada pronta para uso. Os EPIs e uniformes  estão limpos e completos. 
            </div>
            <div class="status-item linha4">
                <input type="checkbox" name="form2_2" id="form2_2" checked class="checkbox check-form2">
            </div>
            <div class="observacoes-item linha4">
                <textarea style="width: 100%;resize: none;height: 90%"id="form2_2_obs" name="form2_2_obs"></textarea>
            </div>
            <div class="foto-item linha4">
                <label for='form2_2_file'>Anexo &#187;</label>
                <input id='form2_2_file' name="form2_2_file" type='file'>
            </div>
        </div>
     </div>
     <div class="divisor-datas-item margin linha4">
        <img src="imagens/verifica.png" class="conferencia">
     </div>

     <div class="divisor-datas-item linha4">
        <img src="imagens/verifica.png" class="conferencia">
     </div>

     <div class="divisor-datas-item linha4">
        <img src="imagens/fechar.png" class="conferencia">
     </div> 
    <!-- Linha 4 -->
    <div style="width: 83%;float: left;margin-top: 0px ">
        <div style="width: 100%;float: left">
            <div class="senso-item linha4">
                Conservação
            </div>
            <div class="item_avaliado-item linha4">
                Pintura, identificação e posição adequadas. Estão organizadas de forma a facilitar a visualização e circulação no setor. Ao final do expediente os acessórios e ferramentas de trabalho diário são armazenados ordenamente.
            </div>
            <div class="status-item linha4">
                <input type="checkbox" name="form2_3" id="form2_3" checked class="checkbox check-form2">
            </div>
            <div class="observacoes-item linha4">
                <textarea style="width: 100%;resize: none;height: 90%" id="form2_3_obs" name="form2_3_obs"></textarea>
            </div>
            <div class="foto-item linha4">
                <label for='form2_3_file'>Anexo &#187;</label>
                <input id='form2_3_file' name="form2_3_file" type='file'>
            </div>
        </div>
     </div>
     <div class="divisor-datas-item margin linha4">
        <img src="imagens/verifica.png" class="conferencia">
     </div>

     <div class="divisor-datas-item linha4">
        <img src="imagens/verifica.png" class="conferencia">
     </div>

     <div class="divisor-datas-item linha4">
        <img src="imagens/fechar.png" class="conferencia">
     </div> 
     <!-- Linha 4 -->
    <div style="width: 83%;float: left;margin-top: 0px ">
        <div style="width: 100%;float: left">
            <div class="senso-item linha2">
                Disciplina
            </div>
            <div class="item_avaliado-item linha2">
                Os objetos pessoais disponíveis atendem à forma de utilização, acondicionamento, substituição, quantidades, etc. No interior possuem somente ferramentas ou materiais para uso no trabalho. Estão utilizando os EPI's necessários para a tarefa em andamento.
            </div>
            <div class="status-item linha2">
                <input type="checkbox" name="form2_4" id="form2_4" checked disabled class="checkbox check-form2">
            </div>
            <div class="observacoes-item linha2">
                <textarea style="width: 100%;resize: none;height: 90%" id="form2_4_obs" name="form2_4_obs"></textarea>
            </div>
            <div class="foto-item linha4">
                <label for='form2_4_file'>Anexo &#187;</label>
                <input id='form2_4_file' name="form2_4_file" type='file'>
            </div>
        </div>
     </div>
     <div class="divisor-datas-item margin linha2">
        <img src="imagens/verifica.png" class="conferencia">
     </div>

     <div class="divisor-datas-item linha2">
        <img src="imagens/verifica.png" class="conferencia">
     </div>

     <div class="divisor-datas-item linha2">
        <img src="imagens/fechar.png" class="conferencia">
     </div> 
     <div class="descricao_senso divisoria">
        2. Melhoria Contínua.               
    </div>
    <!-- Linha 1 -->
    <div style="width: 83%;float: left;margin-top: 0px ">
        <div style="width: 100%;float: left">
            <div class="senso-item linha1">
                
            </div>
            <div class="item_avaliado-item linha1">
                Todas as NCs registradas em auditorias anteriores foram resolvidas.
            </div>
            <div class="status-item linha1">
                <input type="checkbox" name="form2_5" id="form2_5" checked class="checkbox2 check-form2">
            </div>
            <div class="observacoes-item linha1">
                <textarea style="width: 100%;resize: none;height: 90%" id="form2_5_obs" name="form2_5_obs"></textarea>
            </div>
            <div class="foto-item linha1">
                Nota MC
            </div>
        </div>
    </div>
    <div class="divisor-datas-item margin linha1">
        <img src="imagens/verifica.png" class="conferencia">
    </div>

    <div class="divisor-datas-item linha1">
        <img src="imagens/verifica.png" class="conferencia">
    </div>

    <div class="divisor-datas-item linha1">
        <img src="imagens/fechar.png" class="conferencia">
    </div>
    <!-- Linha 4 -->
    <div style="width: 83%;float: left;margin-top: 0px ">
        <div style="width: 100%;float: left">
            <div class="senso-item linha4">
            </div>
            <div class="item_avaliado-item linha4">

            </div>
            <div class="status-item linha4">
                Nota Geral
            </div>
            <div class="observacoes-item linha4" >
                 <input type="text" class="azul"  name="nota_form2" readonly id="nota_form2">
            </div>
            <div class="foto-item linha4" id="mensagens">
                <input type="text" class="azul"  name="nota_mc_form2" readonly id="nota_mc_form2">
            </div>
        </div>
     </div>
     <div class="botao-datas-item margin linha4">
        <button class="btn-confirmar" id="btn-confirmar-form2"> CONFIRMAR</button>
     </div>
    
    <label style="visibility: hidden;" >oi</label>

   </form>
</div>

<!-- ADM -->
<div id="campo3" class="tabcontent">
    <form action="salvar_formulario3.php" method="post" enctype="multipart/form-data">
	<div style="width: 83%;float: left;height: 20vh;">
		<div style="width:100%;float: left;height: 6vh">
			<div  class="divisor1 negrito centralizado-esquerda">
				Área Administrativa
			</div>
			<div class="divisor2 centralizado">
				<select id="area_adm" name="area_adm" class="select"></select>
			</div>
			<div  class="negrito centralizado divisor3">
				Auditor
			</div>
			<div  id="nome_usuario_form3" class="divisor4 centralizado">
				
			</div>
		</div>

		<div style="width: 100%;float: left;height: 6vh">
			<div  class="divisor1 centralizado-esquerda negrito">
				Responsável 8S
			</div>
			<div  class="divisor2 centralizado">
				<select id="responsavel_form3" name="responsavel_form3" class="select"></select>
			</div>
			<div  class="divisor3 centralizado negrito">
				Data
			</div>
			<div class="centralizado divisor4" id="data_hoje_form3">
			</div>
		</div>

		<div style="width: 100%;float: left;height: 8vh">
			<div class="senso linha1">
	 			Senso
	 		</div>
	 		<div class="item_avaliado">
	 			Item Avaliado
	 		</div>
	 		<div class="status">
	 			Status
	 		</div>
	 		<div class="observacoes">
	 			Observações
	 		</div>
	 		<div class="foto">
	 			Foto
	 		</div>
		</div>

	</div>

	<div class="divisor-datas margin">
	 	Data última &nbsp;&nbsp;auditoria
	</div>

	<div class="divisor-datas">
	 	Data penúltima auditoria
	</div>

	<div class="divisor-datas">
	 	Data antepenultima auditoria
	</div> 
	<!-- Descrição Senso-->
	<div class="descricao_senso">
	 	1. Máquinas e Equipamentos: impressoras, computadores, telefones, fax, dentre outros.
	</div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Utilização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Apenas equipamentos e/ou máquinas necessárias no local de trabalho.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_1_1" id="form3_1_1" checked class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form3_1_1_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form3_1_1_file'>Anexo &#187;</label>
                <input id='form3_1_1_file' name="form3_1_1_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Organização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Equipamentos, cabos e infraestrutura necessária estão agrupados e dispostos de modo  a facilitar os trabalhos de rotina.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_1_2" id="form3_1_2" checked class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form3_1_2_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form3_1_2_file'>Anexo &#187;</label>
                <input id='form3_1_2_file' name="form3_1_2_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Limpeza
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Estão livres de poeira e outras evidências de falta de limpeza regular.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_1_3" id="form3_1_3" checked class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form3_1_3_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form3_1_3_file'>Anexo &#187;</label>
                <input id='form3_1_3_file' name="form3_1_3_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Conservação
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Estão com todas as teclas, tela e monitores intactos e todos os demais itens em bom estado de conservação.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_1_4" id="form3_1_4" checked class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form3_1_4_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form3_1_4_file'>Anexo &#187;</label>
                <input id='form3_1_4_file' name="form3_1_4_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Disciplina
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Os equipamentos em uso atendem aos padrões de qualidade relativos a quantidade, modelo e layout recomendados pelo Programa 8S.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_1_5" id="form3_1_5" disabled checked class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form3_1_5_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form3_1_5_file'>Anexo &#187;</label>
                <input id='form3_1_5_file' name="form3_1_5_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 
	<!-- Descrição Senso-->
	<div class="descricao_senso">
	 	2. Gaveteiros, Armários e Arquivos.
	</div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Utilização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Os materiais armazenados atendem aos critérios de utilização de acordo com a rotina de uso. Não existem materiais armazenados que não são utilizados.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_2_1" id="form3_2_1" checked class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form3_2_1_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form3_2_1_file'>Anexo &#187;</label>
                <input id='form3_2_1_file' name="form3_2_1_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Organização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			As pastas estão guardadas, identificadas e organizadas no interior dos arquivos. Nos gaveteiros todos os objetos e/ou papéis estão armazenados conforme identificação.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_2_2" id="form3_2_2" checked class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form3_2_2_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form3_2_2_file'>Anexo &#187;</label>
                <input id='form3_2_2_file' name="form3_2_2_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Limpeza
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Os armários e arquivos estão isentos de poeiras e apresentam limpeza regular.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_2_3" id="form3_2_3" checked class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form3_2_3_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form3_2_3_file'>Anexo &#187;</label>
                <input id='form3_2_3_file' name="form3_2_3_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Conservação
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			As portas, pés e rodas estão em bom estado de conservação.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_2_4" id="form3_2_4" checked class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form3_2_4_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form3_2_4_file'>Anexo &#187;</label>
                <input id='form3_2_4_file' name="form3_2_4_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Disciplina
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			A organização interna corresponde à identificação sinalizada no móvel.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_2_5" id="form3_2_5" disabled checked class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form3_2_5_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form3_2_5_file'>Anexo &#187;</label>
                <input id='form3_2_5_file' name="form3_2_5_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 
	 <!-- Descrição Senso-->
	<div class="descricao_senso">
	 	3. Pisos.
	</div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Utilização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			A utilização do piso está adequada às necessidades da operação do ambiente.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_3_1" id="form3_3_1" checked class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form3_3_1_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form3_3_1_file'>Anexo &#187;</label>
                <input id='form3_3_1_file' name="form3_3_1_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Organização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Todos os objetos e/ou estruturas estão nos locais sinalizados conforme recomendação para o ambiente.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_3_2" id="form3_3_2" checked class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form3_3_2_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form3_3_2_file'>Anexo &#187;</label>
                <input id='form3_3_2_file' name="form3_3_2_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Limpeza
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Estão livres de poeira e outras evidências de falta de limpeza regular.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_3_3" id="form3_3_3" checked class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form3_3_3_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form3_3_3_file'>Anexo &#187;</label>
                <input id='form3_3_3_file' name="form3_3_3_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Conservação
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			O piso não possui imperfeições que possibilitam a ocorrência de acidentes. A sinalização está visível e legível.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_3_4" id="form3_3_4" checked class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form3_3_4_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form3_3_4_file'>Anexo &#187;</label>
                <input id='form3_3_4_file' name="form3_3_4_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Disciplina
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			As características do piso atendem as necessidades do ambiente e todas as sinalizações são respeitadas.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_3_5" id="form3_3_5" disabled checked class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form3_3_5_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form3_3_5_file'>Anexo &#187;</label>
                <input id='form3_3_5_file' name="form3_3_5_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 
 	<!-- Descrição Senso-->
	<div class="descricao_senso">
	 	4. Instalações Elétricas.
	</div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Utilização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Toda a fiação elétrica esta presa ou embutida conforme padrão das normas técnicas.

	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_4_1" id="form3_4_1" checked class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form3_4_1_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form3_4_1_file'>Anexo &#187;</label>
                <input id='form3_4_1_file' name="form3_4_1_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Organização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			As tomadas e demais itens elétricos possuem tensão identificada.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_4_2" id="form3_4_2" checked class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form3_4_2_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form3_4_2_file'>Anexo &#187;</label>
                <input id='form3_4_2_file' name="form3_4_2_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Limpeza
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			As instalações elétricas, lâmpadas e interruptores estão limpos.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_4_3" id="form3_4_3" checked class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form3_4_3_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form3_4_3_file'>Anexo &#187;</label>
                <input id='form3_4_3_file' name="form3_4_3_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Conservação
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Todos os fios elétricos estão devidamente protegidos evitando a ocorrência de acidentes.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_4_4" id="form3_4_4" checked class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form3_4_4_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form3_4_4_file'>Anexo &#187;</label>
                <input id='form3_4_4_file' name="form3_4_4_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Disciplina
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Apenas as lâmpadas e aparelhos necessários estão energizados no momento.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_4_5" id="form3_4_5" disabled checked class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form3_4_5_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form3_4_5_file'>Anexo &#187;</label>
                <input id='form3_4_5_file' name="form3_4_5_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 
	 <!-- Descrição Senso-->
	<div class="descricao_senso">
	 	5. Cestos de Lixo.
	</div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Utilização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Todos os tipos de resíduos produzidos na área possuem local de descarte adequados.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_5_1" id="form3_5_1" checked class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form3_5_1_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form3_5_1_file'>Anexo &#187;</label>
                <input id='form3_5_1_file' name="form3_5_1_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Organização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Os locais de coleta de resíduos estão sinalizados e posicionados de maneira ordenada. Todos os coletores estão identificados por tipos de resíduos.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_5_2" id="form3_5_2" checked class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%"  name="form3_5_2_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form3_5_2_file'>Anexo &#187;</label>
                <input id='form3_5_2_file' name="form3_5_2_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Limpeza
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Não há lixo depositado ao redor do coletor e estes apresentam limpeza adequada.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_5_3" id="form3_5_3" checked class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%"  name="form3_5_3_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form3_5_3_file'>Anexo &#187;</label>
                <input id='form3_5_3_file' name="form3_5_3_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Conservação
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Os coletores não apresentam danos internos e/ou externos. As tampas abrem de maneira adequada e a identificação está devidamente colada à superfície lateral.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_5_4" id="form3_5_4" checked class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form3_5_4_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form3_5_4_file'>Anexo &#187;</label>
                <input id='form3_5_4_file' name="form3_5_4_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Disciplina
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			A separação dos resíduos segue a sinalização apresentada nos coletores.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_5_5" id="form3_5_5" disabled checked class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form3_5_5_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form3_5_5_file'>Anexo &#187;</label>
                <input id='form3_5_5_file' name="form3_5_5_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 

	 <!-- Descrição Senso-->
	<div class="descricao_senso">
	 	6. Quadros de Aviso.
	</div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Utilização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Atendem à necessidade do setor e estão em local de fácil acesso e visualização.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_6_1" id="form3_6_1" checked class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form3_6_1_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form3_6_1_file'>Anexo &#187;</label>
                <input id='form3_6_1_file' name="form3_6_1_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Organização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Possuem comunicados ordenados e padronizados.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_6_2" id="form3_6_2" checked class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%"  ></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form3_6_2_file'>Anexo &#187;</label>
                <input id='form3_6_2_file' name="form3_6_2_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Limpeza
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Estão livres de poeira e outras evidências de falta de limpeza adequada.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_6_3" id="form3_6_3" checked class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form3_6_3_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form3_6_3_file'>Anexo &#187;</label>
                <input id='form3_6_3_file' name="form3_6_3_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Conservação
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Estão identificados, com logos oficiais atualizadas e apresentam estrutura adequada.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_6_4" id="form3_6_4" checked class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form3_6_4_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form3_6_4_file'>Anexo &#187;</label>
                <input id='form3_6_4_file' name="form3_6_4_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Disciplina
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Todos os comunicados apresentados são de poucos dias atrás.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_6_5" id="form3_6_5" disabled checked class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form3_6_5_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form3_6_5_file'>Anexo &#187;</label>
                <input id='form3_6_5_file' name="form3_6_5_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 
	  <!-- Descrição Senso-->
	<div class="descricao_senso">
	 	7. Sinalização.	
	</div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Utilização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			As placas de sinalização são legíveis e suprem todas as necessidades da área. As faixas de segurança e estacionamento são adequadas à necessidade do ambiente.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_7_1" id="form3_7_1" checked class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form3_7_1_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form3_7_1_file'>Anexo &#187;</label>
                <input id='form3_7_1_file' name="form3_7_1_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 
	<!-- Linha 4 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha4">
	 			Organização
	 		</div>
	 		<div class="item_avaliado-item linha4">
	 			As sinalizações especificas de risco elétrico e/ou segurança estão visíveis e claras para todos. Ex.: Painéis elétricos, caixa de coluna, quadros de distribuição, acessos, salas de controle, equipamentos de combate a incêndio etc.
	 		</div>
	 		<div class="status-item linha4">
	 			<input type="checkbox" name="form3_7_2" id="form3_7_2" checked class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha4">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form3_7_2_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha4">
	 			<label for='form3_7_2_file'>Anexo &#187;</label>
                <input id='form3_7_2_file' name="form3_7_2_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha4">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha4">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha4">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Limpeza
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Estão livres de poeira e outras evidências de falta de limpeza adequada.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_7_3" id="form3_7_3" checked class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form3_7_3_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form3_7_3_file'>Anexo &#187;</label>
                <input id='form3_7_3_file' name="form3_7_3_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 
	<!-- Linha 4 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha4">
	 			Conservação
	 		</div>
	 		<div class="item_avaliado-item linha4">
	 			Possuem pintura adequada e informações atualizadas. As sinalizações temporárias de segurança estão instaladas em posição adequada e visível à todos. Ex.: Proteção de cabos energizados, painéis em manutenção, risco de quedas, desnível, placas e sinais luminosos.
	 		</div>
	 		<div class="status-item linha4">
	 			<input type="checkbox" name="form3_7_4" id="form3_7_4" checked class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha4">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form3_7_4_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha4">
	 			<label for='form3_7_4_file'>Anexo &#187;</label>
                <input id='form3_7_4_file' name="form3_7_4_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha4">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha4">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha4">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Disciplina
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			As recomendações e informações são praticadas e respeitadas por todos na área.
	 		</div>
	 		<div class="status-item linha1">
	 		    <input type="checkbox" name="form3_7_5" id="form3_7_5" disabled checked class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form3_7_5_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form3_7_5_file'>Anexo &#187;</label>
                <input id='form3_7_5_file' name="form3_7_5_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 

	 <!-- Descrição Senso-->
	<div class="descricao_senso">
	 8. Extintores, Caixas de Hidrantes, Mangueiras e Macas			
	</div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Utilização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Estão em posição de acesso adequado e em conformidade com o projeto preventivo de incêndio. Existe sinalização da rota de fuga.
	 		</div>
	 		<div class="status-item linha1">
	 			 <input type="checkbox" name="form3_8_1" id="form3_8_1" checked class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form3_8_1_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form3_8_1_file'>Anexo &#187;</label>
                <input id='form3_8_1_file' name="form3_8_1_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 
	<!-- Linha 4 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha4">
	 			Organização
	 		</div>
	 		<div class="item_avaliado-item linha4">
	 			Estão em local adequado e indicado pelas sinalizações. Não obstruem a passagem de carga e pessoas.
	 		</div>
	 		<div class="status-item linha4">
	 			<input type="checkbox" name="form3_8_2" id="form3_8_2" checked class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha4">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form3_8_2_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha4">
	 			<label for='form3_8_2_file'>Anexo &#187;</label>
                <input id='form3_8_2_file' name="form3_8_2_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha4">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha4">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha4">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Limpeza
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Estão livres de poeira e outras evidências de falta de limpeza adequada.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_8_3" id="form3_8_3" checked class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form3_8_3_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form3_8_3_file'>Anexo &#187;</label>
                <input id='form3_8_3_file' name="form3_8_3_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 
	<!-- Linha 4 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha4">
	 			Conservação
	 		</div>
	 		<div class="item_avaliado-item linha4">
	 			Estão identificados, com as revisões em dia e sem obstrução de acesso.
	 		</div>
	 		<div class="status-item linha4">
	 			<input type="checkbox" name="form3_8_4" id="form3_8_4" checked class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha4">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form3_8_4_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha4">
	 			<label for='form3_8_4_file'>Anexo &#187;</label>
                <input id='form3_8_4_file' name="form3_8_4_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha4">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha4">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha4">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Disciplina
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Possuem manutenção periódica realizada com lacres visíveis e estão com prazo de validade em vigor. Possuem o controle de inspeção visível.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_8_5" id="form3_8_5" disabled checked class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form3_8_5_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form3_8_5_file'>Anexo &#187;</label>
                <input id='form3_8_5_file' name="form3_8_5_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 

	  <!-- Descrição Senso-->
	<div class="descricao_senso">
	 9. Estruturas prediais, cortinas, persianas, divisórias, biombos, sistema de ventilação, layout de área, etc.		
	</div>
	<!-- Linha 4 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha4">
	 			Utilização
	 		</div>
	 		<div class="item_avaliado-item linha4">
	 			Os materiais utilizados no ambiente atendem aos critérios de utilização de acordo com a necessidade do ambiente. Não existem materiais armazenados que não são utilizados na rotina em andamento.
	 		</div>
	 		<div class="status-item linha4">
	 			<input type="checkbox" name="form3_9_1" id="form3_9_1" checked class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha4">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form3_9_1_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha4">
	 			<label for='form3_9_1_file'>Anexo &#187;</label>
                <input id='form3_9_1_file' name="form3_9_1_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha4">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha4">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha4">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Organização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Os materiais estão dispostos organizados de acordo com o layout da área. Ao término da jornada de trabalho ficam organizados e livres de materiais desnecessários ou resíduos.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_9_2" id="form3_9_2" checked class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form3_9_2_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form3_9_2_file'>Anexo &#187;</label>
                <input id='form3_9_2_file' name="form3_9_2_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Limpeza
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Estão isentos de poeiras e apresentando limpeza regular.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_9_3" id="form3_9_3" checked class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form3_9_3_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form3_9_3_file'>Anexo &#187;</label>
                <input id='form3_9_3_file' name="form3_9_3_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 
	<!-- Linha 2 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha2">
	 			Conservação
	 		</div>
	 		<div class="item_avaliado-item linha2">
	 			Todas as estruturas estão com a pintura intacta, os controles do sistema de ventilação apresentam boa aparência, todas as portas estão reguladas com abertura e fechamento suaves, todas as janelas apresentam boas condições de uso, todas as salas estão claramente identificadas, organizadas de forma a facilitar a visualização.
	 		</div>
	 		<div class="status-item linha2">
	 			<input type="checkbox" name="form3_9_4" id="form3_9_4" checked class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha2">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form3_9_4_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha2">
	 			<label for='form3_9_4_file'>Anexo &#187;</label>
                <input id='form3_9_4_file' name="form3_9_4_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha2">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha2">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha2">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 
	<!-- Linha 2 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha2">
	 			Disciplina
	 		</div>
	 		<div class="item_avaliado-item linha2">
	 			O posicionamento mantém espaço adequado de circulação para acesso de forma segura, facilitando a movimentação de pessoas e de materiais. As peças disponíveis visivelmente atendem aos padrões de qualidade relativos à forma de movimentação, substituição, acondicionamento, quantidades, modelo, etc.
	 		</div>
	 		<div class="status-item linha2">
	 			<input type="checkbox" name="form3_9_5" id="form3_9_5" disabled checked class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha2">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form3_9_5_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha2">
	 			<label for='form3_9_5_file'>Anexo &#187;</label>
                <input id='form3_9_5_file' name="form3_9_5_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha2">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha2">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha2">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 
	  <div class="descricao_senso divisoria">
	 	10. Melhoria Contínua.				
	</div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Todas as NCs registradas em auditorias anteriores foram resolvidas.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_10_1" id="form3_10_1" checked class="checkbox2_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form3_10_1_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			
	 		</div>
		</div>
	</div>
	<div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	</div>

	<div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	</div>

	<div class="divisor-datas-item linha1">
		<img src="imagens/fechar.png" class="conferencia">
	</div>
 	<!-- Linha 4 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha4">
	 		</div>
	 		<div class="item_avaliado-item linha4">

	 		</div>
	 		<div class="status-item linha4">
	 			Nota Geral
	 		</div>
	 		<div class="observacoes-item linha4">
	 			<input type="text" class="azul"  name="nota_form3" readonly id="nota_form3">
	 		</div>
	 		<div class="foto-item linha4" id="">
	 			<input type="text" class="azul" name="nota_mc_form3" id="nota_mc_form3" readonly >
	 		</div>
		</div>
	 </div>
	 <div class="botao-datas-item margin linha4">
	 	<button class="btn-confirmar" id="btn-confirmar-form3" >CONFIRMAR</button>
	 </div>
    </form>
  	<label style="visibility: hidden;">ADM</label>
</div>

<!-- adm uso pessoal -->
<div id="campo4" class="tabcontent">
    <form action="salvar_formulario4.php" method="post" enctype="multipart/form-data">
	<div style="width: 83%;float: left;height: 20vh;">
		<div style="width:100%;float: left;height: 6vh">
			<div  class="divisor1 negrito centralizado-esquerda">
			     Colaborador
			</div>
			<div class="divisor2 centralizado">
				<select id="colaborador_form4" name="colaborador_form4" class="select"></select>
			</div>
			<div  class="negrito centralizado divisor3">
				Auditor
			</div>
			<div  id="nome_usuario_form4" class="divisor4 centralizado">
				
			</div>
		</div>

		<div style="width: 100%;float: left;height: 6vh">
			<div  class="divisor1 centralizado-esquerda negrito">
			    Área de Referência
			</div>
			<div  class="divisor2 centralizado">
				<select id="area_referencia_form4" name="area_referencia_form4" class="select"></select>
			</div>
			<div  class="divisor3 centralizado negrito">
				Data
			</div>
			<div class="centralizado divisor4" id="data_hoje_form4">
			</div>
		</div>

		<div style="width: 100%;float: left;height: 8vh">
			<div class="senso linha1">
	 			Senso
	 		</div>
	 		<div class="item_avaliado">
	 			Item Avaliado
	 		</div>
	 		<div class="status">
	 			Status
	 		</div>
	 		<div class="observacoes">
	 			Observações
	 		</div>
	 		<div class="foto">
	 			Foto
	 		</div>
		</div>

	</div>

	<div class="divisor-datas margin">
	 	Data última &nbsp;&nbsp;auditoria
	</div>

	<div class="divisor-datas">
	 	Data penúltima auditoria
	</div>

	<div class="divisor-datas">
	 	Data antepenultima auditoria
	</div> 

	<div class="descricao_senso">
	 	1. Mesa de trabalho, gaveteiros e armários de USO PESSOAL.			
	</div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Utilização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Todos os materiais, objetos e pequenos arquivos armazenados nas gavetas e/ou sobre as mesas atendem aos critérios de utilização de acordo com a rotina de uso.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form4_0" id="form4_0" checked class="checkbox_form4">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form4_0_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form4_0_file'>Anexo &#187;</label>
                <input id='form4_0_file' name="form4_0_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Organização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			As pastas estão devidamente identificadas e armazenadas ordenadamente no interior dos arquivos. Todos os objetos e/ou papéis sobre as mesas estão organizados.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form4_1" id="form4_1" checked class="checkbox_form4">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form4_1_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form4_1_file'>Anexo &#187;</label>
                <input id='form4_1_file' name="form4_1_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 
	 <!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Limpeza
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Estão livres de poeira e outras evidências de falta de limpeza regular.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form4_2" id="form4_2" checked class="checkbox_form4">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form4_2_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form4_2_file'>Anexo &#187;</label>
                <input id='form4_2_file' name="form4_2_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Conservação
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Mesas, cadeiras, armários, computadores, gaveteiros e cabideiros estão em perfeitas condições de uso.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form4_3" id="form4_3" checked class="checkbox_form4">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form4_3_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form4_3_file'>Anexo &#187;</label>
                <input id='form4_3_file' name="form4_3_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 
	<!-- Linha 4 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha4">
	 			Disciplina
	 		</div>
	 		<div class="item_avaliado-item linha4">
	 			Nas mesas em uso os objetos pessoais atendem aos padrões de quantidade recomendados pelo Programa 8S. O crachá de identificação está visível e em bom estado de conservação. A organização interna corresponde a identificação de sinalização presente no setor.
	 		</div>
	 		<div class="status-item linha4">
	 			<input type="checkbox" name="form4_4" id="form4_4" disabled checked class="checkbox_form4">
	 		</div>
	 		<div class="observacoes-item linha4">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form4_4_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha4">
	 			<label for='form4_4_file'>Anexo &#187;</label>
                <input id='form4_4_file' name="form4_4_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha4">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha4">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha4">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div> 

	<div class="descricao_senso divisoria">
	 	2. Melhoria Contínua.				
	</div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Todas as NCs registradas em auditorias anteriores foram resolvidas.
	 		</div>
	 		<div class="status-item linha1">
                <input type="checkbox" name="form4_5" id="form4_5" checked class="checkbox2_form4 check-form2">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form4_5_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			Nota MC
	 		</div>
		</div>
	</div>
	<div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	</div>

	<div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	</div>

	<div class="divisor-datas-item linha1">
		<img src="imagens/fechar.png" class="conferencia">
	</div>
 	<!-- Linha 4 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha4">
	 		</div>
	 		<div class="item_avaliado-item linha4">

	 		</div>
	 		<div class="status-item linha4">
	 			Nota Geral
	 		</div>
	 		<div class="observacoes-item linha4">
	 			  <input type="text" class="azul"  name="nota_form4" id="nota_form4" readonly >
	 		</div>
	 		<div class="foto-item linha4">
	 			<input type="text" class="azul" name="nota_mc_form4" id="nota_mc_form4" readonly >
	 		</div>
		</div>
	 </div>
	 <div class="botao-datas-item margin linha4">
	 	<button class="btn-confirmar" id="btn-confirmar-form4">CONFIRMAR</button>
	 </div>
	</form>


  <h3 style="visibility: hidden;">ADM PESSOAL</h3>
</div>

<!-- areas comuns -->
<div id="campo5" class="tabcontent">
    <form action="salvar_formulario5.php" method="post" enctype="multipart/form-data">
	<div style="width: 83%;float: left;height: 20vh;">
		<div style="width:100%;float: left;height: 6vh">
			<div  class="divisor5 negrito centralizado" >
				Área Comum
			</div>
			
			<div  class="negrito centralizado divisor3">
				Auditor
			</div>
			<div  id="nome_usuario_form5" class="divisor4 centralizado">
				
			</div>
		</div>

		<div style="width: 100%;float: left;height: 6vh">
			<div  class="divisor5 negrito centralizado" >
				<select id="area_comum" name="area_comum" class="select"></select>
			</div>
			<div  class="divisor3 centralizado negrito">
				Data
			</div>
			<div class="centralizado divisor4" id="data_hoje_form5">
			</div>
		</div>

		<div style="width: 100%;float: left;height: 8vh">
			<div class="senso linha1">
	 			Senso
	 		</div>
	 		<div class="item_avaliado">
	 			Item Avaliado
	 		</div>
	 		<div class="status">
	 			Status
	 		</div>
	 		<div class="observacoes">
	 			Observações
	 		</div>
	 		<div class="foto">
	 			Foto
	 		</div>
		</div>

	</div>

	<div class="divisor-datas margin">
	 	Data última &nbsp;&nbsp;auditoria
	</div>

	<div class="divisor-datas">
	 	Data penúltima auditoria
	</div>

	<div class="divisor-datas">
	 	Data antepenultima auditoria
	</div> 

	<div class="descricao_senso">
	 	1. Máquinas e Equipamentos: bebedouros, máquinas de café, suqueiras, frigobares, geladeiras, fornos, fogões, sistema de buffet, tv, computadores, DVD, projetos, telas de projeção, impressoras, telefones, fax, controles de acesso, cartões ponto, dentre outros.		
	</div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Utilização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Apenas equipamentos e/ou máquinas necessárias na área comum.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form5_1_1" id="form5_1_1" checked class="checkbox_form5">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form5_1_1_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form5_1_1_file'>Anexo &#187;</label>
                <input id='form5_1_1_file' name="form5_1_1_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 4 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha4">
	 			Organização
	 		</div>
	 		<div class="item_avaliado-item linha4">
	 			Possuem local apropriado, desobstruído, sinalizado e identificado. Equipamentos, cabos e infra estrutura necessária estão agrupados e dispostos de modo a facilitar os trabalhos de rotina e a circulação de pessoas.
	 		</div>
	 		<div class="status-item linha4">
	 			<input type="checkbox" name="form5_1_2" id="form5_1_2" checked class="checkbox_form5">
	 		</div>
	 		<div class="observacoes-item linha4">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form5_1_2_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha4">
	 			<label for='form5_1_2_file'>Anexo &#187;</label>
                <input id='form5_1_2_file' name="form5_1_2_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha4

	 ">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha4

	 ">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha4

	 ">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Limpeza
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Estão livres de poeira e outras evidências de falta de limpeza regular.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form5_1_3" id="form5_1_3" checked class="checkbox_form5">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form5_1_3_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form5_1_3_file'>Anexo &#187;</label>
                <input id='form5_1_3_file' name="form5_1_3_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Conservação
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Pintura, botões, manoplas, proteções e/ou dispositivos de segurança luminosos e contra vazamentos de gás apropriados. Não possuem vazamentos de água, óleo, etc. 
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form5_1_4" id="form5_1_4" checked class="checkbox_form5">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form5_1_4_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form5_1_4_file'>Anexo &#187;</label>
                <input id='form5_1_4_file' name="form5_1_4_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 4 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha4">
	 			Disciplina
	 		</div>
	 		<div class="item_avaliado-item linha4">
	 			Padrões de qualidade relativos a forma de utilização, acondicionamento, estocagem, movimentação, substituição e quantidades são adequados. Encontram-se no ambiente somente pessoas autorizadas e com uniforme recomendados.
	 		</div>
	 		<div class="status-item linha4">
	 			<input type="checkbox" name="form5_1_5" id="form5_1_5" disabled checked   class="checkbox_form5">
	 		</div>
	 		<div class="observacoes-item linha4">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form5_1_5_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha4">
	 			<label for='form5_1_5_file'>Anexo &#187;</label>
                <input id='form5_1_5_file' name="form5_1_5_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha4">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha4">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha4">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>

	<div class="descricao_senso">
	 	2. Acessórios específicos da área: mesas, móveis, cadeiras, poltronas, bancadas, louças sanitárias, dispenser de papeis, saboneteiras e desodorizadores.				
	</div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Utilização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Apenas materiais e/ou objetos em quantidades adequadas e respeitando os critérios de utilização regular.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form5_2_1" id="form5_2_1" checked class="checkbox_form5">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form5_2_1_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form5_2_1_file'>Anexo &#187;</label>
                <input id='form5_2_1_file' name="form5_2_1_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Organização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Quantidade adequada de acessórios como móveis, bancadas, armários e caçambas para o ambiente. Os locais estão sinalizados e dispostos ordenadamente no ambiente.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form5_2_2" id="form5_2_2" checked class="checkbox_form5">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form5_2_2_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form5_2_2_file'>Anexo &#187;</label>
                <input id='form5_2_2_file' name="form5_2_2_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1

	 ">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1

	 ">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1

	 ">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Limpeza
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Mesas, móveis, cadeiras, poltronas, bancadas, acessórios etc. estão isentos de poeira e apresentam limpeza adequada.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form5_2_3" id="form5_2_3" checked class="checkbox_form5">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form5_2_3_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form5_2_3_file'>Anexo &#187;</label>
                <input id='form5_2_3_file' name="form5_2_3_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Conservação
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Possuem manutenção periódica realizada.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form5_2_4" id="form5_2_4" checked class="checkbox_form5">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form5_2_4_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form5_2_4_file'>Anexo &#187;</label>
                <input id='form5_2_4_file' name="form5_2_4_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 4 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha4">
	 			Disciplina
	 		</div>
	 		<div class="item_avaliado-item linha4">
	 			Os objetos disponíveis visivelmente atendem aos padrões de qualidade relativos a forma de utilização, acondicionamento, substituição, quantidades, etc. A posição dos acessórios segue sinalização presente no ambiente.
	 		</div>
	 		<div class="status-item linha4">
	 			<input type="checkbox" name="form5_2_5" id="form5_2_5" disabled checked class="checkbox_form5">
	 		</div>
	 		<div class="observacoes-item linha4">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form5_2_5_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha4">
	 			<label for='form5_2_5_file'>Anexo &#187;</label>
                <input id='form5_2_5_file' name="form5_2_5_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha4">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha4">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha4">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>

	<div class="descricao_senso">
	 	3.  Armários, prateleiras, organizadores, geladeiras e frigobares.								
	</div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Utilização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Os materiais armazenados atendem os critérios de utilização de acordo com a rotina de uso.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form5_3_1" id="form5_3_1" checked class="checkbox_form5">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form5_3_1_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form5_3_1_file'>Anexo &#187;</label>
                <input id='form5_3_1_file' name="form5_3_1_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 4 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha4">
	 			Organização
	 		</div>
	 		<div class="item_avaliado-item linha4">
	 			Os locais de armazenagem, os recipientes de armazenagem e os acessórios estão identificados, sinalizados e dispostos ordenadamente. Os alimentos estão guardados e dispostos ordenadamente no interior dos armários e/ou refrigeradores.
	 		</div>
	 		<div class="status-item linha4">
	 			<input type="checkbox" name="form5_3_2" id="form5_3_2" checked class="checkbox_form5">
	 		</div>
	 		<div class="observacoes-item linha4">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form5_3_2_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha4">
	 			<label for='form5_3_2_file'>Anexo &#187;</label>
                <input id='form5_3_2_file' name="form5_3_2_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha4">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha4">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha4">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Limpeza
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Os armários, prateleiras, organizadores, geladeiras e frigobares estão isentos de poeiras e apresentando limpeza adequada.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form5_3_3" id="form5_3_3" checked class="checkbox_form5">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form5_3_3_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form5_3_3_file'>Anexo &#187;</label>
                <input id='form5_3_3_file' name="form5_3_3_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Conservação
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Pintura preservada, claramente  identificada, em posição adequada, organizadas de forma a facilitar a visualização e a circulação no setor. Não há vazamento de produtos químicos.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form5_3_4" id="form5_3_4" checked class="checkbox_form5">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form5_3_4_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form5_3_4_file'>Anexo &#187;</label>
                <input id='form5_3_4_file' name="form5_3_4_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 4 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha4">
	 			Disciplina
	 		</div>
	 		<div class="item_avaliado-item linha4">
	 			Organização interna corresponde à identificação de sinalização encontrada. Estão disponíveis reservas de copos, pratos, guardanapos, etc. Caso no ambiente seja permitido consumir alimentos, os perecíveis estão armazenados adequadamente em local refrigerado.
	 		</div>
	 		<div class="status-item linha4">
	 			<input type="checkbox" name="form5_3_5" id="form5_3_5" disabled checked class="checkbox_form5">
	 		</div>
	 		<div class="observacoes-item linha4">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form5_3_5_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha4">
	 			<label for='form5_3_5_file'>Anexo &#187;</label>
                <input id='form5_3_5_file' name="form5_3_5_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha4">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha4">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha4">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>

	<div class="descricao_senso">
	 	4. Pisos, gramados, pavimentação asfáltica, passarela de pedestres, faixa de pedestres e circulação de veículos.							
	</div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Utilização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			A utilização do piso é adequado às necessidades da operação do ambiente.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form5_4_1" id="form5_4_1"  checked class="checkbox_form5">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form5_4_1_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form5_4_1_file'>Anexo &#187;</label>
                <input id='form5_4_1_file' name="form5_4_1_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Organização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Os objetos e/ou outros elementos estão em locais sinalizados de modo que a disposição seja ordenada e recomendada para o ambiente de circulação.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form5_4_2" id="form5_4_2"  checked class="checkbox_form5">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form5_4_2_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form5_4_2_file'>Anexo &#187;</label>
                <input id='form5_4_2_file' name="form5_4_2_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Limpeza
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Estão livres de poeira e outras evidências de falta de limpeza adequada.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form5_4_3" id="form5_4_3"  checked class="checkbox_form5">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form5_4_3_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form5_4_3_file'>Anexo &#187;</label>
                <input id='form5_4_3_file' name="form5_4_3_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Conservação
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			O piso não possui imperfeições que possibilitem a ocorrência de acidentes. Há evidências de manutenção adequada.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form5_4_4" id="form5_4_4"  checked class="checkbox_form5">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form5_4_4_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form5_4_4_file'>Anexo &#187;</label>
                <input id='form5_4_4_file' name="form5_4_4_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Disciplina
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			As características do piso/ambiente atendem às necessidades encontradas e a sinalização recomendada é visível e respeitada.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form5_4_5" id="form5_4_5" disabled checked class="checkbox_form5">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form5_4_5_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form5_4_5_file'>Anexo &#187;</label>
                <input id='form5_4_5_file' name="form5_4_5_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>

	<div class="descricao_senso">
	 	5. Instalações Elétricas.											
	</div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Utilização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Os materiais armazenados atendem os critérios de utilização de acordo com a rotina de uso.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form5_5_1" id="form5_5_1"  checked class="checkbox_form5">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%"  name="form5_5_1_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form5_5_1_file'>Anexo &#187;</label>
                <input id='form5_5_1_file' name="form5_5_1_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha4">
	 			Organização
	 		</div>
	 		<div class="item_avaliado-item linha4">
	 			Os materiais estão dispostos e organizados em acordo com o layout da área. Os materias estão devidamente organizados. Ao término da jornada de trabalho ficam organizados e livres de demais materiais desnecessários ou resíduos.
	 		</div>
	 		<div class="status-item linha4">
	 			<input type="checkbox" name="form5_5_2" id="form5_5_2"  checked class="checkbox_form5">
	 		</div>
	 		<div class="observacoes-item linha4">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form5_5_2_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha4">
	 			<label for='form5_5_2_file'>Anexo &#187;</label>
                <input id='form5_5_2_file' name="form5_5_2_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha4">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha4">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha4">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Limpeza
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Instalações elétricas, lâmpadas e interruptores apresentam limpeza adequada.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form5_5_3" id="form5_5_3"  checked class="checkbox_form5">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form5_5_3_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form5_5_3_file'>Anexo &#187;</label>
                <input id='form5_5_3_file' name="form5_5_3_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Conservação
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Não apresentam evidências de fios expostos que proporcionem a ocorrência de acidentes. As lâmpadas e logos luminosos não apresentam problemas de funcionamento.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form5_5_4" id="form5_5_4"  checked class="checkbox_form5">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form5_5_4_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form5_5_4_file'>Anexo &#187;</label>
                <input id='form5_5_4_file' name="form5_5_4_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Disciplina
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Apenas as lâmpadas e equipamentos necessários estão acesos.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form5_5_5" id="form5_5_5" disabled  checked class="checkbox_form5">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form5_5_5_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form5_5_5_file'>Anexo &#187;</label>
                <input id='form5_5_5_file' name="form5_5_5_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>

	<div class="descricao_senso">
	 	6. Cestos de Lixo.															
	</div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Utilização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Todos os tipos de resíduos produzidos na área possuem local de descarte adequados.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form5_6_1" id="form5_6_1"  checked class="checkbox_form5">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form5_6_1_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form5_6_1_file'>Anexo &#187;</label>
                <input id='form5_6_1_file' name="form5_6_1_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha4">
	 			Organização
	 		</div>
	 		<div class="item_avaliado-item linha4">
	 			Os locais de coleta de resíduos estão sinalizados e posicionados de maneira ordenada. Todos os coletores estão identificados por tipos de resíduos.
	 		</div>
	 		<div class="status-item linha4">
	 			<input type="checkbox" name="form5_6_2" id="form5_6_2"  checked class="checkbox_form5">
	 		</div>
	 		<div class="observacoes-item linha4">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form5_6_2_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha4">
	 			<label for='form5_6_2_file'>Anexo &#187;</label>
                <input id='form5_6_2_file' name="form5_6_2_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha4">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha4">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha4">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Limpeza
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Não há lixo depositado ao redor do coletor e estes apresentam limpeza adequada.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form5_6_3" id="form5_6_3"  checked class="checkbox_form5">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form5_6_3_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form5_6_3_file'>Anexo &#187;</label>
                <input id='form5_6_3_file' name="form5_6_3_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Conservação
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Os coletores não apresentam danos internos e/ou externos. As tampas abrem de maneira adequada e a identificação está devidamente colada à superfície lateral.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form5_6_4" id="form5_6_4"  checked class="checkbox_form5">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form5_6_4_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form5_6_4_file'>Anexo &#187;</label>
                <input id='form5_6_4_file' name="form5_6_4_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Disciplina
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			A separação dos resíduos segue a sinalização apresentada nos coletores.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form5_6_5" id="form5_6_5" disabled checked class="checkbox_form5">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form5_6_5_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form5_6_5_file'>Anexo &#187;</label>
                <input id='form5_6_5_file' name="form5_6_5_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>

	<div class="descricao_senso">
	 	7. Quadros de Aviso.																			
	</div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Utilização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Atendem à necessidade do setor e estão em local de fácil acesso e visualização.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form5_7_1" id="form5_7_1" checked class="checkbox_form5">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form5_7_1_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form5_7_1_file'>Anexo &#187;</label>
                <input id='form5_7_1_file' name="form5_7_1_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha4">
	 			Organização
	 		</div>
	 		<div class="item_avaliado-item linha4">
	 			Possuem comunicados ordenados e padronizados.
	 		</div>
	 		<div class="status-item linha4">
	 			<input type="checkbox" name="form5_7_2" id="form5_7_2" checked class="checkbox_form5">
	 		</div>
	 		<div class="observacoes-item linha4">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form5_7_2_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha4">
	 			<label for='form5_7_2_file'>Anexo &#187;</label>
                <input id='form5_7_2_file' name="form5_7_2_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha4">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha4">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha4">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Limpeza
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Estão livres de poeira e outras evidências de falta de limpeza adequada.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form5_7_3" id="form5_7_3" checked class="checkbox_form5">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form5_7_3_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form5_7_3_file'>Anexo &#187;</label>
                <input id='form5_7_3_file' name="form5_7_3_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Conservação
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Estão identificados, com logos oficiais atualizadas e apresentam estrutura adequada.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form5_7_4" id="form5_7_4" checked class="checkbox_form5">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form5_7_4_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form5_7_4_file'>Anexo &#187;</label>
                <input id='form5_7_4_file' name="form5_7_4_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Disciplina
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Todos os comunicados apresentados são de poucos dias atrás.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form5_7_5" id="form5_7_5" disabled checked class="checkbox_form5">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form5_7_5_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form5_7_5_file'>Anexo &#187;</label>
                <input id='form5_7_5_file' name="form5_7_5_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>

	<div class="descricao_senso">
	 	8. Sinalização.																							
	</div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Utilização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			As placas de sinalização são legíveis e suprem todas as necessidades da área. As faixas de segurança e estacionamento são adequadas à necessidade do ambiente.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form5_8_1" id="form5_8_1"  checked class="checkbox_form5">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form5_8_1_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form5_8_1_file'>Anexo &#187;</label>
                <input id='form5_8_1_file' name="form5_8_1_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha4">
	 			Organização
	 		</div>
	 		<div class="item_avaliado-item linha4">
	 			As sinalizações especificas de risco elétrico e/ou segurança estão visíveis e claras para todos. Ex.: Painéis elétricos, caixa de coluna, quadros de distribuição, acessos, salas de controle, equipamentos de combate a incêndio etc.
	 		</div>
	 		<div class="status-item linha4">
	 			<input type="checkbox" name="form5_8_2" id="form5_8_2"  checked class="checkbox_form5">
	 		</div>
	 		<div class="observacoes-item linha4">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form5_8_2_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha4">
	 			<label for='form5_8_2_file'>Anexo &#187;</label>
                <input id='form5_8_2_file' name="form5_8_2_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha4">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha4">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha4">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Limpeza
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Estão livres de poeira e outras evidências de falta de limpeza adequada.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form5_8_3" id="form5_8_3"  checked class="checkbox_form5">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form5_8_3_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form5_8_3_file'>Anexo &#187;</label>
                <input id='form5_8_3_file' name="form5_8_3_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 2 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha2">
	 			Conservação
	 		</div>
	 		<div class="item_avaliado-item linha2">
	 			Possuem pintura adequada e informações atualizadas. As sinalizações temporárias de segurança estão instaladas em posição adequada e visível à todos. Ex.: Proteção de cabos energizados, painéis em manutenção, risco de quedas, desnível, placas e sinais luminosos.
	 		</div>
	 		<div class="status-item linha2">
	 			<input type="checkbox" name="form5_8_4" id="form5_8_4"  checked class="checkbox_form5">
	 		</div>
	 		<div class="observacoes-item linha2">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form5_8_4_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha2">
	 			<label for='form5_8_4_file'>Anexo &#187;</label>
                <input id='form5_8_4_file' name="form5_8_4_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha2">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha2">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha2">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Disciplina
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			As recomendações e informações são praticadas e respeitadas por todos na área.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form5_8_5" id="form5_8_5" disabled  checked class="checkbox_form5">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form5_8_5_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form5_8_5_file'>Anexo &#187;</label>
                <input id='form5_8_5_file' name="form5_8_5_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
  
  	<div class="descricao_senso">
	 	9. Extintores, Caixas de Hidrantes, Mangueiras, Macas e Rota de Fuga.
	</div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Utilização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Estão em posição de acesso adequado e em conformidade com o projeto preventivo de incêndio. Existe sinalização da rota de fuga.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form5_9_1" id="form5_9_1"  checked class="checkbox_form5">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form5_9_1_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form5_9_1_file'>Anexo &#187;</label>
                <input id='form5_9_1_file' name="form5_9_1_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha4">
	 			Organização
	 		</div>
	 		<div class="item_avaliado-item linha4">
	 			Estão em local adequado e indicado pelas sinalizações. Não obstruem a passagem de carga e pessoas.
	 		</div>
	 		<div class="status-item linha4">
	 			<input type="checkbox" name="form5_9_2" id="form5_9_2"  checked class="checkbox_form5">
	 		</div>
	 		<div class="observacoes-item linha4">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form5_9_2_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha4">
	 			<label for='form5_9_2_file'>Anexo &#187;</label>
                <input id='form5_9_2_file' name="form5_9_2_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha4">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha4">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha4">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Limpeza
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Estão livres de poeira e outras evidências de falta de limpeza adequada.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form5_9_3" id="form5_9_3"  checked class="checkbox_form5">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form5_9_3_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form5_9_3_file'>Anexo &#187;</label>
                <input id='form5_9_3_file' name="form5_9_3_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Conservação
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Estão identificados, com as revisões em dia e sem obstrução de acesso.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form5_9_4" id="form5_9_4"  checked class="checkbox_form5">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form5_9_4_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form5_9_4_file'>Anexo &#187;</label>
                <input id='form5_9_4_file' name="form5_9_4_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Disciplina
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Possuem manutenção periódica realizada com lacres visíveis e estão com prazo de validade em vigor. Possuem o controle de inspeção visível.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form5_9_5" id="form5_9_5" disabled checked class="checkbox_form5">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form5_9_5_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<label for='form5_9_5_file'>Anexo &#187;</label>
                <input id='form5_9_5_file' name="form5_9_5_file" type='file'>
	 		</div>
		</div>
	 </div>
	 <div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	 </div>

	 <div class="divisor-datas-item linha1">
	 	<img src="imagens/fechar.png" class="conferencia">
	 </div>
	 <div class="descricao_senso divisoria" >
	 	10. Melhoria Contínua.				
	</div>
	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Todas as NCs registradas em auditorias anteriores foram resolvidas.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form5_10_1" id="form5_10_1"  checked class="checkbox2_form5">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" name="form5_10_1_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			Nota MC
	 		</div>
		</div>
	</div>
	<div class="divisor-datas-item margin linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	</div>

	<div class="divisor-datas-item linha1">
	 	<img src="imagens/verifica.png" class="conferencia">
	</div>

	<div class="divisor-datas-item linha1">
		<img src="imagens/fechar.png" class="conferencia">
	</div>
 	<!-- Linha 1 -->
	<div style="width: 83%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha4">
	 		</div>
	 		<div class="item_avaliado-item linha4">

	 		</div>
	 		<div class="status-item linha4">
	 			Nota Geral
	 		</div>
	 		<div class="observacoes-item linha4">
	 			  <input type="text" class="azul"  name="nota_form5" readonly id="nota_form5">
	 		</div>
	 		<div class="foto-item linha4">
	 			<input type="text" class="azul"  name="nota_mc_form5" readonly id="nota_mc_form5">
	 		</div>
		</div>
	 </div>
	 <div class="botao-datas-item margin linha4">
	 	<button class="btn-confirmar" id="btn-confirmar-form5" >CONFIRMAR</button>
	 </div>

    </form>
  <h3 style="visibility: hidden;">COMUNS</h3>
</div>

<!-- resultados GERAL-->
<div id="campo6" class="tabcontent">
    <div class="row aligned">
         <div class="col1" style="padding-left: 15px">
            <select class="form-control" id="ano_resultado_geral" onchange="carregar_resultados()">
                <option value="2020">2020</option>
                <option value="2021" selected>2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
            </select>
        </div>
        <div class="col4 aligned">
            <input type="text" name="" id="txt_colaborador" autocomplete="off" class="form-control" onkeyup="carregar_resultados();" placeholder="Colaborador" style="width: 90%;margin-left: 5%;height: 30px"> 
            <input type="text" name="" id="txt_lider" autocomplete="off" class="form-control" onkeyup="carregar_resultados();" placeholder="Líder" style="width: 90%;margin-left: 5%;height: 30px"> 
            <input type="text" name="" id="txt_area_referencia" autocomplete="off" class="form-control" onkeyup="carregar_resultados();" placeholder="Área de Referência" style="width: 90%;margin-left: 5%;height: 30px"> 
        </div>
        <div class="col6" style="display: flex;flex-direction: row;align-items: center;justify-content: flex-end; font-size: 14px; color: rgb(0,97,254);font-weight: bold;text-align: right;">
            
            Nota Máxima Por Trimestre= 100% |
            Meta 8S ADM - 97% |
            Meta 8S Fábrica - 95%
            
            
            
        </div>
        <div class="col2 aligned-right">
           <!--  <button class="btn btn-primary" onclick="atualizar_dados()" style="margin-right: 15px;height: 40px">Atualizar Dados</button> -->
            <button class="btn btn-primary" onclick="download()">Extrair Excel</button>
        </div>
        
    </div>
    <table id="example" class="table table-striped table-bordered" >
        <thead>
            <tr style="width: 100%">
                <th style="width: 25%;float: left;text-align: center;font-size: 15px">Colaborador</th>
                <th style="width: 25%;float: left;text-align: center;font-size: 15px">Líder</th>
                <th style="width: 25%;float: left;text-align: center;font-size: 15px">Área de Referência</th>
                <th style="width: 10%;float: left;text-align: center;font-size: 15px">1º Tri % </th>
                <th style="width: 10%;float: left;text-align: center;font-size: 15px">2º Tri %</th>
                <th style="width: 10%;float: left;text-align: center;font-size: 15px">3º Tri %</th>
                <th style="width: 10%;float: left;text-align: center;font-size: 15px">4º Tri %</th>
                <th style="width: 10%;float: left;text-align: center;font-size: 15px">Anual %</th>
            </tr>
        </thead>
        <tbody id="table">         
        </tbody>
    </table>
    <label style="visibility: hidden;">oii</label>
</div>

<!-- resultados ADM-->
<div id="campo7" class="tabcontent">
    <div class="row aligned">
        <div class="col1" style="padding-left: 15px">
            <select class="form-control" id="ano_resultado_adm">
                <option value="2020">2020</option>
                <option value="2021" selected>2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
            </select>
        </div>
        <div class="col2 aligned">
            <input type="text" id="filtro_area"  class="form-control" autocomplete="off" onkeyup="carregar_resultado_areas()" placeholder="Pesquise a Área" style="width: 90%;margin-left: 5%;height: 30px"> 
        </div>
        <div class="col7 aligned-right" style="align-items: center; font-size: 14px; font-weight: bold;color: rgb(0,97,254);">
            Nota Máxima Por Trimestre= 90 |
            Meta 8S ADM - 97% |
            Meta 8S Fábrica - 95%
        </div>
        <div class="col2 aligned-right">
           <!--  <button class="btn btn-primary" onclick="atualizar_dados_adm()" style="margin-right: 15px">Atualizar Dados</button> -->
            <button class="btn btn-primary" onclick="download_campo7()">Extrair Excel</button>
        </div>
        
    </div>
    <table id="example" class="table table-striped table-bordered" >
        <thead>
            <tr style="width: 100%">
                <th style="width: 25%;float: left;text-align: center;font-size: 15px">Áreas</th>
                <th style="width: 25%;float: left;text-align: center;font-size: 15px">Responsáveis</th>
                <th style="width: 10%;float: left;text-align: center;font-size: 15px">1º Tri</th>
                <th style="width: 10%;float: left;text-align: center;font-size: 15px">2º Tri</th>
                <th style="width: 10%;float: left;text-align: center;font-size: 15px">3º Tri</th>
                <th style="width: 10%;float: left;text-align: center;font-size: 15px">4º Tri</th>
                <th style="width: 10%;float: left;text-align: center;font-size: 15px">Anual</th>
            </tr>
        </thead>
        <tbody id="table-areas">         
        </tbody>
    </table>
    <label style="visibility: hidden;">oii</label>
</div>

<!-- resultados INDUSTRIAL-->
<div id="campo8" class="tabcontent">
    <div class="row aligned">
        <div class="col1" style="padding-left: 15px">
            <select class="form-control" id="ano_resultado_industrial">
                <option value="2020">2020</option>
                <option value="2021" selected>2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
            </select>
        </div>
        <div class="col2 aligned">
            <input type="text" id="filtro_area_industrial" autocomplete="off"  class="form-control" onkeyup="carregar_resultado_industrial()" placeholder="Pesquise a Área" style="width: 90%;margin-left: 5%;height: 30px"> 
        </div>
        <div class="col7" style="display: flex;flex-direction: row;align-items: center;justify-content: flex-end; font-size: 14px; color: rgb(0,97,254);font-weight: bold">
            Nota Máxima Por Trimestre= 90 |
            Meta 8S ADM - 97% |
            Meta 8S Fábrica - 95%
        </div>
        <div class="col2 aligned-right">
            <!-- <button class="btn btn-primary" onclick="atualizar_dados()" style="margin-right: 15px">Atualizar Dados</button> -->
            <button class="btn btn-primary" onclick="download_campo8()">Extrair Excel</button>
        </div>
        
    </div>
    <table id="example" class="table table-striped table-bordered" >
        <thead>
            <tr style="width: 100%">
                <th style="width: 25%;float: left;text-align: center;font-size: 15px">Áreas</th>
                <th style="width: 25%;float: left;text-align: center;font-size: 15px">Responsáveis</th>
                <th style="width: 10%;float: left;text-align: center;font-size: 15px">1º Tri</th>
                <th style="width: 10%;float: left;text-align: center;font-size: 15px">2º Tri</th>
                <th style="width: 10%;float: left;text-align: center;font-size: 15px">3º Tri</th>
                <th style="width: 10%;float: left;text-align: center;font-size: 15px">4º Tri</th>
                <th style="width: 10%;float: left;text-align: center;font-size: 15px">Anual</th>
            </tr>
        </thead>
        <tbody id="table-industrial">         
        </tbody>
    </table>
    <label style="visibility: hidden;">oii</label>
</div>

<!-- resultados ÁREAS COMUNS-->
<div id="campo9" class="tabcontent">
    <div class="row aligned">
         <div class="col1" style="padding-left: 15px">
            <select class="form-control" id="ano_resultado_comum">
                <option value="2020">2020</option>
                <option value="2021" selected>2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
            </select>
        </div>
        <div class="col2 aligned">
            <input type="text" id="filtro_area_comum" autocomplete="off"  class="form-control" onkeyup="carregar_resultado_comum()" placeholder="Pesquise a Área" style="width: 90%;margin-left: 5%;height: 30px"> 
        </div>
        <div class="col7 aligned-right" style="align-items: center; font-size: 14px; font-weight: bold;color: rgb(0,97,254);">
            Nota Máxima Por Trimestre= 90 |
            Meta 8S ADM - 97% |
            Meta 8S Fábrica - 95%
        </div>
        <div class="col2 aligned-right">
            <!-- <button class="btn btn-primary" onclick="atualizar_dados()" style="margin-right: 15px">Atualizar Dados</button> -->
            <button class="btn btn-primary" onclick="download_campo9()">Extrair Excel</button>
        </div>
        
    </div>
    <table id="example" class="table table-striped table-bordered" >
        <thead>
            <tr style="width: 100%">
                <th style="width: 25%;float: left;text-align: center;font-size: 15px">Áreas</th>
                <th style="width: 25%;float: left;text-align: center;font-size: 15px">Responsáveis</th>
                <th style="width: 10%;float: left;text-align: center;font-size: 15px">1º Tri </th>
                <th style="width: 10%;float: left;text-align: center;font-size: 15px">2º Tri </th>
                <th style="width: 10%;float: left;text-align: center;font-size: 15px">3º Tri </th>
                <th style="width: 10%;float: left;text-align: center;font-size: 15px">4º Tri </th>
                <th style="width: 10%;float: left;text-align: center;font-size: 15px">Anual </th>
            </tr>
        </thead>
        <tbody id="table-comum">         
        </tbody>
    </table>
    <label style="visibility: hidden;">oii</label>
</div>

<!-- resultados INDIVIDUAIS ADM-->
<div id="campo10" class="tabcontent">
    <div class="row aligned">
        <div class="col1" style="padding-left: 15px">
            <select class="form-control" id="ano_resultado_adm_ind">
                <option value="2020">2020</option>
                <option value="2021" selected>2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
            </select>
        </div>
        <div class="col2 aligned">
            <input type="text" id="filtro_individuais_adm"  class="form-control" onkeyup="carregar_individuais_adm()" placeholder="Pesquise o Colaborador" style="width: 90%;margin-left: 5%;height: 30px"> 
        </div>
        <div class="col7 aligned-right" style="align-items: center; font-size: 14px; font-weight: bold;color: rgb(0,97,254);">
             Nota Máxima Por Trimestre= 10 |
            Meta 8S ADM - 97% |
            Meta 8S Fábrica - 95%
        </div>
        <div class="col2 aligned-right">
            <!-- <button class="btn btn-primary" onclick="atualizar_dados()" style="margin-right: 15px">Atualizar Dados</button> -->
            <button class="btn btn-primary" onclick="download_campo10()">Extrair Excel</button>
        </div>
        
    </div>
    <table id="example" class="table table-striped table-bordered" >
        <thead>
            <tr style="width: 100%">
                <th style="width: 25%;float: left;text-align: center;font-size: 15px">Colaborador</th>
                <th style="width: 25%;float: left;text-align: center;font-size: 15px">Líder</th>
                <th style="width: 10%;float: left;text-align: center;font-size: 15px">1º Tri </th>
                <th style="width: 10%;float: left;text-align: center;font-size: 15px">2º Tri </th>
                <th style="width: 10%;float: left;text-align: center;font-size: 15px">3º Tri </th>
                <th style="width: 10%;float: left;text-align: center;font-size: 15px">4º Tri </th>
                <th style="width: 10%;float: left;text-align: center;font-size: 15px">Anual </th>
            </tr>
        </thead>
        <tbody id="table-resultados-individuais-adm">         
        </tbody>
    </table>
    <label style="visibility: hidden;">oii</label>
</div>

<!-- resultados INDIVIDUAIS INDUSTRIAL-->
<div id="campo11" class="tabcontent">
    <div class="row aligned">
         <div class="col1" style="padding-left: 15px">
            <select class="form-control" id="ano_resultado_ind_ind">
                <option value="2020">2020</option>
                <option value="2021" selected>2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
            </select>
        </div>
        <div class="col2 aligned">
            <input type="text" id="filtro_individuais_industrial"  class="form-control" onkeyup="carregar_individuais_industrial()" placeholder="Pesquise o Colaborador" style="width: 90%;margin-left: 5%;height: 30px"> 
        </div>
        <div class="col7 aligned-right" style="align-items: center; font-size: 14px; font-weight: bold;color: rgb(0,97,254);">
            Nota Máxima Por Trimestre = 10 |
            Meta 8S ADM - 97% |
            Meta 8S Fábrica - 95%
        </div>
        <div class="col2 aligned-right">
            <!-- <button class="btn btn-primary" onclick="atualizar_dados_resultados_individuais()" style="margin-right: 15px">Atualizar Dados</button> -->
            <button class="btn btn-primary" onclick="download_campo11()">Extrair Excel</button>
        </div>
        
    </div>
    <table id="example" class="table table-striped table-bordered" >
        <thead>
            <tr style="width: 100%">
                <th style="width: 25%;float: left;text-align: center;font-size: 15px">Áreas</th>
                <th style="width: 25%;float: left;text-align: center;font-size: 15px">Responsáveis</th>
                <th style="width: 10%;float: left;text-align: center;font-size: 15px">1º Tr</th>
                <th style="width: 10%;float: left;text-align: center;font-size: 15px">2º Tri</th>
                <th style="width: 10%;float: left;text-align: center;font-size: 15px">3º Tri</th>
                <th style="width: 10%;float: left;text-align: center;font-size: 15px">4º Tri</th>
                <th style="width: 10%;float: left;text-align: center;font-size: 15px">Anual</th>
            </tr>
        </thead>
        <tbody id="table-resultados-individuais-industrial">         
        </tbody>
    </table>
    <label style="visibility: hidden;">oii</label>
</div>


<div id="campo12" class="tabcontent" style="height: 90vh">
    <div class="row">
        <div class="col2" style="margin-left: 15px">
            <select class="form-control" id="filtro_auditorias">
                <option selected disabled value="">Selecione</option>
                <option value="AreaComum">Avaliação de Áreas Comuns</option>
                <option value="AreaIndustrial">Avaliação de Áreas Industrial</option>
                <option value="AreaADM">Avaliação de Áreas ADM</option>
                <option value="IndividualAdm">Avaliação Individual ADM</option>
                <option value="IndividualIndustrial">Avaliação Individual Industrial</option>
            </select>
        </div>
        <div class="col2" style="margin-left: 15px">
            <input type="date" class="form-control" id="data_de" name="">
        </div>
        <div class="col2" style="margin-left: 15px">
            <input type="date"  class="form-control" id="data_ate" name="">
        </div>
        <div class="col2" style="margin-left: 15px">
            <select class="form-control" id="visualizacao">
                <option value="" disabled selected>Selecione</option>
                <option value="Todos">Todos</option>
                <option value="Pendentes">Apenas Pendentes</option>
                <option value="Avaliados">Apenas Avaliadas</option>
            </select>
        </div>
    </div>
    <div class="row" style="margin-top: 30px;margin-left: 5px">
         <table class="table table-striped table-bordered" >
            <thead>
                <tr style="width: 100%;background-color: rgb(0,96,255);color: white;font-weight: bold">
                    <th style="width: 75%;float: left;text-align: center;font-size: 15px" id="name_td">Área</th>
                    <th style="width: 25%;float: left;text-align: center;font-size: 15px">Avaliado</th>
                </tr>
            </thead>
            <tbody id="controle_auditorias">         
            </tbody>
    </table>
    </div>
</div>

<div id="campo13" class="tabcontent" style="height: 90vh">
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Relatório Áreas</a></li>
        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Relatório Colaboradores</a></li>
    </ul>
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="home">
            <table class="table table-striped table-bordered" style="margin-top: 30px" >
                <thead>
                    <tr style="width: 100%;background-color: rgb(0,96,255);color: white;font-weight: bold">
                        <th style="width: 75%;float: left;text-align: center;font-size: 15px;text-align: left;" >Áreas</th>
                        <th style="width: 25%;float: left;text-align: center;font-size: 15px">Relatório</th>
                        <th style="width: 25%;float: left;text-align: center;font-size: 15px">Relatório</th>
                        <th style="width: 25%;float: left;text-align: center;font-size: 15px">Relatório</th>
                        <th style="width: 25%;float: left;text-align: center;font-size: 15px">Relatório</th>
                    </tr>
                    <tr style="width: 100%;background-color: rgb(0,96,255);color: white;font-weight: bold">
                        <th style="width: 75%;float: left;text-align: center;font-size: 15px;text-align: left;">Líder</th>
                        <th style="width: 25%;float: left;text-align: center;font-size: 15px">1° Trimestre</th>
                        <th style="width: 25%;float: left;text-align: center;font-size: 15px">2° Trimestre</th>
                        <th style="width: 25%;float: left;text-align: center;font-size: 15px">3° Trimestre</th>
                        <th style="width: 25%;float: left;text-align: center;font-size: 15px">4° Trimestre</th>
                    </tr>
                </thead>
                <tbody id="tabela_relatorio_areas">         
                </tbody>
            </table>
        </div>
       <div role="tabpanel" class="tab-pane" id="profile">
             <table class="table table-striped table-bordered" style="margin-top: 30px" >
                <thead>
                    <tr style="width: 100%;background-color: rgb(0,96,255);color: white;font-weight: bold">
                        <th style="width: 75%;float: left;text-align: center;font-size: 15px;text-align: left;">Áreas</th>
                        <th style="width: 25%;float: left;text-align: center;font-size: 15px">Relatório</th>
                        <th style="width: 25%;float: left;text-align: center;font-size: 15px">Relatório</th>
                        <th style="width: 25%;float: left;text-align: center;font-size: 15px">Relatório</th>
                        <th style="width: 25%;float: left;text-align: center;font-size: 15px">Relatório</th>
                    </tr>
                    <tr style="width: 100%;background-color: rgb(0,96,255);color: white;font-weight: bold">
                        <th style="width: 75%;float: left;text-align: center;font-size: 15px;text-align: left;">Líder</th>
                        <th style="width: 25%;float: left;text-align: center;font-size: 15px">1° Trimestre</th>
                        <th style="width: 25%;float: left;text-align: center;font-size: 15px">2° Trimestre</th>
                        <th style="width: 25%;float: left;text-align: center;font-size: 15px">3° Trimestre</th>
                        <th style="width: 25%;float: left;text-align: center;font-size: 15px">4° Trimestre</th>
                    </tr>
                </thead>
                <tbody id="tabela_relatorio_colaboradores">         
                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- <div id="campo13" class="tabcontent" style="height: 90vh">
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Relatório Áreas</a></li>
        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Relatório Colaboradores</a></li>
    </ul>
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="home">
            <table class="table table-striped table-bordered" style="margin-top: 30px" >
                <thead>
                    <tr style="width: 100%;background-color: rgb(0,96,255);color: white;font-weight: bold">
                        <th style="width: 75%;float: left;text-align: center;font-size: 15px" >Áreas</th>
                        <th style="width: 25%;float: left;text-align: center;font-size: 15px">Relatório</th>
                        <th style="width: 25%;float: left;text-align: center;font-size: 15px">Relatório</th>
                        <th style="width: 25%;float: left;text-align: center;font-size: 15px">Relatório</th>
                        <th style="width: 25%;float: left;text-align: center;font-size: 15px">Relatório</th>
                    </tr>
                    <tr style="width: 100%;background-color: rgb(0,96,255);color: white;font-weight: bold">
                        <th style="width: 75%;float: left;text-align: center;font-size: 15px">Líder</th>
                        <th style="width: 25%;float: left;text-align: center;font-size: 15px">1° Trimestre</th>
                        <th style="width: 25%;float: left;text-align: center;font-size: 15px">2° Trimestre</th>
                        <th style="width: 25%;float: left;text-align: center;font-size: 15px">3° Trimestre</th>
                        <th style="width: 25%;float: left;text-align: center;font-size: 15px">4° Trimestre</th>
                    </tr>
                </thead>
                <tbody id="tabela_relatorio_areas">         
                </tbody>
            </table>
        </div>
       <div role="tabpanel" class="tab-pane" id="profile">
            profile
        </div>
</div>

 -->
<!-- MODAL -->
<div class="modal" id="modal_informacoes">
    <div class="modal-content">
        <span class="close" onclick="document.getElementById('modal_informacoes').style.display='none'">&times;</span>
        <div id="numero_trimestre" style="float: left;text-align: center;width: 100%;font-size: 20px"></div>
        <div class="row">
            <table id="example" class="table table-striped table-bordered" >
                <thead>
                    <tr class="tr-table">
                        <th class="cabecalho2">Fontes das Notas</th>
                        <th class="cabecalho">1º Tri</th>
                        <th class="cabecalho">2º Tri</th>
                        <th class="cabecalho">3º Tri</th>
                        <th class="cabecalho">4º Tri</th>
                        <th class="cabecalho">Anual</th>
                    </tr>
                </thead>
                <tbody id="table_infos" style="overflow: scroll;height: 100px">
                    <tr class="tr-table">
                        <td class="td2">Nota Área</td>
                        <td class="td1" id="nota_area_1_tri"></td>
                        <td class="td1" id="nota_area_2_tri"></td>
                        <td class="td1" id="nota_area_3_tri"></td>
                        <td class="td1" id="nota_area_4_tri"></td>
                        <td class="td1" id="nota_area_anual"></td>
                    </tr> 
                    <tr class="tr-table">
                        <td class="td2">Nota MC Área</td>
                        <td class="td1" id="nota_mc_area_1_tri"></td>
                        <td class="td1" id="nota_mc_area_2_tri"></td>
                        <td class="td1" id="nota_mc_area_3_tri"></td>
                        <td class="td1" id="nota_mc_area_4_tri"></td>
                        <td class="td1" id="nota_mc_area_anual"></td>
                    </tr>
					<tr class="tr-table">
                        <td class="td2">Nota Área Compartilhada</td>
                        <td class="td1" id="nota_grupo_1_tri"></td>
                        <td class="td1" id="nota_grupo_2_tri"></td>
                        <td class="td1" id="nota_grupo_3_tri"></td>
                        <td class="td1" id="nota_grupo_4_tri"></td>
                        <td class="td1" id="nota_grupo_anual"></td>
                    </tr> 
                    <tr class="tr-table">
                        <td class="td2">Nota MC Área Compartilhada</td>
                        <td class="td1" id="nota_mc_grupo_1_tri"></td>
                        <td class="td1" id="nota_mc_grupo_2_tri"></td>
                        <td class="td1" id="nota_mc_grupo_3_tri"></td>
                        <td class="td1" id="nota_mc_grupo_4_tri"></td>
                        <td class="td1" id="nota_mc_grupo_anual"></td>
                    </tr>
                    <tr class="tr-table">
                        <td class="td2">Nota Individual</td>
                        <td class="td1" id="nota_individual_1_tri">0</td>
                        <td class="td1" id="nota_individual_2_tri">0</td>
                        <td class="td1" id="nota_individual_3_tri">0</td>
                        <td class="td1" id="nota_individual_4_tri">0</td>
                        <td class="td1" id="nota_individual_anual">0</td>
                    </tr> 
                    <tr class="tr-table">
                        <td class="td2">Nota MC Individual</td>
                        <td class="td1" id="nota_mc_individual_1_tri"></td>
                        <td class="td1" id="nota_mc_individual_2_tri"></td>
                        <td class="td1" id="nota_mc_individual_3_tri"></td>
                        <td class="td1" id="nota_mc_individual_4_tri"></td>
                        <td class="td1" id="nota_mc_individual_anual"></td>
                    </tr>
                    <tr class="tr-table">
                        <td class="td2">Nota Áreas Comuns</td>
                        <td class="td1" id="nota_area_comum_1_tri"></td>
                        <td class="td1" id="nota_area_comum_2_tri"></td>
                        <td class="td1" id="nota_area_comum_3_tri"></td>
                        <td class="td1" id="nota_area_comum_4_tri"></td>
                        <td class="td1" id="nota_area_comum_anual"></td>
                    </tr>
                    <tr class="tr-table">
                        <td class="td2">Nota MC Áreas Comuns</td>
                        <td class="td1" id="nota_mc_area_comum_1_tri"></td>
                        <td class="td1" id="nota_mc_area_comum_2_tri"></td>
                        <td class="td1" id="nota_mc_area_comum_3_tri"></td>
                        <td class="td1" id="nota_mc_area_comum_4_tri"></td>
                        <td class="td1" id="nota_mc_area_comum_anual"></td>
                    </tr>
                    <tr class="tr-table negrito">
                        <td class="td2">Nota Geral</td>
                        <td class="td1" id="nota_geral_1_tri"></td>
                        <td class="td1" id="nota_geral_2_tri"></td>
                        <td class="td1" id="nota_geral_3_tri"></td>
                        <td class="td1" id="nota_geral_4_tri"></td>
                        <td class="td1" id="nota_geral_anual"></td>
                    </tr>
                </tbody>
            </table>
            <img src="imagens/formula2.png" style="width: 100%">
        </div>
    </div>
</div>

<!-- MODAL ADM-->
<div class="modal" id="modal_adm">
    <div class="modal-content">
        <span class="close" onclick="document.getElementById('modal_adm').style.display='none'">&times;</span>
        <div id="numero_trimestre" style="float: left;text-align: center;width: 100%;font-size: 20px"></div>
        <div class="row">
            <table id="example" class="table table-striped table-bordered" >
                <thead>
                    <tr class="tr-table">
                        <th style="width: 30%;float: left;text-align: center;">Formulário</th>
                        <th style="width: 20%;float: left;text-align: center;">Data</th>
                        <th style="width: 15%;float: left;text-align: center;">Nota Form</th>
                        <th style="width: 15%;float: left;text-align: center;">Nota MC</th>
                        <th style="width: 20%;float: left;text-align: center;">Acesso</th>
                    </tr>
                </thead>
                <tbody id="table_modal_adm" style="overflow: scroll;height: 100px">
                    
                </tbody>
            </table>
            
        </div>
    </div>
</div>

<!-- MODAL PARA ESCREVER OBS -->
<div class="modal-texto" id="modal_texto">
    <div class="modal-content-texto">
        <span class="close" onclick="document.getElementById('modal_texto').style.display='none'">&times;</span>
        <div style="float: left;text-align: center;width: 100%;font-size: 20px">Adicionar Observação</div>
        <div class="row">
            <textarea class="form-control" id="campo_texto" cols="4" rows="5" style="font-size: 30px"></textarea>
        </div>
        <div class="row">
            <button class="btn btn-primary" onclick="salvar_informacao()">SALVAR</button>
        </div>
    </div>
</div>

<!-- MODAL INDUSTRIAL-->
<div class="modal" id="modal_industrial">
    <div class="modal-content">
        <span class="close" onclick="document.getElementById('modal_industrial').style.display='none'">&times;</span>
        <div id="numero_trimestre" style="float: left;text-align: center;width: 100%;font-size: 20px"></div>
        <div class="row">
            <table id="example" class="table table-striped table-bordered" >
                <thead>
                    <tr class="tr-table">
                        <th style="width: 30%;float: left;text-align: center;">Formulário</th>
                        <th style="width: 20%;float: left;text-align: center;">Data</th>
                        <th style="width: 15%;float: left;text-align: center;">Nota Form</th>
                        <th style="width: 15%;float: left;text-align: center;">Nota MC</th>
                        <th style="width: 20%;float: left;text-align: center;">Acesso</th>
                    </tr>
                </thead>
                <tbody id="table_modal_industrial" style="overflow: scroll;height: 100px">
                    
                </tbody>
            </table>
            
        </div>
    </div>
</div>

<!-- MODAL AREAS COMUNS-->
<div class="modal" id="modal_area_comum">
    <div class="modal-content">
        <span class="close" onclick="document.getElementById('modal_area_comum').style.display='none'">&times;</span>
        <div id="numero_trimestre" style="float: left;text-align: center;width: 100%;font-size: 20px"></div>
        <div class="row">
            <table id="example" class="table table-striped table-bordered" >
                <thead>
                    <tr class="tr-table">
                        <th style="width: 30%;float: left;text-align: center;">Formulário</th>
                        <th style="width: 20%;float: left;text-align: center;">Data</th>
                        <th style="width: 15%;float: left;text-align: center;">Nota Form</th>
                        <th style="width: 15%;float: left;text-align: center;">Nota MC</th>
                        <th style="width: 20%;float: left;text-align: center;">Acesso</th>
                    </tr>
                </thead>
                <tbody id="table_modal_area_comum" style="overflow: scroll;height: 100px">
                    
                </tbody>
            </table>
            
        </div>
    </div>
</div>

<!-- MODAL INDIVIDUAL ADM-->
<div class="modal" id="modal_individual_adm">
    <div class="modal-content">
        <span class="close" onclick="document.getElementById('modal_individual_adm').style.display='none'">&times;</span>
        <div id="numero_trimestre" style="float: left;text-align: center;width: 100%;font-size: 20px"></div>
        <div class="row">
            <table id="example" class="table table-striped table-bordered" >
                <thead>
                    <tr class="tr-table">
                        <th style="width: 30%;float: left;text-align: center;">Formulário</th>
                        <th style="width: 20%;float: left;text-align: center;">Data</th>
                        <th style="width: 15%;float: left;text-align: center;">Nota Form</th>
                        <th style="width: 15%;float: left;text-align: center;">Nota MC</th>
                        <th style="width: 20%;float: left;text-align: center;">Acesso</th>
                    </tr>
                </thead>
                <tbody id="table_modal_individual_adm" style="overflow: scroll;height: 100px">
                    
                </tbody>
            </table>
            
        </div>
    </div>
</div>

<!-- MODAL INDIVIDUAL INDUSTRIAL-->
<div class="modal" id="modal_individual_industrial">
    <div class="modal-content">
        <span class="close" onclick="document.getElementById('modal_individual_industrial').style.display='none'">&times;</span>
        <div id="numero_trimestre" style="float: left;text-align: center;width: 100%;font-size: 20px"></div>
        <div class="row">
            <table id="example" class="table table-striped table-bordered" >
                <thead>
                    <tr class="tr-table">
                        <th style="width: 30%;float: left;text-align: center;">Formulário</th>
                        <th style="width: 20%;float: left;text-align: center;">Data</th>
                        <th style="width: 15%;float: left;text-align: center;">Nota Form</th>
                        <th style="width: 15%;float: left;text-align: center;">Nota MC</th>
                        <th style="width: 20%;float: left;text-align: center;">Acesso</th>
                    </tr>
                </thead>
                <tbody id="table_modal_individual_industrial" style="overflow: scroll;height: 100px">
                    
                </tbody>
            </table>
            
        </div>
    </div>
</div>


<script>
	//DEFINIÇÃO DE VARIÁVEIS
	var usuario = "";
	var area_industrial = "";
	var area_adm = "";
	var data_atual = "<?php echo date('d/m/Y')?>";
	var responsavel_form1 = "";
	var responsavel_form3 = "";
	var area_referencia_form2 = "";
	var area_referencia_form4 = "";
	var colaborador_form4 = "";
	var colaborador_form2 = "";
    var numero_NC_form2 = 0;
    var numero_NC_form4 = 0;
    var numero_NC_form1 = 0;
    var numero_NC_form3 = 0;
    var numero_NC_form5 = 0;
    var nota_form2 = 0;
    var nota_form4 = 0;
    var nota_form1 = 0;
    var nota_form3 = 0;
    var nota_form5 = 0;
    var id_tabela = 0;
   
	$("#nota_form1").val("90");
	$("#nota_form2").val("10");
	$("#nota_form3").val("90");
	$("#nota_form4").val("10");
	$("#nota_form5").val("90");
    $("#nota_mc_form2").val("10");
    $("#nota_mc_form1").val("10");
    $("#nota_mc_form4").val("10");
    $("#nota_mc_form3").val("10");
    $("#nota_mc_form5").val("10");

	var vetor_checked_form2 = ["","","","","",""];

    function download(){  
         window.open('download_excel.php','_blank');
    }
    function download_campo7(){  
         window.open('download_excel_campo7.php','_blank');
    }
    function download_campo8(){  
         window.open('download_excel_campo8.php','_blank');
    }
    function download_campo9(){  
         window.open('download_excel_campo9.php','_blank');
    }
    function download_campo10(){  
         window.open('download_excel_campo10.php','_blank');
    }
    function download_campo11(){  
         window.open('download_excel_campo11.php','_blank');
    }

    function atualizar_dados(){
        window.open("retorna_resultados.php","_blank");
    }
    function atualizar_dados_resultados_individuais(){
        window.open("retorna_notas_individuais.php","_blank");
    }
    function atualizar_dados_adm(){
        window.open("retorna_notas_areas.php","_blank");
    }

	$('#area').on('change', function() {
	   area_industrial = this.value;
	   $("#responsavel_form1").empty();
	   $.ajax({
            url: 'retorna_responsaveis.php',
            dataType: 'json',
            type: 'post',
            data:{area:area_industrial},
            success: function(dados){
            	for(var i = 0;dados.length > i;i++){
            		$("#responsavel_form1").append("<option value='"+dados[i].responsavel+"'>"+dados[i].responsavel+"</option>");
                }     
            }
        });	

	});
    var opcao_table_auditoria;
    $('#filtro_auditorias').on('change', function() {
       opcao_table_auditoria = this.value;
       retornaControleAuditorias(opcao_table_auditoria);

    });
     $('#data_de').on('change', function() {
       
       retornaControleAuditorias(opcao_table_auditoria);

    });
    $('#data_ate').on('change', function() {
       
       retornaControleAuditorias(opcao_table_auditoria);

    });
    var visualizacao = "";
    $("#visualizacao").on('change', function() {
        visualizacao = this.value;
        retornaControleAuditorias(opcao_table_auditoria);
    });

    function retornaControleAuditorias(opcao_table_auditoria){
        $("#controle_auditorias").empty();
        var data_de = $("#data_de").val();
        var data_ate = $("#data_ate").val();
        if(opcao_table_auditoria == "AreaComum" || opcao_table_auditoria == "AreaIndustrial" ||opcao_table_auditoria == "AreaADM" ){
            $("#name_td").text('Área');
        }else{
            $("#name_td").text('Colaborador');
        }
        $.ajax({
            url: 'auditoria_area_industrial.php',
            dataType: 'json',
            type: 'post',
            data:{opcao_table_auditoria:opcao_table_auditoria, data_de:data_de, data_ate:data_ate, visualizacao:visualizacao},
            success: function(dados){
                if(dados == "nao"){

                }else{
                    for(var i = 0;dados.length > i;i++){
                        $("#controle_auditorias").append("<tr><td style='width:75%;float:left;text-align:left;'>"+dados[i].local_micro+"</td><td style='width:25%;float:left'><input type='checkbox' "+dados[i].status+" disabled></td></tr>");
                    }  
                }
                   
            }
        }); 
       
    }

    carregar_resultados();

    function carregar_resultados(){
        var colaborador = $("#txt_colaborador").val();
        var lider = $("#txt_lider").val();
        var area_referencia = $("#txt_area_referencia").val();
		var ano = $("#ano_resultado_geral").val();
        $("#table").empty();
        $.ajax({
            url: 'retorna_tabela_resultados.php',
            dataType: 'json',
            type: 'post',
            data:{colaborador:colaborador, lider:lider,area_referencia:area_referencia,ano:ano},
            success: function(dados){
               $("#table").empty();
                for(var i = 0;dados.length > i;i++){
                    $("#table").append("<tr style='width:100%' id='"+dados[i].matricula+"' onclick='getId(this.id)'><td style='width:25%;float:left;text-align:left'>"+dados[i].nome+"</td><td style='width:25%;float:left;text-align:left'>"+dados[i].lider+"</td><td style='width:25%;float:left;text-align:left'>"+dados[i].area_referencia+"</td><td style='width:10%;float:left' >"+dados[i].nota_1_tri+"</td><td style='width:10%;float:left'>"+dados[i].nota_2_tri+"</td><td style='width:10%;float:left'>"+dados[i].nota_3_tri+"</td><td style='width:10%;float:left'>"+dados[i].nota_4_tri+"</td><td style='width:10%;float:left;font-weight:bold'>"+dados[i].nota_anual+"</td></tr>");
                }     
            }
        }); 
    }
    function carregar_tabela_relatorio_areas() {
         $.ajax({
            url: 'retorna_tabela_relatorio_areas.php',
            dataType: 'json',
            type: 'post',
            success: function(dados){
               $("#table").empty();
                for(var i = 0;dados.length > i;i++){
                    $("#tabela_relatorio_areas").append("<tr style='width:100%'><td style='width: 75%;float: left;text-align: left;font-size: 15px'>"+dados[i].responsavel_8s+"</td><td style='width: 25%;float: left;text-align: center;font-size: 15px;text-decoration:underline;color:blue' id='1_"+dados[i].responsavel_8s+"' onclick='abrir_relatorio(this.id)'>Link</td><td id='2_"+dados[i].responsavel_8s+"' onclick='abrir_relatorio(this.id)' style='width: 25%;float: left;text-align: center;font-size: 15px;text-decoration:underline;color:blue' >Link</td><td id='3_"+dados[i].responsavel_8s+"' onclick='abrir_relatorio(this.id)' style='width: 25%;float: left;text-align: center;font-size: 15px;text-decoration:underline;color:blue'>Link</td><td id='4_"+dados[i].responsavel_8s+"' onclick='abrir_relatorio(this.id)'style='width: 25%;float: left;text-align: center;font-size: 15px;text-decoration:underline;color:blue'>Link</td></tr>");
                }
                // LINHA DE AREAS COMUNS
                 $("#tabela_relatorio_areas").append("<tr style='width:100%'><td style='width: 75%;float: left;text-align: left;font-size: 15px'>ÁREAS COMUNS</td><td style='width: 25%;float: left;text-align: center;font-size: 15px;text-decoration:underline;color:blue' id='1_comum' onclick='abrir_relatorio(this.id)'>Link</td><td id='2_comum' onclick='abrir_relatorio(this.id)' style='width: 25%;float: left;text-align: center;font-size: 15px;text-decoration:underline;color:blue' >Link</td><td id='3_comum' onclick='abrir_relatorio(this.id)' style='width: 25%;float: left;text-align: center;font-size: 15px;text-decoration:underline;color:blue'>Link</td><td id='4_comum' onclick='abrir_relatorio(this.id)'style='width: 25%;float: left;text-align: center;font-size: 15px;text-decoration:underline;color:blue'>Link</td></tr>");
            }
        }); 
    }
    function carregar_tabela_relatorio_colaboradores() {
         $.ajax({
            url: 'retorna_tabela_relatorio_colaboradores.php',
            dataType: 'json',
            type: 'post',
            success: function(dados){
               $("#table").empty();
                for(var i = 0;dados.length > i;i++){
                    $("#tabela_relatorio_colaboradores").append("<tr style='width:100%'><td style='width: 75%;float: left;text-align: left;font-size: 15px'>"+dados[i].responsavel_8s+"</td><td style='width: 25%;float: left;text-align: center;font-size: 15px;text-decoration:underline;color:blue' id='1_"+dados[i].responsavel_8s+"' onclick='abrir_relatorio_colaborador(this.id)'>Link</td><td id='2_"+dados[i].responsavel_8s+"' onclick='abrir_relatorio_colaborador(this.id)' style='width: 25%;float: left;text-align: center;font-size: 15px;text-decoration:underline;color:blue' >Link</td><td id='3_"+dados[i].responsavel_8s+"' onclick='abrir_relatorio_colaborador(this.id)' style='width: 25%;float: left;text-align: center;font-size: 15px;text-decoration:underline;color:blue'>Link</td><td id='4_"+dados[i].responsavel_8s+"' onclick='abrir_relatorio_colaborador(this.id)'style='width: 25%;float: left;text-align: center;font-size: 15px;text-decoration:underline;color:blue'>Link</td></tr>");
                }
                
            }
        }); 
    }

    function abrir_relatorio(id){
        var split = id.split("_");
        var trimestre = split[0];
        var nome = split[1];
        window.open("relatorio_trimestral.php?tri="+trimestre+"&nome="+nome,"_blank");
    }
     function abrir_relatorio_colaborador(id){
        var split = id.split("_");
        var trimestre = split[0];
        var nome = split[1];
        window.open("relatorio_trimestral_colaborador.php?tri="+trimestre+"&nome="+nome,"_blank");
    }

    carregar_resultado_areas();

    function carregar_resultado_areas(){
       var setor = "ADMINISTRACAO";
       var filtro_area = $("#filtro_area").val();
       var ano = $("#ano_resultado_adm").val();
        $("#table-areas").empty();
        $.ajax({
            url: 'retorna_tabela_resultado_areas.php',
            dataType: 'json',
            type: 'post',
            data:{setor:setor, filtro_area:filtro_area,ano:ano},
            success: function(dados){
               if(dados != "nao"){
                    for(var i = 0;dados.length > i;i++){
                        $("#table-areas").append("<tr style='width:100%' id='"+dados[i].area+"' onclick='modal_adm(this.id)'><td style='width:25%;float:left;text-align:left'>"+dados[i].area+"</td><td style='width:25%;float:left;text-align:left'>"+dados[i].responsavel8s+"</td><td style='width:10%;float:left'>"+dados[i].nota_1_tri+"</td><td style='width:10%;float:left'>"+dados[i].nota_2_tri+"</td><td style='width:10%;float:left'>"+dados[i].nota_3_tri+"</td><td style='width:10%;float:left'>"+dados[i].nota_4_tri+"</td><td style='width:10%;float:left'>"+dados[i].nota_anual+"</td></tr>");
                    }  
               }
                   
            }
        }); 
    }
    //carregar_individuais_adm();

    function carregar_individuais_adm(){
       var setor = "ADM";
      var filtro_individuais_adm = $("#filtro_individuais_adm").val();
      var ano = $("#ano_resultado_adm_ind").val();
        $("#table-resultados-individuais-adm").empty();
        $.ajax({
            url: 'retorna_tabela_resultado_individual_adm.php',
            dataType: 'json',
            type: 'post',
            data:{setor:setor, colaborador:filtro_individuais_adm,ano:ano},
            success: function(dados){
               if(dados != "nao"){
                    for(var i = 0;dados.length > i;i++){
                        $("#table-resultados-individuais-adm").append("<tr style='width:100%' id='"+dados[i].colaborador+"' onclick='modal_individual_adm(this.id)'><td style='width:25%;float:left;text-align:left'>"+dados[i].colaborador+"</td><td style='width:25%;float:left;text-align:left'>"+dados[i].auditor+"</td><td style='width:10%;float:left'>"+dados[i].nota_1_tri+"</td><td style='width:10%;float:left'>"+dados[i].nota_2_tri+"</td><td style='width:10%;float:left'>"+dados[i].nota_3_tri+"</td><td style='width:10%;float:left'>"+dados[i].nota_4_tri+"</td><td style='width:10%;float:left'>"+dados[i].nota_anual+"</td></tr>");
                    }
               }
                     
            }
        });
    }
    function modal_individual_adm(value){
        var colaborador = value;
        $.ajax({
            url: 'retorna_formularios_individual_adm.php',
            dataType: 'json',
            type: 'post',
            data:{colaborador:colaborador},
            success: function(dados){
                 $("#table_modal_individual_adm").empty();
                 if(dados == "nao"){
                    swal("Aviso!","Não existem registros de auditoria deste Formulário","warning");
                 }else{
                    for(var i = 0;dados.length > i;i++){
                        $("#table_modal_individual_adm").append("<tr class='tr-table'><td style='width: 30%;float: left;text-align: center;'>"+dados[i].colaborador+"</td><td style='width: 20%;float: left;text-align: center;'>"+dados[i].data+"</td><td style='width: 15%;float: left;text-align: center;'>"+dados[i].nota_formulario+"</td><td style='width: 15%;float: left;text-align: center;'>"+dados[i].nota_mc+"</td><td style='width: 20%;float: left;text-align: center;'><a id='"+dados[i].id+"' onclick='abrir_form_individual_adm(this.id)'>Clique Aqui</a></td></tr>");
                    }    
                     document.getElementById("modal_individual_adm").style.display = "block";
                 }
            }
        }); 
    }
    carregar_individuais_industrial();
    function carregar_individuais_industrial(){
        var setor = "INDUSTRIAL";
        var colaborador = $("#filtro_individuais_industrial").val();
        var ano = $("#ano_resultado_ind_ind").val();
        $("#table-resultados-individuais-industrial").empty();
        $.ajax({
            url: 'retorna_tabela_resultado_individual_industrial.php',
            dataType: 'json',
            type: 'post',
            data:{setor:setor, colaborador:colaborador,ano:ano},
            success: function(dados){
                if(dados != "nao"){
                    for(var i = 0;dados.length > i;i++){
                        $("#table-resultados-individuais-industrial").append("<tr style='width:100%' id='"+dados[i].colaborador+"' onclick='modal_individual_industrial(this.id)'><td style='width:25%;float:left;text-align:left'>"+dados[i].colaborador+"</td><td style='width:25%;float:left;text-align:left'>"+dados[i].auditor+"</td><td style='width:10%;float:left'>"+dados[i].nota_1_tri+"</td><td style='width:10%;float:left'>"+dados[i].nota_2_tri+"</td><td style='width:10%;float:left'>"+dados[i].nota_3_tri+"</td><td style='width:10%;float:left'>"+dados[i].nota_4_tri+"</td><td style='width:10%;float:left'>"+dados[i].nota_anual+"</td></tr>");
                    }  
                }
                   
            }
        }); 

    }
    function modal_individual_industrial(value){
        var colaborador = value;
        $.ajax({
            url: 'retorna_formularios_individual_industrial.php',
            dataType: 'json',
            type: 'post',
            data:{colaborador:colaborador},
            success: function(dados){
                 $("#table_modal_individual_industrial").empty();
                 if(dados == "nao"){
                    swal("Aviso!","Não existem registros de auditoria deste Formulário","warning");
                 }else{
                    for(var i = 0;dados.length > i;i++){
                        $("#table_modal_individual_industrial").append("<tr class='tr-table'><td style='width: 30%;float: left;text-align: center;'>"+dados[i].colaborador+"</td><td style='width: 20%;float: left;text-align: center;'>"+dados[i].data+"</td><td style='width: 15%;float: left;text-align: center;'>"+dados[i].nota_formulario+"</td><td style='width: 15%;float: left;text-align: center;'>"+dados[i].nota_mc+"</td><td style='width: 20%;float: left;text-align: center;'><a id='"+dados[i].id+"' onclick='abrir_form_individual_industrial(this.id)'>Clique Aqui</a></td></tr>");
                    }    
                     document.getElementById("modal_individual_industrial").style.display = "block";
                 }
            }
        }); 
    }
    function modal_adm(value){
        var area = value;
        $.ajax({
            url: 'retorna_formularios_area.php',
            dataType: 'json',
            type: 'post',
            data:{area:area},
            success: function(dados){
                 $("#table_modal_adm").empty();
                 if(dados == "nao"){
                    swal("Aviso!","Não existem registros de auditoria deste Formulário","warning");
                 }else{
                    for(var i = 0;dados.length > i;i++){
                        $("#table_modal_adm").append("<tr class='tr-table'><td style='width: 30%;float: left;text-align: center;'>"+dados[i].area_adm+"</td><td style='width: 20%;float: left;text-align: center;'>"+dados[i].data+"</td><td style='width: 15%;float: left;text-align: center;'>"+dados[i].nota_formulario+"</td><td style='width: 15%;float: left;text-align: center;'>"+dados[i].nota_mc+"</td><td style='width: 20%;float: left;text-align: center;'><a id='"+dados[i].id+"' onclick='abrir_form(this.id)'>Clique Aqui</a></td></tr>");
                    }    
                     document.getElementById("modal_adm").style.display = "block";
                 }
            }
        }); 
       
    }
    function abrir_form_individual_industrial(value){
        window.open("formulario_individual_industrial.php?id="+value,"_blank");
    }
    function abrir_form_individual_adm(value){
        window.open("formulario_individual_adm.php?id="+value,"_blank");
    }
    function abrir_form(value){
        window.open("formulario.php?id="+value,"_blank");
    }
    carregar_resultado_industrial();

    function carregar_resultado_industrial() {
        var ano = $("#ano_resultado_industrial").val();
        var setor = "INDUSTRIAL";
       var filtro_area_industrial = $("#filtro_area_industrial").val();
        $("#table-industrial").empty();
        $.ajax({
            url: 'retorna_tabela_resultado_industrial.php',
            dataType: 'json',
            type: 'post',
            data:{setor:setor, filtro_area:filtro_area_industrial,ano:ano},
            success: function(dados){
               if(dados != "nao"){
                    for(var i = 0;dados.length > i;i++){
                        $("#table-industrial").append("<tr style='width:100%' id='"+dados[i].area+"' onclick='modal_industrial(this.id)'><td style='width:25%;float:left;text-align:left'>"+dados[i].area+"</td><td style='width:25%;float:left;text-align:left'>"+dados[i].responsavel8s+"</td><td style='width:10%;float:left'>"+dados[i].nota_1_tri+"</td><td style='width:10%;float:left'>"+dados[i].nota_2_tri+"</td><td style='width:10%;float:left'>"+dados[i].nota_3_tri+"</td><td style='width:10%;float:left'>"+dados[i].nota_4_tri+"</td><td style='width:10%;float:left'>"+dados[i].nota_anual+"</td></tr>");
                    } 
               }
                    
            }
        }); 
    }
     function modal_industrial(value){
        var area = value;

        $.ajax({
            url: 'retorna_formularios_industrial.php',
            dataType: 'json',
            type: 'post',
            data:{area:area},
            success: function(dados){
                 $("#table_modal_adm").empty();
                 if(dados == "nao"){
                    swal("Aviso!","Não existem registros de auditoria deste Formulário","warning");
                 }else{
                    $("#table_modal_industrial").empty();
                    for(var i = 0;dados.length > i;i++){
                        $("#table_modal_industrial").append("<tr class='tr-table'><td style='width: 30%;float: left;text-align: center;'>"+dados[i].area_industrial+"</td><td style='width: 20%;float: left;text-align: center;'>"+dados[i].data+"</td><td style='width: 15%;float: left;text-align: center;'>"+dados[i].nota_formulario+"</td><td style='width: 15%;float: left;text-align: center;'>"+dados[i].nota_mc+"</td><td style='width: 20%;float: left;text-align: center;'><a id='"+dados[i].id+"' onclick='abrir_form_industrial(this.id)'>Clique Aqui</a></td></tr>");
                    }    
                     document.getElementById("modal_industrial").style.display = "block";
                 }
            }
        }); 
       
    }
    function abrir_form_industrial(value){
        window.open("formulario_industrial.php?id="+value,"_blank");
    }
    function abrir_form_area_comum(value){
        window.open("formulario_area_comum.php?id="+value,"_blank");
    }
    carregar_resultado_comum();

    function carregar_resultado_comum() {
        var setor = "ÁREA COMUM";
        var filtro_area_comum = $("#filtro_area_comum").val();
        var ano = $("#ano_resultado_comum").val();
        $("#table-comum").empty();
        $.ajax({
            url: 'retorna_tabela_resultado_comum.php',
            dataType: 'json',
            type: 'post',
            data:{setor:setor, filtro_area:filtro_area_comum,ano:ano},
            success: function(dados){
               if(dados != "nao"){
                    for(var i = 0;dados.length > i;i++){
                        $("#table-comum").append("<tr style='width:100%' id='"+dados[i].area_comum+"' onclick='abrir_modal_area_comum(this.id)'><td style='width:25%;float:left;text-align:left'>"+dados[i].area_comum+"</td><td style='width:25%;float:left;text-align:left'>"+dados[i].auditor+"</td><td style='width:10%;float:left'>"+dados[i].nota_1_tri+"</td><td style='width:10%;float:left'>"+dados[i].nota_2_tri+"</td><td style='width:10%;float:left'>"+dados[i].nota_3_tri+"</td><td style='width:10%;float:left'>"+dados[i].nota_4_tri+"</td><td style='width:10%;float:left'>"+dados[i].nota_anual+"</td></tr>");
                    }   
               }
                  
            }
        }); 
    }
    function abrir_modal_area_comum(value){
        var area = value;
        $.ajax({
            url: 'retorna_formularios_area_comum.php',
            dataType: 'json',
            type: 'post',
            data:{area:area},
            success: function(dados){
                 $("#table_modal_area_comum").empty();
                 if(dados == "nao"){
                    swal("Aviso!","Não existem registros de auditoria deste Formulário","warning");
                 }else{
                    for(var i = 0;dados.length > i;i++){
                        $("#table_modal_area_comum").append("<tr class='tr-table'><td style='width: 30%;float: left;text-align: center;'>"+dados[i].area_comum+"</td><td style='width: 20%;float: left;text-align: center;'>"+dados[i].data+"</td><td style='width: 15%;float: left;text-align: center;'>"+dados[i].nota_formulario+"</td><td style='width: 15%;float: left;text-align: center;'>"+dados[i].nota_mc+"</td><td style='width: 20%;float: left;text-align: center;'><a id='"+dados[i].id+"' onclick='abrir_form_area_comum(this.id)'>Clique Aqui</a></td></tr>");
                    }    
                     document.getElementById("modal_area_comum").style.display = "block";
                 }
            }
        }); 
    }

    function getId(value) {
        var matricula = value;
		var ano = $("#ano_resultado_geral").val();
        var nome ="";
         $.ajax({
            url: 'retorna_modal_informacoes.php',
            dataType: 'json',
            type: 'post',
            data:{matricula:matricula,ano:ano},
            success: function(dados){
                nome = dados[0].nome;
                $("#nota_area_1_tri").text(dados[0].nota_area_1_tri);
                $("#nota_area_2_tri").text(dados[0].nota_area_2_tri);
                $("#nota_area_3_tri").text(dados[0].nota_area_3_tri);
                $("#nota_area_4_tri").text(dados[0].nota_area_4_tri);
                $("#nota_area_anual").text(dados[0].nota_area_total);

                $("#nota_mc_area_1_tri").text(dados[0].nota_MC_area_1_tri);
                $("#nota_mc_area_2_tri").text(dados[0].nota_MC_area_2_tri);
                $("#nota_mc_area_3_tri").text(dados[0].nota_MC_area_3_tri);
                $("#nota_mc_area_4_tri").text(dados[0].nota_MC_area_4_tri);
                $("#nota_mc_area_anual").text(dados[0].nota_MC_area_total);

				$("#nota_grupo_1_tri").text(dados[0].nota_grupo_1_tri);
                $("#nota_grupo_2_tri").text(dados[0].nota_grupo_2_tri);
                $("#nota_grupo_3_tri").text(dados[0].nota_grupo_3_tri);
                $("#nota_grupo_4_tri").text(dados[0].nota_grupo_4_tri);
                $("#nota_grupo_anual").text(dados[0].nota_grupo_total);

                $("#nota_mc_grupo_1_tri").text(dados[0].nota_MC_grupo_1_tri);
                $("#nota_mc_grupo_2_tri").text(dados[0].nota_MC_grupo_2_tri);
                $("#nota_mc_grupo_3_tri").text(dados[0].nota_MC_grupo_3_tri);
                $("#nota_mc_grupo_4_tri").text(dados[0].nota_MC_grupo_4_tri);
                $("#nota_mc_grupo_anual").text(dados[0].nota_MC_grupo_total);

                $("#nota_individual_1_tri").text(dados[0].nota_individual_1_tri);
                $("#nota_individual_2_tri").text(dados[0].nota_individual_2_tri);
                $("#nota_individual_3_tri").text(dados[0].nota_individual_3_tri);
                $("#nota_individual_4_tri").text(dados[0].nota_individual_4_tri);
                $("#nota_individual_anual").text(dados[0].nota_individual_total);

                $("#nota_mc_individual_1_tri").text(dados[0].nota_MC_individual_1_tri);
                $("#nota_mc_individual_2_tri").text(dados[0].nota_MC_individual_2_tri);
                $("#nota_mc_individual_3_tri").text(dados[0].nota_MC_individual_3_tri);
                $("#nota_mc_individual_4_tri").text(dados[0].nota_MC_individual_4_tri);
                $("#nota_mc_individual_anual").text(dados[0].nota_MC_individual_total);

                $("#nota_area_comum_1_tri").text(dados[0].nota_comum_1_tri);
                $("#nota_area_comum_2_tri").text(dados[0].nota_comum_2_tri);
                $("#nota_area_comum_3_tri").text(dados[0].nota_comum_3_tri);
                $("#nota_area_comum_4_tri").text(dados[0].nota_comum_4_tri);
                $("#nota_area_comum_anual").text(dados[0].nota_comum_total);

                $("#nota_mc_area_comum_1_tri").text(dados[0].nota_MC_comum_1_tri);
                $("#nota_mc_area_comum_2_tri").text(dados[0].nota_MC_comum_2_tri);
                $("#nota_mc_area_comum_3_tri").text(dados[0].nota_MC_comum_3_tri);
                $("#nota_mc_area_comum_4_tri").text(dados[0].nota_MC_comum_4_tri);
                $("#nota_mc_area_comum_anual").text(dados[0].nota_MC_comum_total);

                $("#nota_geral_1_tri").text(dados[0].nota_1_tri);
                $("#nota_geral_2_tri").text(dados[0].nota_2_tri);
                $("#nota_geral_3_tri").text(dados[0].nota_3_tri);
                $("#nota_geral_4_tri").text(dados[0].nota_4_tri);
                $("#nota_geral_anual").text(dados[0].nota_anual);

                $("#numero_trimestre").html("Resultados Das Auditorias: "+ nome); 
            }
        }); 
        document.getElementById("modal_informacoes").style.display = "block";
    }

    $(".checkbox2").click(function(){
        if($("#"+this.id).is(":checked") == false){
            $("#nota_mc_form2").val("0");
        }else{
            $("#nota_mc_form2").val("10");
        }
    })

    $(".checkbox2_form4").click(function(){
        if($("#"+this.id).is(":checked") == false){
            $("#nota_mc_form4").val("0");
        }else{
            $("#nota_mc_form4").val("10");
        }
    })

    $(".checkbox2_form5").click(function(){
        if($("#"+this.id).is(":checked") == false){
            $("#nota_mc_form5").val("0");
        }else{
            $("#nota_mc_form5").val("10");
        }
    })

    $(".checkbox2_form3").click(function(){
        if($("#"+this.id).is(":checked") == false){
            $("#nota_mc_form3").val("0");
        }else{
            $("#nota_mc_form3").val("10");
        }
    })

     $(".checkbox2_form1").click(function(){
        if($("#"+this.id).is(":checked") == false){
            $("#nota_mc_form1").val("0");
        }else{
            $("#nota_mc_form1").val("10");
        }
    })

    $(".checkbox_form1").click(function(){
        var id = "#"+this.id;
        var senso = id.substr(7, 1);
        
         if($("#"+this.id).is(":checked") == false){
            numero_NC_form1 = numero_NC_form1 + 1;
            if(senso == "1"){
                if($("#form1_1_5").is(":checked") == true){
                    $("#form1_1_5").prop('checked', false);
                    numero_NC_form1 = numero_NC_form1 + 1;  
                }
            }
            if(senso == "2"){
                if($("#form1_2_5").is(":checked") == true){
                    $("#form1_2_5").prop('checked', false);
                    numero_NC_form1 = numero_NC_form1 + 1; 
                }
            }
            if(senso == "3"){
                if($("#form1_3_5").is(":checked") == true){
                    $("#form1_3_5").prop('checked', false);
                    numero_NC_form1 = numero_NC_form1 + 1; 
                }
            }
            if(senso == "4"){
                if($("#form1_4_5").is(":checked") == true){
                    $("#form1_4_5").prop('checked', false);
                    numero_NC_form1 = numero_NC_form1 + 1; 
                }
            }
            if(senso == "5"){
                if($("#form1_5_5").is(":checked") == true){
                    $("#form1_5_5").prop('checked', false);
                    numero_NC_form1 = numero_NC_form1 + 1; 
                }
            }
            if(senso == "6"){
                if($("#form1_6_5").is(":checked") == true){
                    $("#form1_6_5").prop('checked', false);
                    numero_NC_form1 = numero_NC_form1 + 1; 
                }
            }
            if(senso == "7"){
                if($("#form1_7_5").is(":checked") == true){
                    $("#form1_7_5").prop('checked', false);
                    numero_NC_form1 = numero_NC_form1 + 1; 
                }
            }
            if(senso == "8"){
                if($("#form1_8_5").is(":checked") == true){
                    $("#form1_8_5").prop('checked', false);
                    numero_NC_form1 = numero_NC_form1 + 1; 
                }
            }
            if(senso == "9"){
                if($("#form1_9_5").is(":checked") == true){
                    $("#form1_9_5").prop('checked', false);
                    numero_NC_form1 = numero_NC_form1 + 1; 
                }
            }
           
         }else{
                    if(senso == "1"){
                        if($("#form1_1_5").is(":checked") == false){
                            numero_NC_form1 = numero_NC_form1 - 1;
                            if($("#form1_1_1").is(":checked") == true && $("#form1_1_2").is(":checked") == true && $("#form1_1_3").is(":checked") == true && $("#form1_1_4").is(":checked") == true){
                                $("#form1_1_5").prop('checked', true);
                                numero_NC_form1 = numero_NC_form1 - 1;
                            }
                        }
                    }
                    if(senso == "2"){
                        if($("#form1_2_5").is(":checked") == false){  
                            numero_NC_form1 = numero_NC_form1 - 1;
                            if($("#form1_2_1").is(":checked") == true && $("#form1_2_2").is(":checked") == true && $("#form1_2_3").is(":checked") == true && $("#form1_2_4").is(":checked") == true){
                                $("#form1_2_5").prop('checked', true);
                                numero_NC_form1 = numero_NC_form1 - 1;
                            }
                        }
                    }
                    if(senso == "3"){
                        if($("#form1_3_5").is(":checked") == false){
                            numero_NC_form1 = numero_NC_form1 - 1;
                            if($("#form1_3_1").is(":checked") == true && $("#form1_3_2").is(":checked") == true && $("#form1_3_3").is(":checked") == true && $("#form1_3_4").is(":checked") == true){
                                $("#form1_3_5").prop('checked', true);
                                numero_NC_form1 = numero_NC_form1 - 1;
                            }
                        }
                    }
                    if(senso == "4"){
                        if($("#form1_4_5").is(":checked") == false){ 
                            numero_NC_form1 = numero_NC_form1 - 1;
                            if($("#form1_4_1").is(":checked") == true && $("#form1_4_2").is(":checked") == true && $("#form1_4_3").is(":checked") == true && $("#form1_4_4").is(":checked") == true){
                                $("#form1_4_5").prop('checked', true);
                                numero_NC_form1 = numero_NC_form1 - 1;
                            }
                        }
                    }
                    if(senso == "5"){
                        if($("#form1_5_5").is(":checked") == false){ 
                            numero_NC_form1 = numero_NC_form1 - 1;
                            if($("#form1_5_1").is(":checked") == true && $("#form1_5_2").is(":checked") == true && $("#form1_5_3").is(":checked") == true && $("#form1_5_4").is(":checked") == true){
                                $("#form1_5_5").prop('checked', true);
                                numero_NC_form1 = numero_NC_form1 - 1;
                            }
                        }
                    }
                    if(senso == "6"){
                        if($("#form1_6_5").is(":checked") == false){ 
                            numero_NC_form1 = numero_NC_form1 - 1;
                            if($("#form1_6_1").is(":checked") == true && $("#form1_6_2").is(":checked") == true && $("#form1_6_3").is(":checked") == true && $("#form1_6_4").is(":checked") == true){
                                $("#form1_6_5").prop('checked', true);
                                numero_NC_form1 = numero_NC_form1 - 1;
                            }
                        }
                    }
                    if(senso == "7"){
                        if($("#form1_7_5").is(":checked") == false){ 
                            numero_NC_form1 = numero_NC_form1 - 1;
                            if($("#form1_7_1").is(":checked") == true && $("#form1_7_2").is(":checked") == true && $("#form1_7_3").is(":checked") == true && $("#form1_7_4").is(":checked") == true){
                                $("#form1_7_5").prop('checked', true);
                                numero_NC_form1 = numero_NC_form1 - 1;
                            }
                        }
                    }
                    if(senso == "8"){
                        if($("#form1_8_5").is(":checked") == false){
                            numero_NC_form1 = numero_NC_form1 - 1;
                            if($("#form1_8_1").is(":checked") == true && $("#form1_8_2").is(":checked") == true && $("#form1_8_3").is(":checked") == true && $("#form1_8_4").is(":checked") == true){
                                $("#form1_8_5").prop('checked', true);
                                numero_NC_form1 = numero_NC_form1 - 1;
                            }
                        }
                    }
                    if(senso == "9"){
                        if($("#form1_9_5").is(":checked") == false){ 
                            numero_NC_form1 = numero_NC_form1 - 1;
                            if($("#form1_9_1").is(":checked") == true && $("#form1_9_2").is(":checked") == true && $("#form1_9_3").is(":checked") == true && $("#form1_9_4").is(":checked") == true){
                                $("#form1_9_5").prop('checked', true);
                                numero_NC_form1 = numero_NC_form1 - 1;
                            }
                        }
                    }
                  
         }
         calcular_notas("form1"); 
    })

    $(".checkbox_form5").click(function(){
        var id = "#"+this.id;
        var senso = id.substr(7, 1);
        
         if($("#"+this.id).is(":checked") == false){
            numero_NC_form5 = numero_NC_form5 + 1;
            if(senso == "1"){
                if($("#form5_1_5").is(":checked") == true){
                    $("#form5_1_5").prop('checked', false);
                    numero_NC_form5 = numero_NC_form5 + 1;  
                }
            }
            if(senso == "2"){
                if($("#form5_2_5").is(":checked") == true){
                    $("#form5_2_5").prop('checked', false);
                    numero_NC_form5 = numero_NC_form5 + 1;   
                }
            }
            if(senso == "3"){
                if($("#form5_3_5").is(":checked") == true){
                    $("#form5_3_5").prop('checked', false);
                    numero_NC_form5 = numero_NC_form5 + 1;  
                }
            }
            if(senso == "4"){
                if($("#form5_4_5").is(":checked") == true){
                    $("#form5_4_5").prop('checked', false);
                    numero_NC_form5 = numero_NC_form5 + 1;   
                }
            }
            if(senso == "5"){
                if($("#form5_5_5").is(":checked") == true){
                    $("#form5_5_5").prop('checked', false);
                    numero_NC_form5 = numero_NC_form5 + 1;   
                }
            }
            if(senso == "6"){
                if($("#form5_6_5").is(":checked") == true){
                    $("#form5_6_5").prop('checked', false);
                    numero_NC_form5 = numero_NC_form5 + 1;  
                }
            }
            if(senso == "7"){
                if($("#form5_7_5").is(":checked") == true){
                    $("#form5_7_5").prop('checked', false);
                    numero_NC_form5 = numero_NC_form5 + 1;   
                }
            }
            if(senso == "8"){
                if($("#form5_8_5").is(":checked") == true){
                    $("#form5_8_5").prop('checked', false);
                    numero_NC_form5 = numero_NC_form5 + 1;   
                }
            }
            if(senso == "9"){
                if($("#form5_9_5").is(":checked") == true){
                    $("#form5_9_5").prop('checked', false);
                    numero_NC_form5 = numero_NC_form5 + 1;  
                }
            } 
         }else{
                
                    if(senso == "1"){
                        if($("#form5_1_5").is(":checked") == false){
                            numero_NC_form5 = numero_NC_form5 - 1;
                            if($("#form5_1_1").is(":checked") == true && $("#form5_1_2").is(":checked") == true && $("#form5_1_3").is(":checked") == true && $("#form5_1_4").is(":checked") == true){
                                  $("#form5_1_5").prop('checked', true);
                                  numero_NC_form5 = numero_NC_form5 - 1; 
                            }                       
                             
                        }
                    }
                    if(senso == "2"){
                        if($("#form5_2_5").is(":checked") == false){
                            numero_NC_form5 = numero_NC_form5 - 1;
                            if($("#form5_2_1").is(":checked") == true && $("#form5_2_2").is(":checked") == true && $("#form5_2_3").is(":checked") == true && $("#form5_2_4").is(":checked") == true){
                                $("#form5_2_5").prop('checked', true);
                                numero_NC_form5 = numero_NC_form5 - 1;
                            }     
                        }
                    }
                    if(senso == "3"){
                        if($("#form5_3_5").is(":checked") == false){
                            numero_NC_form5 = numero_NC_form5 - 1;   
                            if($("#form5_3_1").is(":checked") == true && $("#form5_3_2").is(":checked") == true && $("#form5_3_3").is(":checked") == true && $("#form5_3_4").is(":checked") == true){
                                 $("#form5_3_5").prop('checked', true);
                                 numero_NC_form5 = numero_NC_form5 - 1; 
                            }   
                        }
                    }
                    if(senso == "4"){
                        if($("#form5_4_5").is(":checked") == false){
                            numero_NC_form5 = numero_NC_form5 - 1;  
                            if($("#form5_4_1").is(":checked") == true && $("#form5_4_2").is(":checked") == true && $("#form5_4_3").is(":checked") == true && $("#form5_4_4").is(":checked") == true){
                                 $("#form5_4_5").prop('checked', true);
                                 numero_NC_form5 = numero_NC_form5 - 1;
                            } 
                        }
                    }
                    if(senso == "5"){
                        if($("#form5_5_5").is(":checked") == false){
                            numero_NC_form5 = numero_NC_form5 - 1; 
                            if($("#form5_5_1").is(":checked") == true && $("#form5_5_2").is(":checked") == true && $("#form5_5_3").is(":checked") == true && $("#form5_5_4").is(":checked") == true){
                                $("#form5_5_5").prop('checked', true);
                                numero_NC_form5 = numero_NC_form5 - 1;
                            }  
                        }
                    }
                    if(senso == "6"){
                        if($("#form5_6_5").is(":checked") == false){
                            numero_NC_form5 = numero_NC_form5 - 1;  
                            if($("#form5_6_1").is(":checked") == true && $("#form5_6_2").is(":checked") == true && $("#form5_6_3").is(":checked") == true && $("#form5_6_4").is(":checked") == true){
                                $("#form5_6_5").prop('checked', true);
                                numero_NC_form5 = numero_NC_form5 - 1;
                            }  
                        }
                    }
                    if(senso == "7"){
                        if($("#form5_7_5").is(":checked") == false){    
                            numero_NC_form5 = numero_NC_form5 - 1; 
                            if($("#form5_7_1").is(":checked") == true && $("#form5_7_2").is(":checked") == true && $("#form5_7_3").is(":checked") == true && $("#form5_7_4").is(":checked") == true){
                                $("#form5_7_5").prop('checked', true);
                                numero_NC_form5 = numero_NC_form5 - 1;
                            }  
                        }
                    }
                    if(senso == "8"){
                        if($("#form5_8_5").is(":checked") == false){
                            numero_NC_form5 = numero_NC_form5 - 1;
                            if($("#form5_8_1").is(":checked") == true && $("#form5_8_2").is(":checked") == true && $("#form5_8_3").is(":checked") == true && $("#form5_8_4").is(":checked") == true){
                                $("#form5_8_5").prop('checked', true);
                                numero_NC_form5 = numero_NC_form5 - 1;
                            }  
                        }
                    }
                    if(senso == "9"){
                        if($("#form5_9_5").is(":checked") == false){
                            numero_NC_form5 = numero_NC_form5 - 1;
                            if($("#form5_9_1").is(":checked") == true && $("#form5_9_2").is(":checked") == true && $("#form5_9_3").is(":checked") == true && $("#form5_9_4").is(":checked") == true){
                                $("#form5_9_5").prop('checked', true);
                                numero_NC_form5 = numero_NC_form5 - 1;
                            }   
                        }
                    }
                  
         }
         calcular_notas("form5"); 
    })

    $(".checkbox_form3").click(function(){
        var id = "#"+this.id;
        var senso = id.substr(7, 1);
        
         if($("#"+this.id).is(":checked") == false){
            numero_NC_form3 = numero_NC_form3 + 1;
            if(senso == "1"){
                if($("#form3_1_5").is(":checked") == true){
                    $("#form3_1_5").prop('checked', false);
                    numero_NC_form3 = numero_NC_form3 + 1;  
                }
            }
            if(senso == "2"){
                if($("#form3_2_5").is(":checked") == true){
                    $("#form3_2_5").prop('checked', false);
                    numero_NC_form3 = numero_NC_form3 + 1; 
                }
            }
            if(senso == "3"){
                if($("#form3_3_5").is(":checked") == true){
                    $("#form3_3_5").prop('checked', false);
                    numero_NC_form3 = numero_NC_form3 + 1; 
                }
            }
            if(senso == "4"){
                if($("#form3_4_5").is(":checked") == true){
                    $("#form3_4_5").prop('checked', false);
                    numero_NC_form3 = numero_NC_form3 + 1; 
                }
            }
            if(senso == "5"){
                if($("#form3_5_5").is(":checked") == true){
                    $("#form3_5_5").prop('checked', false);
                    numero_NC_form3 = numero_NC_form3 + 1; 
                }
            }
            if(senso == "6"){
                if($("#form3_6_5").is(":checked") == true){
                    $("#form3_6_5").prop('checked', false);
                    numero_NC_form3 = numero_NC_form3 + 1; 
                }
            }
            if(senso == "7"){
                if($("#form3_7_5").is(":checked") == true){
                    $("#form3_7_5").prop('checked', false);
                    numero_NC_form3 = numero_NC_form3 + 1; 
                }
            }
            if(senso == "8"){
                if($("#form3_8_5").is(":checked") == true){
                    $("#form3_8_5").prop('checked', false);
                    numero_NC_form3 = numero_NC_form3 + 1; 
                }
            }
            if(senso == "9"){
                if($("#form3_9_5").is(":checked") == true){
                    $("#form3_9_5").prop('checked', false);
                    numero_NC_form3 = numero_NC_form3 + 1; 
                }
            }
           
         }else{
               
                    if(senso == "1"){
                        if($("#form3_1_5").is(":checked") == false){ 
                            numero_NC_form3 = numero_NC_form3 - 1;
                            if($("#form3_1_1").is(":checked") == true && $("#form3_1_2").is(":checked") == true && $("#form3_1_3").is(":checked") == true && $("#form3_1_4").is(":checked") == true){
                                $("#form3_1_5").prop('checked', true);
                                numero_NC_form3 = numero_NC_form3 - 1;
                            }
                        }
                    }
                    if(senso == "2"){
                        if($("#form3_2_5").is(":checked") == false){
                            numero_NC_form3 = numero_NC_form3 - 1;
                            if($("#form3_2_1").is(":checked") == true && $("#form3_2_2").is(":checked") == true && $("#form3_2_3").is(":checked") == true && $("#form3_2_4").is(":checked") == true){
                                $("#form3_2_5").prop('checked', true);
                                numero_NC_form3 = numero_NC_form3 - 1;
                            } 
                        }
                    }
                    if(senso == "3"){
                        if($("#form3_3_5").is(":checked") == false){
                            numero_NC_form3 = numero_NC_form3 - 1;
                            if($("#form3_3_1").is(":checked") == true && $("#form3_3_2").is(":checked") == true && $("#form3_3_3").is(":checked") == true && $("#form3_3_4").is(":checked") == true){
                                $("#form3_3_5").prop('checked', true);
                                numero_NC_form3 = numero_NC_form3 - 1;
                            }  
                        }
                    }
                    if(senso == "4"){
                        if($("#form3_4_5").is(":checked") == false){
                            numero_NC_form3 = numero_NC_form3 - 1;
                            if($("#form3_4_1").is(":checked") == true && $("#form3_4_2").is(":checked") == true && $("#form3_4_3").is(":checked") == true && $("#form3_4_4").is(":checked") == true){
                                $("#form3_4_5").prop('checked', true);
                                numero_NC_form3 = numero_NC_form3 - 1;
                            }  
                        }
                    }
                    if(senso == "5"){
                        if($("#form3_5_5").is(":checked") == false){  
                            numero_NC_form3 = numero_NC_form3 - 1;
                            if($("#form3_5_1").is(":checked") == true && $("#form3_5_2").is(":checked") == true && $("#form3_5_3").is(":checked") == true && $("#form3_5_4").is(":checked") == true){
                                $("#form3_5_5").prop('checked', true);
                                numero_NC_form3 = numero_NC_form3 - 1;
                            }  
                        }
                    }
                    if(senso == "6"){
                        if($("#form3_6_5").is(":checked") == false){ 
                            numero_NC_form3 = numero_NC_form3 - 1;
                            if($("#form3_6_1").is(":checked") == true && $("#form3_6_2").is(":checked") == true && $("#form3_6_3").is(":checked") == true && $("#form3_6_4").is(":checked") == true){
                                $("#form3_6_5").prop('checked', true);
                                numero_NC_form3 = numero_NC_form3 - 1;
                            } 
                        }
                    }
                    if(senso == "7"){
                        if($("#form3_7_5").is(":checked") == false){
                           
                            numero_NC_form3 = numero_NC_form3 - 1;
                            if($("#form3_7_1").is(":checked") == true && $("#form3_7_2").is(":checked") == true && $("#form3_7_3").is(":checked") == true && $("#form3_7_4").is(":checked") == true){
                                $("#form3_7_5").prop('checked', true);
                                numero_NC_form3 = numero_NC_form3 - 1;
                            } 
                        }
                    }
                    if(senso == "8"){
                        if($("#form3_8_5").is(":checked") == false){
                            $("#form3_8_5").prop('checked', true);
                            numero_NC_form3 = numero_NC_form3 - 1;
                            if($("#form3_8_1").is(":checked") == true && $("#form3_8_2").is(":checked") == true && $("#form3_8_3").is(":checked") == true && $("#form3_8_4").is(":checked") == true){
                                $("#form3_7_5").prop('checked', true);
                                numero_NC_form3 = numero_NC_form3 - 1;
                            }  
                        }
                    }
                    if(senso == "9"){
                        if($("#form3_9_5").is(":checked") == false){
                            numero_NC_form3 = numero_NC_form3 - 1;
                            if($("#form3_9_1").is(":checked") == true && $("#form3_9_2").is(":checked") == true && $("#form3_9_3").is(":checked") == true && $("#form3_9_4").is(":checked") == true){
                                $("#form3_9_5").prop('checked', true);
                                numero_NC_form3 = numero_NC_form3 - 1;
                            }  
                        }
                    }

         }
        calcular_notas("form3");
        
    })


    function calcular_notas(form){
        
       if(form = "form1"){
            nota_form1 = 90-(2*numero_NC_form1);
            $("#nota_form1").val(nota_form1);
        }
        if(form = "form3"){
            nota_form3 = 90-(2*numero_NC_form3);
            $("#nota_form3").val(nota_form3);
        }
        if(form = "form5"){
            nota_form5 = 90-(2*numero_NC_form5);
            $("#nota_form5").val(nota_form5);
        }
       
    }
    // var nome_input_texto;
    // function abrir_texto(id){
    //     nome_input_texto = id;
    //     document.getElementById("modal_texto").style.display= "block";
    // }
    // function salvar_informacao(){
    //     var texto = $("#campo_texto").val();
    //     $("#"+nome_input_texto).val(texto);
    //     $("#campo_texto").val("");
    //     document.getElementById("modal_texto").style.display= "none";
    // }
    $(".checkbox").click(function(){

         if($("#"+this.id).is(":checked") == false){
            numero_NC_form2 = numero_NC_form2 + 1;
            if(numero_NC_form2 == 1){
                numero_NC_form2++;
            }
            $("#form2_4").prop('checked', false);
         }else{
                numero_NC_form2 = numero_NC_form2 - 1;
                if(numero_NC_form2 == 1){
                    $("#form2_4").prop('checked', true);
                    numero_NC_form2 = 0;
                }
         }
         calcular_nota("form2");
    })
     $(".checkbox_form4").click(function(){

          if($("#"+this.id).is(":checked") == false){
              numero_NC_form4 = numero_NC_form4 + 1;
              if(numero_NC_form4 == 1){
                 numero_NC_form4++;
             }
             $("#form4_4").prop('checked', false);
          }else{
                 numero_NC_form4 = numero_NC_form4 - 1;
                 if(numero_NC_form4 == 1){
                     $("#form4_4").prop('checked', true);
                     numero_NC_form4 = 0;
                 }
          }
         calcular_nota("form4");
    })
    function calcular_nota(form){
       if(form = "form2"){
            if(numero_NC_form2 == 5){
                nota_form2 = 0;
            }else if(numero_NC_form2 == 0){
                nota_form2 = 10;
            }else{
                 nota_form2 = 10-(2*numero_NC_form2);
            }
            $("#nota_form2").val(nota_form2);
        }
        if(form = "form4"){
            if(numero_NC_form4 == 5){
                nota_form4 = 0;
            }else if(numero_NC_form4 == 0){
                nota_form4 = 10;
            }else{
                 nota_form4 = 10-(2*numero_NC_form4);
            }
            $("#nota_form4").val(nota_form4);
        }
    }

    $('#ano_resultado_adm').on('change', function() {
        carregar_resultado_areas();
    })
    $('#ano_resultado_industrial').on('change', function() {
        carregar_resultado_industrial();
    })
    $('#ano_resultado_comum').on('change', function() {
        carregar_resultado_comum();
    })
    $('#ano_resultado_adm_ind').on('change', function() {
        carregar_individuais_adm();
    })
     $('#ano_resultado_ind_ind').on('change', function() {
       carregar_individuais_industrial();
    })

	$('#area_adm').on('change', function() {
	   area_adm = this.value;
	   $("#responsavel_form3").empty();
	   $.ajax({
            url: 'retorna_responsaveis.php',
            dataType: 'json',
            type: 'post',
            data:{area:area_adm},
            success: function(dados){
            	for(var i = 0;dados.length > i;i++){
            		$("#responsavel_form3").append("<option value='"+dados[i].responsavel+"'>"+dados[i].responsavel+"</option>");
                }     
            }
        });	

	});

	function openCity(evt, cityName) {
	  var i, tabcontent, tablinks;
	  tabcontent = document.getElementsByClassName("tabcontent");
	  for (i = 0; i < tabcontent.length; i++) {
	    tabcontent[i].style.display = "none";
	  }
	  tablinks = document.getElementsByClassName("tablinks");
	  for (i = 0; i < tablinks.length; i++) {
	    tablinks[i].className = tablinks[i].className.replace(" active", "");
	  }
	  document.getElementById(cityName).style.display = "block";
	  evt.currentTarget.className += " active";
	}
	window.onload = function(){
        ocultar_infos();
		carregar_infos();
        carregar_resultados();
	    carregar_tabela_relatorio_areas();
        carregar_tabela_relatorio_colaboradores();
        var usuario_logado = "<?php echo $usuario?>";
        $("#acessos").css("display",'none');
        conferir_acessos(usuario_logado);
            
    }
    function conferir_acessos(nome){
            $.ajax({
                url: 'informacoes.php',
                dataType: 'json',
                type: 'post',
                data:{nome:nome},
                success: function(dados){
                    if(dados[0].status == "none"){
                        $("button").css("display","none");
                        $("#acessos").css("display","block");
                        document.getElementById("acessos").click();
                    }
                }
            })

        }

    var lideranca = "";
    var setor_user = "";

    function ocultar_infos(){
        var user = "<?php echo $usuario?>";
        if(user == "Robertson Domingos Luiz Buse" || user == "Matheus Antonio da Silva" || user == "Jovana Polo Bonett" || usuario == "Rondinelia Soares de Souza"){

        }else{
            $("#botao_controle_auditoriras").css("display","none");
            $("#botao_industrial").css("display","none");
            $("#botao_industrial_pessoal").css("display","none");
            $("#botao_adm").css("display","none");
            $("#botao_adm_pessoal").css("display","none");
            $("#botao_area_comum").css("display","none");
             $.ajax({
                url: 'retorna_infos_usuario.php',
                dataType: 'json',
                type: 'post',
                data:{colaborador:user},
                success: function(dados){
                     lideranca = dados[0].lider;
                     setor_user = 'INDUSTRIAL';//dados[0].setor;
                     if(setor_user == "ADM"){ 
                        $("#botao_resultado_individual_industrial").css("display","none");
                        $("#botao_resultado_industrial").css("display","none");
                    }else{
                        $("#botao_resultado_individual_adm").css("display","none");
                        $("#botao_resultado_adm").css("display","none");
                    }
                }
            }); 
        }
    }

	
	function carregar_infos(){
		usuario = "<?php echo $usuario?>";
		var datahoje = "<?php echo date('d/m/Y')?>";
		$("#nome_usuario").html(usuario);
		$("#nome_usuario_form2").html(usuario);
		$("#nome_usuario_form3").html(usuario);
		$("#nome_usuario_form4").html(usuario);
		$("#nome_usuario_form5").html(usuario);
		$("#data_hoje").html(datahoje);
		$("#data_hoje_form2").html(datahoje);
		$("#data_hoje_form3").html(datahoje);
		$("#data_hoje_form4").html(datahoje);
		$("#data_hoje_form5").html(datahoje);
		$("#responsavel_form1").append("<option value='' disabled selected>Selecione uma opção</option>");
		$("#area").append("<option value='' disabled selected>Selecione uma opção</option>");
		$("#area_adm").append("<option value='' disabled selected>Selecione uma opção</option>");
		$("#area_comum").append("<option value=''>Selecione uma opção</option>");
        $("#colaborador_form2").append("<option value='' disabled selected>Selecione uma opção</option>");
		retornaAreas("INDUSTRIAL");
		retornaAreas("ADMINISTRACAO");
		retornaColaboradores("ADM");
		retornaColaboradores("INDUSTRIAL");
		retornaAreasComuns();
        
		
	}
    
	function retornaColaboradores(area){
		
		$("#colaborador_form4").append("<option value='' disabled selected>Selecione uma opção</option>");
		$.ajax({
            url: 'retorna_colaboradores.php',
            dataType: 'json',
            type: 'post',
            data:{area:area},
            success: function(dados){
            	for(var i = 0;dados.length > i;i++){
            		if(area == "INDUSTRIAL"){
            			$("#colaborador_form2").append("<option value='"+dados[i].nome_completo+"'>"+dados[i].nome_completo+"</option>");
            		}else{
            			$("#colaborador_form4").append("<option value='"+dados[i].nome_completo+"'>"+dados[i].nome_completo+"</option>");
            		}
                }     
            }
        });	
	}

	$('#colaborador_form2').on('change', function() {
	   colaborador_form2 = this.value;
	   $("#area_referencia_form2").empty();
       
	   $.ajax({
            url: 'retorna_areas_referencia.php',
            dataType: 'json',
            type: 'post',
            data:{colaborador:colaborador_form2},
            success: function(dados){
                if(dados.length != 1){
                    $("#area_referencia_form2").append("<option value='' disabled selected>Selecione uma opção</option>");
                }
            	for(var i = 0;dados.length > i;i++){
            		$("#area_referencia_form2").append("<option value='"+dados[i].area_referencia+"'>"+dados[i].area_referencia+"</option>");
            		area_referencia_form2 = dados[i].area_referencia;
                }    
            }
        });	

	});

	$('#colaborador_form4').on('change', function() {
	   colaborador_form4 = this.value;
	   $("#area_referencia_form4").empty();
	   $.ajax({
            url: 'retorna_areas_referencia.php',
            dataType: 'json',
            type: 'post',
            data:{colaborador:colaborador_form4},
            success: function(dados){
            	for(var i = 0;dados.length > i;i++){
            		$("#area_referencia_form4").append("<option value='"+dados[i].area_referencia+"'>"+dados[i].area_referencia+"</option>");
            		area_referencia_form4 = dados[i].area_referencia;
                }     
            }
        });	

	});
	
	function retornaAreas(area){
		$.ajax({
            url: 'retorna_areas.php',
            dataType: 'json',
            type: 'post',
            data:{area:area},
            success: function(dados){
            	for(var i = 0;dados.length > i;i++){
            		if(area == "INDUSTRIAL"){
            			$("#area").append("<option value='"+dados[i].local_micro+"'>"+dados[i].local_micro+"</option>");
            		}else{
            			$("#area_adm").append("<option value='"+dados[i].local_micro+"'>"+dados[i].local_micro+"</option>");
            		}
                }     
            }
        });	
	}

	function retornaAreasComuns(){
		$.ajax({
            url: 'retorna_areas_comuns.php',
            dataType: 'json',
            type: 'post',
           
            success: function(dados){
            	for(var i = 0;dados.length > i;i++){
            		
            			$("#area_comum").append("<option value='"+dados[i].local_micro+"'>"+dados[i].local_micro+"</option>");
            		
            		
                 
                }     
            }
        });	
	}
    // FORM1 SENSO 1
	$('#form1_1_1_file').change(function (event) {
       $("label[for='form1_1_1_file']").css({backgroundColor: "red" });
    });
    $('#form1_1_2_file').change(function (event) {
       $("label[for='form1_1_2_file']").css({backgroundColor: "red" });
    });
    $('#form1_1_3_file').change(function (event) {
       $("label[for='form1_1_3_file']").css({backgroundColor: "red" });
    });
    $('#form1_1_4_file').change(function (event) {
       $("label[for='form1_1_4_file']").css({backgroundColor: "red" });
    });
    $('#form1_1_5_file').change(function (event) {
       $("label[for='form1_1_5_file']").css({backgroundColor: "red" });
    });
    // FORM1 SENSO 2
    $('#form1_2_1_file').change(function (event) {
       $("label[for='form1_2_1_file']").css({backgroundColor: "red" });
    });
    $('#form1_2_2_file').change(function (event) {
       $("label[for='form1_2_2_file']").css({backgroundColor: "red" });
    });
    $('#form1_2_3_file').change(function (event) {
       $("label[for='form1_2_3_file']").css({backgroundColor: "red" });
    });
    $('#form1_2_4_file').change(function (event) {
       $("label[for='form1_2_4_file']").css({backgroundColor: "red" });
    });
    $('#form1_2_5_file').change(function (event) {
       $("label[for='form1_2_5_file']").css({backgroundColor: "red" });
    });
    // FORM1 SENSO 3
    $('#form1_3_1_file').change(function (event) {
       $("label[for='form1_3_1_file']").css({backgroundColor: "red" });
    });
    $('#form1_3_2_file').change(function (event) {
       $("label[for='form1_3_2_file']").css({backgroundColor: "red" });
    });
    $('#form1_3_3_file').change(function (event) {
       $("label[for='form1_3_3_file']").css({backgroundColor: "red" });
    });
    $('#form1_3_4_file').change(function (event) {
       $("label[for='form1_3_4_file']").css({backgroundColor: "red" });
    });
    $('#form1_3_5_file').change(function (event) {
       $("label[for='form1_3_5_file']").css({backgroundColor: "red" });
    });
    // FORM1 SENSO 4
    $('#form1_4_1_file').change(function (event) {
       $("label[for='form1_4_1_file']").css({backgroundColor: "red" });
    });
    $('#form1_4_2_file').change(function (event) {
       $("label[for='form1_4_2_file']").css({backgroundColor: "red" });
    });
    $('#form1_4_3_file').change(function (event) {
       $("label[for='form1_4_3_file']").css({backgroundColor: "red" });
    });
    $('#form1_4_4_file').change(function (event) {
       $("label[for='form1_4_4_file']").css({backgroundColor: "red" });
    });
    $('#form1_4_5_file').change(function (event) {
       $("label[for='form1_4_5_file']").css({backgroundColor: "red" });
    });
     // FORM1 SENSO 5
    $('#form1_5_1_file').change(function (event) {
       $("label[for='form1_5_1_file']").css({backgroundColor: "red" });
    });
    $('#form1_5_2_file').change(function (event) {
       $("label[for='form1_5_2_file']").css({backgroundColor: "red" });
    });
    $('#form1_5_3_file').change(function (event) {
       $("label[for='form1_5_3_file']").css({backgroundColor: "red" });
    });
    $('#form1_5_4_file').change(function (event) {
       $("label[for='form1_5_4_file']").css({backgroundColor: "red" });
    });
    $('#form1_5_5_file').change(function (event) {
       $("label[for='form1_5_5_file']").css({backgroundColor: "red" });
    });
     // FORM1 SENSO 6
    $('#form1_6_1_file').change(function (event) {
       $("label[for='form1_6_1_file']").css({backgroundColor: "red" });
    });
    $('#form1_6_2_file').change(function (event) {
       $("label[for='form1_6_2_file']").css({backgroundColor: "red" });
    });
    $('#form1_6_3_file').change(function (event) {
       $("label[for='form1_6_3_file']").css({backgroundColor: "red" });
    });
    $('#form1_6_4_file').change(function (event) {
       $("label[for='form1_6_4_file']").css({backgroundColor: "red" });
    });
    $('#form1_6_5_file').change(function (event) {
       $("label[for='form1_6_5_file']").css({backgroundColor: "red" });
    });
      // FORM1 SENSO 7
    $('#form1_7_1_file').change(function (event) {
       $("label[for='form1_7_1_file']").css({backgroundColor: "red" });
    });
    $('#form1_7_2_file').change(function (event) {
       $("label[for='form1_7_2_file']").css({backgroundColor: "red" });
    });
    $('#form1_7_3_file').change(function (event) {
       $("label[for='form1_7_3_file']").css({backgroundColor: "red" });
    });
    $('#form1_7_4_file').change(function (event) {
       $("label[for='form1_7_4_file']").css({backgroundColor: "red" });
    });
    $('#form1_7_5_file').change(function (event) {
       $("label[for='form1_7_5_file']").css({backgroundColor: "red" });
    });
      // FORM1 SENSO 8
    $('#form1_8_1_file').change(function (event) {
       $("label[for='form1_8_1_file']").css({backgroundColor: "red" });
    });
    $('#form1_8_2_file').change(function (event) {
       $("label[for='form1_8_2_file']").css({backgroundColor: "red" });
    });
    $('#form1_8_3_file').change(function (event) {
       $("label[for='form1_8_3_file']").css({backgroundColor: "red" });
    });
    $('#form1_8_4_file').change(function (event) {
       $("label[for='form1_8_4_file']").css({backgroundColor: "red" });
    });
    $('#form1_8_5_file').change(function (event) {
       $("label[for='form1_8_5_file']").css({backgroundColor: "red" });
    });
    // FORM1 SENSO 9
    $('#form1_9_1_file').change(function (event) {
       $("label[for='form1_9_1_file']").css({backgroundColor: "red" });
    });
    $('#form1_9_2_file').change(function (event) {
       $("label[for='form1_9_2_file']").css({backgroundColor: "red" });
    });
    $('#form1_9_3_file').change(function (event) {
       $("label[for='form1_9_3_file']").css({backgroundColor: "red" });
    });
    $('#form1_9_4_file').change(function (event) {
       $("label[for='form1_9_4_file']").css({backgroundColor: "red" });
    });
    $('#form1_9_5_file').change(function (event) {
       $("label[for='form1_9_5_file']").css({backgroundColor: "red" });
    });
    // FORM2 SENSO 1
    $('#form2_0_file').change(function (event) {
       $("label[for='form2_0_file']").css({backgroundColor: "red" });
    });
    $('#form2_1_file').change(function (event) {
       $("label[for='form2_1_file']").css({backgroundColor: "red" });
    });
    $('#form2_3_file').change(function (event) {
       $("label[for='form2_3_file']").css({backgroundColor: "red" });
    });
    $('#form2_4_file').change(function (event) {
       $("label[for='form2_4_file']").css({backgroundColor: "red" });
    });
    // FORM3 SENSO 1
    $('#form3_1_1_file').change(function (event) {
       $("label[for='form3_1_1_file']").css({backgroundColor: "red" });
    });
    $('#form3_1_2_file').change(function (event) {
       $("label[for='form3_1_2_file']").css({backgroundColor: "red" });
    });
    $('#form3_1_3_file').change(function (event) {
       $("label[for='form3_1_3_file']").css({backgroundColor: "red" });
    });
    $('#form3_1_4_file').change(function (event) {
       $("label[for='form3_1_4_file']").css({backgroundColor: "red" });
    });
    $('#form3_1_5_file').change(function (event) {
       $("label[for='form3_1_5_file']").css({backgroundColor: "red" });
    });
     // FORM3 SENSO 2
    $('#form3_2_1_file').change(function (event) {
       $("label[for='form3_2_1_file']").css({backgroundColor: "red" });
    });
    $('#form3_2_2_file').change(function (event) {
       $("label[for='form3_2_2_file']").css({backgroundColor: "red" });
    });
    $('#form3_2_3_file').change(function (event) {
       $("label[for='form3_2_3_file']").css({backgroundColor: "red" });
    });
    $('#form3_2_4_file').change(function (event) {
       $("label[for='form3_2_4_file']").css({backgroundColor: "red" });
    });
    $('#form3_2_5_file').change(function (event) {
       $("label[for='form3_2_5_file']").css({backgroundColor: "red" });
    });
    // form3 SENSO 3
    $('#form3_3_1_file').change(function (event) {
       $("label[for='form3_3_1_file']").css({backgroundColor: "red" });
    });
    $('#form3_3_2_file').change(function (event) {
       $("label[for='form3_3_2_file']").css({backgroundColor: "red" });
    });
    $('#form3_3_3_file').change(function (event) {
       $("label[for='form3_3_3_file']").css({backgroundColor: "red" });
    });
    $('#form3_3_4_file').change(function (event) {
       $("label[for='form3_3_4_file']").css({backgroundColor: "red" });
    });
    $('#form3_3_5_file').change(function (event) {
       $("label[for='form3_3_5_file']").css({backgroundColor: "red" });
    });
    // form3 SENSO 4
    $('#form3_4_1_file').change(function (event) {
       $("label[for='form3_4_1_file']").css({backgroundColor: "red" });
    });
    $('#form3_4_2_file').change(function (event) {
       $("label[for='form3_4_2_file']").css({backgroundColor: "red" });
    });
    $('#form3_4_3_file').change(function (event) {
       $("label[for='form3_4_3_file']").css({backgroundColor: "red" });
    });
    $('#form3_4_4_file').change(function (event) {
       $("label[for='form3_4_4_file']").css({backgroundColor: "red" });
    });
    $('#form3_4_5_file').change(function (event) {
       $("label[for='form3_4_5_file']").css({backgroundColor: "red" });
    });
     // form3 SENSO 5
    $('#form3_5_1_file').change(function (event) {
       $("label[for='form3_5_1_file']").css({backgroundColor: "red" });
    });
    $('#form3_5_2_file').change(function (event) {
       $("label[for='form3_5_2_file']").css({backgroundColor: "red" });
    });
    $('#form3_5_3_file').change(function (event) {
       $("label[for='form3_5_3_file']").css({backgroundColor: "red" });
    });
    $('#form3_5_4_file').change(function (event) {
       $("label[for='form3_5_4_file']").css({backgroundColor: "red" });
    });
    $('#form3_5_5_file').change(function (event) {
       $("label[for='form3_5_5_file']").css({backgroundColor: "red" });
    });
     // form3 SENSO 6
    $('#form3_6_1_file').change(function (event) {
       $("label[for='form3_6_1_file']").css({backgroundColor: "red" });
    });
    $('#form3_6_2_file').change(function (event) {
       $("label[for='form3_6_2_file']").css({backgroundColor: "red" });
    });
    $('#form3_6_3_file').change(function (event) {
       $("label[for='form3_6_3_file']").css({backgroundColor: "red" });
    });
    $('#form3_6_4_file').change(function (event) {
       $("label[for='form3_6_4_file']").css({backgroundColor: "red" });
    });
    $('#form3_6_5_file').change(function (event) {
       $("label[for='form3_6_5_file']").css({backgroundColor: "red" });
    });
      // form3 SENSO 7
    $('#form3_7_1_file').change(function (event) {
       $("label[for='form3_7_1_file']").css({backgroundColor: "red" });
    });
    $('#form3_7_2_file').change(function (event) {
       $("label[for='form3_7_2_file']").css({backgroundColor: "red" });
    });
    $('#form3_7_3_file').change(function (event) {
       $("label[for='form3_7_3_file']").css({backgroundColor: "red" });
    });
    $('#form3_7_4_file').change(function (event) {
       $("label[for='form3_7_4_file']").css({backgroundColor: "red" });
    });
    $('#form3_7_5_file').change(function (event) {
       $("label[for='form3_7_5_file']").css({backgroundColor: "red" });
    });
      // form3 SENSO 8
    $('#form3_8_1_file').change(function (event) {
       $("label[for='form3_8_1_file']").css({backgroundColor: "red" });
    });
    $('#form3_8_2_file').change(function (event) {
       $("label[for='form3_8_2_file']").css({backgroundColor: "red" });
    });
    $('#form3_8_3_file').change(function (event) {
       $("label[for='form3_8_3_file']").css({backgroundColor: "red" });
    });
    $('#form3_8_4_file').change(function (event) {
       $("label[for='form3_8_4_file']").css({backgroundColor: "red" });
    });
    $('#form3_8_5_file').change(function (event) {
       $("label[for='form3_8_5_file']").css({backgroundColor: "red" });
    });
    // form3 SENSO 9
    $('#form3_9_1_file').change(function (event) {
       $("label[for='form3_9_1_file']").css({backgroundColor: "red" });
    });
    $('#form3_9_2_file').change(function (event) {
       $("label[for='form3_9_2_file']").css({backgroundColor: "red" });
    });
    $('#form3_9_3_file').change(function (event) {
       $("label[for='form3_9_3_file']").css({backgroundColor: "red" });
    });
    $('#form3_9_4_file').change(function (event) {
       $("label[for='form3_9_4_file']").css({backgroundColor: "red" });
    });
    $('#form3_9_5_file').change(function (event) {
       $("label[for='form3_9_5_file']").css({backgroundColor: "red" });
    });
    // FORM 4 SENSO 1
    $('#form4_0_file').change(function (event) {
       $("label[for='form4_0_file']").css({backgroundColor: "red" });
    });
    $('#form4_1_file').change(function (event) {
       $("label[for='form4_1_file']").css({backgroundColor: "red" });
    });
    $('#form4_2_file').change(function (event) {
       $("label[for='form4_2_file']").css({backgroundColor: "red" });
    });
    $('#form4_3_file').change(function (event) {
       $("label[for='form4_3_file']").css({backgroundColor: "red" });
    });
    $('#form4_4_file').change(function (event) {
       $("label[for='form4_4_file']").css({backgroundColor: "red" });
    });
    
    // form5 SENSO 1
    $('#form5_1_1_file').change(function (event) {
       $("label[for='form5_1_1_file']").css({backgroundColor: "red" });
    });
    $('#form5_1_2_file').change(function (event) {
       $("label[for='form5_1_2_file']").css({backgroundColor: "red" });
    });
    $('#form5_1_3_file').change(function (event) {
       $("label[for='form5_1_3_file']").css({backgroundColor: "red" });
    });
    $('#form5_1_4_file').change(function (event) {
       $("label[for='form5_1_4_file']").css({backgroundColor: "red" });
    });
    $('#form5_1_5_file').change(function (event) {
       $("label[for='form5_1_5_file']").css({backgroundColor: "red" });
    });
    // form5 SENSO 2
    $('#form5_2_1_file').change(function (event) {
       $("label[for='form5_2_1_file']").css({backgroundColor: "red" });
    });
    $('#form5_2_2_file').change(function (event) {
       $("label[for='form5_2_2_file']").css({backgroundColor: "red" });
    });
    $('#form5_2_3_file').change(function (event) {
       $("label[for='form5_2_3_file']").css({backgroundColor: "red" });
    });
    $('#form5_2_4_file').change(function (event) {
       $("label[for='form5_2_4_file']").css({backgroundColor: "red" });
    });
    $('#form5_2_5_file').change(function (event) {
       $("label[for='form5_2_5_file']").css({backgroundColor: "red" });
    });
    // form5 SENSO 3
    $('#form5_3_1_file').change(function (event) {
       $("label[for='form5_3_1_file']").css({backgroundColor: "red" });
    });
    $('#form5_3_2_file').change(function (event) {
       $("label[for='form5_3_2_file']").css({backgroundColor: "red" });
    });
    $('#form5_3_3_file').change(function (event) {
       $("label[for='form5_3_3_file']").css({backgroundColor: "red" });
    });
    $('#form5_3_4_file').change(function (event) {
       $("label[for='form5_3_4_file']").css({backgroundColor: "red" });
    });
    $('#form5_3_5_file').change(function (event) {
       $("label[for='form5_3_5_file']").css({backgroundColor: "red" });
    });
    // form5 SENSO 4
    $('#form5_4_1_file').change(function (event) {
       $("label[for='form5_4_1_file']").css({backgroundColor: "red" });
    });
    $('#form5_4_2_file').change(function (event) {
       $("label[for='form5_4_2_file']").css({backgroundColor: "red" });
    });
    $('#form5_4_3_file').change(function (event) {
       $("label[for='form5_4_3_file']").css({backgroundColor: "red" });
    });
    $('#form5_4_4_file').change(function (event) {
       $("label[for='form5_4_4_file']").css({backgroundColor: "red" });
    });
    $('#form5_4_5_file').change(function (event) {
       $("label[for='form5_4_5_file']").css({backgroundColor: "red" });
    });
     // form5 SENSO 5
    $('#form5_5_1_file').change(function (event) {
       $("label[for='form5_5_1_file']").css({backgroundColor: "red" });
    });
    $('#form5_5_2_file').change(function (event) {
       $("label[for='form5_5_2_file']").css({backgroundColor: "red" });
    });
    $('#form5_5_3_file').change(function (event) {
       $("label[for='form5_5_3_file']").css({backgroundColor: "red" });
    });
    $('#form5_5_4_file').change(function (event) {
       $("label[for='form5_5_4_file']").css({backgroundColor: "red" });
    });
    $('#form5_5_5_file').change(function (event) {
       $("label[for='form5_5_5_file']").css({backgroundColor: "red" });
    });
     // form5 SENSO 6
    $('#form5_6_1_file').change(function (event) {
       $("label[for='form5_6_1_file']").css({backgroundColor: "red" });
    });
    $('#form5_6_2_file').change(function (event) {
       $("label[for='form5_6_2_file']").css({backgroundColor: "red" });
    });
    $('#form5_6_3_file').change(function (event) {
       $("label[for='form5_6_3_file']").css({backgroundColor: "red" });
    });
    $('#form5_6_4_file').change(function (event) {
       $("label[for='form5_6_4_file']").css({backgroundColor: "red" });
    });
    $('#form5_6_5_file').change(function (event) {
       $("label[for='form5_6_5_file']").css({backgroundColor: "red" });
    });
      // form5 SENSO 7
    $('#form5_7_1_file').change(function (event) {
       $("label[for='form5_7_1_file']").css({backgroundColor: "red" });
    });
    $('#form5_7_2_file').change(function (event) {
       $("label[for='form5_7_2_file']").css({backgroundColor: "red" });
    });
    $('#form5_7_3_file').change(function (event) {
       $("label[for='form5_7_3_file']").css({backgroundColor: "red" });
    });
    $('#form5_7_4_file').change(function (event) {
       $("label[for='form5_7_4_file']").css({backgroundColor: "red" });
    });
    $('#form5_7_5_file').change(function (event) {
       $("label[for='form5_7_5_file']").css({backgroundColor: "red" });
    });
      // form5 SENSO 8
    $('#form5_8_1_file').change(function (event) {
       $("label[for='form5_8_1_file']").css({backgroundColor: "red" });
    });
    $('#form5_8_2_file').change(function (event) {
       $("label[for='form5_8_2_file']").css({backgroundColor: "red" });
    });
    $('#form5_8_3_file').change(function (event) {
       $("label[for='form5_8_3_file']").css({backgroundColor: "red" });
    });
    $('#form5_8_4_file').change(function (event) {
       $("label[for='form5_8_4_file']").css({backgroundColor: "red" });
    });
    $('#form5_8_5_file').change(function (event) {
       $("label[for='form5_8_5_file']").css({backgroundColor: "red" });
    });
    // form5 SENSO 9
    $('#form5_9_1_file').change(function (event) {
       $("label[for='form5_9_1_file']").css({backgroundColor: "red" });
    });
    $('#form5_9_2_file').change(function (event) {
       $("label[for='form5_9_2_file']").css({backgroundColor: "red" });
    });
    $('#form5_9_3_file').change(function (event) {
       $("label[for='form5_9_3_file']").css({backgroundColor: "red" });
    });
    $('#form5_9_4_file').change(function (event) {
       $("label[for='form5_9_4_file']").css({backgroundColor: "red" });
    });
    $('#form5_9_5_file').change(function (event) {
       $("label[for='form5_9_5_file']").css({backgroundColor: "red" });
    });


</script>
 <!-- <script type="text/javascript">
    var comboGoogleTradutor = null; //Varialvel global

    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'pt',
            includedLanguages: 'en,es,it',
            layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
        }, 'google_translate_element');

        comboGoogleTradutor = document.getElementById("google_translate_element").querySelector(".goog-te-combo");
    }

    function changeEvent(el) {
        if (el.fireEvent) {
            el.fireEvent('onchange');
        } else {
            var evObj = document.createEvent("HTMLEvents");

            evObj.initEvent("change", false, true);
            el.dispatchEvent(evObj);
        }
    }

    function trocarIdioma(sigla) {
        if (comboGoogleTradutor) {
            comboGoogleTradutor.value = sigla;
            changeEvent(comboGoogleTradutor);//Dispara a troca
        }
    }
    window.onload = function(){
        trocarIdioma('en');
    }
    </script>
    <script type="text/javascript" src="biblioteca_google.txt"></script> -->
</body>
</html>