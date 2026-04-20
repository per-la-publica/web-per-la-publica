<?php
	$url = $_SERVER['SERVER_NAME'];
?>
<!-- Twitter Share Link -->
<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo $url; ?>">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

<!-- Google+ Share -->
<div class="g-plusone" data-size="medium" data-href="<?php echo $url; ?>"></div>
<script type="text/javascript">(function() {var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;po.src = 'https://apis.google.com/js/plusone.js';var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);})();</script>

<!-- Facebook Like Button -->
<div style="display:none" id="fb-root"></div>
<div style="height:20px;vertical-align:top;" class="fb-like" data-href="<?php echo $url; ?>" data-send="false" data-layout="button_count" data-width="450" data-show-faces="true"></div>
<script>(function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) return;js = d.createElement(s); js.id = id;js.src = "//connect.facebook.net/ca_ES/all.js#xfbml=1&appId=231277093667733";fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script>
