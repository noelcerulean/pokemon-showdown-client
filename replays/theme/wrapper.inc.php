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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.3650460597348495" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.0176088416971667" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.1413679708516027" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.2502081844705175" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7810506391393335" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.3900419343967876" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.32701718416513903"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5079656477987369" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7730095481364312">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8880052141568182">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.2708092200999257">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9047543115923851">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6845529144351801"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.14192872353022934"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.4739092524286306"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.05777637092464971"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6035842807545415"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.48027907998365027"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.31715162902997385"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6675506239548972"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.20090899277960395"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5485936505623559"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.4021017374145375"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.40060288275183953"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.476296600688048"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.3697501727229362"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.7703153949588568"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.07078224864760085"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.500920097841216"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.716136830608681"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.3367861962751115"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
