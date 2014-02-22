<!DOCTYPE html>
<html lang="ca">
<?php
/*
 * Aquest fitxer mostra la capçalera de la pàgina. Requereix de les següents variables globals.
 *  - $paginaPrincipal(boolean): indica si es tracta de la pàgina principal
 */
?>
<head>
    <meta charset="utf-8">
    <title>Per la Pública</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Per la Pública">
    <meta name="author" content="Per la Pública">
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

    <link href="//fonts.googleapis.com/css?family=Varela+Round|Montserrat" rel="stylesheet" type="text/css">
    <link href="css/xlp.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html" style="font-family: Montserrat, sans-serif;font-size: 10pt"><span class="logo">*LP</span> Per la Pública</a>
        </div>
        <div class="collapse navbar-collapse">
        <nav>
          <ul class="nav navbar-nav">
			<li><a href="carta.html" title="Carta de presentació">Presentació</a></li>
			<li><a href="ideari.html" title="El nostre ideari">Ideari</a></li>
			<li><a href="manifest.html" title="El Manifest de Per la Pública">Manifest</a></li>
			<li><a href="funcionament.html" title="La nostra manera de fer">Funcionament</a></li>
			<li><a href="membres_claustre.html" title="Grup de treball del Claustre">Claustre</a></li>
			<li><a href="activitat.html" title="Agenda d'activitats i actes de les reunions">Activitat</a><li>
			<?php /*<li><a href="participa.html">Participa</a></li>*/ ?>
			<li><a href="contacta.html" title="Posa't en contacte amb nosaltres">Contacta</a></li>          
		  </ul>
        </div><!--/.nav-collapse -->
        </nav>
      </div>
    </div>

	<?php if (!empty($titol)) : ?>
		<div class="jumbotron subhead" id="overview">
  			<div class="container">
				<h1><?php echo $titol; ?></h1>
			</div>
		</div>
	<?php endif; ?>

<?php 
/*
	<div class="xarxes-socials"><?php require_once('skeleton_xarxes_socials.php'); ?></div>
*/	
?>
	<?php if (!isset($paginaPrincipal) || !$paginaPrincipal) : ?>
        <div class="container">
       	    <div class="row">		
        		<div class="col-md-12">
	<?php endif; ?>
