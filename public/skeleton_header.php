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
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Per la Pública">
  <meta name="author" content="Per la Pública">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <style>
    @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css");
    @import url('https://fonts.googleapis.com/css2?family=Montserrat&family=Varela+Round&display=swap');
  </style> 

  <link href="css/xlp.css" rel="stylesheet">
</head>

<body>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  <div class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="index.html" style="font-family: Montserrat, sans-serif;font-size: 10pt"><span class="logo">*LP</span> Per la Pública</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="Commuta navegació">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar-links">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="carta.html" title="Carta de presentació">Presentació</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="membres_claustre.html" title="Grup de treball del Claustre">Qui som?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="activitat.html" title="Agenda d'activitats">Activitats</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="timeline.html" title="Cronologia">Cronologia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contacta.html" title="Posa't en contacte amb nosaltres">Contacta</a>
        </li>
      </ul>
    </div>
  </div>

<main role="main">

  <?php if (!empty($titol)) : ?>
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4"><?php echo $titol; ?></h1>
      </div>
    </div>
  <?php endif; ?>

  <?php if (!isset($paginaPrincipal) || !$paginaPrincipal) : ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
  <?php endif; ?>