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

	        <p class="lead">Som un grup de persones de la comunitat UPC compromeses amb la universitat pública
		       i que volem defensar la seva qualitat i els seus valors.</p>
	
			<p class="lead">Entre nosaltres trobareu <a href="membres_claustre.php">representants al Claustre</a>, al Consell
	               de Govern i al Consell Social de la UPC. Volem fer sentir la vostra veu!</p>
	
			<div class="panel panel-info">
				<div class="panel-heading clearfix">
					<div class="pull-left lead">Ens presentem a les eleccions al Claustre Universitari 2017!</div>
					<div class="pull-right"><a role="button" class="float-right btn btn-success btn-sm" href="info-campanya.php">+ informació</a></div>
				</div>
				<div class="panel-body bg-info">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/dR_DVUefxBU?ecver=2" allowfullscreen></iframe>						
					</div>
				</div>
			</div>
	
	            <?php
	            /*
	             <p class="lead">Us esperem a la <a href="https://comunitat.perlapublica.org/">Comunitat</a>.
	               Podeu fer les vostres aportacions al
	               <a href="https://comunitat.perlapublica.org/groups/profile/81/lp">grup «<abbr title="Per la pública">*LP</abbr>»</a>,
	               el grup obert dins la Comunitat on podeu comentar amb nosaltres tot allò que considereu important.</p>
	             */
	            ?>
	
			<p style="margin-bottom: 50px"><a href="ideari.php" class="btn btn-primary btn-lg" role="button">Consulta el nostre ideari &raquo;</a>
			<a href="info-campanya.php" class="btn btn-success btn-lg" role="button">Informació de campanya <span class="glyphicon glyphicon-info-sign"></span></a>
			<a href="timeline.php" class="btn btn-info btn-lg" role="button">Línia temporal <span class="glyphicon glyphicon-blackboard"></span></a>
			</p>
	
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
