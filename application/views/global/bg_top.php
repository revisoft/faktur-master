<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $judul; ?></title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-theme.min.css"/>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/colorbox/colorbox.css" />
	<script>!window.jQuery && document.write('<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"><\/script>');</script>
	<script src="<?php echo base_url(); ?>assets/colorbox/jquery.colorbox.js"></script>
	<script>
		  $(document).ready(function(){
			  //Examples of how to assign the ColorBox event to elements
			  $(".cbbarang").colorbox({rel:'group', iframe:true, width:"700", height:"500"});
			  $(".cbpelanggan").colorbox({rel:'group', iframe:true, width:"700", height:"90%"});
			  $(".cblsbarang").colorbox({rel:'group', iframe:true, width:"700", height:"60%"});
			  $(".cbuser").colorbox({rel:'group', iframe:true, width:"700", height:"60%"});
	
		  });
	</script>
</head>
<body>
<nav id="myNavBar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Sistem Informasi Sample Faktur</a>
        </div>
   <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php base_url() ?>" target="_self">Home</a></li>
                <li><a href="#" target="_blank">About</a></li>
                <li><a href="#" target="_blank">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>    
<div class="container">
    <div class="jumbotron">
        <h1><?php echo $perusahaan; ?></h1>
        <h2><?php echo $alamat; ?></h2>        
    </div>
    
                               		