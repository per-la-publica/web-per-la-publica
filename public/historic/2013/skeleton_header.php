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

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

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
            <li><a href="activitat.html" title="Agenda d'activitats">Activitats</a></li>
            <li><a href="participa.html">Participa</a></li>
            <li><a href="contacta.html" title="Posa't en contacte amb nosaltres">Contacta</a></li>
          </ul>
        </nav>
        </div><!--/.nav-collapse -->
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
			<div class="alert alert-warning">
				<p>Estàs veient l'històric de la web. <a href="../../">Tornar a la web actual</a>.</p>
			</div>

            <div class="row">
                <div class="col-md-12">
    <?php endif; ?>
