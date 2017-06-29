<?php
    $titol = '<span class="logo">*LP</span> Per la Pública';
	$paginaPrincipal = true;
	require('skeleton_header.php');
?>

<div class="container">
    <div class="row">

        <div class="col-md-9">

	        <p class="lead">Som un grup de persones de la comunitat UPC compromeses amb la universitat pública
		       i que volem defensar la seva qualitat i els seus valors.</p>
	
			<p class="lead">Entre nosaltres trobareu <a href="membres_claustre.php">representants al Claustre</a>, al Consell
	               de Govern i al Consell Social de la UPC. Volem fer sentir la vostra veu!</p>

			<div class="col-md-4" onclick="document.location='carta.php'" style="cursor:pointer">
				<div class="panel panel-default">
					<div class="panel-heading"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"> Presentació</div>
					<div class="panel-body">
						Vols saber més sobre què és Per la Pública, quins són el nostre ideari i els nostres valors?
					</div>
				</div>
			</div>

			<div class="col-md-4" onclick="document.location='membres_claustre.php'" style="cursor:pointer">
				<div class="panel panel-default">
					<div class="panel-heading"><span class="glyphicon glyphicon-user" aria-hidden="true"> Qui som</div>
					<div class="panel-body">
						Pertanyem a diferents dep&shy;ar&shy;ta&shy;ments i uni&shy;tats de la UPC. Som molt a prop de tu!
					</div>
				</div>
			</div>

			<div class="col-md-4" onclick="document.location='activitat.php'" style="cursor:pointer">
				<div class="panel panel-default">
					<div class="panel-heading"><span class="glyphicon glyphicon-pushpin" aria-hidden="true"> Activitats</div>
					<div class="panel-body">
						La nostra agenda: consulta el calendari de les properes re&shy;u&shy;nions i activitats.
					</div>
				</div>
			</div>

			<div class="col-md-4" onclick="document.location='timeline.php'" style="cursor:pointer">
				<div class="panel panel-default">
					<div class="panel-heading"><span class="glyphicon glyphicon-calendar" aria-hidden="true"> Activitats</div>
					<div class="panel-body">
						Un recull d'esdeveniments i notícies rellevants d'aquests últims anys a la UPC.
					</div>
				</div>
			</div>			
		</div>

        <div class="col-md-3">
      	            <a href="https://twitter.com/perlapublica"
               class="twitter-timeline"
               data-widget-id="338008838928207872"
               data-theme="light"
               data-chrome="nofooter">Tuits de @perlapublica</a>
            <script>
                !function(d,s,id){
                    var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
                    if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";
                    fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
            </script>
        </div>
    </div>
</div>

<?php require('skeleton_footer.php'); ?>
