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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5825122119297719" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9129749296444618" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.38832117608040284" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8478687200041892" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.49771866437873813" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.4948550280115831" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.39353351550050797"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.44122951239872577" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.23580374200422538">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6349731600575339">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.2521799646177203">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5702961031308402">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4268878382733641"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.1651910352518544"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.13314084945312432"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.22911646355911675"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.22719527902439096"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.32921842708618065"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8971825296815072"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.3504564652061122"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.34821795171378556"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6324065483461894"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7671537681706491"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.10149174764634372"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9839157045333025"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.17477092829177887"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9226764717182192"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8791710294762383"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8947964795892978"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7507086713708881"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.028244153603741662"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
