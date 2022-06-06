<?php
$id = $_GET["id"];
?>
<!DOCTYPE html>
<html>
<head>
	<script src="JS/jquery.min.js"></script>
	<script src="JS/sweetalert.min.js"></script>
	<title></title>
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
		  font-size: 17px;
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
                width: 100%;
                background-color: rgb(46,55,64);
                border-left: 1px solid black;
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
		  /*background-color: rgb(0,97,254);*/
		  border-radius: 5px;
		  font-family: 'Arial';
		  color: rgb(0,97,254);
		  text-decoration: underline;
		  cursor: pointer;
		  margin: 10px;
		  font-size: 10px;
		  padding: 6px 20px
		}
	</style>
	</style>
</head>
<body onload="carregar_dados()">
<div class="menu-top">
	<div class="row">
		<div class="col10">
			<a href="sair.php"><img src="imagens/logokoerberbranco.png" id="logo" style="width: 5%;margin-left:15px"></a>
		</div>
		<div class="col1 aligned-right">
			<img src="imagens/logoLean.png" id="logo" style="width: 85%">
		</div>
		<div class="col1 aligned-right">	
			<img src="imagens/logo8s.png" id="logo" style="width: 50%">
		</div>
	</div>
</div>
<div style="width:100%;float: left;height: 6vh">
			<div  class="divisor1 negrito centralizado-esquerda">
				Área Administrativa
			</div>
			<div class="divisor2 centralizado" id="area_adm">
				
			</div>
			<div  class="negrito centralizado divisor3">
				Auditor
			</div>
			<div  class="divisor4 centralizado" id="auditor">
				
			</div>
		</div>

		<div style="width: 100%;float: left;height: 6vh">
			<div  class="divisor1 centralizado-esquerda negrito">
				Responsável 8S
			</div>
			<div  class="divisor2 centralizado" id="responsavel_8s">
				
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

	<!-- Descrição Senso-->
	<div class="descricao_senso">
	 	1. Máquinas e Equipamentos: impressoras, computadores, telefones, fax, dentre outros.
	</div>
	<!-- Linha 1 -->
	<div style="width:100%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Utilização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Apenas equipamentos e/ou máquinas necessárias no local de trabalho.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_1_1" id="form3_1_1" disabled  class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" id="form3_1_1_obs" name="form3_1_1_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1" >
	 			<a  id="form3_1_1_file" target="_blank"> Anexo</a>
	 		</div>
		</div>
	 </div>
	
	<!-- Linha 1 -->
	<div style="width: 100%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Organização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Equipamentos, cabos e infraestrutura necessária estão agrupados e dispostos de modo  a facilitar os trabalhos de rotina.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_1_2" id="form3_1_2" disabled class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" id="form3_1_2_obs" name="form3_1_2_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<a  id="form3_1_2_file" target="_blank"> Anexo</a>
	 		</div>
		</div>
	 </div>
	 
	<!-- Linha 1 -->
	<div style="width: 100%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Limpeza
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Estão livres de poeira e outras evidências de falta de limpeza regular.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_1_3" id="form3_1_3" disabled class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" id="form3_1_3_obs" name="form3_1_3_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<a  id="form3_1_3_file" target="_blank"> Anexo</a>
	 		</div>
		</div>
	 </div>
	
	<!-- Linha 1 -->
	<div style="width: 100%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Conservação
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Estão com todas as teclas, tela e monitores intactos e todos os demais itens em bom estado de conservação.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_1_4" id="form3_1_4" disabled class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" id="form3_1_4_obs" name="form3_1_4_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<a  id="form3_1_4_file" target="_blank"> Anexo</a>
	 		</div>
		</div>
	 </div>
	 
	<!-- Linha 1 -->
	<div style="width: 100%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Disciplina
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Os equipamentos em uso atendem aos padrões de qualidade relativos a quantidade, modelo e layout recomendados pelo Programa 8S.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_1_5" id="form3_1_5" disabled disabled class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" id="form3_1_5_obs" name="form3_1_5_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<a  id="form3_1_5_file" target="_blank"> Anexo</a>
	 		</div>
		</div>
	 </div>
	 
	<!-- Descrição Senso-->
	<div class="descricao_senso">
	 	2. Gaveteiros, Armários e Arquivos.
	</div>
	<!-- Linha 1 -->
	<div style="width: 100%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Utilização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Os materiais armazenados atendem aos critérios de utilização de acordo com a rotina de uso. Não existem materiais armazenados que não são utilizados.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_2_1" id="form3_2_1" disabled class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" id="form3_2_1_obs" name="form3_2_1_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<a  id="form3_2_1_file" target="_blank"> Anexo</a>
	 		</div>
		</div>
	 </div>
	 
	<!-- Linha 1 -->
	<div style="width: 100%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Organização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			As pastas estão guardadas, identificadas e organizadas no interior dos arquivos. Nos gaveteiros todos os objetos e/ou papéis estão armazenados conforme identificação.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_2_2" id="form3_2_2" disabled class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" id="form3_2_2_obs" name="form3_2_2_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<a  id="form3_2_2_file" target="_blank"> Anexo</a>
	 		</div>
		</div>
	 </div>
	 
	<!-- Linha 1 -->
	<div style="width: 100%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Limpeza
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Os armários e arquivos estão isentos de poeiras e apresentam limpeza regular.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_2_3" id="form3_2_3" disabled class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" id="form3_2_3_obs" name="form3_2_3_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<a  id="form3_2_3_file" target="_blank"> Anexo</a>
	 		</div>
		</div>
	 </div>
	
	<!-- Linha 1 -->
	<div style="width: 100%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Conservação
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			As portas, pés e rodas estão em bom estado de conservação.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_2_4" id="form3_2_4" disabled class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" id="form3_2_4_obs" name="form3_2_4_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<a  id="form3_2_4_file" target="_blank"> Anexo</a>
	 		</div>
		</div>
	 </div>
	
	<!-- Linha 1 -->
	<div style="width: 100%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Disciplina
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			A organização interna corresponde à identificação sinalizada no móvel.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_2_5" id="form3_2_5" disabled disabled class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" id="form3_2_5_obs" name="form3_2_5_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<a  id="form3_2_5_file" target="_blank"> Anexo</a>
	 		</div>
		</div>
	 </div>
	 
	 <!-- Descrição Senso-->
	<div class="descricao_senso">
	 	3. Pisos.
	</div>
	<!-- Linha 1 -->
	<div style="width: 100%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Utilização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			A utilização do piso está adequada às necessidades da operação do ambiente.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_3_1" id="form3_3_1" disabled class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" id="form3_3_1_obs" name="form3_3_1_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<a  id="form3_3_1_file" target="_blank"> Anexo</a>
	 		</div>
		</div>
	 </div>
	
	<!-- Linha 1 -->
	<div style="width: 100%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Organização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Todos os objetos e/ou estruturas estão nos locais sinalizados conforme recomendação para o ambiente.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_3_2" id="form3_3_2" disabled class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" id="form3_3_2_obs" name="form3_3_2_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<a  id="form3_3_2_file" target="_blank"> Anexo</a>
	 		</div>
		</div>
	 </div>
	
	<!-- Linha 1 -->
	<div style="width: 100%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Limpeza
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Estão livres de poeira e outras evidências de falta de limpeza regular.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_3_3" id="form3_3_3" disabled class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" id="form3_3_3_obs" name="form3_3_3_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<a  id="form3_3_3_file" target="_blank"> Anexo</a>
	 		</div>
		</div>
	 </div>
	 
	<!-- Linha 1 -->
	<div style="width: 100%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Conservação
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			O piso não possui imperfeições que possibilitam a ocorrência de acidentes. A sinalização está visível e legível.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_3_4" id="form3_3_4" disabled class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" id="form3_3_4_obs" name="form3_3_4_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<a  id="form3_3_4_file" target="_blank"> Anexo</a>
	 		</div>
		</div>
	 </div>
	
	<!-- Linha 1 -->
	<div style="width: 100%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Disciplina
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			As características do piso atendem as necessidades do ambiente e todas as sinalizações são respeitadas.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_3_5" id="form3_3_5" disabled disabled class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" id="form3_3_5_obs" name="form3_3_5_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<a  id="form3_3_5_file" target="_blank"> Anexo</a>
	 		</div>
		</div>
	 </div>
	
 	<!-- Descrição Senso-->
	<div class="descricao_senso">
	 	4. Instalações Elétricas.
	</div>
	<!-- Linha 1 -->
	<div style="width: 100%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Utilização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Toda a fiação elétrica esta presa ou embutida conforme padrão das normas técnicas.

	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_4_1" id="form3_4_1" disabled class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" id="form3_4_1_obs" name="form3_4_1_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<a  id="form3_4_1_file" target="_blank"> Anexo</a>
	 		</div>
		</div>
	 </div>
	 
	<!-- Linha 1 -->
	<div style="width: 100%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Organização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			As tomadas e demais itens elétricos possuem tensão identificada.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_4_2" id="form3_4_2" disabled class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" id="form3_4_2_obs" name="form3_4_2_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<a  id="form3_4_2_file" target="_blank"> Anexo</a>
	 		</div>
		</div>
	 </div>
	
	<!-- Linha 1 -->
	<div style="width: 100%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Limpeza
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			As instalações elétricas, lâmpadas e interruptores estão limpos.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_4_3" id="form3_4_3" disabled class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" id="form3_4_3_obs" name="form3_4_3_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<a  id="form3_4_3_file" target="_blank"> Anexo</a>
	 		</div>
		</div>
	 </div>
	
	<!-- Linha 1 -->
	<div style="width: 100%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Conservação
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Todos os fios elétricos estão devidamente protegidos evitando a ocorrência de acidentes.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_4_4" id="form3_4_4" disabled class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" id="form3_4_4_obs" name="form3_4_4_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<a  id="form3_4_4_file" target="_blank"> Anexo</a>
	 		</div>
		</div>
	 </div>
	 
	<!-- Linha 1 -->
	<div style="width: 100%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Disciplina
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Apenas as lâmpadas e aparelhos necessários estão energizados no momento.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_4_5" id="form3_4_5" disabled disabled class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" id="form3_4_5_obs" name="form3_4_5_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<a  id="form3_4_5_file" target="_blank"> Anexo</a>
	 		</div>
		</div>
	 </div>
	 
	 <!-- Descrição Senso-->
	<div class="descricao_senso">
	 	5. Cestos de Lixo.
	</div>
	<!-- Linha 1 -->
	<div style="width: 100%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Utilização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Todos os tipos de resíduos produzidos na área possuem local de descarte adequados.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_5_1" id="form3_5_1" disabled class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" id="form3_5_1_obs" name="form3_5_1_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<a  id="form3_5_1_file" target="_blank"> Anexo</a>
	 		</div>
		</div>
	 </div>
	 
	<!-- Linha 1 -->
	<div style="width: 100%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Organização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Os locais de coleta de resíduos estão sinalizados e posicionados de maneira ordenada. Todos os coletores estão identificados por tipos de resíduos.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_5_2" id="form3_5_2" disabled class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" id="form3_5_2_obs" name="form3_5_2_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<a  id="form3_5_2_file" target="_blank"> Anexo</a>
	 		</div>
		</div>
	 </div>
	 
	<!-- Linha 1 -->
	<div style="width: 100%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Limpeza
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Não há lixo depositado ao redor do coletor e estes apresentam limpeza adequada.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_5_3" id="form3_5_3" disabled class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" id="form3_5_3_obs"  name="form3_5_3_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<a  id="form3_5_3_file" target="_blank"> Anexo</a>
	 		</div>
		</div>
	 </div>
	
	<!-- Linha 1 -->
	<div style="width: 100%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Conservação
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Os coletores não apresentam danos internos e/ou externos. As tampas abrem de maneira adequada e a identificação está devidamente colada à superfície lateral.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_5_4" id="form3_5_4" disabled class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" id="form3_5_4_obs" name="form3_5_4_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<a  id="form3_5_4_file" target="_blank"> Anexo</a>
	 		</div>
		</div>
	 </div>
	
	<!-- Linha 1 -->
	<div style="width: 100%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Disciplina
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			A separação dos resíduos segue a sinalização apresentada nos coletores.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_5_5" id="form3_5_5" disabled disabled class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" id="form3_5_5_obs" name="form3_5_5_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<a  id="form3_5_5_file" target="_blank"> Anexo</a>
	 		</div>
		</div>
	 </div>
	

	 <!-- Descrição Senso-->
	<div class="descricao_senso">
	 	6. Quadros de Aviso.
	</div>
	<!-- Linha 1 -->
	<div style="width: 100%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Utilização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Atendem à necessidade do setor e estão em local de fácil acesso e visualização.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_6_1" id="form3_6_1" disabled class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" id="form3_6_1_obs" name="form3_6_1_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<a  id="form3_6_1_file" target="_blank"> Anexo</a>
	 		</div>
		</div>
	 </div>
	
	<!-- Linha 1 -->
	<div style="width: 100%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Organização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Possuem comunicados ordenados e padronizados.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_6_2" id="form3_6_2" disabled class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" id="form3_6_2_obs" name="form3_6_2_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<a  id="form3_6_2_file" target="_blank"> Anexo</a>
	 		</div>
		</div>
	 </div>
	
	<!-- Linha 1 -->
	<div style="width: 100%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Limpeza
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Estão livres de poeira e outras evidências de falta de limpeza adequada.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_6_3" id="form3_6_3" disabled class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" id="form3_6_3_obs" name="form3_6_3_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<a  id="form3_6_3_file" target="_blank"> Anexo</a>
	 		</div>
		</div>
	 </div>
	
	<!-- Linha 1 -->
	<div style="width: 100%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Conservação
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Estão identificados, com logos oficiais atualizadas e apresentam estrutura adequada.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_6_4" id="form3_6_4" disabled class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" id="form3_6_4_obs" name="form3_6_4_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<a  id="form3_6_4_file" target="_blank"> Anexo</a>
	 		</div>
		</div>
	 </div>
	
	<!-- Linha 1 -->
	<div style="width: 100%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Disciplina
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Todos os comunicados apresentados são de poucos dias atrás.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_6_5" id="form3_6_5" disabled disabled class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" id="form3_6_5_obs" name="form3_6_5_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<a  id="form3_6_5_file" target="_blank"> Anexo</a>
	 		</div>
		</div>
	 </div>


	
	  <!-- Descrição Senso-->
	<div class="descricao_senso">
	 	7. Sinalização.	
	</div>
	<!-- Linha 1 -->
	<div style="width: 100%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Utilização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			As placas de sinalização são legíveis e suprem todas as necessidades da área. As faixas de segurança e estacionamento são adequadas à necessidade do ambiente.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_7_1" id="form3_7_1" disabled class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" id="form3_7_1_obs" name="form3_7_1_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<a  id="form3_7_1_file" target="_blank"> Anexo</a>
	 		</div>
		</div>
	 </div>
	
	<!-- Linha 4 -->
	<div style="width: 100%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha4">
	 			Organização
	 		</div>
	 		<div class="item_avaliado-item linha4">
	 			As sinalizações especificas de risco elétrico e/ou segurança estão visíveis e claras para todos. Ex.: Painéis elétricos, caixa de coluna, quadros de distribuição, acessos, salas de controle, equipamentos de combate a incêndio etc.
	 		</div>
	 		<div class="status-item linha4">
	 			<input type="checkbox" name="form3_7_2" id="form3_7_2" disabled class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha4">
	 			<textarea style="width: 100%;resize: none;height: 90%" id="form3_7_2_obs" name="form3_7_2_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha4">
	 			<a  id="form3_7_2_file" target="_blank"> Anexo</a>
	 		</div>
		</div>
	 </div>
	
	<!-- Linha 1 -->
	<div style="width: 100%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Limpeza
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Estão livres de poeira e outras evidências de falta de limpeza adequada.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_7_3" id="form3_7_3" disabled class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" id="form3_7_3_obs" name="form3_7_3_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<a  id="form3_7_3_file" target="_blank"> Anexo</a>
	 		</div>
		</div>
	 </div>
	 
	<!-- Linha 4 -->
	<div style="width: 100%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha4">
	 			Conservação
	 		</div>
	 		<div class="item_avaliado-item linha4">
	 			Possuem pintura adequada e informações atualizadas. As sinalizações temporárias de segurança estão instaladas em posição adequada e visível à todos. Ex.: Proteção de cabos energizados, painéis em manutenção, risco de quedas, desnível, placas e sinais luminosos.
	 		</div>
	 		<div class="status-item linha4">
	 			<input type="checkbox" name="form3_7_4" id="form3_7_4" disabled class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha4">
	 			<textarea style="width: 100%;resize: none;height: 90%" id="form3_7_4_obs" name="form3_7_4_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha4">
	 			<a  id="form3_7_4_file" target="_blank"> Anexo</a>
	 		</div>
		</div>
	 </div>
	
	<!-- Linha 1 -->
	<div style="width: 100%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Disciplina
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			As recomendações e informações são praticadas e respeitadas por todos na área.
	 		</div>
	 		<div class="status-item linha1">
	 		    <input type="checkbox" name="form3_7_5" id="form3_7_5" disabled disabled class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" id="form3_7_5_obs" name="form3_7_5_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<a  id="form3_7_5_file" target="_blank"> Anexo</a>
	 		</div>
		</div>
	 </div>
	 



	 <!-- Descrição Senso-->
	
	<div class="descricao_senso">
	 8. Extintores, Caixas de Hidrantes, Mangueiras e Macas			
	</div>
	<!-- Linha 1 -->
	<div style="width: 100%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Utilização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Estão em posição de acesso adequado e em conformidade com o projeto preventivo de incêndio. Existe sinalização da rota de fuga.
	 		</div>
	 		<div class="status-item linha1">
	 			 <input type="checkbox" name="form3_8_1" id="form3_8_1" disabled class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" id="form3_8_1_obs" name="form3_8_1_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<a  id="form3_8_1_file" target="_blank"> Anexo</a>
	 		</div>
		</div>
	 </div>
	
	<!-- Linha 4 -->
	<div style="width: 100%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha4">
	 			Organização
	 		</div>
	 		<div class="item_avaliado-item linha4">
	 			Estão em local adequado e indicado pelas sinalizações. Não obstruem a passagem de carga e pessoas.
	 		</div>
	 		<div class="status-item linha4">
	 			<input type="checkbox" name="form3_8_2" id="form3_8_2" disabled class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha4">
	 			<textarea style="width: 100%;resize: none;height: 90%" id="form3_8_2_obs" name="form3_8_2_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha4">
	 			<a  id="form3_8_2_file" target="_blank"> Anexo</a>
	 		</div>
		</div>
	 </div>
	
	<!-- Linha 1 -->
	<div style="width: 100%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Limpeza
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Estão livres de poeira e outras evidências de falta de limpeza adequada.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_8_3" id="form3_8_3" disabled class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" id="form3_8_3_obs" name="form3_8_3_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<a  id="form3_8_3_file" target="_blank"> Anexo</a>
	 		</div>
		</div>
	 </div>
	
	<!-- Linha 4 -->
	<div style="width: 100%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha4">
	 			Conservação
	 		</div>
	 		<div class="item_avaliado-item linha4">
	 			Estão identificados, com as revisões em dia e sem obstrução de acesso.
	 		</div>
	 		<div class="status-item linha4">
	 			<input type="checkbox" name="form3_8_4" id="form3_8_4" disabled class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha4">
	 			<textarea style="width: 100%;resize: none;height: 90%" id="form3_8_4_obs" name="form3_8_4_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha4">
	 			<a  id="form3_8_4_file" target="_blank"> Anexo</a>
	 		</div>
		</div>
	 </div>
	 
	<!-- Linha 1 -->
	<div style="width: 100%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Disciplina
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Possuem manutenção periódica realizada com lacres visíveis e estão com prazo de validade em vigor. Possuem o controle de inspeção visível.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_8_5" id="form3_8_5"  disabled class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" id="form3_8_5_obs" name="form3_8_5_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<a  id="form3_8_5_file" target="_blank"> Anexo</a>
	 		</div>
		</div>
	 </div>
	

	  <!-- Descrição Senso-->
	<div class="descricao_senso">
	 9. Estruturas prediais, cortinas, persianas, divisórias, biombos, sistema de ventilação, layout de área, etc.		
	</div>
	<!-- Linha 4 -->
	<div style="width: 100%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha4">
	 			Utilização
	 		</div>
	 		<div class="item_avaliado-item linha4">
	 			Os materiais utilizados no ambiente atendem aos critérios de utilização de acordo com a necessidade do ambiente. Não existem materiais armazenados que não são utilizados na rotina em andamento.
	 		</div>
	 		<div class="status-item linha4">
	 			<input type="checkbox" name="form3_9_1" id="form3_9_1" disabled class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha4">
	 			<textarea style="width: 100%;resize: none;height: 90%" id="form3_9_1_obs" name="form3_9_1_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha4">
	 			<a  id="form3_9_1_file" target="_blank"> Anexo</a>
	 		</div>
		</div>
	 </div>
	 
	<!-- Linha 1 -->
	<div style="width: 100%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Organização
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Os materiais estão dispostos organizados de acordo com o layout da área. Ao término da jornada de trabalho ficam organizados e livres de materiais desnecessários ou resíduos.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_9_2" id="form3_9_2" disabled class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" id="form3_9_2_obs" name="form3_9_2_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<a  id="form3_9_2_file" target="_blank"> Anexo</a>
	 		</div>
		</div>
	 </div>
	
	<!-- Linha 1 -->
	<div style="width: 100%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			Limpeza
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Estão isentos de poeiras e apresentando limpeza regular.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_9_3" id="form3_9_3" disabled class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" id="form3_9_3_obs" name="form3_9_3_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			<a  id="form3_9_3_file" target="_blank"> Anexo</a>
	 		</div>
		</div>
	 </div>
	
	<!-- Linha 2 -->
	<div style="width: 100%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha2">
	 			Conservação
	 		</div>
	 		<div class="item_avaliado-item linha2">
	 			Todas as estruturas estão com a pintura intacta, os controles do sistema de ventilação apresentam boa aparência, todas as portas estão reguladas com abertura e fechamento suaves, todas as janelas apresentam boas condições de uso, todas as salas estão claramente identificadas, organizadas de forma a facilitar a visualização.
	 		</div>
	 		<div class="status-item linha2">
	 			<input type="checkbox" name="form3_9_4" id="form3_9_4" disabled class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha2">
	 			<textarea style="width: 100%;resize: none;height: 90%" id="form3_9_4_obs" name="form3_9_4_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha2">
	 			<a  id="form3_9_4_file" target="_blank"> Anexo</a>
	 		</div>
		</div>
	 </div>
	 
	<!-- Linha 2 -->
	<div style="width: 100%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha2">
	 			Disciplina
	 		</div>
	 		<div class="item_avaliado-item linha2">
	 			O posicionamento mantém espaço adequado de circulação para acesso de forma segura, facilitando a movimentação de pessoas e de materiais. As peças disponíveis visivelmente atendem aos padrões de qualidade relativos à forma de movimentação, substituição, acondicionamento, quantidades, modelo, etc.
	 		</div>
	 		<div class="status-item linha2">
	 			<input type="checkbox" name="form3_9_5" id="form3_9_5" disabled  class="checkbox_form3">
	 		</div>
	 		<div class="observacoes-item linha2">
	 			<textarea style="width: 100%;resize: none;height: 90%" id="form3_9_5_obs" name="form3_9_5_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha2">
	 			<a  id="form3_9_5_file" target="_blank"> Anexo</a>
	 		</div>
		</div>
	 </div>
	
	  <div class="descricao_senso divisoria">
	 	10. Melhoria Contínua.				
	</div>
	<!-- Linha 1 -->
	<div style="width: 100%;float: left;margin-top: 0px ">
	 	<div style="width: 100%;float: left">
			<div class="senso-item linha1">
	 			
	 		</div>
	 		<div class="item_avaliado-item linha1">
	 			Todas as NCs registradas em auditorias anteriores foram resolvidas.
	 		</div>
	 		<div class="status-item linha1">
	 			<input type="checkbox" name="form3_10_1" id="form3_10_1" disabled class="checkbox2_form3">
	 		</div>
	 		<div class="observacoes-item linha1">
	 			<textarea style="width: 100%;resize: none;height: 90%" id="form3_10_1" name="form3_10_1_obs"></textarea>
	 		</div>
	 		<div class="foto-item linha1">
	 			Nota MC
	 		</div>
		</div>
	</div>
	
 	<!-- Linha 4 -->
	<div style="width: 100%;float: left;margin-top: 0px ">
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
	 <script type="text/javascript">
	 	 $("textarea").prop("readonly",true);

	 	function carregar_dados(){
	 		
	 		var id = "<?php echo $id?>";
	 		$.ajax({
	            url: 'informacoes_formulario.php',
	            dataType: 'json',
	            type: 'post',
	            data:{id:id},
	            success: function(dados){

	            	$("#area_adm").html(dados[0].area_adm);
					$("#responsavel_8s").html(dados[0].responsavel_8s);
					$("#auditor").html(dados[0].auditor);
					$("#data_hoje").html(dados[0].data);

					//SENSO 1
						//SENSO 1 UTILIZAÇÃO
						if(dados[0].senso1_utilizacao == "checked"){
							$("#form3_1_1").prop("checked",true);
						}
						if(dados[0].senso1_utilizacao_upload == ""){
							$("#form3_1_1_file").css("visibility" , "hidden");
						}else{
							$("#form3_1_1_file").css("visibility" , "visible");
							$("#form3_1_1_file").attr("href" , dados[0].senso1_utilizacao_upload);
						}
						$("#form3_1_1_obs").text(dados[0].senso1_utilizacao_obs);

						//SENSO 1 ORGANIZAÇÃO
						if(dados[0].senso1_organizacao == "checked"){
							$("#form3_1_2").prop("checked",true);
						}
						if(dados[0].senso1_organizacao_upload == ""){
							$("#form3_1_2_file").css("visibility" , "hidden");
						}else{
							$("#form3_1_2_file").css("visibility" , "visible");
							$("#form3_1_2_file").attr("href" , dados[0].senso1_organizacao_upload);
						}
						$("#form3_1_2_obs").text(dados[0].senso1_organizacao_obs);
						
						//SENSO 1 LIMPEZA
						if(dados[0].senso1_limpeza == "checked"){
							$("#form3_1_3").prop("checked",true);
						}
						if(dados[0].senso1_limpeza_upload == ""){
							$("#form3_1_3_file").css("visibility" , "hidden");
						}else{
							$("#form3_1_3_file").css("visibility" , "visible");
							$("#form3_1_3_file").attr("href" , dados[0].senso1_limpeza_upload);
						}
						$("#form3_1_3_obs").text(dados[0].senso1_limpeza_obs);

						//SENSO 1 CONSERVAÇÃO
						if(dados[0].senso1_conservacao == "checked"){
							$("#form3_1_4").prop("checked",true);
						}
						if(dados[0].senso1_conservacao_upload == ""){
							$("#form3_1_4_file").css("visibility" , "hidden");
						}else{
							$("#form3_1_4_file").css("visibility" , "visible");
							$("#form3_1_4_file").attr("href" , dados[0].senso1_conservacao_upload);
						}
						$("#form3_1_4_obs").text(dados[0].senso1_conservacao_obs);

						//SENSO 1 DISCIPLINA
						if(dados[0].senso1_disciplina == "checked"){
							$("#form3_1_5").prop("checked",true);
						}
						if(dados[0].senso1_disciplina_upload == ""){
							$("#form3_1_5_file").css("visibility" , "hidden");
						}else{
							$("#form3_1_5_file").css("visibility" , "visible");
							$("#form3_1_5_file").attr("href" , dados[0].senso1_disciplina_upload);
						}
						$("#form3_1_5_obs").text(dados[0].senso1_disciplina_obs);

					//SENSO 2
						//SENSO 2 UTILIZAÇÃO
						if(dados[0].senso2_utilizacao == "checked"){
							$("#form3_2_1").prop("checked",true);
						}
						if(dados[0].senso2_utilizacao_upload == ""){
							$("#form3_2_1_file").css("visibility" , "hidden");
						}else{
							$("#form3_2_1_file").css("visibility" , "visible");
							$("#form3_2_1_file").attr("href" , dados[0].senso2_utilizacao_upload);
						}
						$("#form3_2_1_obs").text(dados[0].senso2_utilizacao_obs);

						//SENSO 2 ORGANIZAÇÃO
						if(dados[0].senso2_organizacao == "checked"){
							$("#form3_2_2").prop("checked",true);
						}
						if(dados[0].senso2_organizacao_upload == ""){
							$("#form3_2_2_file").css("visibility" , "hidden");
						}else{
							$("#form3_2_2_file").css("visibility" , "visible");
							$("#form3_2_2_file").attr("href" , dados[0].senso2_organizacao_upload);
						}
						$("#form3_2_2_obs").text(dados[0].senso1_organizacao_obs);
						
						//SENSO 2 LIMPEZA
						if(dados[0].senso2_limpeza == "checked"){
							$("#form3_2_3").prop("checked",true);
						}
						if(dados[0].senso2_limpeza_upload == ""){
							$("#form3_2_3_file").css("visibility" , "hidden");
						}else{
							$("#form3_2_3_file").css("visibility" , "visible");
							$("#form3_2_3_file").attr("href" , dados[0].senso2_limpeza_upload);
						}
						$("#form3_2_3_obs").text(dados[0].senso2_limpeza_obs);

						//SENSO 2 CONSERVAÇÃO
						if(dados[0].senso2_conservacao == "checked"){
							$("#form3_2_4").prop("checked",true);
						}
						if(dados[0].senso2_conservacao_upload == ""){
							$("#form3_2_4_file").css("visibility" , "hidden");
						}else{
							$("#form3_2_4_file").css("visibility" , "visible");
							$("#form3_2_4_file").attr("href" , dados[0].senso2_conservacao_upload);
						}
						$("#form3_2_4_obs").text(dados[0].senso2_conservacao_obs);

						//SENSO 2 DISCIPLINA
						if(dados[0].senso2_disciplina == "checked"){
							$("#form3_2_5").prop("checked",true);
						}
						if(dados[0].senso2_disciplina_upload == ""){
							$("#form3_2_5_file").css("visibility" , "hidden");
						}else{
							$("#form3_2_5_file").css("visibility" , "visible");
							$("#form3_2_5_file").attr("href" , dados[0].senso2_disciplina_upload);
						}
						$("#form3_2_5_obs").text(dados[0].senso2_disciplina_obs);

					//SENSO 3
						//SENSO 3 UTILIZAÇÃO
						if(dados[0].senso3_utilizacao == "checked"){
							$("#form3_3_1").prop("checked",true);
						}
						if(dados[0].senso3_utilizacao_upload == ""){
							$("#form3_3_1_file").css("visibility" , "hidden");
						}else{
							$("#form3_3_1_file").css("visibility" , "visible");
							$("#form3_3_1_file").attr("href" , dados[0].senso3_utilizacao_upload);
						}
						$("#form3_3_1_obs").text(dados[0].senso3_utilizacao_obs);

						//SENSO 1 ORGANIZAÇÃO
						if(dados[0].senso3_organizacao == "checked"){
							$("#form3_3_2").prop("checked",true);
						}
						if(dados[0].senso3_organizacao_upload == ""){
							$("#form3_3_2_file").css("visibility" , "hidden");
						}else{
							$("#form3_3_2_file").css("visibility" , "visible");
							$("#form3_3_2_file").attr("href" , dados[0].senso3_organizacao_upload);
						}
						$("#form3_3_2_obs").text(dados[0].senso3_organizacao_obs);
						
						//SENSO 3 LIMPEZA
						if(dados[0].senso3_limpeza == "checked"){
							$("#form3_3_3").prop("checked",true);
						}
						if(dados[0].senso3_limpeza_upload == ""){
							$("#form3_3_3_file").css("visibility" , "hidden");
						}else{
							$("#form3_3_3_file").css("visibility" , "visible");
							$("#form3_3_3_file").attr("href" , dados[0].senso3_limpeza_upload);
						}
						$("#form3_3_3_obs").text(dados[0].senso3_limpeza_obs);

						//SENSO 3 CONSERVAÇÃO
						if(dados[0].senso3_conservacao == "checked"){
							$("#form3_3_4").prop("checked",true);
						}
						if(dados[0].senso3_conservacao_upload == ""){
							$("#form3_3_4_file").css("visibility" , "hidden");
						}else{
							$("#form3_3_4_file").css("visibility" , "visible");
							$("#form3_3_4_file").attr("href" , dados[0].senso3_conservacao_upload);
						}
						$("#form3_3_4_obs").text(dados[0].senso3_conservacao_obs);

						//SENSO 3 DISCIPLINA
						if(dados[0].senso3_disciplina == "checked"){
							$("#form3_3_5").prop("checked",true);
						}
						if(dados[0].senso3_disciplina_upload == ""){
							$("#form3_3_5_file").css("visibility" , "hidden");
						}else{
							$("#form3_3_5_file").css("visibility" , "visible");
							$("#form3_3_5_file").attr("href" , dados[0].senso3_disciplina_upload);
						}
						$("#form3_3_5_obs").text(dados[0].senso3_disciplina_obs);

					//SENSO 4
						//SENSO 4 UTILIZAÇÃO
						if(dados[0].senso4_utilizacao == "checked"){
							$("#form3_4_1").prop("checked",true);
						}
						if(dados[0].senso4_utilizacao_upload == ""){
							$("#form3_4_1_file").css("visibility" , "hidden");
						}else{
							$("#form3_4_1_file").css("visibility" , "visible");
							$("#form3_4_1_file").attr("href" , dados[0].senso4_utilizacao_upload);
						}
						$("#form3_4_1_obs").text(dados[0].senso4_utilizacao_obs);

						//SENSO 4 ORGANIZAÇÃO
						if(dados[0].senso4_organizacao == "checked"){
							$("#form3_4_2").prop("checked",true);
						}
						if(dados[0].senso4_organizacao_upload == ""){
							$("#form3_4_2_file").css("visibility" , "hidden");
						}else{
							$("#form3_4_2_file").css("visibility" , "visible");
							$("#form3_4_2_file").attr("href" , dados[0].senso4_organizacao_upload);
						}
						$("#form3_4_2_obs").text(dados[0].senso4_organizacao_obs);
						
						//SENSO 4 LIMPEZA
						if(dados[0].senso4_limpeza == "checked"){
							$("#form3_4_3").prop("checked",true);
						}
						if(dados[0].senso4_limpeza_upload == ""){
							$("#form3_4_3_file").css("visibility" , "hidden");
						}else{
							$("#form3_4_3_file").css("visibility" , "visible");
							$("#form3_4_3_file").attr("href" , dados[0].senso4_limpeza_upload);
						}
						$("#form3_4_3_obs").text(dados[0].senso4_limpeza_obs);

						//SENSO 4 CONSERVAÇÃO
						if(dados[0].senso4_conservacao == "checked"){
							$("#form3_4_4").prop("checked",true);
						}
						if(dados[0].senso4_conservacao_upload == ""){
							$("#form3_4_4_file").css("visibility" , "hidden");
						}else{
							$("#form3_4_4_file").css("visibility" , "visible");
							$("#form3_4_4_file").attr("href" , dados[0].senso4_conservacao_upload);
						}
						$("#form3_4_4_obs").text(dados[0].senso3_conservacao_obs);

						//SENSO 4 DISCIPLINA
						if(dados[0].senso4_disciplina == "checked"){
							$("#form3_4_5").prop("checked",true);
						}
						if(dados[0].senso4_disciplina_upload == ""){
							$("#form3_4_5_file").css("visibility" , "hidden");
						}else{
							$("#form3_4_5_file").css("visibility" , "visible");
							$("#form3_4_5_file").attr("href" , dados[0].senso4_disciplina_upload);
						}
						$("#form3_4_5_obs").text(dados[0].senso4_disciplina_obs);

					//SENSO 5
						//SENSO 5 UTILIZAÇÃO
						if(dados[0].senso5_utilizacao == "checked"){
							$("#form3_5_1").prop("checked",true);
						}
						if(dados[0].senso5_utilizacao_upload == ""){
							$("#form3_5_1_file").css("visibility" , "hidden");
						}else{
							$("#form3_5_1_file").css("visibility" , "visible");
							$("#form3_5_1_file").attr("href" , dados[0].senso5_utilizacao_upload);
						}
						$("#form3_5_1_obs").text(dados[0].senso5_utilizacao_obs);

						//SENSO 5 ORGANIZAÇÃO
						if(dados[0].senso5_organizacao == "checked"){
							$("#form3_5_2").prop("checked",true);
						}
						if(dados[0].senso5_organizacao_upload == ""){
							$("#form3_5_2_file").css("visibility" , "hidden");
						}else{
							$("#form3_5_2_file").css("visibility" , "visible");
							$("#form3_5_2_file").attr("href" , dados[0].senso5_organizacao_upload);
						}
						$("#form3_5_2_obs").text(dados[0].senso5_organizacao_obs);
						
						//SENSO 5 LIMPEZA
						if(dados[0].senso5_limpeza == "checked"){
							$("#form3_5_3").prop("checked",true);
						}
						if(dados[0].senso5_limpeza_upload == ""){
							$("#form3_5_3_file").css("visibility" , "hidden");
						}else{
							$("#form3_5_3_file").css("visibility" , "visible");
							$("#form3_5_3_file").attr("href" , dados[0].senso5_limpeza_upload);
						}
						$("#form3_5_3_obs").text(dados[0].senso5_limpeza_obs);

						//SENSO 5 CONSERVAÇÃO
						if(dados[0].senso5_conservacao == "checked"){
							$("#form3_5_4").prop("checked",true);
						}
						if(dados[0].senso5_conservacao_upload == ""){
							$("#form3_5_4_file").css("visibility" , "hidden");
						}else{
							$("#form3_5_4_file").css("visibility" , "visible");
							$("#form3_5_4_file").attr("href" , dados[0].senso5_conservacao_upload);
						}
						$("#form3_5_4_obs").text(dados[0].senso5_conservacao_obs);

						//SENSO 5 DISCIPLINA
						if(dados[0].senso5_disciplina == "checked"){
							$("#form3_5_5").prop("checked",true);
						}
						if(dados[0].senso5_disciplina_upload == ""){
							$("#form3_5_5_file").css("visibility" , "hidden");
						}else{
							$("#form3_5_5_file").css("visibility" , "visible");
							$("#form3_5_5_file").attr("href" , dados[0].senso5_disciplina_upload);
						}
						$("#form3_5_5_obs").text(dados[0].senso5_disciplina_obs);

					//SENSO 6
						//SENSO 6 UTILIZAÇÃO
						if(dados[0].senso6_utilizacao == "checked"){
							$("#form3_6_1").prop("checked",true);
						}
						if(dados[0].senso6_utilizacao_upload == ""){
							$("#form3_6_1_file").css("visibility" , "hidden");
						}else{
							$("#form3_6_1_file").css("visibility" , "visible");
							$("#form3_6_1_file").attr("href" , dados[0].senso6_utilizacao_upload);
						}
						$("#form3_6_1_obs").text(dados[0].senso6_utilizacao_obs);

						//SENSO 6 ORGANIZAÇÃO
						if(dados[0].senso6_organizacao == "checked"){
							$("#form3_6_2").prop("checked",true);
						}
						if(dados[0].senso6_organizacao_upload == ""){
							$("#form3_6_2_file").css("visibility" , "hidden");
						}else{
							$("#form3_6_2_file").css("visibility" , "visible");
							$("#form3_6_2_file").attr("href" , dados[0].senso6_organizacao_upload);
						}
						$("#form3_6_2_obs").text(dados[0].senso6_organizacao_obs);
						
						//SENSO 6 LIMPEZA
						if(dados[0].senso6_limpeza == "checked"){
							$("#form3_6_3").prop("checked",true);
						}
						if(dados[0].senso6_limpeza_upload == ""){
							$("#form3_6_3_file").css("visibility" , "hidden");
						}else{
							$("#form3_6_3_file").css("visibility" , "visible");
							$("#form3_6_3_file").attr("href" , dados[0].senso6_limpeza_upload);
						}
						$("#form3_6_3_obs").text(dados[0].senso6_limpeza_obs);

						//SENSO 6 CONSERVAÇÃO
						if(dados[0].senso6_conservacao == "checked"){
							$("#form3_6_4").prop("checked",true);
						}
						if(dados[0].senso6_conservacao_upload == ""){
							$("#form3_6_4_file").css("visibility" , "hidden");
						}else{
							$("#form3_6_4_file").css("visibility" , "visible");
							$("#form3_6_4_file").attr("href" , dados[0].senso6_conservacao_upload);
						}
						$("#form3_6_4_obs").text(dados[0].senso6_conservacao_obs);

						//SENSO 6 DISCIPLINA
						if(dados[0].senso6_disciplina == "checked"){
							$("#form3_6_5").prop("checked",true);
						}
						if(dados[0].senso6_disciplina_upload == ""){
							$("#form3_6_5_file").css("visibility" , "hidden");
						}else{
							$("#form3_6_5_file").css("visibility" , "visible");
							$("#form3_6_5_file").attr("href" , dados[0].senso6_disciplina_upload);
						}
						$("#form3_6_5_obs").text(dados[0].senso6_disciplina_obs);

					//SENSO 7
						//SENSO 7 UTILIZAÇÃO
						if(dados[0].senso7_utilizacao == "checked"){
							$("#form3_7_1").prop("checked",true);
						}
						if(dados[0].senso7_utilizacao_upload == ""){
							$("#form3_7_1_file").css("visibility" , "hidden");
						}else{
							$("#form3_7_1_file").css("visibility" , "visible");
							$("#form3_7_1_file").attr("href" , dados[0].senso7_utilizacao_upload);
						}
						$("#form3_7_1_obs").text(dados[0].senso7_utilizacao_obs);

						//SENSO 7 ORGANIZAÇÃO
						if(dados[0].senso7_organizacao == "checked"){
							$("#form3_7_2").prop("checked",true);
						}
						if(dados[0].senso7_organizacao_upload == ""){
							$("#form3_7_2_file").css("visibility" , "hidden");
						}else{
							$("#form3_7_2_file").css("visibility" , "visible");
							$("#form3_7_2_file").attr("href" , dados[0].senso7_organizacao_upload);
						}
						$("#form3_7_2_obs").text(dados[0].senso7_organizacao_obs);
						
						//SENSO 7 LIMPEZA
						if(dados[0].senso7_limpeza == "checked"){
							$("#form3_7_3").prop("checked",true);
						}
						if(dados[0].senso7_limpeza_upload == ""){
							$("#form3_7_3_file").css("visibility" , "hidden");
						}else{
							$("#form3_7_3_file").css("visibility" , "visible");
							$("#form3_7_3_file").attr("href" , dados[0].senso7_limpeza_upload);
						}
						$("#form3_7_3_obs").text(dados[0].senso7_limpeza_obs);

						//SENSO 7 CONSERVAÇÃO
						if(dados[0].senso7_conservacao == "checked"){
							$("#form3_7_4").prop("checked",true);
						}
						if(dados[0].senso7_conservacao_upload == ""){
							$("#form3_7_4_file").css("visibility" , "hidden");
						}else{
							$("#form3_7_4_file").css("visibility" , "visible");
							$("#form3_7_4_file").attr("href" , dados[0].senso7_conservacao_upload);
						}
						$("#form3_7_4_obs").text(dados[0].senso7_conservacao_obs);

						//SENSO 7 DISCIPLINA
						if(dados[0].senso7_disciplina == "checked"){
							$("#form3_7_5").prop("checked",true);
						}
						if(dados[0].senso7_disciplina_upload == ""){
							$("#form3_7_5_file").css("visibility" , "hidden");
						}else{
							$("#form3_7_5_file").css("visibility" , "visible");
							$("#form3_7_5_file").attr("href" , dados[0].senso7_disciplina_upload);
						}
						$("#form3_7_5_obs").text(dados[0].senso7_disciplina_obs);

					//SENSO 8
						//SENSO 8 UTILIZAÇÃO
						if(dados[0].senso8_utilizacao == "checked"){
							$("#form3_8_1").prop("checked",true);
						}
						if(dados[0].senso8_utilizacao_upload == ""){
							$("#form3_8_1_file").css("visibility" , "hidden");
						}else{
							$("#form3_8_1_file").css("visibility" , "visible");
							$("#form3_8_1_file").attr("href" , dados[0].senso8_utilizacao_upload);
						}
						$("#form3_8_1_obs").text(dados[0].senso8_utilizacao_obs);

						//SENSO 8 ORGANIZAÇÃO
						if(dados[0].senso8_organizacao == "checked"){
							$("#form3_8_2").prop("checked",true);
						}
						if(dados[0].senso8_organizacao_upload == ""){
							$("#form3_8_2_file").css("visibility" , "hidden");
						}else{
							$("#form3_8_2_file").css("visibility" , "visible");
							$("#form3_8_2_file").attr("href" , dados[0].senso8_organizacao_upload);
						}
						$("#form3_8_2_obs").text(dados[0].senso8_organizacao_obs);
						
						//SENSO 8 LIMPEZA
						if(dados[0].senso8_limpeza == "checked"){
							$("#form3_8_3").prop("checked",true);
						}
						if(dados[0].senso8_limpeza_upload == ""){
							$("#form3_8_3_file").css("visibility" , "hidden");
						}else{
							$("#form3_8_3_file").css("visibility" , "visible");
							$("#form3_8_3_file").attr("href" , dados[0].senso8_limpeza_upload);
						}
						$("#form3_8_3_obs").text(dados[0].senso8_limpeza_obs);

						//SENSO 8 CONSERVAÇÃO
						if(dados[0].senso8_conservacao == "checked"){
							$("#form3_8_4").prop("checked",true);
						}
						if(dados[0].senso8_conservacao_upload == ""){
							$("#form3_8_4_file").css("visibility" , "hidden");
						}else{
							$("#form3_8_4_file").css("visibility" , "visible");
							$("#form3_8_4_file").attr("href" , dados[0].senso8_conservacao_upload);
						}
						$("#form3_8_4_obs").text(dados[0].senso8_conservacao_obs);

						//SENSO 8 DISCIPLINA
						if(dados[0].senso8_disciplina == "checked"){
							$("#form3_8_5").prop("checked",true);
						}
						if(dados[0].senso8_disciplina_upload == ""){
							$("#form3_8_5_file").css("visibility" , "hidden");
						}else{
							$("#form3_8_5_file").css("visibility" , "visible");
							$("#form3_8_5_file").attr("href" , dados[0].senso8_disciplina_upload);
						}
						$("#form3_8_5_obs").text(dados[0].senso8_disciplina_obs);

					//SENSO 9
						//SENSO 9 UTILIZAÇÃO
						if(dados[0].senso9_utilizacao == "checked"){
							$("#form3_9_1").prop("checked",true);
						}
						if(dados[0].senso9_utilizacao_upload == ""){
							$("#form3_9_1_file").css("visibility" , "hidden");
						}else{
							$("#form3_9_1_file").css("visibility" , "visible");
							$("#form3_9_1_file").attr("href" , dados[0].senso9_utilizacao_upload);
						}
						$("#form3_9_1_obs").text(dados[0].senso9_utilizacao_obs);

						//SENSO 9 ORGANIZAÇÃO
						if(dados[0].senso9_organizacao == "checked"){
							$("#form3_9_2").prop("checked",true);
						}
						if(dados[0].senso9_organizacao_upload == ""){
							$("#form3_9_2_file").css("visibility" , "hidden");
						}else{
							$("#form3_9_2_file").css("visibility" , "visible");
							$("#form3_9_2_file").attr("href" , dados[0].senso9_organizacao_upload);
						}
						$("#form3_9_2_obs").text(dados[0].senso9_organizacao_obs);
						
						//SENSO 9 LIMPEZA
						if(dados[0].senso9_limpeza == "checked"){
							$("#form3_9_3").prop("checked",true);
						}
						if(dados[0].senso9_limpeza_upload == ""){
							$("#form3_9_3_file").css("visibility" , "hidden");
						}else{
							$("#form3_9_3_file").css("visibility" , "visible");
							$("#form3_9_3_file").attr("href" , dados[0].senso9_limpeza_upload);
						}
						$("#form3_9_3_obs").text(dados[0].senso9_limpeza_obs);

						//SENSO 9 CONSERVAÇÃO
						if(dados[0].senso9_conservacao == "checked"){
							$("#form3_9_4").prop("checked",true);
						}
						if(dados[0].senso9_conservacao_upload == ""){
							$("#form3_9_4_file").css("visibility" , "hidden");
						}else{
							$("#form3_9_4_file").css("visibility" , "visible");
							$("#form3_9_4_file").attr("href" , dados[0].senso9_conservacao_upload);
						}
						$("#form3_9_4_obs").text(dados[0].senso9_conservacao_obs);

						//SENSO 9 DISCIPLINA
						if(dados[0].senso9_disciplina == "checked"){
							$("#form3_9_5").prop("checked",true);
						}
						if(dados[0].senso9_disciplina_upload == ""){
							$("#form3_9_5_file").css("visibility" , "hidden");
						}else{
							$("#form3_9_5_file").css("visibility" , "visible");
							$("#form3_9_5_file").attr("href" , dados[0].senso9_disciplina_upload);
						}
						$("#form3_9_5_obs").text(dados[0].senso9_disciplina_obs);

					//SENSO 10
						if(dados[0].senso10_melhoria == "checked"){
							$("#form3_10_1").prop("checked",true);
						}
						$("#form3_10_1").text(dados[0].senso10_obs);

					$("#nota_mc_form3").val(dados[0].nota_mc);
					$("#nota_form3").val(dados[0].nota_formulario);

	            }
	        });	
	 	}
	 	
		
	 	
	 </script>


</body>
</html>