<?php
/**
 * Created by PhpStorm.
 * User: mcamara
 * Date: 13/01/2017
 * Time: 14:35
 */?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>News Paladins</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="icon" href="img/logo_paladins.png" type="image/x-icon" />
    <link rel="shortcut icon" href="img/logo_paladins.png" type="image/x-icon" />

</head>


<body id="topo" data-spy="scroll" data-target=".navbar-fixed-top">

<!-- MENU -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#topo"> <img src="img/logo_paladins.png" alt="Logo do Site, simbolo do jogo RPG Paladins" class="logo"></a>
        </div>

        <!-- Linha de opção do menu -->
        <div class="collapse navbar-collapse navbar-ex1-collapse navbar-right">
            <ul class="nav navbar-nav">
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li>
                    <a class="page-scroll" href="home.php">Inicio</a>
                </li>
                <li>
                    <a class="page-scroll" href="sobre.php">Sobre</a>
                </li>
                <li>
                    <a class="page-scroll" href="#serviços">Serviços</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contato">Contato</a>
                </li>
            </ul>
        </div>
        <!-- /.FIM DA LINHA DE OPÇÕES DO MENU -->
    </div>
    <!-- /.container -->
</nav>
<!-- FIM DO MENU -->
<div class="container divtopo" id="inicio">
    <div class="row">
        <div class=" col-md-6 col-md-offset-3">
            <img src="img/img_topo.png" alt="Imagem topo do jogo" class="img-responsive">
        </div>
    </div>
</div>

<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav">
            <div class="well">
                <p>Publicidade 1 </p>
            </div>
            <div class="well">
                <p>Publicidade</p>
            </div>
        </div>

        <div class="col-sm-8 publicacao">
            <?php require_once("counter.php") ?>