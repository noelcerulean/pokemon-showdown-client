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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7687730752745798" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.62935028393587" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.9004085675447411" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.26162147773305366" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.27023111345808726" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.49855404741039955" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6650925356943651"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8418594609953305" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.41475928943339">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6569652657618603">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.21478259049916026">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6711862334187713">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4621145629285828"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5878208036974539"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.935947187092121"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6761592426222045"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6368578530596458"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3308259670754834"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.1025803005228978"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.0462578857042828"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9375599481115298"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8973543785634392"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8522610438942912"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5954864806937015"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.677342526255373"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6241557201704877"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6347522217874715"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7259936949359622"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.43807833432274634"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9600957912478894"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.4054652313386926"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
