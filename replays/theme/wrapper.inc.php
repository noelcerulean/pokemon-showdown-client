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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.37290412474898393" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6594746812757974" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6334271829359994" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.10846567957094733" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9520547736131058" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.932941797495962" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8646869362283636"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7304659529883211" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.022983954407633123">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6377523077507332">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7666311724467025">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9682197053321062">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6277454584764768"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9448829472769433"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6807291503434882"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2520837929026061"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.30038268964794623"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.021793131704351376"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9042174434493027"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5295852895294557"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6935636780208254"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.058898833137165374"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7082712705296681"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.1361267085227691"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.969592265666607"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.4846416297352072"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8762833347756449"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.32146165429436735"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.231853906657842"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6288346992422731"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5509115563060001"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
