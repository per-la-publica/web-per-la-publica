<?php
$titol = "Recull d'inquietuds del PAS";
require('skeleton_header.php');
?>

<div class="container">
	<div class="row">
		<div class="col-md-2 logo-container hidden-md hidden-xs hidden-sm">
			<p class="logo" style="font-size: 75px; padding-top: 25px">*LP</p>
		</div>

		<div class="col-md-8">
			<p class="lead">Aquesta pàgina recull algunes de les inquietuds que
				membres del PAS ens han fet arribar durant els darrers mesos</p>

			<ul id="inquietuds">
				<li>Conciliació laboral: facilitar teletreball, flexibilitat horaris, permisos ...)</li>

				<li>Transparència: (tot pas que es faci, s’ha de ser capaç de justificar-ho
						i de poder explicar, no només la decisió final, sinó els arguments basats i
						sustentats en acords, dades, normatives, procediments oberts...).
						La transparència és una expressió de respecte i equitat entre persones i
						col·lectius.</li>

				<li>Comunicació: Que se'n comuniquin amb prou temps d’antelació i amb tota
					la informació  necessària les accions que afecten el PAS.</li>

				<li>Conèixer la direcció o línies estratègiques dels candidats/es a rector/a,
					amb detall, saber a quin camí en dirigim, no només una llista de bones
					intencions genèriques que es dilueixen amb el temps.</li>

				<li>Que es tingui en compte la opinió i punt de vista del PAS. Compromís amb
					el PAS més enllà de les eleccions. D’altra banda, caldria comptar amb el
					PAS des de la gènesi d’algunes accions fins al darrer nivell (per exemple,
					taula rodona UTG’s) . Facilitar la participació del PAS (no només als caps o gerència).</li>

				<li>Estabilització del personal funcionari interí, que ja està treballant
					l'actual equip rectoral.</li>

				<li>Personal de consergeria: preocupa la manca de recursos i la tendència
					de la privatització del servei.</li>

				<li>Finançament de les UTG’s (cal procurar que aquestes tinguin els recursos
					disponibles per acomplir amb els serveis que han d’oferir i les tasques
					que han de realitzar).</li>

				<li>Recuperar mesures socials com per exemple l’ajut de fons social per tenir
					fills amb discapacitat, i d’altres mesures com la gratuïtat en la matrícula
					universitària i la jornada de de 35 hores/setmana.</li>

				<li>Regular i analitzar curosament la implicació de la UPC en els centres
					adscrits, i limitar la participació en fundacions.</li>

				<li>Prendre consciència de l’estrès i alt volum feina (i poca confiança en la
					millora d’aquesta situació) que afecta a l’ambient de treball en molts llocs
					de la UPC. En els casos en què el personal no tingui les competències adequades
					no hi ha mecanismes per a canviar la situació. Cal cercar eines per motivar
					els/les treballadors/es i trobar solucions que siguin positives per múltiples
					parts o col·lectius, a tots els àmbits.</li>

				<li>Greuges comparatius dels campus fora de Barcelona en comparació amb els de
					Barcelona, p.ex., despesa ocasionada en l’assistència a cursos o reunions;
					el fet que tots els cursos de SDP s’imparteixin en l’edifici
					Vèrtex implica que les persones que treballen a altres campus tinguin dificultats
					per poder assistir-hi, a part de la despesa de temps i diners per transport.
					Impulsar altres formes per facilitar la formació, per exemple amb cursos
					online o descentralitzant la realització de cursos.</li>

				<li>Garantir el dret a la carrera professional del PAS en termes negociats, de
					tal manera q no calgui esperar molts anys i molta sort (en el millor dels
					casos) per tenir opcions a promoció com passa actualment.</li>

			</ul>

		</div>

	</div> <!-- row -->
</div> <!-- container -->

<script>
	$(function(){
		$('ul#inquietuds li').css('margin-bottom','1.5em');
	});
</script>

<?php require('skeleton_footer.php'); ?>
