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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9518650151713917" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.08224869178322902" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.2294726204671067" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.05791105394679774" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.10643758593245112" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.776192763515889" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6383537644881581"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.0816768935024148" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.10493381944123215">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.22546091280672997">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.4356384635560606">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.44874240682325506">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5301286703038761"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5964539562828943"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.2156379410074869"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7888573885281966"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5486189661109446"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5152327746157912"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6651719388841271"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.45844535387418617"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.14801883461946064"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.522264699006262"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5515725824009226"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.15379979455536685"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.2862197026430875"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.43857563955785905"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6574099740534383"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.2910323825400245"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5719038772606919"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9555469958423102"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9369321508202895"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
