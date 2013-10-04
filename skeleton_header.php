<?php
/*
 * Aquest fitxer mostra la capçalera de la pàgina. Requereix de les següents variables globals.
 *  - $paginaPrincipal(boolean): indica si es tracta de la pàgina principal
 */
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="utf-8">
    <title>Per la Pública</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Per la Pública">
    <meta name="author" content="Per la Pública">
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <!--<script src="js/jquery.1.8.2.js"></script>-->
    <script src="js/bootstrap.js"></script>

    <link href='//fonts.googleapis.com/css?family=Varela+Round|Cookie' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/xlp.css" rel="stylesheet">
		
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
	        	<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
	            	<span class="icon-bar"></span>
					<span class="icon-bar"></span>
	            	<span class="icon-bar"></span>
				</button>
				<a class="brand" href="index.html" style="font-family: Cookie, sans-serif;font-size: 20pt"><span class="logo">*LP</span> Per la Pública</a>
				<div class="nav-collapse collapse">
					<ul class="nav">
						<li><a href="carta.html">Carta de presentació</a></li>
						<li><a href="ideari.html">Ideari</a></li>
						<li><a href="manifest.html">Manifest</a></li>
						<li><a href="funcionament.html">Funcionament</a></li>
						<li><a href="membres_claustre.html">Representants al Claustre</a></li>
						<?php /* <li><a href="accions.html">Accions</a></li> */ ?>
						<?php /*<li><a href="participa.html">Participa</a></li>*/ ?>
						<li><a href="contacta.html">Contacta</a></li>
					</ul>
				</div>
	  	</div>
		</div>
	</div>

	<?php if (!empty($titol)) : ?>
		<div class="jumbotron subhead" id="overview">
  			<div class="container">
				<h1><?php echo $titol; ?></h1>
				<?php if (!empty($subtitol)) : ?>
					<p class="lead">Overview of the project, its contents, and how to get started with a simple template.</p>
				<?php endif; ?>
			</div>
		</div>
	<?php endif; ?>

<?php 
/*
	<div class="xarxes-socials"><?php require_once('skeleton_xarxes_socials.php'); ?></div>
	
*/	
?>
	<?php if (!isset($paginaPrincipal) || !$paginaPrincipal) : ?>
	<div class="row-fluid">		
		<div class="offset1 span10">		
			<div class="page-content">
	<?php endif; ?>
