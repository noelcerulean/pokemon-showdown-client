<?php

if ((substr($_SERVER['REMOTE_ADDR'],0,11) === '69.164.163.') ||
		(substr(@$_SERVER['HTTP_X_FORWARDED_FOR'],0,11) === '69.164.163.')) {
	die('website disabled');
}

/********************************************************************
 * Header
 ********************************************************************/

function ThemeHeaderTemplate() {
	global $panels;
?>
<!DOCTYPE html>
<html><head>

	<meta charset="utf-8" />

	<title><?php if ($panels->pagetitle) echo htmlspecialchars($panels->pagetitle).' - '; ?>Pok&eacute;mon Showdown</title>

<?php if ($panels->pagedescription) { ?>
	<meta name="description" content="<?php echo htmlspecialchars($panels->pagedescription); ?>" />
<?php } ?>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8459630140417498" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9394817473726078" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.3289580923272182" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6124040151219741" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.4311804354977766" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6916891651738335" />

	<!-- Workarounds for IE bugs to display trees correctly. -->
	<!--[if lte IE 6]><style> li.tree { height: 1px; } </style><![endif]-->
	<!--[if IE 7]><style> li.tree { zoom: 1; } </style><![endif]-->

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-26211653-1']);
		_gaq.push(['_setDomainName', 'pokemonshowdown.com']);
		_gaq.push(['_setAllowLinker', true]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head><body>

	<div class="pfx-topbar">
		<div class="header">
			<ul class="nav">
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.1188771431871618"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.2566481748651155" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9047454261458427">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6243150504262469">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.858711080440516">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9753179241255088">Forum</a></li>
			</ul>
			<ul class="nav nav-play">
				<li><a class="button greenbutton nav-first nav-last" href="http://play.pokemonshowdown.com/">Play</a></li>
			</ul>
			<div style="clear:both"></div>
		</div>
	</div>
<?php
}

/********************************************************************
 * Footer
 ********************************************************************/

function ThemeScriptsTemplate() {
?>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7066128955313364"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5156023272800159"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6142208176454338"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5851106099049772"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.2481065054738596"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.20648164980509454"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.06923939049325689"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.349291620793176"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.26708973038576755"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.43980090954953743"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5820096285164877"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5662222451571592"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9738787400373954"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.27941908602198584"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.48402163628014216"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8327391041942189"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.4452679004679161"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9938334649068328"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9315950134396773"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
