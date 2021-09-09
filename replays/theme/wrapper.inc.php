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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.17258193648365627" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.1796154920117401" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.44176273828326984" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9968723821788368" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.0632154485410843" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.7522391302321527" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.10027620619716937"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.1805826383711684" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5049470322359526">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8182329526343741">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.996055326800735">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.3624848664059408">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8209908530599273"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.1759323645057549"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.46634799627549595"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7663031361429251"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5067907809056453"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7510307458339065"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8247698037207165"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.15738478078452434"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.1050484038611128"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5946431954302915"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.359248024020576"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5996150198863832"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6872531685953671"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.3778292345068468"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.7022933348191687"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6499976464952166"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.13752868333971335"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7877444387321952"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7585452984439616"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
