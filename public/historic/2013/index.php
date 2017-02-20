<?php
	$paginaPrincipal = true;
	require('skeleton_header.php');
?>

<div class="jumbotron masthead">
    <div class="container">
	    <h1><span class="logo">*LP</span> <span style="font-weight:normal;font-size: 65pt">Per la Pública</span></h1>
    </div>
</div>
<div class="container">
    <div class="row" style="padding-top: 3em">
        <div class="col-md-8">
        
        <div class="alert alert-warning">
			<p>Estàs veient l'històric de la web. <a href="../../">Tornar a la web actual</a>.</p>
		</div>

        <p class="lead">Som un grup de persones de la comunitat UPC compromeses amb la universitat pública
	       i que volem defensar la seva qualitat i els seus valors.</p>

		<p class="lead">Entre nosaltres trobareu <a href="membres_claustre.php">representants al Claustre</a>, al Consell
               de Govern i al Consell Social de la UPC. Volem fer sentir la vostra veu!</p>

            <?php
            /*
             <p class="lead">Us esperem a la <a href="https://comunitat.perlapublica.org/">Comunitat</a>.
               Podeu fer les vostres aportacions al
               <a href="https://comunitat.perlapublica.org/groups/profile/81/lp">grup «<abbr title="Per la pública">*LP</abbr>»</a>,
               el grup obert dins la Comunitat on podeu comentar amb nosaltres tot allò que considereu important.</p>
             */
            ?>

		<p><a href="ideari.php" class="btn btn-primary btn-lg" role="button">Consulta el nostre ideari &raquo;</a></p>

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
